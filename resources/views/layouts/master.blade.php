
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel Ecommerce Projec</title>
        @include('partials.styles')
    </head>

    <body>

  <div class="wrapper">

     {{-- Navigation --}}

      @include('partials.nav')
      @yield('content')
      @include('partials.footer')

  </div>

   @include('partials.scripts')
    </body>
</html>