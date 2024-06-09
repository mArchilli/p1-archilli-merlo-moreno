<?php
/** @var \App\Models\Blog[]|\Illuminate\Database\Eloquent\Collection $blogs */
?>


<x-layout>
    
    <x-slot:title>Blog</x-slot:title>

    <div class="row justify-content-center align-items-center my-2">
            <div class="col-9 text-center align-items-center justify-content-center">
                <h2 class="mosta text-center py-5">Blog de noticias</h2>
            </div>
            @auth
            <div class="col-3 d-flex justify-content-center">
                <a class="btnespecial" href="{{ route('blog.create.form') }}">Realizar un nuevo Posteo</a>
            </div>
            @endauth
    </div>

    

    {{-- Prueba de auth --}}
    

    <div class="row ">
        @foreach ($blog as $posteo)
        <div class="col-12 col-md-6">
            <div class="card mb-3 cards-blog justify-content-between">
                <div class="row g-0 flex-column ">
                    <div class="col-12">
                        <img class="img-fluid" src="{{ $posteo->imagen }}" alt="Imagen del libro">
                    </div>
                    <div class="col-12">
                        <div class="card-body bg-dark text-white">
                            <h2 class="mosta fs-4">{{ $posteo->titulo }}</h2>
                            <p class="card-text">{{ $posteo->subtitulo }}</p>
                            <p class="card-text">{{ $posteo->categoria }}</p>
                            <p class="card-text">{{ Str::limit($posteo->texto, 150) }}</p>
                            <div class="card-text my-4 d-flex justify-content-end">
                                <a href="{{ route('blog.view.post', ['id' => $posteo->id])}}" class="btnespecial btn-sm"><i class="fa fa-plus">Ver mas</i> </a>
                            </div>
                            <p class="card-text d-flex justify-content-end">
                            <small class="text-white">{{ $posteo->obtenerFechaFormateada() }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
