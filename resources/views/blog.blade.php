<div class="py-16 px-8 md:px-32">
  <div class="space-y-2 font-stack-sans-notch text-center md:text-left">
    <h1>Blog page</h1>
    <h3>Pouring out my thoughts into series of words</h3>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 mt-16 gap-4">
    <aside class="space-y-4">
      <h4 class="font-medium">Category Filters:</h4>
      <ul>
        <li class="flex items-center mb-4">
          <input checked id="category-1" type="checkbox" value=""
            class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft cursor-pointer">
          <label for="category-1" class="ms-2 font-medium text-heading select-none cursor-pointer">Category 1</label>
        </li>
      </ul>
    </aside>
    <section class="md:col-span-2 divide-y divide-primary/20">
      @foreach ($posts as $post)
        <a href="/blog/{{ $post->slug }}" wire:key="{{ $post->slug }}"
          class="block py-8 px-2 md:px-4 cursor-pointer hover:bg-primary/10">
          <div class="flex flex-col md:flex-row gap-4 items-center">
            {{-- TODO: Will have the cover image later --}}
            {{-- <img src="{{ asset('img/profile.jpg') }}" alt="Post title"
              class="h-28 object-cover w-full md:w-28 rounded-md"> --}}
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
      @endforeach
    </section>
  </div>
</div>
