<?php

namespace App\Services;

use App\Models\Post;
use App\Interface\BlogServiceInterface;

class BlogService implements BlogServiceInterface {
  public function publishPost(string $slug): void
  {
    Post::where('slug', $slug)->update([
      'status' => 'published',
      'published_at' => now()
    ]);
  }

  public function archivePost(string $slug): void
  {
    Post::where('slug', $slug)->update([
      'status' => 'archived',
    ]);
  }
}