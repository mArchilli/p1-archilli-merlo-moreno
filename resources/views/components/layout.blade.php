<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }} :: DV Libros</title>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    </head>
    <body>
        <div id="app">

            <nav class="">
                <div class="">
                    <a class="" href="{{ route('index') }}">DV Libros</a>
                    <button class="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""></span>
                    </button>
                    <div class="" id="">
                        <ul class="">
                            <li class="">
                                <a class="" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="">
                                <a class="" href="{{ route('about') }}">Sobre nosotros!</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="container p-4">
                {{ $slot }}
            </main>
            <footer class="footer">
                <p>Archilli - Merlo - Moreno - Copyright &copy; 2024</p>
            </footer>
        </div>
    </body>
</html>
