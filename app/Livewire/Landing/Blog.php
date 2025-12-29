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

  public $query_string = [
    'selected_categories' => ['except', []]
  ];

  public array $selected_categories = [];

  public function updatingSelectedCategories()
  {
    $this->resetPage();
  }

  public function render()
  {
    $posts = PostData::collect([]);

    $posts_query = Post::query();

    if ($this->selected_categories) {
      $posts_query->whereIn('category_id', $this->selected_categories);
    }

    $posts_query->where('status', 'published')->latest();
    $posts = PostData::collect($posts_query->paginate(2)->withQueryString());

    return view('blog', compact('posts'));
  }
}
