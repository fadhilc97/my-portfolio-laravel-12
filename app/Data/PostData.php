<?php

namespace App\Data;

use App\Models\Post;
use DateTime;
use Livewire\Attributes\Computed;
use Spatie\LaravelData\Data;

class PostData extends Data
{
  public function __construct(
    public int $id,
    public string $slug,
    public string $title,
    public string $description,
    public string $category,
    public string $category_id,
    public string $author,
    public string $status,
    public string $body,
    public int $likes,
    public DateTime $created_at,
  ) {
  }

  public static function fromModel(Post $post): self {
    return new self(
      id: $post->id,
      slug: $post->slug,
      title: $post->title,
      description: $post->description,
      category: $post->category->name,
      category_id: $post->category->id,
      author: $post->author->name,
      status: $post->status,
      body: $post->body,
      likes: $post->likes,
      created_at: $post->created_at
    );
  }
}
