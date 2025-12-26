<div class="w-full md:w-3/4 bg-white mx-auto">
  {{-- Header: Back to Post Link, Title, Description, Metadata --}}
  {{-- {{ dd($this->post) }} --}}
  <section class="space-y-8 md:space-y-12 bg-primary px-8 md:px-32 py-12">
    <a href="{{ $href }}" class="inline-block text-xl md:text-2xl text-tertiary font-medium">&lt; <span
        class="ml-4">Back
        to
        blog posts</span></a>
    <h1 class="font-stack-sans-notch font-medium text-quatenary text-center md:text-left text-4xl md:text-5xl">
      {{ $this->title }}</h1>
    <h3 class="leading-10 text-quatenary/70 text-xl md:text-2xl">
      {{ $this->description }}
    </h3>
    <div class="divide-y border-y border-quatenary/60 divide-quatenary/60 mt-12">
      <div class="py-5 flex justify-between items-center text-quatenary/70">
        <div>Date</div>
        <div class="text-sm text-quatenary/60">{{ $this->created_at }}</div>
      </div>
      <div class="py-5 flex justify-between items-center text-quatenary/70">
        <div>Author</div>
        <div class="text-sm text-quatenary/60">Fadhil</div>
      </div>
      <div class="py-5 flex justify-between items-center text-quatenary/70">
        <div>Category</div>
        <div class="text-sm text-quatenary/60">Carrer</div>
      </div>
    </div>
  </section>
  {{-- Body content --}}
  <section class="px-8 md:px-32 py-12">
    {!! $this->body !!}
  </section>
  {{-- Footer --}}
  <section class="px-8 md:px-32 py-12 space-y-8 md:space-y-12 text-center">
    <p class="text-lg md:text-xl text-primary/70">How much did you like this article?</p>
    <div class="space-y-2">
      <p class="text-lg md:text-xl text-tertiary font-medium">100</p>
      <button type="button"
        class="p-3 rounded-full border border-tertiary cursor-pointer transition hover:border-[1.5px] hover:scale-105">
        <img src="{{ asset('img/icons/clap.svg') }}" width="30" />
      </button>
    </div>
  </section>
</div>
