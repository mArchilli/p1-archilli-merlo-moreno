<x-layout>

    <x-slot:title>Panel Blog</x-slot:title>

    <h1>Panel de Administracion de Blog</h1>
    
    @if($blogadm->isNotEmpty())
        <div class="mb-3">
            <a href="{{ route('blog.create.form') }}">Realizar un nuevo Posteo</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Subtitulo</th>
                    <th>Categoria</th>
                    <th>Autor</th>
                    <th>Texto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($blogadm as $posteo)
                <tr>
                    <td>{{ $posteo->id }}</td>
                    <td>{{ $posteo->titulo }}</td>
                    <td>{{ $posteo->subtitulo }}</td>
                    <td>{{ $posteo->categoria }}</td>
                    <td>{{ $posteo->autor }}</td>
                    <td>{{ $posteo->texto }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('blog.edit.form', ['id' => $posteo->id]) }}" class="ms-2 btn btn-secondary">Editar</a>
                            <a href="{{ route('blog.delete.form', ['id' => $posteo->id]) }}" class="ms-2 btn btn-danger">Eliminar</a>
                            
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>No hay posteos que mostrar actualmente. Podés empezar por <a href="{{ route('blog.create.form') }}">realizar un posteo</a>.</p>
    @endif

    
</x-layout>