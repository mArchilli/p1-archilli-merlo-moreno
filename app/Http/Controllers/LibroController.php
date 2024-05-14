<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function catalogo()
    {
        $libro = Libro::all();
        return view('catalogo', [
            'libro' => $libro,
        ]);
    }

    public function libroadm()
    {
        $libroadm = Libro::all();
        return view('libroadm', [
            'libroadm' => $libroadm,
        ]);
    }

    public function view(int $id)
    {
        $libro = Libro::findOrFail($id);

        return view('libros.view', [
            'libro' => $libro,
        ]);
    }

    public function viewBook(int $id){
        return view('libro', [
            'libro' => Libro::findOrFail($id)]);
    }

    public function createForm(){
        return view('libros.create-libro');
    }

    public function createProcess(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'autor' => 'required|min:2',
            'editorial' => 'required|min:2',
            'anio_publicacion' => 'required|min:4|max:4',
            'isbn' => 'required|min:10|max:13',
            'descripcion' => 'required|min:5',
            'imagen'=> 'required'
        ], [
            'titulo.min' => 'El título debe tener al menos :min caracteres.',
            'titulo.required' => 'El titulo debe ser ingresado',
            'autor.min' => 'El autor debe tener al menos :min caracteres.',
            'autor.required' => 'El autor debe ser ingresado',
            'editorial.min' => 'El editorial debe tener al menos :min caracteres.',
            'editorial.required' => 'El editorial debe ser ingresado',
            'anio_publicacion.required' => 'El año de publicacion debe ser ingresado',
            'anio_publicacion.min' => 'El año de publicacion se compone de minimo :min. caracteres',
            'anio_publicacion.max' => 'El año de publicacion se compone de maximo :max. caracteres',
            'isbn.min' => 'El ISBN se compone de minimo :min. caracteres',
            'isbn.max' => 'El ISBN se compone de maximo :max. caracteres',
            'descripcion.min' => 'La descripcion debe tener al menos :min caracteres.',
            'descripcion.required' => 'La descripcion debe ser ingresado',
            'imagen.required'=>'La imagen debe ser cargada'
        ]);

        $input = $request->only(['titulo', 'autor', 'editorial', 'anio_publicacion', 'isbn', 'descripcion', 'imagen']);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = $imagen->getClientOriginalName();
            $ruta = 'images/libros/';
            $imagen->move(public_path($ruta), $nombreImagen); // Mover el archivo a la ubicación deseada
            
            // Concatenar la ruta con el nombre de la imagen para almacenar en la base de datos
            $input['imagen'] = $ruta . $nombreImagen;
        }

        Libro::create($input);

        return redirect()
            ->route('libroadm')
            ->with('feedback.message', 'El libro <b>"' . e($input['titulo']) . '"</b> se cargo con éxito.');
    }

    public function editForm(int $id)
    {
        return view('libros.edit-libro', [
            'libro' => Libro::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'autor' => 'required|min:2',
            'editorial' => 'required|min:2',
            'anio_publicacion' => 'required|min:4|max:4',
            'isbn' => 'required|min:10|max:13',
            'descripcion' => 'required|min:5',
        ], [
            'titulo.min' => 'El título debe tener al menos :min caracteres.',
            'titulo.required' => 'El titulo debe ser ingresado',
            'autor.min' => 'El autor debe tener al menos :min caracteres.',
            'autor.required' => 'El autor debe ser ingresado',
            'editorial.min' => 'El editorial debe tener al menos :min caracteres.',
            'editorial.required' => 'El editorial debe ser ingresado',
            'anio_publicacion.required' => 'El año de publicacion debe ser ingresado',
            'anio_publicacion.min' => 'El año de publicacion se compone de minimo :min. caracteres',
            'anio_publicacion.max' => 'El año de publicacion se compone de maximo :max. caracteres',
            'isbn.min' => 'El ISBN se compone de minimo :min. caracteres',
            'isbn.max' => 'El ISBN se compone de maximo :max. caracteres',
            'descripcion.min' => 'La descripcion debe tener al menos :min caracteres.',
            'descripcion.required' => 'La descripcion debe ser ingresado'
        ]);

        $input = $request->only(['titulo', 'autor', 'editorial', 'anio_publicacion', 'isbn', 'descripcion']);

        $libro = Libro::findOrFail($id);

        $libro->update($input);

        return redirect()
            ->route('libroadm')
            ->with('feedback.message', 'El libro <b>"' . e($input['titulo']) . '"</b> se editó con éxito.');
    }

    public function deleteForm(int $id)
    {
        return view('libros.delete-libro', [
            'libro' => Libro::findOrFail($id),
        ]);
    }

    public function deleteProcess(int $id)
    {
        $libro = Libro::findOrFail($id);

        $libro->delete();

        return redirect()
            ->route('libroadm')
            ->with('feedback.message', 'El libro <b>"' . e($libro->title) . '"</b> se eliminó con éxito.');
    }

}