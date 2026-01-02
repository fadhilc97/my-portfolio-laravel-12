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
  public string $slug;
  public int $likes = 0;

  public function mount(Post $post)
  {
    $this->slug = $post->slug;
    $this->likes = $post->likes;
  }

  public function handleSetLikes()
  {
    $post = Post::where('slug', $this->slug)->firstOrFail();
    $post->likes = $this->likes;
    $post->save();
    // Optionally, refresh likes from DB to avoid race conditions
    $this->likes = $post->likes;
  }

  #[Computed()]
  public function postData(): PostData
  {
    $post = Post::where('slug', $this->slug)->firstOrFail();
    return PostData::fromModel($post);
  }

  public function render()
  {
    return view('blog-detail', [
      'likes' => $this->likes,
      'post' => $this->postData(),
    ]);
  }
}
