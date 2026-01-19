<div class="w-full md:w-3/4 bg-white mx-auto" x-data="{ likes: $wire.entangle('likes') }">
  <section class="space-y-8 md:space-y-12 bg-primary px-8 md:px-32 py-12">
    <a href="/blog" class="inline-block text-xl md:text-2xl text-tertiary font-medium">&lt; <span class="ml-4">Back
        to
        blog posts</span></a>
    <h1 class="font-stack-sans-notch font-medium text-quatenary text-center md:text-left text-4xl md:text-5xl">
      {{ $post->title }}</h1>
    <h3 class="leading-10 text-quatenary/70 text-xl md:text-2xl">{{ $post->description }}
    </h3>
    <div class="divide-y border-y border-quatenary/60 divide-quatenary/60 mt-12">
      <div class="py-5 flex justify-between items-center text-quatenary/70">
        <div>Date</div>
        <div class="text-sm text-quatenary/60">{{ $post->published_at->format('d M Y') }}</div>
      </div>
      <div class="py-5 flex justify-between items-center text-quatenary/70">
        <div>Author</div>
        <div class="text-sm text-quatenary/60">{{ $post->author }}</div>
      </div>
      <div class="py-5 flex justify-between items-center text-quatenary/70">
        <div>Category</div>
        <div class="text-sm text-quatenary/60">{{ $post->category }}</div>
      </div>
    </div>
  </section>
  <section class="px-8 md:px-32 py-12">
    <img src="{{ $post->cover_url }}" alt="{{ $post->title }}"
      class="h-40 mx-auto w-full object-cover mb-8 cursor-pointer" data-modal-target="post-cover-image"
      data-modal-toggle="post-cover-image" />

    <!-- Main modal -->
    <div id="post-cover-image" tabindex="-1" aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
          <!-- Modal body -->
          <div class="space-y-4 md:space-y-6 py-4 md:py-6">
            <img src="{{ $post->cover_url }}" alt="{{ $post->title }}" class="w-full" />
          </div>
          {{-- Modal footer --}}
          <div class="flex justify-center space-x-4 pt-4">
            <button data-modal-hide="post-cover-image" type="button"
              class="py-2 px-4 hover:text-secondary hover:bg-quatenary transition duration-300 inline-block font-inter text-primary/70 mt-4 border border-primary/70 cursor-pointer">Close</button>
          </div>
        </div>
      </div>
    </div>
    {{-- TODO: Show image using modal from Flowbite --}}
    {!! $post->body !!}
  </section>
  <section class="px-8 md:px-32 py-12 space-y-8 md:space-y-12 text-center">
    <p class="text-lg md:text-xl text-primary/70">How much did you like this article?</p>
    <div class="space-y-2">
      <p class="text-lg md:text-xl text-tertiary font-medium" x-text="likes"></p>
      <button type="button"
        class="p-3 rounded-full border border-tertiary cursor-pointer transition hover:border-[1.5px] hover:scale-105"
        @click="likes++" wire:click.debounce.300ms="handleSetLikes()">
        <img src="{{ asset('img/icons/clap.svg') }}" width="30" />
      </button>
    </div>
  </section>
</div>
