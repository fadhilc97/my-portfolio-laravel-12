<?php

namespace App\Livewire\Landing;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.landing')]
class Experience extends Component
{
    public function render()
    {
        return view('experience');
    }
}
