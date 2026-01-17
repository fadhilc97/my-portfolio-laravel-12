@assets
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
  @filepondScripts
@endassets

<div class="space-y-8">
  <h2>Create Blog Post</h2>
  <form wire:submit="handleCreate" class="space-y-4">
    <flux:field>
      <flux:label badge="Required">Title</flux:label>
      <flux:input wire:model="title" type="text" />
      <flux:error name="title" />
    </flux:field>

    <flux:field>
      <flux:label badge="Optional">Description</flux:label>
      <flux:textarea wire:model="description" rows="4" />
      <flux:error name="description" />
    </flux:field>

    <flux:field>
      <flux:label badge="Required">Category</flux:label>
      <flux:select wire:model="category_id" placeholder="Choose category...">
        @foreach (\App\Models\Category::all() as $category)
          <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
        @endforeach
      </flux:select>
      <flux:error name="category_id" />
    </flux:field>

    <flux:field>
      <flux:label badge="Required">Cover Image</flux:label>
      <x-filepond::upload wire:model="cover_image_file" />
      <flux:error name="cover_image_file" />
    </flux:field>

    <flux:field>
      <flux:label badge="Required">Body</flux:label>
      <div class="@error('body') border border-red-500 ring-red-500 @enderror h-fit">
        <flux:textarea wire:model="body" id="body" name="body" rows="4"
          class="hidden p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
          placeholder="Write blog body here" placeholder="Write yout content here"></flux:textarea>
        <div wire:ignore>
          <div id="editor" x-data x-init="const quill = new Quill($el, { theme: 'snow' });
          quill.on('text-change', () => {
              @this.set('body', quill.root.innerHTML);
          });"></div>
        </div>
      </div>
      <flux:error name="body" />
    </flux:field>
    <div class="flex gap-1">
      <flux:button type="submit" variant="primary" class="cursor-pointer">Save</flux:button>
      <flux:button href="/app/blog" variant="outline">Back to Blog Posts</flux:button>
    </div>
  </form>
</div>

@assets
  <!-- Include the Quill library -->
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
@endassets
