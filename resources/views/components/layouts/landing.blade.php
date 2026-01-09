<!DOCTYPE html>
<html lang="en">

{{-- Color reference: https://colorhunt.co/palette/222831393e46948979dfd0b8 --}}

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>{{ $title ?? config('app.name') }}</title>
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary text-quatenary">
  {{ $slot }}
</body>

</html>
