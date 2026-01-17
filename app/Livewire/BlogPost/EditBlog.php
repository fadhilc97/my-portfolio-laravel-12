<?php

namespace App\Livewire\BlogPost;

use App\Models\Post;
use App\Data\PostData;
use App\Interface\BlogServiceInterface;
use Livewire\Component;
use Spatie\LivewireFilepond\WithFilePond;
use Livewire\Attributes\Validate;

class EditBlog extends Component
{
  use WithFilePond;

  public string $slug;

  public string $title;

  public string $description;

  public string|int $category_id = '';

  public string $body;

  public string $status;

  public string $cover_url;

  #[Validate('max:5120')]
  public $cover_image_file;

  public function mount($slug) {
    $postQuery = Post::where('slug', $slug)->first();
    $postData = PostData::fromModel($postQuery);

    $this->title = $postData->title;
    $this->description = $postData->description;
    $this->category_id = $postData->category_id ?: '';
    $this->body = $postData->body;
    $this->slug = $slug;
    $this->status = $postData->status;
    $this->cover_url = $postData->cover_url ?? asset('img/default-cover.jpg');
  }

  public function handleSubmit() {
    $validated = $this->validate([
      'title' => 'required|min:3|max:50|unique:posts,title'.$this->slug,
      'description' => 'required|min:3|max:500',
      'category_id' => 'required|integer|min:1',
      'body' =>  'required',
    ], [
      '*.required' => "Required",
      'category_id.min' => "Please choose category"
    ]);

    $post = Post::where('slug', $this->slug)->firstOrFail();
    $post->update($validated);

    if ($this->cover_image_file) {
      $post->clearMediaCollection('cover')->addMedia($this->cover_image_file->getRealPath())
        ->usingFileName($this->cover_image_file->getClientOriginalName())
        ->toMediaCollection('cover');
    }

    return redirect('/app/blog');
  }

  public function handlePublish(BlogServiceInterface $blog) {
    $blog->publishPost($this->slug);
    $this->status = 'published';
  }
  
  public function handleArchive(BlogServiceInterface $blog) {
    $blog->archivePost($this->slug);
    $this->status = 'archived';
  }

  public function render()
  {
    return view('livewire.blog-post.edit-blog');
  }
}
