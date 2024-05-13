@php
        $librosAleatorios = $libro->shuffle()->take(3);
@endphp

<x-layout>
    <x-slot:title>Home</x-slot:title>

    
        <div class="row py-lg-5 p-0">
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center py-5 py-lg-0">
                <h2 class="font-fantasy px-5 ps-lg-5">Un mundo de fantasía a un <span class="mostaza">click</span> de
                    distancia</h2>
            </div>
            <div class="col-12 col-lg-8 p-0">
    <div class="d-flex flex-md-row flex-column align-items-center flex-wrap justify-content-center ps-lg-5 gap-3">
        @foreach ($librosAleatorios as $lib)
            <div class="p-2">
                <img class="imgbanner" src="{{ $lib->imagen }}" alt="Imagen del libro">
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
            <h2 class="mosta p-1 text-center"> Entradas mas recientes</h2>
            <div class="row d-flex flex-wrap container mx-auto px-4 pt-0">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('blog') }}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="{{ asset('images/blog/card-potter.jpg') }}"
                                        alt="Imagen promocional de harry potter" />
                                </div>
                                <div class="text-container">
                                    <h6 class="mosta">Harry Potter - La Serie</h6>
                                    <p>Con la emblemática varita de Harry Potter lista para encantar una vez más,
                                        HBO Max se prepara para llevar a los espectadores a un viaje más allá...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('blog') }}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="{{ asset('images/blog/card-escritura.jpg') }}"
                                        alt="ilustración de una pared de un escritor" />
                                </div>
                                <div class="text-container">
                                    <h6 class="mosta">La buena escritura</h6>
                                    <p>Con la tinta como su herramienta de creación, los escritores poseen un poder
                                        extraordinario: el poder de cautivar, informar y transformar la
                                        percepción...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('blog') }}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="{{ asset('images/blog/card-got.jpg') }}"
                                        alt="Rey de la noche vs John snow" />
                                </div>

                                <div class="text-container">
                                    <h6 class="mosta">La próxima entrega de GOT</h6>
                                    <p>George R. R. Martin ha confirmado que continúa sumido en la escritura del
                                        próximo libro de la franquicia de Juego de Tronos. </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('blog') }}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="{{ asset('images/blog/card-dune.jpg') }}"
                                        alt="Ilustración en el desierto - Dune" />
                                </div>
                                <div class="text-container">
                                    <h6 class="mosta">Nueva Adaptación - DUNE</h6>
                                    <p>En un universo donde la imaginación es rey, esta nueva adaptación
                                        cinematográfica promete llevar a los espectadores a través de las dunas
                                        ardientes..</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row bglibros">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <h2 class="mosta pt-5 pb-1 text-center"> Recomendaciones del mes</h2>
                        <img class="col-lg-5 imgtamano px-5 m-auto"
                            src="{{ asset('images/home/naranja-recomendacion.png') }}"
                            alt="Libro la naranja mecanica portada">
                        <div class="col-lg-6 d-flex flex-column pb-5 pb-lg-0">
                            <h2 class="fs-2 pb-3 mosta ps-5 ps-lg-0">La naranja Mecánica</h2>
                            <p class="fs-4 text-light ps-5 ps-lg-0">Anthony Burgess</p>
                            <p class="text-light p-carrousel">Esta novela distópica explora la historia de Alex, un
                                joven
                                delincuente amante de la violencia
                                y la música clásica. En un futuro cercano, Alex es capturado por la policía y sometido a
                                un
                                tratamiento experimental de reeducación para corregir su comportamiento. La historia es
                                una
                                inquietante reflexión sobre la libertad de elección, el control estatal y la naturaleza
                                de la
                                maldad humana.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center bglibros">
                        <h2 class="mosta pt-5 pb-1 text-center"> Recomendaciones del mes</h2>
                        <img class="col-5 imgtamano px-5 m-auto"
                            src="{{ asset('images/home/brothers-recomendacion.png') }}"
                            alt="libro The sisters Brothers portada">
                        <div class="col-6 d-flex flex-column">
                            <h3 class="fs-2 pb-3 mosta">The Sisters Brothers</h3>
                            <p class="fs-4 text-light">Patrick deWitt</p>
                            <p class="text-light p-carrousel">"The Sisters Brothers" de Patrick deWitt es una novela del
                                género
                                western que sigue a Eli y
                                Charlie Sisters, dos hermanos y asesinos a sueldo en la California de 1851. Contratados
                                para
                                matar a un hombre llamado Hermann Kermit Warm, los hermanos emprenden un viaje que los
                                lleva
                                a cuestionar la moralidad de sus acciones y su propio destino. La narrativa combina
                                violencia,
                                humor negro y una profunda exploración de la fraternidad y la redención.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center bglibros">
                        <h2 class="mosta pt-5 pb-1 text-center"> Recomendaciones del mes</h2>
                        <img class="col-5 imgtamano px-5 m-auto"
                            src="{{ asset('images/home/teaspoon-recomendacion.png') }}"
                            alt="libro A Teaspoon of earth sea portada">
                        <div class="col-6 d-flex flex-column">
                            <h3 class="fs-2 pb-3 mosta">A teaspoon of earth sea</h3>
                            <p class="fs-4 text-light">Dina Nayeri</p>
                            <p class="text-light p-carrousel">cuenta la historia de Saba Hafezi, una joven iraní que
                                imagina
                                que
                                su hermana gemela desaparecida está
                                viviendo una vida libre en Estados Unidos. Mientras Saba enfrenta las restricciones de
                                su vida en Irán
                                tras la Revolución Islámica, se aferra a la fantasía de la vida de su hermana en
                                América, explorando temas
                                de identidad y pertenencia en un mundo dividido entre realidad y deseo.
                            </p>
                        </div>
                    </div>
                </div>
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
