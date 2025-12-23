<?php

namespace App\Livewire\BlogPost;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Blog extends Component
{
  #[Computed()]
  public function posts() {
    return Post::latest()->paginate(10);
  }

  public function render()
  {

    return view('livewire.blog-post.blog', [
      'posts' => $this->posts
    ]);
  }
}
