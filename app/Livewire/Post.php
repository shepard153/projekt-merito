<?php

namespace App\Livewire;

use App\Models\Post as PostModel;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Post extends Component
{
    public PostModel $post;

    public function mount(string $slug): void
    {
        $this->post = PostModel::where('slug', $slug)->firstOrFail();
    }

    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.post', ['title' => $this->post->getAttribute('title')]);
    }
}
