<x-layoutadmin>
    <x-slot:title>Eliminar post</x-slot:title>
        <h1 class="mb-3">Confirmación para Eliminar "{{ $blog->titulo }}"</h1>
        <p class="mb-3">Estás por eliminar el siguiente post, y es necesario una confirmación.</p>
        <hr class="mb-3">
        <h2 class="mb-3">{{ $blog->titulo }}</h2>
        <p class="mb-3">{{ $blog->subtitulo }}</p>
        <img src="{{ asset($blog->imagen) }}" alt="Imagen de {{ $blog->titulo }}" class="pb-3 img-fluid">
        <form
            action="{{ route('blog.delete.process', ['id' => $blog->id]) }}"
            method="POST"
            class="ms-2"
        >
            @csrf
            <button type="submit" class="btneliminar w-100">Confirmar Eliminación</button>
        </form>
</x-layoutadmin>