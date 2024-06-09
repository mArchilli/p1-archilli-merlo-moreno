<x-layout>

    <x-slot:title>Libro {{ $libro->titulo }}</x-slot:title>

    <div class="row justify-content-center align-items-center my-2">
            <div class="col-1 text-center">
                <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
            </div>
            <div class="col-11">
                <h2 class="text-center pt-2 pb-4 mosta"> {{ $libro->titulo }}</h2>
            </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3 bg-dark">
                <div class="row g-0 flex-row">
                    <div class="col-12 col-xl-4">
                        <img class="img-fluid" src="{{ asset($libro->imagen) }}" alt="Imagen de {{ $libro->titulo }}">
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card-body text-white">
                            <h2 class="card-title pt-3">{{ $libro->titulo }}</h2>
                            @forelse($libro->generos as $genero)
                                <span class="badge bg-secondary card-text mb-2">{{ $genero->nombre }}</span>
                            @empty
                                <i>Sin géneros</i>
                            @endforelse
                            <p class="card-text p-2"><strong class="mosta">Autor:</strong> {{ $libro->autor }}</p>
                            <p class="card-text p-2"><strong class="mosta">Editorial:</strong> {{ $libro->editorial->nombre }}</p>
                            <p class="card-text p-2"><strong class="mosta">Año de publicacion:</strong> {{ $libro->anio_publicacion }}</p>
                            <p class="card-text p-2"><strong class="mosta">ISBN:</strong> {{ $libro->isbn }}</p>
                            <p class="card-text p-2"><strong class="mosta">Sinopsis:</strong> {{$libro->descripcion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
