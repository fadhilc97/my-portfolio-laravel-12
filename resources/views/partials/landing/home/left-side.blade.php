<div class="w-full md:w-4/5 font-stack-sans-notch text-center md:text-left relative">
  <button x-on:click="isOpenHamburger = true" type="button" class="absolute md:hidden right-0 cursor-pointer">
    <img src="{{ asset('/img/icons/bars.svg') }}" alt="Bars Icon" width="32" />
  </button>
  <h1>Fadhil</h1>
  <h2>Software Engineer | Fullstack Developer at INCIT</h2>

  <p class="font-inter mt-4 leading-8 text-xl text-quatenary/70 md:w-2/3">I'm a problem solver and tech enthusiast
    based
    in Indonesia. Passionate to help your business problem with digital solution. </p>

  {{-- <flux:button href="{{ asset('cv.pdf') }}" variant="primary" class="mt-4 cursor-pointer">Download CV</flux:button> --}}

  <a href="{{ asset('cv.pdf') }}" target="_blank"
    class="py-2 px-4 hover:text-primary hover:bg-quatenary transition duration-300 inline-block font-inter text-quatenary/70 mt-4 border border-quatenary/70 cursor-pointer">Download
    CV</a>
</div>
