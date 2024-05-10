<x-layout>
    <x-slot:title>Eliminar post</x-slot:title>
    <div class="container pt-5">
        <h1 class="mb-3">Confirmación para Eliminar "{{ $blog->titulo }}"</h1>
        <p class="mb-3">Estás por eliminar el siguiente post, y es necesario una confirmación.</p>
        <hr class="mb-3">
        <h2 class="mb-3">{{ $blog->titulo }}</h2>
        <h3 class="mb-3">{{ $blog->subtitulo }}</h3>
        <img src="{{$blog->imagen}}" alt="Imagen de {{$blog->titulo}}">
        <form
            action=""
            method="POST"
            class="ms-2"
        >
            @csrf
            <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
        </form>
    </div>
</x-layout>