<?php
/** @var \App\Models\Blog[]|\Illuminate\Database\Eloquent\Collection $blogs */
?>

<x-layout>

    <x-slot:title>Post: {{ $blog->titulo }}</x-slot:title>

    <h1 class="text-center pb-3 mosta">{{ $blog->titulo }}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="row g-0 flex-row">
                    <div class="col-12 col-xl-6">
                        <img class="img-fluid" src="{{asset($blog->imagen)}}" alt="Imagen de {{ $blog->titulo }}">
                    </div>
                    <div class="col-12 col-xl-6  bg-dark text-white">
                        <div class="card-body">
                            <h2 class="mosta fs-5 py-3">{{ $blog->titulo }}</h2>
                            <p class="card-text">{{ $blog->subtitulo }}</p>
                            <p class="card-text">{{ $blog->categoria }}</p>
                            <p class="card-text">{{$blog->texto}}</p>
                            <p class="card-text">
                                <small class="d-flex justify-content-end py-2">{{ $blog->created_at }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
