/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<x-layout>
    <x-slot:title>Nuevo Post</x-slot:title>

    <div class="container my-2">
    <h1 class="mb-3 mosta">Cargar libro</h1>

    <!-- @if($errors->any())
        <div class="alert alert-danger">Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentar.</div>
    @endif -->

    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}">
                    @error('titulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" id="autor" name="autor" class="form-control" value="{{ old('autor') }}">
                    @error('autor')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" id="editorial" name="editorial" class="form-control" value="{{ old('editorial') }}">
                    @error('editorial')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="anio_publicacion" class="form-label">Año</label>
                    <input type="number" id="anio_publicacion" name="anio_publicacion" class="form-control" 
                        value="{{ old('anio_publicacion') }}" placeholder="Ingrese el año (máximo 4 dígitos)">
                    @error('anio')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" id="imagen" name="imagen" class="form-control">
                @error('imagen')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="number" id="isbn" name="isbn" class="form-control" 
                        value="{{ old('isbn') }}" placeholder="Ingrese el ISBN">
                    @error('isbn')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="texto" class="form-label">Descripcion</label>
                <textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>  
        </div>
        
        <button type="submit" class="btnespecial w-100 py-2">Publicar</button>
    </form>

    </div>

    
</x-layout>