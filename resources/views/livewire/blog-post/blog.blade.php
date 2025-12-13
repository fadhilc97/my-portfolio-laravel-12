<div class="space-y-8">
  <h2>Blog Posts</h2>
  <flux:button wire:navigate href="/app/blog/create" variant="primary">Create new post</flux:button>
  <div class="relative overflow-x-auto bg-neutral-primary-soft rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
      <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
        <tr>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Date
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Title
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Category
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Author
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Likes
              <button type="button">
                <img src="{{ asset('img/icons/sort.svg') }}" alt="Sort" class="w-4 h-4 ms-1" />
              </button>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 font-medium">
            <div class="flex items-center">
              Status
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
        <tr class="bg-neutral-primary-soft border-b  border-default">
          <td class="px-6 py-4">
            13 Dec 2025
          </td>
          <td class="px-6 py-4">
            Blog Title
          </td>
          <td class="px-6 py-4">
            Category 1
          </td>
          <td class="px-6 py-4">
            Fadhil
          </td>
          <td class="px-6 py-4">
            100
          </td>
          <td class="px-6 py-4">
            Draft
          </td>
          <td class="px-6 py-4 text-primary/50">
            <a href="#" class="font-medium text-sky-600 hover:underline">Edit</a> |
            <a href="#" class="font-medium text-yellow-600 hover:underline">Preview</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
