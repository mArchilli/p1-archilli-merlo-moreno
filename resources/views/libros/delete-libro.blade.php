<x-layoutadmin>
    <x-slot:title>Eliminar libro</x-slot:title>
    <div class="row justify-content-center align-items-center my-2">
            <div class="col-2 text-center">
                <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
            </div>
            <div class="col-10">
                <h1 class="my-3 text-danger text-center">¿Estás seguro que deseas eliminar?</h1>
            </div>
    </div>
    
    <p class="my-5 fs-5 text-center fw-bold">Estás por eliminar el siguiente libro, y es necesario una confirmación.</p>

    <div class="row">
    <img src="{{ asset($libro->imagen) }}" alt="Imagen de {{ $libro->titulo }}" class="col-12 col-md-4 pb-3 img-fluid">    
    <div class="col-12 col-md-8 px-2 pt-5">
        <h2 class="my-3 mosta">{{ $libro->titulo }}</h2>
        <p class="mb-3 fw-bold">{{ $libro->autor }}</p>
        <p class="mb-3">{{ $libro->descripcion }}</p>
        </div>
        <form
            action="{{ route('libro.delete.process', ['id' => $libro->id]) }}"
            method="POST"
            class="ms-2">
            </div>
            @csrf
            <button type="submit" class="my-4 btneliminar w-100">Confirmar Eliminación</button>
        </form>
</x-layoutadmin>