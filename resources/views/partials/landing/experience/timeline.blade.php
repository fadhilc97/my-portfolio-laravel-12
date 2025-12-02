@php
  $jobs = [
      [
          'role' => 'Full Stack Developer',
          'company_name' => 'International Centre of Industrial Transformation (Hybrid in Batam, Indonesia)',
          'start_period' => 'November 2024',
          'end_period' => 'Present',
          'descriptions' => [
              'Successful released on Readiness Index, the super-app from all indexes.',
              'Analyze and implement the new or existing features that fit the requirements.',
          ],
      ],
      [
          'role' => 'Front End Developer',
          'company_name' => 'International Centre of Industrial Transformation (Hybrid in Batam, Indonesia)',
          'start_period' => 'November 2022',
          'end_period' => 'November 2024',
          'descriptions' => [
              'Successful release on COSIRI, the the sustainability index assessment.',
              'Implement the UI components and pages designs with UX friendly.',
              'REST API integration to execute the function optimally.',
          ],
      ],
      [
          'role' => 'Freelance Math Tutor',
          'company_name' => 'Baraya Edukasi (Batam, Indonesia)',
          'start_period' => 'October 2022',
          'end_period' => 'February 2024',
          'descriptions' => [
              'Assist the student learning material difficulties.',
              'Prepare teaching materials based on student needs with understandable concepts.',
              'Prepare the mid/final regular school examination materials.',
          ],
      ],
      [
          'role' => 'Software Engineer',
          'company_name' => 'PT. Tigernix Solutions Indonesia (Batam, Indonesia)',
          'start_period' => 'February 2020',
          'end_period' => 'August 2022',
          'descriptions' => [
              'Successfull to roll-out on CIMS (Client Information Management System) project for school organization after supporting for 2 phases.',
              'Project support on DMS (Donation Management System) for social organization.',
              'Create secured auto-backup database and file objects in production server.',
          ],
      ],
      [
          'role' => 'Substitute Teacher',
          'company_name' => 'SMK Multistudi High School (Batam, Indonesia)',
          'start_period' => 'August 2019',
          'end_period' => 'December 2019',
          'descriptions' => [
              'Teaching the Web and Mobile Programming subject for grade 12 vocational high school (except Thursday).',
              'as a participant companion to participate the "LKS 2019" (student skill competition) Web and Technology competition Riau Island Province level for school representative.',
          ],
      ],
      [
          'role' => 'ICT Teacher',
          'company_name' => 'Sekolah Kallista (Batam, Indonesia)',
          'start_period' => 'July 2019',
          'end_period' => 'December 2019',
          'descriptions' => [
              'Creating curriculum and teaching for grade 9 collaborated with PT. Multi Kreasi Sinergia (Ruang Kreasi) every Thursday.',
          ],
      ],
      [
          'role' => 'Internship IT Staff',
          'company_name' => 'PT. Multi Kreasi Sinergia (Batam, Indonesia)',
          'start_period' => 'July 2018',
          'end_period' => 'March 2019',
          'descriptions' => [
              'Manage the "Madebyme" makerspace to manage the workshop.',
              'Arrange and teaching coding for kids program as instructor.',
              'Explore and prototype the IoT.',
              'IT Support for several staffs.',
              'Help for organize and attend the event that collaborated with startups, communities, schools, colleges, and industries.',
          ],
      ],
  ];
@endphp

<div class="space-y-8 w-full md:w-1/2 px-4 md:h-[80vh] md:overflow-auto">
  @foreach ($jobs as $job)
    <div class="pl-4 relative border-l space-y-4 border-l-quatenary py-4">
      <div class="w-3 h-3 absolute top-0 left-0 -translate-x-1/2 rounded-full bg-quatenary"></div>
      <h3 class="font-medium tracking-wide">{{ $job['role'] }}</h3>
      <div class="text-quatenary/70 text-sm tracking-tight">{{ $job['company_name'] }} | {{ $job['start_period'] }}
        - {{ $job['end_period'] }}
      </div>
      <ul class="list-disc pl-4 text-quatenary/90 *:leading-5 tracking-wide space-y-4">
        @foreach ($job['descriptions'] as $desc)
          <li>{{ $desc }}</li>
        @endforeach
      </ul>
    </div>
  @endforeach
</div>
