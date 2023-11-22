<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
     <div>
            <!-- Barra de navegacion -->
        <header>
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/index/logo.png" class="logo" alt="">
                    </a>
                    <button class="navbar-toggler toggler-border-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list icon-navbar"></i>
                    </button>
                    <div class="collapse navbar-collapse align-content-end" id="navbarTogglerDemo02">
                        <!-- items del navbar-->
                        <ul class="navbar-nav me-10 mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Especialidades</a>
                        </li>
                        <li class="nav-item">
                            <a role="button" class="btn btn-pers btn-lg" href="login.blade.php">Iniciar sesion</a>
                        </li>
                        <li class="nav-item">
                            <a role="button" class="btn btn-pers green btn-lg" href="register.blade.php">Registrate</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
     </div>
</body>
</html>
