<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }} :: DV Libros</title>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

      
    </head>
    <body>
        <div id="app">

        <div class="fixed">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('index') }}">LibraLink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('catalogo') }}">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}">Sobre Nosotros</a>
                    </li>
                </ul>
                <button class="btnespecial" type="submit">Ingresar</button>
            </div>
        </div>
    </nav>
</div>

            <main class="container p-4">
                <h1 class="d-none">Bienvenido a LibraLink</h1>

                {{ $slot }}
            </main>

            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="text-center">Archilli - Merlo - Moreno - Copyright &copy; 2024</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="text-center">Redes</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="text-center">Ubicacion</p>
                    </div>
                </div>
                
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
