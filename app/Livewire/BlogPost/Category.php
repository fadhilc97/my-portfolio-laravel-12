<?php

namespace App\Livewire\BlogPost;

use App\Models\Category as ModelsCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
  use WithPagination;

  #[Validate('required|unique:categories|min:3|max:25')]
  public string $name = '';

  public string $slug = '';

  #[Computed()]
  public function categories() {
    return ModelsCategory::paginate(10);
  }

  public function handleCreate() {
    $validated = $this->validate();

    ModelsCategory::create([
      'name' => $validated['name'],
      'slug' => Str::slug($validated['name'])
    ]);

    $this->reset();
  }

  public function handleEdit(int $id) {
    $validated = $this->validate([
      'name' => "required|unique:categories,name$id|min:3|max:25"
    ]);

    ModelsCategory::where('id', $id)->update([
      'name' => $validated['name'],
      'slug' => Str::slug($validated['name'])
    ]);

    $this->reset();
  }

  public function handleDelete(int $id) {
    ModelsCategory::find($id)->delete();
  }

  public function render()
  {
    return view('livewire.blog-post.category');
  }
}
