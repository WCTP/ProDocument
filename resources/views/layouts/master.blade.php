<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProDocument</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Styles -->
        <link href="{{ asset('/css/layouts.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/auth.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

      @include('layouts.sidenav')

      <div class="main">
        <p>
          @yield('content')
        </p>
      </div>

    </body>
</html>
