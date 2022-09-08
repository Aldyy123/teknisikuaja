<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teknisiku | Solusi Kerusakan Elektronik</title>

  <!-- Vite REsource -->
  @vite('resources/css/app.css')

</head>

<body>


  @include('partials.header')
  @yield('container')
  @include('partials.footer')

  <!-- Tailwind CSS Javascript Vendor -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>

</html>