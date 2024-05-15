/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<x-layoutadmin>
    <x-slot:title>Nuevo Post</x-slot:title>

    <div class="row justify-content-center align-items-center my-2">
            <div class="col-1 text-center">
                <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
            </div>
            <div class="col-11">
                <h1 class="mosta px-2">Publicar un Post</h1>
            </div>
    </div>

    <form action="{{ route('blog.create.process') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="titulo" class="form-label fw-bold">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}">
                    @error('titulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="subTitle" class="form-label fw-bold">Subtítulo</label>
                    <input type="text" id="subtitulo" name="subtitulo" class="form-control" value="{{ old('subtitulo') }}">
                    @error('subtitulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="categoria" class="form-label fw-bold">Categoría</label>
                    <select id="categoria" name="categoria" class="form-select">
                        <option value="" selected>Selecciona una categoría</option>
                        <option value="Entretenimiento">Entretenimiento</option>
                        <option value="Literatura">Literatura</option>
                        <option value="Cine">Cine</option>
                        <option value="Educación">Educación</option>
                        <!-- Agrega más opciones según tus necesidades -->
                    </select>
                    @error('categoria')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="autor" class="form-label fw-bold">Autor</label>
                    <input type="text" id="autor" name="autor" class="form-control" value="{{ old('autor') }}">
                    @error('autor')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="imagen" class="form-label fw-bold">Imagen</label>
                <input type="file" id="imagen" name="imagen" class="form-control">
                @error('imagen')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 

            <div class="col-12 mb-3">
                <label for="texto" class="form-label fw-bold">Contenido</label>
                <textarea id="texto" name="texto" class="form-control" rows="5">{{ old('texto') }}</textarea>
                @error('texto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>  
        </div>
        
        <button type="submit" class="btnespecial w-100 py-2">Publicar</button>
    </form>
  
</x-layout>