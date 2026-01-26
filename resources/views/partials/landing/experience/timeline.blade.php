@php
  $jobs = [
      [
          'role' => 'Full Stack Developer',
          'company_name' => 'International Centre of Industrial Transformation (Hybrid in Batam, Indonesia)',
          'start_period' => 'November 2024',
          'end_period' => 'Present',
          'descriptions' => [
              'Designed and implemented backend APIs using NestJS based on business and product requirements.',
              'Led the integration of payment and invoicing systems using Stripe, Google Pay, Apple Pay, and Xero to support end-to-end billing workflows.',
              'Integrated cloud storage services (AWS S3 and GCP Storage) for secure and scalable file management.',
              'Collaborated asynchronously with cross-functional teams to improve system reliability, scalability, and smooth feature delivery.',
          ],
      ],
      [
          'role' => 'Front End Developer',
          'company_name' => 'International Centre of Industrial Transformation (Hybrid in Batam, Indonesia)',
          'start_period' => 'November 2022',
          'end_period' => 'November 2024',
          'descriptions' => [
              'Implemented responsive and user-friendly UI based on design specifications and user feedback.',
              'Collaborated closely with backend engineers to integrate APIs and ensure consistent data flow between frontend and backend systems.',
          ],
      ],
      [
          'role' => 'Software Engineer',
          'company_name' => 'PT. Tigernix Solutions Indonesia (Batam, Indonesia)',
          'start_period' => 'February 2020',
          'end_period' => 'August 2022',
          'descriptions' => [
              'Developed and extended core features (Inventory, Students, Session, Admission, etc.) in an ERP system used in production environments.',
              'Prepared and executed data migration processes prior to production deployment.',
              'Set up deployment infrastructure on AWS EC2 and implemented automated database and file backups using cron jobs and shell scripts.',
              'Took responsibility for system stability and operational readiness in live environments.',
          ],
      ],
      [
          'role' => 'Substitute Teacher',
          'company_name' => 'SMK Multistudi High School (Batam, Indonesia)',
          'start_period' => 'August 2019',
          'end_period' => 'December 2019',
          'descriptions' => [
              'Delivered teaching materials and assessments for Web and Mobile Development subjects, focusing on programming fundamentals and practical skills.',
          ],
      ],
      [
          'role' => 'Internship IT Staff',
          'company_name' => 'PT. Multi Kreasi Sinergia (Batam, Indonesia)',
          'start_period' => 'July 2018',
          'end_period' => 'March 2019',
          'descriptions' => [
              'Assisted in operating a makerspace and conducting technical workshops, developing hands-on problem-solving and ownership skills.',
              'Taught basic programming in a Coding for Kids program, strengthening communication and concept simplification abilities.',
              'Built early robotics and IoT prototypes, gaining exposure to system thinking and iterative prototyping.',
          ],
      ],
  ];
@endphp

<div class="space-y-8 w-full md:w-1/2 px-4 pb-16 h-auto md:h-[80vh] md:overflow-auto mt-8 md:mt-auto">
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
