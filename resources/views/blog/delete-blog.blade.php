<x-layoutadmin>
    <x-slot:title>Eliminar post</x-slot:title>
        <h1 class="my-3 text-danger text-center">¿Estás seguro que deseas eliminar?</h1>
        <p class="my-5 fs-5 text-center fw-bold">Estás por eliminar el siguiente post, y es necesario una confirmación.</p>

        <div class="row">
        <div class="col-12 col-md-6">
        <h2 class="my-3 mosta">{{ $blog->titulo }}</h2>
        <p class="mb-3 fw-bold">{{ $blog->subtitulo }}</p>
        <p class="mb-3">{{ $blog->texto }}</p>
        </div>
        <img src="{{ asset($blog->imagen) }}" alt="Imagen de {{ $blog->titulo }}" class="col-12 col-md-6 pb-3 img-fluid">
        <form
            action="{{ route('blog.delete.process', ['id' => $blog->id]) }}"
            method="POST"
            class="ms-2">
            </div>

            @csrf
            <button type="submit" class="my-4 btneliminar w-100">Confirmar Eliminación</button>
        </form>
</x-layoutadmin>