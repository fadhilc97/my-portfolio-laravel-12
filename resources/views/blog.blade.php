<div class="py-16 px-32">
  <div class="space-y-2 font-stack-sans-notch">
    <h1>Blog page</h1>
    <h3>Pouring out my thoughts into series of words</h3>
  </div>
  <div class="grid grid-cols-3 mt-16 gap-4">
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
    <section class="col-span-2 divide-y divide-primary/20">
      @for ($i = 0; $i < 10; $i++)
        <div class="py-8 px-4 cursor-pointer hover:bg-primary/10">
          <div class="flex gap-4">
            <img src="{{ asset('img/profile.jpg') }}" alt="Post title" class="object-cover w-28 rounded-md">
            <article class="space-y-4 pb-2">
              <div class="flex items-center gap-4">
                <div class="tracking-wider">Category 1</div>
                <div class="w-30 h-[1px] bg-primary/50"></div>
                <div class="text-sm">10 Dec 2025</div>
              </div>
              <h2 class="font-semibold">
                {{ Str::of(
                    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, autem esse
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                libero
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                fuga quaerat laborum? lorem30',
                )->limit(100) }}
              </h2>
            </article>
          </div>
          <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nihil quas deserunt
            pariatur minima
            assumenda, ducimus adipisci sint laudantium error.</p>
        </div>
      @endfor
    </section>
  </div>
</div>
