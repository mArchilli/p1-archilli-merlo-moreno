<x-layoutadmin>

    <x-slot:title>Panel Blog</x-slot:title>

    <div class="row align-items-center">
        <div class="col-10">
            <h2 class="mosta">Panel de Administracion de Blog</h2>
        </div>
    </div>
    
    @if($blogadm->isNotEmpty())
        <div class=" d-flex justify-content-end">
            <a class="btnespecial" href="{{ route('blog.create.form') }}">Realizar un nuevo Posteo</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered my-5">
                <thead>
                    <tr>
                        <th class="text-white bg-dark">ID</th>
                        <th class="text-white bg-dark">Imagen</th>
                        <th class="text-white bg-dark">Título</th>
                        <th class="text-white bg-dark">Subtitulo</th>
                        <th class="text-white bg-dark">Categoria</th>
                        <th class="text-white bg-dark">Autor</th>
                        <th class="text-white bg-dark">Texto</th>
                        <th class="text-white bg-dark">Acciones</th>
                    </tr>
                </thead>
                <tbody>
    
                    @foreach($blogadm as $posteo)
                    <tr>
                        <td>{{ $posteo->id }}</td>
                        <td><img class="w-100" src="{{ $posteo->imagen }}" alt="Imagen del posteo"></td>
                        <td>{{ $posteo->titulo }}</td>
                        <td>{{ $posteo->subtitulo }}</td>
                        <td>{{ $posteo->categoria }}</td>
                        <td>{{ $posteo->autor }}</td>
                        <td>{{ Str::limit($posteo->texto, 150) }}</td>
                        <td>
                            <div class="d-flex flex-column">
                                <a href="{{ route('blog.edit.form', ['id' => $posteo->id]) }}" class="my-3 btneditar text-center">Editar</a>
                                <a href="{{ route('blog.delete.form', ['id' => $posteo->id]) }}" class="my-3 btneliminar">Eliminar</a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No hay posteos que mostrar actualmente. Podés empezar por <a href="{{ route('blog.create.form') }}">realizar un posteo</a>.</p>
    @endif

    
</x-layoutadmin>