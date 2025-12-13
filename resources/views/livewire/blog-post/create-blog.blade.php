<div class="space-y-8">
  <h2>Create Blog Post</h2>
  <form action="" class="space-y-4">
    <flux:field>
      <flux:label badge="Required">Title</flux:label>
      <flux:input type="text" required />
      <flux:error name="title" />
    </flux:field>

    <flux:field>
      <flux:label badge="Optional">Description</flux:label>
      <flux:input type="text" />
      <flux:error name="description" />
    </flux:field>

    <flux:field>
      <flux:label badge="Required">Category</flux:label>
      <flux:select searchable placeholder="Choose category...">
        <flux:select.option>Category 1</flux:select.option>
        <flux:select.option>Category 2</flux:select.option>
        <flux:select.option>Category 3</flux:select.option>
      </flux:select>
      <flux:error name="category_id" />
    </flux:field>

    <flux:field>
      <flux:label badge="Required">Body</flux:label>
    </flux:field>
  </form>
  <div class="flex gap-1">
    <flux:button variant="primary">Save</flux:button>
    <flux:button href="/app/blog" variant="outline">Back to Blog Posts</flux:button>
  </div>
</div>
