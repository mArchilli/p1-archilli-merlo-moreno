<?php
/** @var \App\Models\Blog[]|\Illuminate\Database\Eloquent\Collection $blogs */
?>

<x-layout>

    <x-slot:title>Post {{$blog->titulo }}</x-slot:title>

    <h1 class="text-center pb-3">{{$blog->titulo }}</h1>

    <div class="row ">
        <div class="col-12">
            <div class="card mb-3">
                <div class="row g-0 flex-row">
                    <div class="col-12 col-xl-6">
                        <img class="img-fluid" src="{{asset($blog->imagen)}}" alt="Imagen del libro">
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->titulo }}</h5>
                            <p class="card-text">{{ $blog->subtitulo }}</p>
                            <p class="card-text">{{ $blog->categoria }}</p>
                            <p class="card-text">{{$blog->texto}}</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated a few mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- otra opción: https://codepen.io/cristinaconacel/pen/dgmjKK -->
</x-layout>
