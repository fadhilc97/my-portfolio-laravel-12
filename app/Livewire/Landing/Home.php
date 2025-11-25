<?php

namespace App\Livewire\Landing;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.landing')]
class Home extends Component
{
  public $isOpenHamburger = false;

  public function toggleHamburger($open) {
    $this->isOpenHamburger = $open;
  }

  public function render()
  {
    return view('home');
  }
}
