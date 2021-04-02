<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Donuts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

     <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="antialiased">
      <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="../images/123.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img src="images/uk.png" class="rounded-sm" style="width: 15px">
                                English
                                @break
                                @case('ru')
                                <img src="images/ru.png" class="rounded-sm" style="width: 15px">
                                Russian
                                @break
                                @case('uz')
                                <img src="images/uzb.png" class="rounded-sm" style="width: 15px">
                                Uzbek
                                @break
                                @default
                                 <img src="images/uk.png" class="rounded-sm" style="width: 15px">
                               English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/en"><img src="images/uk.png" class="rounded-sm" style="width: 15px"> English</a>
                            <a class="dropdown-item" href="lang/ru"><img src="images/ru.png" class="rounded-sm" style="width: 15px"> Russian</a>
                            <a class="dropdown-item" href="lang/uz"><img src="images/uzb.png" class="rounded-sm" style="width: 15px"> Uzbek</a>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <main class="py-4">
      @yield('content')
      <footer>
          Copyright 2021 Donut House
      </footer>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>

