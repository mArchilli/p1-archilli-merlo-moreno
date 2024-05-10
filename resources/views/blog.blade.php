<?php
/** @var \App\Models\Blog[]|\Illuminate\Database\Eloquent\Collection $blogs */
?>

<x-layout>

<x-slot:title>Blog</x-slot:title>

@foreach ($blog as $posteo)
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img class="img-fluid w-50" src="{{ $posteo->imagen }}" alt="Imagen del libro">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $posteo->titulo }}</h5>
        <p class="card-text">{{ $posteo->subtitulo }}</p>
        <p class="card-text">{{ $posteo->categoria }}</p>
        <p class="card-text">{{ $posteo->texto }}</p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>

<!-- otra opción: https://codepen.io/cristinaconacel/pen/dgmjKK -->
</x-layout>