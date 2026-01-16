<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
  use InteractsWithMedia;

  protected $fillable = ['title', 'slug', 'description', 'body', 'author_id', 'category_id'];
  protected $with = ['author', 'category'];

  public function registerMediaConversions(?Media $media = null): void
  {
    $this->addMediaConversion('cover')->fit(Fit::Contain, 300, 300)->nonQueued();
  }

  public function author(): BelongsTo
  {
    return $this->belongsTo(User::class, "author_id");
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }
}
