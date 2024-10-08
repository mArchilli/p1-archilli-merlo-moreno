<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<x-layoutadmin>
    <x-slot:title>Editar Libro</x-slot:title>
        <div class="row justify-content-center align-items-center my-2">
                <div class="col-1 text-center">
                    <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
                </div>
                <div class="col-11">
                    <h2 class="mosta px-2">Editar libro</h2>
                </div>
        </div>
        

        <form action="{{ route('libro.edit.process', ['id' => $libro->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-12 col-md-4 mb-3">
                    <img class="img-fluid w-100" src="{{ asset($libro->imagen) }}" alt="Imagen de {{ $libro->titulo }}">
                </div>

                <div class="col-12 col-md-8">
                    <div class="mb-3">
                        <label for="titulo" class="form-label fw-bold">Título</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" value="{{ $libro->titulo }}">
                        @error('titulo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label fw-bold">Autor</label>
                        <input type="text" id="autor" name="autor" class="form-control" value="{{ $libro->autor }}">
                        @error('autor')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="editorial_fk" class="form-label">Editorial</label>
                        <select
                            id="editorial_fk"
                            name="editorial_fk"
                            class="form-control"
                        >

                            @foreach($editorials as $editorial)
                            <option
                                value="{{ $editorial->editorial_id }}"
                                @selected($editorial->editorial_id == old('editorial_fk'))
                                @selected($editorial->editorial_id == old('editorial_fk', $libro->editorial_fk))
                            >
                                {{ $editorial->nombre }}
                            </option>
                            @endforeach
                        </select>
                        @error('editorial_fk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="anio_publicacion" class="form-label fw-bold">Año</label>
                        <input type="number" id="anio_publicacion" name="anio_publicacion" class="form-control" 
                            value="{{ $libro->anio_publicacion }}" placeholder="Ingrese el año (máximo 4 dígitos)">
                        @error('anio')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label fw-bold">Cambiar Imagen</label>
                        <input type="file" id="imagen" name="imagen" class="form-control">
                        @error('imagen')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="editorial" class="form-label fw-bold">ISBN</label>
                        <input type="text" id="isbn" name="isbn" class="form-control" value="{{ $libro->isbn }}">
                        @error('isbn')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

            </div>

            <fieldset class="mb-3">
                <legend>Géneros</legend>

                @foreach($generos as $genero)
                <label class="me-2">
                    <input
                        type="checkbox"
                        name="genero_fks[]"
                        value="{{ $genero->genero_id }}"
                        @checked( in_array($genero->genero_id, old('genre_fks', $libro->generos->pluck('genero_id')->toArray()) ) )
                    >
                    {{ $genero->nombre }}
                </label>
                @endforeach
            </fieldset>

            <div class="col-12 mb-3">
                <label for="texto" class="form-label fw-bold">Descripcion</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="5">{{ $libro->descripcion }}</textarea>
                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>  

            <button type="submit" class="btneditar w-100 py-2">Actualizar</button>
        </form>


</x-layoutadmin>