<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Computed]
    public function posts(): Collection
    {
        $posts = Post::with('author')->get();

        return collect([
            'featured' => $posts->where('is_featured', true)->take(2),
            'recent'   => $posts->sortByDesc('created_at', false)->take(6),
        ]);
    }

    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.home');
    }
}
