<?php

namespace App\Livewire\Landing;

use App\Data\PostData;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.blog')]
class Blog extends Component
{
  use WithPagination;

  public function render()
  {
    $postsQuery = Post::where('status', 'published')->latest()->paginate(2);
    $posts = PostData::collect($postsQuery);

    return view('blog', compact('posts'));
  }
}
