<div class="py-16 px-8 md:px-32">
  <div class="space-y-2 font-stack-sans-notch text-center md:text-left">
    <h1>Blog page</h1>
    <h3>Pouring out my thoughts into series of words</h3>
  </div>
  <a href="/" class="font-medium text-lg mt-8 inline-block text-sky-600">&laquo; Back to home</a>
  <div class="grid grid-cols-1 md:grid-cols-3 mt-8 gap-4">
    <aside class="space-y-4">
      <h4 class="font-medium">Category Filters:</h4>
      <ul>
        @forelse (App\Models\Category::all() as $category)
          <li wire:key="{{ $category->id }}" class="flex items-center mb-4">
            <input wire:model.live.debounce.200ms="selected_categories" id="category-{{ $category->id }}" type="checkbox"
              value="{{ $category->id }}"
              class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft cursor-pointer">
            <label for="category-{{ $category->id }}"
              class="ms-2 font-medium text-heading select-none cursor-pointer">{{ $category->name }}</label>
          </li>
        @empty
          <p class="text-lg font-semibold text-secondary/50">Categories will available soon</p>
        @endforelse
      </ul>
    </aside>
    <section class="md:col-span-2 divide-y divide-primary/20">
      @forelse ($posts as $post)
        <a href="/blog/{{ $post->slug }}" wire:key="{{ $post->slug }}"
          class="block py-8 px-2 md:px-4 cursor-pointer hover:bg-primary/10">
          <div class="flex flex-col md:flex-row gap-4">
            {{-- TODO: Will have the cover image later --}}
            <article class="space-y-4 py-2">
              <div class="flex flex-col md:flex-row md:items-center md:gap-4">
                <div class="tracking-wider">{{ $post->category }}</div>
                <div class="hidden md:block w-30 h-[1px] bg-primary/50"></div>
                <div class="text-sm">{{ $post->published_at->format('d M Y') }}</div>
              </div>
              <h2 class="font-semibold">
                {{ Str::of($post->title)->limit(50) }}
              </h2>
            </article>
          </div>
          <p class="mt-4">{{ $post->description }}</p>
        </a>
      @empty
        <p class="text-lg font-semibold text-center text-secondary/50">Posts will available soon</p>
      @endforelse
    </section>
    <div class="md:col-span-2 md:col-end-4">
      {{ $posts->links() }}
    </div>
  </div>
</div>
