<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.landing')]
class Project extends Component
{
    public function render()
    {
        return view('project');
    }
}
