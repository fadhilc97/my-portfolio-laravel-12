<aside x-bind:class="!isOpenHamburger ? 'hidden' : ''"
  class="w-full absolute right-0 bg-primary md:static md:w-1/5 space-y-16 md:block">
  <nav class="px-3 md:block flex justify-between items-center">
    <ul class="flex justify-start md:justify-end gap-4 items-center">
      <x-landing.nav-link-socmed-item href="mailto:fadhilc97@gmail.com" icon-src="/img/icons/envelope.svg" alt="Email Icon"
        width="32" />
      <x-landing.nav-link-socmed-item href="https://www.linkedin.com/in/fadhil-lan/" icon-src="/img/icons/linkedin.svg"
        alt="LinkedIn Icon" width="26" />
      <x-landing.nav-link-socmed-item href="https://github.com/fadhilc97/" icon-src="/img/icons/github.svg"
        alt="Github Icon" width="28" />
      <x-landing.nav-link-socmed-item href="https://www.instagram.com/dhil.lan12/" icon-src="/img/icons/instagram.svg"
        alt="Instagram Icon" width="28" />
    </ul>
    <button x-on:click="isOpenHamburger = false" type="button"
      class="cursor-pointer text-4xl mr-4 md:hidden">&times;</button>
  </nav>
  <nav class="text-2xl">
    <ul>
      <x-landing.nav-link-item href="#" label="Home" />
      <x-landing.nav-link-item href="#" label="Experience" />
      <x-landing.nav-link-item href="#" label="Project" />
      <x-landing.nav-link-item href="#" label="Blog" />
    </ul>
  </nav>
</aside>
