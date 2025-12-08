@php
  $assetBase = asset('');
@endphp

@push('style')
  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
@endpush

<script>
  function getData() {
    return {
      assetBase: '{{ $assetBase }}',
      currentSlide: 0,
      prev() {
        if (this.currentSlide <= 0) {
          this.currentSlide = this.projects.length - 1;
          return;
        }
        this.currentSlide--;
      },
      next() {
        if (this.currentSlide >= this.projects.length - 1) {
          this.currentSlide = 0;
          return;
        }
        this.currentSlide++;
      },
      projects: [{
        id: 1,
        imgPath: 'img/projects/daily-savings.png',
        title: 'Daily Savings',
        description: 'Recording and summarize my savings in daily basis.',
        techStacks: ['TypeScript', 'Next.js', 'Tailwind CSS', 'PostgreSQL', 'Prisma.js', 'Recharts']
      }, {
        id: 2,
        imgPath: 'img/projects/technical-docs.png',
        title: 'Technical Docs',
        description: 'Simple technical documentation about JavaScript Fundamentals.',
        techStacks: ['HTML', 'CSS']
      }, {
        id: 3,
        imgPath: 'img/projects/valorant-info.png',
        title: 'Valorant Info - Asia Pacific 2022',
        description: 'Introduction about game Valorant in general and tournament information in Asia Pacific 2022. This site is written in Bahasa Indonesia.',
        techStacks: ['HTML', 'CSS', 'JavaScript']
      }]
    }
  }
</script>

<div x-data="getData()" x-cloak class="relative h-auto lg:h-screen p-[1.6rem] overflow-hidden">
  <x-landing.nav-control prev-href="/experience" next-href="/blog" />

  <div class="grid grid-cols-1 lg:grid-cols-2 h-[30vh]">
    <div class="font-stack-sans-notch text-center lg:text-left">
      <h1>Projects</h1>
      <h2>My Showcase</h2>
      <div class="pb-4 lg:pr-4 lg:pb-0 mt-4">
        <p class="font-inter leading-8 text-xl text-quatenary/70">
          The proven projects. By endless curiosity, I explore several tech stacks to make something more than just a
          system. Understanding the problems, ideas gathering, analyze deeply, and make it resolvable.
        </p>
      </div>
    </div>

    <div class="py-8 lg:py-16 lg:px-28">
      <h3 class="text-quatenary font-medium text-center" x-text="projects[currentSlide].title"></h3>
      <p class="text-quatenary/90 text-center mt-4 text-sm" x-text="projects[currentSlide].description"></p>
      <p class="text-quatenary/70 text-center text-sm mt-1">Tech stacks: <span
          x-text="projects[currentSlide].techStacks.join(', ')"></span></p>
    </div>
  </div>

  <div class="flex lg:flex-col flex-col-reverse gap-4 pb-16 mt-4">
    <div class="w-1/2 mx-auto h-[360px] overflow-hidden flex border rounded-md p-4 border-quatenary">
      <template x-for="(project, index) in projects" :key="project.id">
        <div
          class="slide-transition w-full flex-shrink-0 text-white flex justify-center text-3xl h-auto overflow-hidden"
          :style="`transform: translateX(-${currentSlide * 100}%)`">
          <img :src="assetBase + project.imgPath" :alt="project.title" />
        </div>
      </template>
    </div>

    <div class="mx-auto w-1/2 gap-8 flex justify-center items-center">
      <button @click="prev()" type="button" class="text-3xl cursor-pointer transition hover:scale-120">&lt;</button>
      <div class="text-quatenary text-center font-medium text-lg w-10"><span x-text="currentSlide + 1"></span> / <span
          x-text="projects.length"></span></div>
      <button @click="next()" type="button" class="text-3xl cursor-pointer transition hover:scale-120">&gt;</button>
    </div>
  </div>


</div>
