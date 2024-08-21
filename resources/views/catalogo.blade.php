<?php
/** @var \App\Models\Libro[]|\Illuminate\Database\Eloquent\Collection $libros */
?>
<x-layout>
    <x-slot:title>Catálogo</x-slot:title>

    <div class="row justify-content-center align-items-center my-2">
        <div class="col-9 text-center">
            <h2 class="fs-3 p-5 text-center mosta" tabindex="0">Explora los diferentes libros que tenemos para ofrecerte</h2>
        </div>
        @auth
        <div class="col-3 d-flex justify-content-center">
            <a class="btn btn-primary" href="{{ route('libro.create.form') }}" tabindex="0">Cargar nuevo libro</a>
        </div>
        @endauth
    </div>

    <div class="row">
        @foreach ($libro as $lib)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="image-flip" ontouchstart="this.classList.toggle('hover');" tabindex="0">
                <div class="mainflip">
                    <div class="frontside" tabindex="0">
                        <div class="card cardLibros bg-dark text-white">
                            <div class="card-body text-center d-flex flex-column justify-content-between" tabindex="0">
                                <img class="img-fluid" src="{{ $lib->imagen }}" alt="Imagen del libro" tabindex="0">
                                <h3 class="mosta fs-4 pt-3 my-0" tabindex="0">{{ $lib->titulo }}</h3>
                                <p class="card-text my-0 py-0" tabindex="0">{{ $lib->autor }}</p>
                                <p class="card-text my-0 py-0" tabindex="0">{{ $lib->editorial->nombre }}</p>
                                <p class="card-text my-0 py-0" tabindex="0">{{ $lib->anio_publicacion }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="backside bg-dark" tabindex="0">
                        <div class="card card-body text-center bg-dark text-white h-catalogo justify-content-evenly">
                            <h3 class="mosta p-3" tabindex="0">{{ $lib->titulo }}</h3>
                            @forelse($lib->generos as $genero)
                                <span class="badge m-1" tabindex="0">{{ $genero->nombre }}</span>
                            @empty
                                <i>Sin géneros</i>
                            @endforelse
                            <p class="card-text p-3" tabindex="0">{{ Str::limit($lib->descripcion, 150) }}</p>
                            <a href="{{ route('catalogo.view.book', ['id' => $lib->id]) }}" class="btn btn-primary btn-sm" tabindex="0"><i class="fa fa-plus"> Más información</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-layout>
