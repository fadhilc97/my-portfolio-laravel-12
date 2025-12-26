<?php

namespace App\Livewire\BlogPost;

use App\Models\Post;
use App\Data\PostData;
use Livewire\Component;

class EditBlog extends Component
{
  public string $slug;

  public string $title;

  public string $description;

  public string|int $category_id = '';

  public string $body;

  public function mount($slug) {
    $postQuery = Post::where('slug', $slug)->first();
    $postData = PostData::fromModel($postQuery);

    $this->title = $postData->title;
    $this->description = $postData->description;
    $this->category_id = $postData->category_id;
    $this->body = $postData->body;
    $this->slug = $slug;
  }

  public function handleSubmit() {
    $validated = $this->validate([
      'title' => 'required|min:3|max:50|unique:posts,title'.$this->slug,
      'description' => 'required|min:3|max:500',
      'category_id' => 'required|integer',
      'body' =>  'required'
    ]);

    Post::where('slug', $this->slug)->update($validated);

    return redirect('/app/blog');
  }

  public function render()
  {
    return view('livewire.blog-post.edit-blog');
  }
}
