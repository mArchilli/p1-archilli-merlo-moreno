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

    public function createForm(){
        return view('blog.create-blog-form');
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
            'imagen.required'=>'La imagen debe ser cargada'
        ]);

        $input = $request->only(['titulo', 'subtitulo', 'categoria', 'autor', 'texto', 'imagen']);

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

    public function deleteForm(int $id)
    {
        return view('blog.delete-blog', [
            'blog' => Blog::findOrFail($id),
        ]);
    }

}
