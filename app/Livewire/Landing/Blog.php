<?php

namespace App\Livewire\Landing;

use App\Data\PostData;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.blog')]
class Blog extends Component
{
  public function render()
  {
    $postsQuery = Post::where('status', 'published')->latest()->paginate(10);
    $posts = PostData::collect($postsQuery);

    return view('blog', compact('posts'));
  }
}
