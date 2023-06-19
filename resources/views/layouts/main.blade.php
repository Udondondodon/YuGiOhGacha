<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gacha Yu-Gi-Oh! | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/x-icon" href='/duel_links_icon.png'>
    {{-- <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class ='container'>
      @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
  </body>
</html>
