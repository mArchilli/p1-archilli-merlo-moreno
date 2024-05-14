<x-layoutadmin>
    <x-slot:title>Eliminar libro</x-slot:title>
        <h1 class="mb-3">Confirmación para Eliminar "{{ $libro->titulo }}"</h1>
        <p class="mb-3">Estás por eliminar el siguiente libro, y es necesario una confirmación.</p>
        <hr class="mb-3">
        <h2 class="mb-3">{{ $libro->titulo }}</h2>
        <h3 class="mb-3">{{ $libro->autor }}</h3>
        <img src="{{asset($libro->imagen)}}" alt="Imagen de {{$libro->titulo}}" class="pb-3 img-fluid">
        <form
            action="{{ route('libro.delete.process', ['id' => $libro->id]) }}"
            method="POST"
            class="ms-2"
        >
            @csrf
            <button type="submit" class="btn btn-danger w-100">Confirmar Eliminación</button>
        </form>
</x-layoutadmin>