@php
        $librosAleatorios = $libro->shuffle()->take(3);
@endphp

<x-layout>
    <x-slot:title>Home</x-slot:title>

    
        <div class="row py-lg-5 p-0">
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center py-5 py-lg-0">
                <h2 class="fs-1 font-fantasy pl-5 pr-4 ps-lg-5">Un mundo de fantasía a un <span class="mostaza">click</span> de
                    distancia</h2>
            </div>
            <div class="col-12 col-lg-8 p-0">
    <div class="d-flex flex-md-row flex-column align-items-center flex-wrap justify-content-center ps-lg-5 gap-3">
        @foreach ($librosAleatorios as $lib)
            <div class="p-2">
                <img class="imgbanner" src="{{ $lib->imagen }}" alt="Imagen del libro: {{ $lib->titulo }}">
            </div>
        @endforeach
    </div>
</div>

        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <img class="" src="{{ asset('images/home/libros.png') }}" alt="libros y café">
            </div>
            <div class="col-12 col-md-6 text-center pe-lg-5 px-5">
                <h2 class="pb-4 mosta fs-1">LibraLink</h2>
                <p class="fs-5">Sumérgete en Libralink, donde cada libro es un portal a mundos
                    inexplorados. Descubre océanos misteriosos, ciudades flotantes y emociones puras. Cada página te
                    transporta
                    a una nueva aventura, haciendo de la lectura una experiencia viva. Descubre, vive y transforma tu
                    percepción
                    del universo con cada historia.
                </p>
            </div>
        </div>


    


        <div id="cards_landscape_wrap-2" class="row mt-5">
    <div class="container">
        <h2 class="mosta p-2 text-center"> Entradas más recientes </h2>
        <div class="row d-flex flex-wrap container mx-auto px-4 pt-0">
            @foreach ($blog as $posteo)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="{{ route('blog') }}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img class="img-fluid" src="{{ $posteo->imagen }}" alt="Imagen del libro: {{ $posteo->titulo }}">
                            </div>
                            <div class="text-container">
                                <h6 class="mosta"> {{ Str::limit($posteo->titulo, 40) }} </h6>
                                <p> {{ Str::limit($posteo->texto, 125) }} </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="row bglibros justify-content-center align-items-center">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            @foreach ($librosRecomendados as $key => $reco)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <h2 class="mosta pt-5 pb-1 text-center"> Recomendaciones del mes</h2>
                        <img class="col-5 imgtamano px-5 my-5 mx-auto" src="{{ asset($reco->imagen) }}"
                            alt="Imagen del libro: {{ $reco->titulo }}">
                        <div class="col-6 d-flex flex-column">
                            <h3 class="fs-2 pb-3 mosta">{{ $reco->titulo }}</h3>
                            <p class="fs-4 text-light">{{ $reco->autor }}</p>
                            <p class="text-light p-carrousel">{{ $reco->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


    <div class="pricing-header pt-5 mx-auto text-center">
        <h1 class="display-4 p-4 mostaza">Elegí tu suscripción</h1>
    </div>

    <div class="container">
        <div class="row card-deck mb-3 text-center d-flex justify-content-center gap-5 px-4 py-5">
            <div class="card bgsuscripcion col-12 col-lg-3 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 fs-3 font-weight-normal mosta">Gratis</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mes</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="p-3 fw-bold">Lectura online</li>
                        <li class="p-3 fw-bold">Acceso a 50 libros rotativos por mes</li>
                        <li class="p-3 fw-bold">Resúmenes y capítulos iniciales</li>
                        <li class="p-3 fw-bold">Acceso al centro de ayuda e información</li>
                    </ul>
                    <a class="btnespecial" href="{{ route('auth.login.form') }}">Suscribíte</a>
                </div>
            </div>
            <div class="card bgsuscripcion col-12 col-lg-3 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 fs-3 font-weight-normal mosta">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$9 <small class="text-muted">/ mes</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="p-3 fw-bold">Sin anuncios</li>
                        <li class="p-3 fw-bold">Acceso ilimitado a 10,000+ libros</li>
                        <li class="p-3 fw-bold">Descargas ilimitadas de todos nuestros libros</li>
                        <li class="p-3 fw-bold">Acceso exclusivo al blog de noticias y críticas</li>
                    </ul>
                    <a class="btnespecial" href="{{ route('auth.login.form') }}">Empieza Ahora</a>
                </div>
            </div>
            <div class="card bgsuscripcion col-12 col-lg-3 box-shadow ">
                <div class="card-header">
                    <h4 class="my-0 fs-3 font-weight-normal mosta">Premium</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$18 <small class="text-muted">/ mes</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="p-3 fw-bold"> Beneficios Pro incluidos</li>
                        <li class="p-3 fw-bold"> Publicá tus propios libros en la plataforma</li>
                        <li class="p-3 fw-bold"> Postea en nuestro blog exclusivo para miembros VIP</li>
                        <li class="p-3 fw-bold"> Acceso anticipado a lanzamientos</li>
                    </ul>
                    <a class="btnespecial" href="{{ route('about') }}">Contactanos</a>
                </div>
            </div>
        </div>

    </div>
</x-layout>
