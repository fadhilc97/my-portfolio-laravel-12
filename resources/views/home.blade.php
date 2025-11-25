<div class="relative flex h-screen p-[1.6rem] overflow-hidden">
  {{-- Left side --}}
  <div class="w-full md:w-4/5 font-stack-sans-notch text-center md:text-left relative">
    <button wire:click="toggleHamburger(true)" type="button" class="absolute md:hidden right-0 cursor-pointer">
      <img src="{{ asset('/img/icons/bars.svg') }}" alt="Bars Icon" width="32" />
    </button>
    <h1>Fadhil</h1>
    <h2>Software Engineer | Fullstack Developer at INCIT</h2>

    <p class="font-inter mt-4 leading-8 text-xl text-quatenary/70 md:w-2/3">I'm a problem solver and tech enthusiast
      based
      in Indonesia. Passionate to help your business problem with digital solution. </p>
  </div>

  {{-- Right side --}}
  <aside
    class="w-full absolute right-0 bg-primary md:static md:w-1/5 space-y-16 @if (!$isOpenHamburger) hidden @endif md:block">
    <nav class="px-3 md:block flex justify-between items-center">
      <ul class="flex justify-start md:justify-end gap-4 items-center">
        <li class="transition hover:scale-125"><a href="mailto:fadhilc97@gmail.com" target="_blank">
            <img src="{{ asset('/img/icons/envelope.svg') }}" class="min-w-7" alt="Email Icon" width="32" />
          </a></li>
        <li class="transition hover:scale-125"><a href="https://www.linkedin.com/in/fadhil-lan/" target="_blank">
            <img src="{{ asset('/img/icons/linkedin.svg') }}" class="min-w-7" alt="LinkedIn Icon" width="26" />
          </a></li>
        <li class="transition hover:scale-125"><a href="https://github.com/fadhilc97/" target="_blank">
            <img src="{{ asset('/img/icons/github.svg') }}" class="min-w-7" alt="Email Icon" width="28" />
          </a></li>
        <li class="transition hover:scale-125"><a href="https://www.instagram.com/dhil.lan12/" target="_blank">
            <img src="{{ asset('/img/icons/instagram.svg') }}" class="min-w-7" alt="Email Icon" width="28" />
          </a></li>
      </ul>
      <button wire:click="toggleHamburger(false)" type="button"
        class="cursor-pointer text-4xl mr-4 md:hidden">&times;</button>
    </nav>
    <nav class="text-2xl">
      <ul>
        <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary md:hover:scale-105 hover:font-medium"><a
            href="#">About</a></li>
        <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary md:hover:scale-105 hover:font-medium"><a
            href="#">Experience</a></li>
        <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary md:hover:scale-105 hover:font-medium"><a
            href="#">Project</a></li>
        <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary md:hover:scale-105 hover:font-medium"><a
            href="#">Blog</a></li>
      </ul>
    </nav>
  </aside>

  {{-- Others --}}
  <div class="absolute -bottom-10 left-1/2 -translate-x-1/2">
    <img class="min-w-[300px]" src="{{ asset('/img/profile.jpg') }}" alt="Fadhil's Profile Picture" width="300" />
  </div>
</div>
