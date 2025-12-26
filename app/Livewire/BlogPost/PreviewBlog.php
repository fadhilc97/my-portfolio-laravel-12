<?php

namespace App\Livewire\BlogPost;

use App\Data\PostData;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.blog')]
class PreviewBlog extends Component
{
  public string $slug;

  public string $title;

  public string $description;

  public string $created_at;

  public string $author;

  public string $category;

  public string $body;

  public string $status;

  public function handlePublish() {
    Post::where('slug', $this->slug)->update([
      'status' => 'published',
      'published_at' => now()
    ]);
    
    $this->status = 'published';
  }

  public function mount(string $slug) {
    $query = Post::where('slug', $slug)->first();
    $post = PostData::fromModel($query);

    $this->slug = $post->slug;
    $this->title = $post->title;
    $this->description = $post->description;
    $this->created_at = $post->created_at->format('d F o');
    $this->author = $post->author;
    $this->category = $post->category;
    $this->body = $post->body;
    $this->status = $post->status;
  }

  public function render()
  {
    return view('livewire.blog-post.preview-blog');
  }
}
