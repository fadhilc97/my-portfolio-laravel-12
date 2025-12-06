@php
  $assetBase = asset('');
@endphp

<div x-data="{
    assetBase: '{{ $assetBase }}',
    projects: [{
        imgPath: 'img/projects/daily-savings.png',
        title: 'Daily Savings',
        description: 'Recording and summarize my savings in daily basis.',
        techStacks: ['TypeScript', 'Next.js', 'Tailwind CSS', 'PostgreSQL', 'Prisma.js', 'Recharts']
    }, {
        imgPath: 'img/projects/technical-docs.png',
        title: 'Technical Docs',
        description: 'Simple technical documentation about JavaScript Fundamentals.',
        techStacks: ['HTML', 'CSS']
    }, {
        imgPath: 'img/projects/valorant-info.png',
        title: 'Valorant Info - Asia Pacific 2022',
        description: 'Introduction about game Valorant in general and tournament information in Asia Pacific 2022. This site is written in Bahasa Indonesia.',
        techStacks: ['HTML', 'CSS', 'JavaScript']
    }]
}" class="relative h-auto lg:h-screen p-[1.6rem] overflow-hidden">
  <x-landing.nav-control prev-href="/experience" next-href="/blog" />

  <div class="grid grid-cols-1 lg:grid-cols-2">
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
      <h3 class="text-quatenary text-center">Project title</h3>
      <p class="text-quatenary/70 text-center mt-4 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Minus quia
        aliquid, voluptate
        quibusdam error ab
        soluta, blanditiis, quo saepe iusto nostrum. Nobis, labore itaque. Natus beatae voluptate necessitatibus quo
        facilis.</p>
    </div>
  </div>

  <div class="flex lg:flex-col flex-col-reverse gap-4 pb-16">
    <div class="w-1/2 mx-auto h-[360px] gap-4 overflow-auto flex border rounded-md p-4 border-quatenary">
      <template x-for="project in projects">
        <div class="w-full flex-shrink-0 text-white flex justify-center text-3xl h-auto overflow-hidden">
          <img :src="assetBase + project.imgPath" :alt="project.title" />
        </div>
      </template>
    </div>

    <div class="mx-auto w-1/2 gap-8 flex justify-center items-center">
      <button type="button" class="text-3xl cursor-pointer transition hover:scale-120">&lt;</button>
      <div class="text-quatenary font-medium text-lg">1 / n</div>
      <button type="button" class="text-3xl cursor-pointer transition hover:scale-120">&gt;</button>
    </div>
  </div>


</div>
