/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<x-layout>
    <x-slot:title>Editar Posteo</x-slot:title>

    <div class="container my-2">
    <h1 class="mb-3">Editar un Post</h1>

    @if($errors->any())
        <div class="alert alert-danger">Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentar.</div>
    @endif

    <form action="{{ route('blog.edit.process', ['id' => $blog->id]) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{$blog->titulo}}">
                    @error('titulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="subtitulo" class="form-label">Subtítulo</label>
                    <input type="text" id="subtitulo" name="subtitulo" class="form-control" value="{{$blog->subtitulo}}"">
                    @error('subtitulo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría</label>
                    <select id="categoria" name="categoria" class="form-select">
                        <option value="" selected>{{$blog->categoria}}</option>
                        <option value="Entretenimiento">Entretenimiento</option>
                        <option value="Literatura">Literatura</option>
                        <option value="Cine">Cine</option>
                        <option value="Educación">Educación</option>
                    </select>
                    @error('categoria')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" id="autor" name="autor" class="form-control" value="{{ $blog->autor }}">
                    @error('autor')
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

            <div class="col-12 mb-3">
                <label for="texto" class="form-label">Contenido</label>
                <textarea id="texto" name="texto" class="form-control" rows="10">{{ $blog->texto }}</textarea>
                @error('texto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>  
        </div>
        
        <button type="submit" class="btn btn-primary w-100 py-2">Actualizar</button>
    </form>

    </div>

    
</x-layout>