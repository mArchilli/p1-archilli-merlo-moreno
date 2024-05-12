<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} :: DV Libros</title>

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


</head>

<body>
    <div id="app">
        <div class="fixed">
            <nav class="navbar navbar-expand-lg bg-dark fixed-top px-3 py-3" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="{{ route('index') }}">
                        <h1 class="fs-5 mb-0">LibraLink</h1>
                    </a>
                    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-4 py-lg-0" id="navbarSupportedContent">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-3">
                            <li class="nav-item">
                                <a class="nav-link text-white px-lg-3 py-lg-2" aria-current="page"
                                    href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link text-white px-lg-3 py-lg-2 " aria-current="page"
                                    href="{{ route('catalogo') }}">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white px-lg-3 py-lg-2" aria-current="page"
                                    href="{{ route('blog') }}">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white px-lg-3 py-lg-2" aria-current="page"
                                    href="{{ route('about') }}">Sobre Nosotros</a>
                            </li>

                            @guest
                            <li class="nav-item ">
                                <div class="nav-link">
                                    <a class="btnespecial  " href="{{ route('auth.login.form') }}">Iniciar Sesión</a>
                                </div>
                                
                            </li>
                            @else
                            <li class="nav-item">
                                <form action="{{ route('auth.logout.process') }}" method="POST">
                                    @csrf
                                    {{-- auth()->user() retorna el modelo de Eloquent del usuario. --}}
                                    <button class="nav-link">{{ auth()->user()->email }} (Cerrar Sesión)</button>
                                </form>
                            </li>
                            {{-- @endif --}}
                            @endguest
                        </ul>
                        {{-- <a href="{{ route('auth.login.form') }}" class="btnespecial">Ingresar</a> --}}
                    </div>
                </div>
            </nav>
        </div>

        <main class="">

            @if(session()->has('feedback.message'))

            <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">{!!
                session()->get('feedback.message') !!}</div>
            @endif

            <div class="container  pt-5">
                {{ $slot }}
            </div>
        </main>

        <footer class="footer border-top pt-5 pt-lg-0 fw-bold ">
            <div class="row m-0 py-4 py-lg-0">
                <div class="col-12 col-lg-4">
                    <p class="text-center">Archilli - Merlo - Moreno</p>
                </div>

                <div class="col-12 col-lg-4">
                    <p class="text-center">LibraLink &copy; 2024</p>
                </div>

                <div class="col-12 col-lg-4 text-center d-flex gap-2 justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                        <path
                            d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z" />
                    </svg>

                </div>

            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
