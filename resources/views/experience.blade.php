<div class="relative h-screen p-[1.6rem] overflow-hidden">
  <x-landing.nav-control prev-href="" next-href="/project" />

  <div class="font-stack-sans-notch text-center md:text-left">
    <h1>Experience</h1>
    <h2>My Career Journey</h2>
  </div>

  <div class="flex flex-col divide-y md:divide-x md:divide-y-0 divide-quatenary/70 md:flex-row mt-4">
    @include('partials.landing.experience.description')
    @include('partials.landing.experience.timeline')
  </div>

</div>
