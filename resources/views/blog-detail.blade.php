<x-layouts.blog>
  <div class="w-full md:w-3/4 bg-white mx-auto">
    {{-- Header: Back to Post Link, Title, Description, Metadata --}}
    <section class="space-y-8 md:space-y-12 bg-primary px-8 md:px-32 py-12">
      <a href="/blog" class="inline-block text-xl md:text-2xl text-tertiary font-medium">&lt; <span class="ml-4">Back
          to
          blog posts</span></a>
      <h1 class="font-stack-sans-notch font-medium text-quatenary text-center md:text-left text-4xl md:text-5xl">Blog
        Title</h1>
      <h3 class="leading-10 text-quatenary/70 text-xl md:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Nesciunt ex quasi
        dolorum
        fugiat,
        commodi voluptates
        omnis repudiandae dignissimos ipsa minus rem corporis eligendi voluptas totam expedita tenetur quos fuga natus
        hic vero quidem exercitationem! Tenetur ducimus amet quam recusandae, exercitationem nostrum tempora sint
        adipisci dolorem doloribus cum beatae quasi vel saepe esse dolor illo similique atque assumenda maxime omnis eos
      </h3>
      <div class="divide-y border-y border-quatenary/60 divide-quatenary/60 mt-12">
        <div class="py-5 flex justify-between items-center text-quatenary/70">
          <div>Date</div>
          <div class="text-sm text-quatenary/60">12 December 2025</div>
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
      <p class="text-primary/70 text-lg md:text-xl leading-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Unde
        aperiam,
        asperiores, ut aliquid modi suscipit recusandae vero pariatur tempora aut distinctio quam accusamus facere
        consectetur nesciunt ab a molestiae accusantium maiores repellat deserunt! Et amet provident sequi dolor minus
        id debitis officiis ullam vel ab enim atque, fugiat consequatur quae rerum nesciunt dicta saepe dignissimos
        illum eligendi! Cum animi officiis necessitatibus, aliquid voluptatum dolore laboriosam perferendis cupiditate
        deleniti saepe suscipit tempore quo enim rem doloribus perspiciatis, aut eligendi nisi consequatur odit
        recusandae ad commodi consectetur. Delectus, placeat rerum. Repudiandae dignissimos soluta quis aliquam
        voluptate illum temporibus cum veniam, facere error.</p>
      <p class="text-primary/70 text-lg md:text-xl leading-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Unde
        aperiam,
        asperiores, ut aliquid modi suscipit recusandae vero pariatur tempora aut distinctio quam accusamus facere
        consectetur nesciunt ab a molestiae accusantium maiores repellat deserunt! Et amet provident sequi dolor minus
        id debitis officiis ullam vel ab enim atque, fugiat consequatur quae rerum nesciunt dicta saepe dignissimos
        illum eligendi! Cum animi officiis necessitatibus, aliquid voluptatum dolore laboriosam perferendis cupiditate
        deleniti saepe suscipit tempore quo enim rem doloribus perspiciatis, aut eligendi nisi consequatur odit
        recusandae ad commodi consectetur. Delectus, placeat rerum. Repudiandae dignissimos soluta quis aliquam
        voluptate illum temporibus cum veniam, facere error.</p>
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
</x-layouts.blog>
