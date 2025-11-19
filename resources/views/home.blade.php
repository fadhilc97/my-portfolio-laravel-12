<x-layouts.landing>
  <div class="relative flex h-screen p-[1.6rem] overflow-hidden">
    {{-- Left side --}}
    <div class="w-4/5 font-stack-sans-notch">
      <h1>Fadhil</h1>
      <h2>Software Engineer | Fullstack Developer at INCIT</h2>

      <p class="font-inter mt-4 leading-8 text-xl text-quatenary/70 w-2/3">I'm a problem solver and tech enthusiast
        based
        in Indonesia. Passionate to help your business problem with digital solution. </p>
    </div>

    {{-- Right side --}}
    <div class="w-1/5 space-y-16">
      <nav>
        <ul class="flex justify-end gap-4 items-center">
          <li class="transition hover:scale-125"><a href="mailto:fadhilc97@gmail.com" target="_blank">
              <img src="{{ asset('/img/icons/envelope.svg') }}" alt="Email Icon" width="32" />
            </a></li>
          <li class="transition hover:scale-125"><a href="https://www.linkedin.com/in/fadhil-lan/" target="_blank">
              <img src="{{ asset('/img/icons/linkedin.svg') }}" alt="LinkedIn Icon" width="26" />
            </a></li>
          <li class="transition hover:scale-125"><a href="https://github.com/fadhilc97/" target="_blank">
              <img src="{{ asset('/img/icons/github.svg') }}" alt="Email Icon" width="28" />
            </a></li>
          <li class="transition hover:scale-125"><a href="https://www.instagram.com/dhil.lan12/" target="_blank">
              <img src="{{ asset('/img/icons/instagram.svg') }}" alt="Email Icon" width="28" />
            </a></li>
        </ul>
      </nav>
      <nav class="text-2xl">
        <ul>
          <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary hover:scale-105 hover:font-medium"><a
              href="#">About</a></li>
          <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary hover:scale-105 hover:font-medium"><a
              href="#">Experience</a></li>
          <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary hover:scale-105 hover:font-medium"><a
              href="#">Project</a></li>
          <li class="transition cursor-pointer px-3 py-4 hover:bg-secondary hover:scale-105 hover:font-medium"><a
              href="#">Blog</a></li>
        </ul>
      </nav>
    </div>

    <div class="absolute -bottom-10 left-1/2 -translate-x-1/2">
      <img src="{{ asset('/img/profile.jpg') }}" alt="Fadhil's Profile Picture" width="300" />
    </div>
  </div>
</x-layouts.landing>
