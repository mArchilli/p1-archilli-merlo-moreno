<x-layout>

    <x-slot:title>Panel libros</x-slot:title>

    <h1>Panel de Administracion de libros</h1>
    
    @if($libroadm->isNotEmpty())
        <div class="mb-3">
            <a href="{{ route('libro.create.form') }}">Cargar un nuevo libro</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año de publicacion</th>
                    <th>ISBN</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($libroadm as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->anio_publicacion }}</td>
                    <td>{{ $libro->isbn }}</td>
                    <td>{{ $libro->descripcion }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('libro.edit.form', ['id' => $libro->id]) }}" class="ms-2 btn btn-secondary">Editar</a>
                            <a href="" class="ms-2 btn btn-danger">Eliminar</a>
        
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>No hay libros que mostrar actualmente. Podés empezar por <a href="">cargar un libro</a>.</p>
    @endif

    
</x-layout>