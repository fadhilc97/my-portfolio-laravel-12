<x-layouts.landing>
  <div x-data="{ isOpenHamburger: false }" class="relative flex h-screen p-[1.6rem] overflow-hidden">
    @include('partials.landing.home.left-side')
    @include('partials.landing.home.nav-links')
    @include('partials.landing.home.profile-picture')
  </div>

  @livewireScripts
</x-layouts.landing>
