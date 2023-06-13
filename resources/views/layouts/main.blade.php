<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gacha Yu-Gi-Oh! | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”icon” href='/public/duel_links_icon.jpg'>
    <link rel="stylesheet" href="{{ mix('/resources/css/app.css') }}">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
  </head>
  <body>
    <div class ='container'>
      @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
  </body>
</html>
