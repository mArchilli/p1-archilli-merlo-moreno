<x-layoutadmin>

    <x-slot:title>Panel Usuarios</x-slot:title>

    <div class="row align-items-center">
        <div class="col-10">
            <h2 class="mosta">Panel de Administracion de usuarios</h2>
        </div>
    </div>


    @if($usersadm->isNotEmpty())
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="bg-dark text-white">ID</th>
                    <th class="bg-dark text-white">Nombre</th>
                    <th class="bg-dark text-white">Apellido</th>
                    <th class="bg-dark text-white">Correo</th>
                    <th class="bg-dark text-white">Suscripcion</th>
                    <th class="bg-dark text-white">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($usersadm as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <div class="d-flex flex-column">
                            <a href="{{ route('user.edit.form', ['id' => $user->id]) }}" class="my-3 btneditar text-center">Editar</a>
                            <a href="{{ route('user.delete.form', ['id' => $user->id]) }}" class="my-3 btneliminar">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
            </table>
        </div>

        
    @else
        <p>No hay libros que mostrar actualmente.</p>
    @endif


</x-layoutadmin>
