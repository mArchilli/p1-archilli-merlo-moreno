<?php
/** @var \App\Models\Libro[]|\Illuminate\Database\Eloquent\Collection $libros */
?>
<x-layout>
    <x-slot:title>Catálogo</x-slot:title>

    <h2 class="fs-3 p-5 m-5 text-center mosta">Explorá los diferentes libros que tenemos para ofrecerte</h2>

    <div class="container">
        <div class="row">
            @foreach ($libro as $lib)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <!-- Suponiendo que cada libro tiene una imagen asociada en la base de datos -->
                                    <p><img class="img-fluid w-50" src="{{ $lib->imagen }}" alt="Imagen del libro"></p>
                                    <h4 class="card-title mosta">{{ $lib->titulo }}</h4>
                                    <p class="card-text">{{ $lib->autor }}</p>
                                    <p class="card-text">{{ $lib->editorial }}</p>
                                    <p class="card-text">{{ $lib->anio_publicacion }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title mosta">{{ $lib->titulo }}</h4>
                                    <p class="card-text">{{ $lib->descripcion }}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>