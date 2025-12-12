<?php

namespace App\Livewire\Landing;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.blog')]
class Blog extends Component
{
    public function render()
    {
        return view('blog');
    }
}
