<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2/css/all.min.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/iconn.png') }}">
  <title>ABC Company @yield('title')</title>
  {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-sk0mS2Z4.css') }}" /> --}}
  @vite('resources/css/app.css')
</head>
<body class="">

      @yield('modal')
      
      @include('partials.header')

      <div class="w-[200px] h-full absolute hidden md:block">
        <div class="ms-3">
            @include('partials.navs')
        </div>
      </div>

      <div class="flex items-center gap-5 mt-10">
        <div class="w-full h-full ml-0 md:ml-44">
            @yield('content')
        </div>
      </div>

      <script src="{{ asset('js/jquery-3.7.0.js') }}"></script>
      <script src="{{ asset('js/datatables-1.13.6.min.js') }}"></script>
      <script src="{{ asset('js/datatables.tailwindcss.min.js') }}"></script>
      <script src="{{ asset('js/tailwind.min.js') }}"></script>
      <script>	
        new DataTable('#data-table');
        new DataTable('#data-table-2');
      </script>

      @yield('js')

</body>
</html>