<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use App\Traits\SendsPostActionNotifications;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SinglePost extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;
    use SendsPostActionNotifications;

    public string $comment = '';

    public Post $post;

    public function mount(string $slug): void
    {
        $this->post = Post::with(['author', 'comments', 'comments.author'])->where('slug', $slug)->firstOrFail();
    }

    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.single-post', ['title' => $this->post->getAttribute('title')]);
    }

    /**
     * @return void
     * @throws ValidationException
     */
    public function addComment(): void
    {
        $this->validate([
            'comment' => ['required', 'string', 'min:3'],
        ]);

        $this->post->comments()->save(
            Comment::make([
                'content' => $this->comment,
                'user_id' => auth()->id(),
                'post_id' => $this->post->getAttribute('id'),
            ])
        );

        $this->reset('comment');

        $this->sendSuccessNotification(__('Komentarz został dodany.'));
    }

    /**
     * @param int $commentId
     * @return void
     */
    public function deleteComment(int $commentId): void
    {
        $comment = Comment::findOrFail($commentId);

        $comment->delete();

        $this->sendSuccessNotification(__('Komentarz został usunięty.'));
    }
}
