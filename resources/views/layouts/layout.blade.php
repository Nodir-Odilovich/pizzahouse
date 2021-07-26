<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <!-- CSS File main.css -->
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>


      <!-- Оператор -->
      @yield('content')


      <footer>
        <p>Copyright 2021 Pizza House</p>
      </footer>
      
    </body>
</html>