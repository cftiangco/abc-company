<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/iconn.png') }}">
  <title>ABC Company @yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
      <div class="h-screen">
        <div class="h-screen">
          @yield('content')
        </div>
      </div>
</body>
</html>