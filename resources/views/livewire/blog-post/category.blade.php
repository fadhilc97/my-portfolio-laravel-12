<div x-data="{ currentSlugEdit: null }" class="space-y-8">
  <h2>Categories</h2>
  <form x-show="!currentSlugEdit" wire:submit.prevent="handleCreate" class="flex items-center gap-2">
    <flux:field>
      <flux:input wire:model="name" placeholder="Category Name" type="text" />
      <flux:error name="name" />
    </flux:field>
    <flux:button x-bind:disabled="currentSlugEdit" x-bind:type="currentSlugEdit ? 'submit' : 'button'" variant="primary"
      class="cursor-pointer">Create new
      category</flux:button>
  </form>
  <h3 x-show="currentSlugEdit">Edit Category</h3>
  <div class="relative overflow-x-auto bg-neutral-primary-soft rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
      <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
        <tr>
          <th scope="col" class="px-6 py-3 font-medium w-1/3">
            <div class="flex items-center">
              Name
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Posts
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            Actions
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse($this->categories as $category)
          <tr wire:key="category-{{ $category->slug }}" class="bg-neutral-primary-soft border-b  border-default">
            <td class="px-6 py-4">
              <div x-show="currentSlugEdit !== '{{ $category->slug }}'">
                {{ $category->name }}
              </div>
              <flux:field class="w-auto" x-show="currentSlugEdit === '{{ $category->slug }}'">
                <flux:input value="{{ $category->name }}" id="category-{{ $category->slug }}" wire:model="name"
                  placeholder="Category Name" type="text"
                  x-on:blur="() => {
                    currentSlugEdit = null;
                    $wire.handleEdit('{{ $category->id }}');
                  }"
                  x-ref="edit-category-{{ $category->slug }}" />
                <flux:error name="name" />
              </flux:field>
            </td>
            <td class="px-6 py-4">
              {{ $category->posts->count() }}
            </td>
            <td class="px-6 py-4 text-primary/50">
              <button
                x-on:click="() => {
                  currentSlugEdit = '{{ $category->slug }}';
                  $wire.name = '{{ $category->name }}';
                  $nextTick(() => {
                    $refs['edit-category-{{ $category->slug }}'].focus();
                  });
                }"
                type="button" class="cursor-pointer font-medium text-sky-600 hover:underline">Edit</button> |
              <button wire:click="handleDelete({{ $category->id }})"
                wire:confirm="Are you sure want to delete this category ?" type="button"
                class="cursor-pointer font-medium text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
        @empty
          <x-table-row-empty colspan="3" />
        @endforelse
      </tbody>
    </table>
  </div>
</div>
