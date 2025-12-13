<div class="space-y-8">
  <h2>Categories</h2>
  <flux:button variant="primary" class="cursor-pointer">Create new category</flux:button>
  <div class="relative overflow-x-auto bg-neutral-primary-soft rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
      <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
        <tr>
          <th scope="col" class="px-6 py-3 font-medium">
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
        <tr class="bg-neutral-primary-soft border-b  border-default">
          <td class="px-6 py-4">
            Category 1
          </td>
          <td class="px-6 py-4">
            15
          </td>
          <td class="px-6 py-4 text-primary/50">
            <a href="#" class="font-medium text-sky-600 hover:underline">Edit</a> |
            <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
