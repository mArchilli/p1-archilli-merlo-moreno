<x-layout>

    <x-slot:title>Libro {{$libro->titulo }}</x-slot:title>

    <h1 class="text-center pb-3">Libro {{$libro->titulo }}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="row g-0 flex-row">
                    <div class="col-12 col-xl-6">
                        <img class="img-fluid" src="{{asset($libro->imagen)}}" alt="Imagen de {{ $libro->titulo }}">
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $libro->titulo }}</h5>
                            <p class="card-text"><strong>Autor:</strong> {{ $libro->autor }}</p>
                            <p class="card-text"><strong>Editorial:</strong> {{ $libro->editorial }}</p>
                            <p class="card-text"><strong>Año de publicacion:</strong> {{ $libro->anio_publicacion }}</p>
                            <p class="card-text"><strong>ISBN:</strong> {{ $libro->isbn }}</p>
                            <p class="card-text"><strong>Reseña:</strong>{{$libro->descripcion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
