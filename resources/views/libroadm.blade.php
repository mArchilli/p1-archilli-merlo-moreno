<x-layoutadmin>

    <x-slot:title>Panel libros</x-slot:title>

    <div class="row align-items-center">
        <div class="col-10">
            <h2 class="mosta">Panel de Administracion de libros</h2>
        </div>
    </div>


    @if($libroadm->isNotEmpty())
        <div class="mb-4 d-flex justify-content-end">
            <a class="btnespecial" href="{{ route('libro.create.form') }}">Cargar un nuevo libro</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="bg-dark text-white">ID</th>
                    <th class="bg-dark text-white">Imagen</th>
                    <th class="bg-dark text-white">Título</th>
                    <th class="bg-dark text-white">Autor</th>
                    <th class="bg-dark text-white">Genero</th>
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
                    <td>
                        @forelse($libro->generos as $genero)
                            <span class="badge bg-secondary">{{ $genero->nombre }}</span>
                        @empty
                            <i>Sin géneros</i>
                        @endforelse
                    </td>
                    <td>{{ $libro->editorial->nombre }}</td>
                    <td>{{ $libro->anio_publicacion }}</td>
                    <td>{{ $libro->isbn }}</td>
                    <td>{{ Str::limit($libro->descripcion, 150) }}</td>
                    <td>
                        <div class="d-flex flex-column">
                            <a href="{{ route('libro.edit.form', ['id' => $libro->id]) }}" class="my-3 btneditar text-center">Editar</a>
                            <a href="{{ route('libro.delete.form', ['id' => $libro->id]) }}" class="my-3 btneliminar">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
            </table>
        </div>

        
    @else
        <p>No hay libros que mostrar actualmente. Podés empezar por <a href="{{ route('libro.create.form') }}">cargar un libro</a>.</p>
    @endif


</x-layoutadmin>
