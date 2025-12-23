<?php

namespace App\Livewire\BlogPost;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBlog extends Component
{
  #[Validate('required|min:3|max:50|unique:posts')]
  public string $title;

  #[Validate('required|min:3|max:500')]
  public string $description;

  #[Validate('required|integer')]
  public string|int $category_id = '';

  #[Validate('required')]
  public string $body;

  public function handleCreate() {
    $validated = $this->validate();
    $validated['slug'] = Str::slug($validated['title']);
    $validated['author_id'] = Auth::user()->id;
    
    Post::create($validated);

    return redirect('/app/blog');
  }

  public function render()
  {
    return view('livewire.blog-post.create-blog');
  }
}
