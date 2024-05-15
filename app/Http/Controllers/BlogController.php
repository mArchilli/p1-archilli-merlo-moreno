<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        $blog = Blog::all();
        return view('blog', [
            'blog' => $blog,
        ]);
    }

    public function blogadm()
    {
        $blogadm = Blog::all();
        return view('blogadm', [
            'blogadm' => $blogadm,
        ]);
    }

    public function view(int $id)
    {
        $post = Blog::findOrFail($id);

        return view('blog.view', [
            'blog' => $post,
        ]);
    }

    public function viewPost(int $id){
        return view('posteo', [
            'blog' => Blog::findOrFail($id)]);
    }

    public function createForm(){
        return view('blog.create-blog');
    }

    public function createProcess(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'subtitulo' => 'required|min:2',
            'categoria' => 'required',
            'autor' => 'required|min:2',
            'texto' => 'required|min:5',
            'imagen'=> 'required'
        ], [
            'titulo.min' => 'El título debe tener al menos :min caracteres.',
            'titulo.required' => 'El titulo debe ser ingresado',
            'subtitulo.min' => 'El subtítulo debe tener al menos :min caracteres.',
            'subtitulo.required' => 'El subtitulo debe ser ingresado',
            'categoria.required' => 'El categoria debe ser completado.',
            'autor.min' => 'El autor debe tener al menos :min caracteres.',
            'autor.required' => 'El autor debe ser ingresado',
            'texto.min' => 'La publicacion debe contener al menos :min caracteres.',
            'texto.required' => 'La publicacion debe ser completada',
            'imagen.required'=>'La imagen debe ser cargada'
        ]);

        $input = $request->only(['titulo', 'subtitulo', 'categoria', 'autor', 'texto', 'imagen']);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = $imagen->getClientOriginalName();
            $ruta = 'images/blog/';
            $imagen->move(public_path($ruta), $nombreImagen); // Mover el archivo a la ubicación deseada
            
            // Concatenar la ruta con el nombre de la imagen para almacenar en la base de datos
            $input['imagen'] = $ruta . $nombreImagen;
        }

        Blog::create($input);

        return redirect()
            ->route('blogadm')
            ->with('feedback.message', 'El post <b>"' . e($input['titulo']) . '"</b> se publicó con éxito.');
    }

    public function editForm(int $id)
    {
        return view('blog.edit-blog', [
            'blog' => Blog::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'subtitulo' => 'required|min:2',
            'categoria' => 'required',
            'autor' => 'required|min:2',
            'texto' => 'required|min:5',
        ], [
            'titulo.min' => 'El título debe tener al menos :min caracteres.',
            'titulo.required' => 'El titulo debe ser ingresado',
            'subtitulo.min' => 'El subtítulo debe tener al menos :min caracteres.',
            'subtitulo.required' => 'El subtitulo debe ser ingresado',
            'categoria.required' => 'El categoria debe ser completado.',
            'autor.min' => 'El autor debe tener al menos :min caracteres.',
            'autor.required' => 'El autor debe ser ingresado',
            'texto.min' => 'La publicacion debe contener al menos :min caracteres.',
            'texto.required' => 'La publicacion debe ser completada',
        ]);

        $input = $request->only(['titulo', 'subtitulo', 'categoria', 'autor', 'texto',]);

        $posteo = Blog::findOrFail($id);

        // Verifica si se cargó una nueva imagen
        if ($request->hasFile('imagen')) {
            // Elimina la imagen existente si hay una
            if ($posteo->imagen) {
                // Eliminar la imagen del almacenamiento
                $rutaImagenExistente = public_path($posteo->imagen);
                if (file_exists($rutaImagenExistente)) {
                    unlink($rutaImagenExistente);
                }
            }

            // Guarda la nueva imagen
            $imagen = $request->file('imagen');
            $ruta = 'images/blog/';
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(public_path($ruta), $nombreImagen);
            $input['imagen'] = $ruta . $nombreImagen; // Aquí se guarda la ruta completa
        } else {
            // Si no se ha cargado una nueva imagen, mantener la imagen existente
            $input['imagen'] = $posteo->imagen;
        }

        $posteo->update($input);

        return redirect()
            ->route('blogadm')
            ->with('feedback.message', 'El post <b>"' . e($input['titulo']) . '"</b> se editó con éxito.');
    }

    public function deleteForm(int $id)
    {
        return view('blog.delete-blog', [
            'blog' => Blog::findOrFail($id),
        ]);
    }

    public function deleteProcess(int $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()
            ->route('blogadm')
            ->with('feedback.message', 'El posteo <b>"' . e($blog->title) . '"</b> se eliminó con éxito.');
    }

}
