<?php

namespace App\Livewire\Landing;

use App\Models\Post;
use App\Data\PostData;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.blog')]
class BlogDetail extends Component
{
  protected Post $post;

  public function mount(Post $post) {
    $this->post = $post;
  }

  #[Computed()]
  public function postData(): PostData
  {
    return PostData::fromModel($this->post);
  }

  public function render()
  {
    return view('blog-detail', [
      'post' => $this->postData()
    ]);
  }
}
