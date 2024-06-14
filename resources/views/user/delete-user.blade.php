<x-layoutadmin>
    <x-slot:title>Eliminar Usuario</x-slot:title>
    <div class="row justify-content-center align-items-center my-2">
        <div class="col-2 text-center">
            <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
        </div>
        <div class="col-10">
            <h2 class="my-3 text-danger text-center">¿Estás seguro que deseas eliminar?</h2>
        </div>
    </div>
    
    <p class=" fs-5 text-center fw-bold">Estás por eliminar el siguiente usuario, y es necesario una confirmación.</p>

    <div class="row">
        <div class="col-12 col-md-8 px-2 pt-2">
            <h2 class="my-3 mosta">{{ $user->name }} {{ $user->lastName }}</h2>
            <p class="mb-3 fw-bold">{{ $user->email }}</p>
            <p class="mb-3">Rol: {{ $user->role }}</p>
        </div>
        <form
            action="{{ route('user.delete.process', ['id' => $user->id]) }}"
            method="POST"
            class="ms-2">
            @csrf
            <button type="submit" class="my-4 btneliminar w-100">Confirmar Eliminación</button>
        </form>
    </div>
</x-layoutadmin>
