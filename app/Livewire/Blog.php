<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Blog extends Component
{
    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.blog');
    }
}
