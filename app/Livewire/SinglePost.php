<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SinglePost extends Component
{
    public Post $post;

    public function mount(string $slug): void
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.single-post', ['title' => $this->post->getAttribute('title')]);
    }
}
