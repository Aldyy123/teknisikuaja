<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teknisiku AJa</title>

  <!-- Vite Resource -->
  @vite('resources/css/app.css')

</head>

<body>


  @include('partials.header')
    @yield('container')
  @include('partials.footer')

  <!-- Vite Javascript Resource -->
  @vite('resources/js/app.js')

</body>

</html>