<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.blog', [
            'posts' => Post::with('author')
                ->where('status', 'published')
                ->where('title', 'like', '%'.$this->search.'%')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
