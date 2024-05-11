<?php
/** @var \App\Models\Blog[]|\Illuminate\Database\Eloquent\Collection $blogs */
?>

<x-layout>

<x-slot:title>Blog</x-slot:title>
<div class="row ">
  @foreach ($blog as $posteo)
  <div class="col-12 col-md-6">
    <div class="card mb-3 cards-blog justify-content-between">
      <div class="row g-0 flex-column ">
        <div class="col-12">
        <img class="img-fluid" src="{{ $posteo->imagen }}" alt="Imagen del libro">
        </div>
        <div class="col-12">
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
    </div>
  </div>
  @endforeach
</div>


<!-- otra opción: https://codepen.io/cristinaconacel/pen/dgmjKK -->
</x-layout>