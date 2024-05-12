<?php
/** @var \App\Models\Libro[]|\Illuminate\Database\Eloquent\Collection $libros */
?>
<x-layout>
    <x-slot:title>Catálogo</x-slot:title>

    @auth
    <div class="mb-3">
        <a href="{{ route('libro.create.form') }}">Cargar nuevo libro</a>
    </div>
    @endauth

    <h2 class="fs-3 p-5 text-center mosta">Explorá los diferentes libros que tenemos para ofrecerte</h2>


        <div class="row">
            @foreach ($libro as $lib)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card cardLibros">
                                <div class="card-body text-center d-flex flex-column justify-content-between">
                                    <img class="img-fluid" src="{{ $lib->imagen }}" alt="Imagen del libro">
                                    <h4 class="card-title mosta pt-3 my-0">{{ $lib->titulo }}</h4>
                                    <p class="card-text my-0 py-0">{{ $lib->autor }}</p>
                                    <p class="card-text my-0 py-0">{{ $lib->editorial }}</p>
                                    <p class="card-text my-0 py-0">{{ $lib->anio_publicacion }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="card-title mosta">{{ $lib->titulo }}</h4>
                                    <p class="card-text">{{ $lib->descripcion }}</p>
                                    <a href="#" class="btnespecial btn-sm "><i class="fa fa-plus"> Más información</i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


</x-layout>
