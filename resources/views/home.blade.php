<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>

      {{-- FLASH DATA per alert corretto inserimento comics --}}
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
      @endif

      @yield('content')
      @yield('singleComic')
      @yield('createComic')
      @yield('editComic')

  </body>

</html>