<?php
/** @var \App\Models\Blog[]|\Illuminate\Database\Eloquent\Collection $blogs */
?>

<x-layout>

    <x-slot:title>Blog</x-slot:title>

    <h1 class="mosta text-center py-5">Blog de noticias</h1>

    {{-- Prueba de auth --}}
    @auth
    <div class="my-4 d-flex justify-content-center">
        <a class="btnespecial" href="{{ route('blog.create.form') }}">Realizar un nuevo Posteo</a>
    </div>
    @endauth
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
                            <h5 class="mosta fs-4">{{ $posteo->titulo }}</h5>
                            <p class="card-text">{{ $posteo->subtitulo }}</p>
                            <p class="card-text">{{ $posteo->categoria }}</p>
                            <p class="card-text">{{ Str::limit($posteo->texto, 150) }}</p>
                            <div class="card-text my-4 d-flex justify-content-end">
                                <a href="{{ route('blog.view.post', ['id' => $posteo->id])}}" class="btnespecial btn-sm"><i class="fa fa-plus">Ver mas</i> </a>
                            </div>
                            <p class="card-text d-flex justify-content-end">
                            <small class="text-white">{{ $posteo->created_at }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <!-- otra opción: https://codepen.io/cristinaconacel/pen/dgmjKK -->
</x-layout>
