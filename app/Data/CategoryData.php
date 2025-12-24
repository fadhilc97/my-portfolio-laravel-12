<?php

namespace App\Data;

use App\Models\Category;
use Spatie\LaravelData\Data;

class CategoryData extends Data
{
  public function __construct(
    public int $id,
    public string $slug,
    public string $name,
    public int $postsCount
  ) {}

  public static function fromModel(Category $category): self {
    return new self(
      id:$category->id, 
      slug:$category->slug, 
      name:$category->name, 
      postsCount: $category->posts->count()
    );
  }
}
