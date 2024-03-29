<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Favicon icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-color: #000; ">
    <div id="app">
        <nav class="navbar navbar-expand-md d-flex justify-content-around align-content-center" style="border-bottom: 1px solid #b3b3b329; background: transparent; margin-bottom: 50px;">
            <div class="d-flex justify-content-between align-items-center" style="flex-direction: column">
                <a class="navbar-brand fs-2 m-2 text-lg-center text-light" href="{{ url('/solarmap/home') }}">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="/img/icon.png" alt="icon" style="width: 100px; height: 100px; border: 1px solid #b3b3b329; margin-right: 10px;">
                        <p  style="font-size: 3em" >Solar<span style="color: #E85F5C">Map</span></p>
                    </div>
                </a>

                <div>
                    <!-- Navbar contents -->
                    <ul class="navbar-nav ms-auto nav-justify-content-center">
                        <a href="{{ url('solarmap/home') }}" class="m-2 text-light fs-5"><li>Home</li></a>
                        <a href="{{ url('solarmap/planets') }}" class="m-2 text-light fs-5"><li>Planets</li></a>
                        <a href="{{ url('solarmap/about') }}" class="m-2 text-light fs-5" ><li>About</li></a>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="card footer p-5 text-light" style="background: transparent; border-top: 1px solid #b3b3b329; margin-top: 200px;">
            <div class="container d-flex justify-content-between align-content-center mt-5">
                <div class="col-4" style="width: 200px; height:200px;">
                    <img src="/img/logo.jpeg" alt="company logo" class="img-fluid">
                </div>
                <div class="col-6 border-border-dark" style="text-align: center;">
                    <h2 style="font-size: 5em;">Solar Map</h2>
                    <p>The solar system in your palm...</p>
                </div>
                <div class="col-2">
                    <div class="row">
                        <ul class="navbar-nav ms-auto nav-justify-content-center">
                            <a href="{{ url('solarmap/home') }}" class="mb-2 text-light"><li>Home</li></a>
                            <a href="{{ url('solarmap/planets') }}" class="mb-2 text-light"><li>Planets</li></a>
                            <a href="{{ url('solarmap/about') }}" class="mb-2 text-light"><li>About</li></a>
                        </ul>
                        <p class="p-0 mt-4">Made by Kevin</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
