<?php
namespace App\Data;

use App\Models\Post;
use DateTime;
use Spatie\LaravelData\Data;

class PostData extends Data
{
  public function __construct(
    public int $id,
    public string $slug,
    public string $title,
    public string $description,
    public ?string $category,
    public ?int $category_id,
    public string $author,
    public string $status,
    public string $body,
    public int $likes,
    public DateTime $created_at,
    public ?DateTime $published_at,
    public ?string $cover_url = ''
  ) {
  }

  public static function fromModel(Post $post): self {
    return new self(
      id: $post->id,
      slug: $post->slug,
      title: $post->title,
      description: $post->description,
      category: $post->category->name ?? '-',
      category_id: $post->category->id ?? 0,
      author: $post->author->name,
      status: $post->status,
      body: $post->body,
      likes: $post->likes,
      created_at: $post->created_at,
      published_at: new DateTime($post->published_at),
      cover_url: $post->getFirstMediaUrl('cover') ?: asset('img/default-cover.jpg')
    );
  }
}
