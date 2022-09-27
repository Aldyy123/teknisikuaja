<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teknisiku AJa</title>

  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- Intro.Js CDN CSS -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/intro.js/minified/intro.min.js">

  {{-- Vite Resource --}}
  @vite('resources/css/app.css')

</head>

<body>

  @include('partials.header')
    @yield('container')
  @include('partials.footer')

  {{-- Vite Javascript Resource --}}
  @vite('resources/js/app.js')

  {{-- Javascript Tailwind JS --}}
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

  <!-- Intro.JS Javascript CDN -->
  <script type="text/javascript" src="https://unpkg.com/intro.js/minified/introjs.min.css"></script>

  <script type="text/javascript">
    introJs().setOptions({
      steps: [{
        intro: "Hello world!"
      }, {
        element: document.querySelector('#login'),
        intro: "Click here to login!"
      }]
    }).start();
  </script>

</body>

</html>