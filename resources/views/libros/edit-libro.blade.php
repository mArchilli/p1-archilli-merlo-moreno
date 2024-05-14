/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<x-layoutadmin>
    <x-slot:title>Editar Libro</x-slot:title>

    <div class="container my-2">
        <h1 class="mb-4 mosta">Editar libro</h1>

        <form action="{{ route('libro.edit.process', ['id' => $libro->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-12 col-md-4 mb-3">
                    <img class="img-fluid w-100" src="{{ asset($libro->imagen) }}" alt="Imagen de {{$libro->titulo}}">
                </div>

                <div class="col-12 col-md-8">
                    <div class="mb-3">
                        <label for="titulo" class="form-label fw-bold">Título</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" value="{{$libro->titulo}}">
                        @error('titulo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label fw-bold">Autor</label>
                        <input type="text" id="autor" name="autor" class="form-control" value="{{$libro->autor}}">
                        @error('autor')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="editorial" class="form-label fw-bold">Editorial</label>
                        <input type="text" id="editorial" name="editorial" class="form-control" value="{{$libro->editorial}}">
                        @error('editorial')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="anio_publicacion" class="form-label fw-bold">Año</label>
                        <input type="number" id="anio_publicacion" name="anio_publicacion" class="form-control" 
                            value="{{$libro->anio_publicacion}}" placeholder="Ingrese el año (máximo 4 dígitos)">
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
                        <input type="text" id="isbn" name="isbn" class="form-control" value="{{$libro->isbn}}">
                        @error('isbn')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

            </div>

            <div class="col-12 mb-3">
                <label for="texto" class="form-label fw-bold">Descripcion</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="5">{{$libro->descripcion}}</textarea>
                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>  

            <button type="submit" class="btnespecial w-100 py-2">Actualizar</button>
        </form>

    </div>

</x-layoutadmin>