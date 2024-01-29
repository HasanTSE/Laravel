<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'MKT-INFO')</title>
    <!-- Bootstrap CSS -->
    @include('style')

  </head>

  <body>
   
     @include('header')
     @yield('content')
   

    <!-- JS Bundle with Popper -->
   @include('script')

  </body>
</html>