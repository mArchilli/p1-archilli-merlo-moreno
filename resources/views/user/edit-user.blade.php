/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<x-layoutadmin>
    <x-slot:title>Editar Usuario</x-slot:title>

    <div class="row justify-content-center align-items-center my-2">
        <div class="col-1 text-center">
            <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
        </div>
        <div class="col-11">
            <h2 class="mosta px-2">Editar Usuario</h2>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentar.</div>
    @endif

    <form action="{{ route('user.edit.process', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label fw-bold">Apellido</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" value="{{ $user->lastName }}">
                    @error('lastName')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Correo</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rol" class="form-label fw-bold">Rol</label>
                    <select id="rol" name="role" class="form-control">
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <button type="submit" class="btneditar w-100 py-2">Actualizar</button>
    </form>
</x-layoutadmin>
