<?php
/** @var \App\Models\Libro[]|\Illuminate\Database\Eloquent\Collection $libros */
?>
<x-layout>
    <x-slot:title>Catálogo</x-slot:title>

    <div class="row justify-content-center align-items-center my-2">
            <div class="col-12 text-center align-items-center justify-content-center">
                <h2 class="fs-3 p-5 text-center mosta">Explorá los diferentes libros que tenemos para ofrecerte</h2>
            </div>   
    </div>

    <div class="row">
        @foreach ($libro as $lib)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card cardLibros bg-dark text-white h-100">
                <img class="card-img-top img-fluid" src="{{ $lib->imagen }}" alt="Imagen del libro">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="mosta fs-4 pt-2 mb-1">{{ $lib->titulo }}</h3>
                        <p class="card-text mb-0">{{ $lib->autor }}</p>
                        <p class="card-text mb-0">{{ $lib->editorial->nombre }}</p>
                        <p class="card-text mb-2">{{ $lib->anio_publicacion }}</p>
                        <div class="mb-2">
                            @forelse($lib->generos as $genero)
                                <span class="badge m-1">{{ $genero->nombre }}</span>
                            @empty
                                <i>Sin géneros</i>
                            @endforelse
                        </div>
                        <p class="card-text">{{ Str::limit($lib->descripcion, 150) }}</p>
                    </div>
                    <a href="{{ route('catalogo.view.book', ['id' => $lib->id]) }}" class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus"> Más información</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-layout>
