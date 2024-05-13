<x-layout>

    <x-slot:title>Panel libros</x-slot:title>

    <h1 class="mosta">Panel de Administracion de libros</h1>

    @if($libroadm->isNotEmpty())
        <div class="mb-4 d-flex justify-content-end">
            <a class="btnespecial" href="{{ route('libro.create.form') }}">Cargar un nuevo libro</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="bg-dark text-white">ID</th>
                    <th class="bg-dark text-white">Imagen</th>
                    <th class="bg-dark text-white">Título</th>
                    <th class="bg-dark text-white">Autor</th>
                    <th class="bg-dark text-white">Editorial</th>
                    <th class="bg-dark text-white">Año de publicacion</th>
                    <th class="bg-dark text-white">ISBN</th>
                    <th class="bg-dark text-white">Descripcion</th>
                    <th class="bg-dark text-white">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($libroadm as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td><img class="w-100" src="{{ $libro->imagen }}" alt="Imagen del posteo"></td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->anio_publicacion }}</td>
                    <td>{{ $libro->isbn }}</td>
                    <td>{{ Str::limit($libro->descripcion, 150) }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('libro.edit.form', ['id' => $libro->id]) }}" class="ms-2 btn btn-secondary">Editar</a>
                            <a href="{{ route('libro.delete.form', ['id' => $libro->id]) }}" class="ms-2 btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>No hay libros que mostrar actualmente. Podés empezar por <a href="{{ route('libro.create.form') }}">cargar un libro</a>.</p>
    @endif


</x-layout>
