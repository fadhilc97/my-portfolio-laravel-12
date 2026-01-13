<nav
  class="fixed bottom-[1.6rem] right-1/2 translate-x-1/2 md:right-[1.6rem] md:translate-x-0 md:bottom-auto md:bg-secondary bg-secondary/75 px-4 py-1 rounded-full z-50">
  <ul class="flex gap-6 items-center text-4xl text-quatenary/80">
    <li @class([
        'transition hover:text-quatenary md:hover:scale-110 hover:font-medium' => $prevHref,
        'text-quatenary/50' => !$prevHref,
    ])><a href="{{ $prevHref !== '' ? $prevHref : '#' }}"
        @class([
            'cursor-not-allowed' => !$prevHref,
            'cursor-pointer' => $prevHref,
        ])>&lt;</a></li>
    <li @class([
        'transition hover:text-quatenary md:hover:scale-110 hover:font-medium' => $nextHref,
        'text-quatenary/50' => !$nextHref,
    ])><a @class([
        'cursor-not-allowed' => !$nextHref,
        'cursor-pointer' => $nextHref,
    ])
        href="{{ $nextHref !== '' ? $nextHref : '#' }}">&gt;</a></li>
    <li class="transition hover:text-quatenary md:hover:scale-110 hover:font-medium"><a href="/">&times;</a></li>
  </ul>
</nav>
