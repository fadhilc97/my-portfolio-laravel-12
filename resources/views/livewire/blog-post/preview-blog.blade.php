<div>
  <div class="bg-white sticky top-0 p-4 md:w-3/4 mx-auto flex justify-between items-center">Preview mode
    @if ($this->status === 'draft')
      <flux:button variant="primary" class="cursor-pointer" wire:click="handlePublish">Publish
      </flux:button>
    @endif
  </div>
  <x-blog-app.detail-post href="/app/blog" />
</div>
