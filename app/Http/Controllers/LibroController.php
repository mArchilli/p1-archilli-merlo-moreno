<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use App\Models\Genero;
use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function catalogo()
    {
        //Indicamos las relaciones que deben cargarse
        $libro = Libro::with(['editorial', 'generos'])->get();
        return view('catalogo', [
            'libro' => $libro,
        ]);
    }

    public function libroadm()
    {
        //Indicamos las relaciones que deben cargarse
        $libroadm = Libro::with(['editorial', 'generos'])->get();
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
        return view('libros.create-libro', [
            'editorials' => Editorial::orderBy('nombre')->get(),
            'generos' => Genero::orderBy('nombre')->get(),
        ]);
    }

    public function createProcess(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:4',
            'autor' => 'required|min:2',
            'editorial_fk' => 'required',
            'anio_publicacion' => 'required|min:4|max:4',
            'isbn' => 'required|min:10|max:14',
            'descripcion' => 'required|min:5',
            'imagen'=> 'required'
        ], [
            'titulo.min' => 'El título debe tener al menos :min caracteres.',
            'titulo.required' => 'El titulo debe ser ingresado',
            'autor.min' => 'El autor debe tener al menos :min caracteres.',
            'autor.required' => 'El autor debe ser ingresado',
            'editorial_fk.required' => 'El editorial debe ser ingresado',
            'anio_publicacion.required' => 'El año de publicacion debe ser ingresado',
            'anio_publicacion.min' => 'El año de publicacion se compone de minimo :min. caracteres',
            'anio_publicacion.max' => 'El año de publicacion se compone de maximo :max. caracteres',
            'isbn.min' => 'El ISBN se compone de minimo :min. caracteres',
            'isbn.max' => 'El ISBN se compone de maximo :max. caracteres',
            'isbn.required' => 'El ISBN debe ser ingresado',
            'descripcion.min' => 'La descripcion debe tener al menos :min caracteres.',
            'descripcion.required' => 'La descripcion debe ser ingresado',
            'imagen.required'=>'La imagen debe ser cargada'
        ]);

        $input = $request->only(['titulo', 'autor', 'editorial_fk', 'anio_publicacion', 'isbn', 'descripcion', 'imagen']);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = $imagen->getClientOriginalName();
            $ruta = 'images/libros/';
            $imagen->move(public_path($ruta), $nombreImagen); // Mover el archivo a la ubicación deseada
            
            // Concatenar la ruta con el nombre de la imagen para almacenar en la base de datos
            $input['imagen'] = $ruta . $nombreImagen;
        }

        $libro = Libro::create($input);


        $libro->generos()->attach( $request->input('genero_fks', []) );

        return redirect()
            ->route('libroadm')
            ->with('feedback.message', 'El libro <b>"' . e($input['titulo']) . '"</b> se cargo con éxito.');
    }

    public function editForm(int $id)
    {
        return view('libros.edit-libro', [
            'libro' => Libro::findOrFail($id),
            'editorials' => Editorial::orderBy('nombre')->get(),
            'generos' => Genero::orderBy('nombre')->get(),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:4',
            'autor' => 'required|min:2',
            'editorial_fk' => 'required',
            'anio_publicacion' => 'required|min:4|max:4',
            'isbn' => 'required|min:10|max:14',
            'descripcion' => 'required|min:5',
        ], [
            'titulo.min' => 'El título debe tener al menos :min caracteres.',
            'titulo.required' => 'El titulo debe ser ingresado',
            'autor.min' => 'El autor debe tener al menos :min caracteres.',
            'autor.required' => 'El autor debe ser ingresado',
            'editorial_fk.required' => 'El editorial debe ser ingresado',
            'anio_publicacion.required' => 'El año de publicacion debe ser ingresado',
            'anio_publicacion.min' => 'El año de publicacion se compone de minimo :min. caracteres',
            'anio_publicacion.max' => 'El año de publicacion se compone de maximo :max. caracteres',
            'isbn.min' => 'El ISBN se compone de minimo :min. caracteres',
            'isbn.max' => 'El ISBN se compone de maximo :max. caracteres',
            'isbn.required' => 'El ISBN debe ser ingresado',
            'descripcion.min' => 'La descripcion debe tener al menos :min caracteres.',
            'descripcion.required' => 'La descripcion debe ser ingresado'
        ]);

        $input = $request->only(['titulo', 'autor', 'editorial_fk', 'anio_publicacion', 'isbn', 'descripcion', 'imagen']);

        $libro = Libro::findOrFail($id);

        
        // Verifica si se cargó una nueva imagen
        if ($request->hasFile('imagen')) {
            // Elimina la imagen existente si hay una
            if ($libro->imagen) {
                // Eliminar la imagen del almacenamiento
                $rutaImagenExistente = public_path($libro->imagen);
                if (file_exists($rutaImagenExistente)) {
                    unlink($rutaImagenExistente);
                }
            }

            // Guarda la nueva imagen
            $imagen = $request->file('imagen');
            $ruta = 'images/libros/';
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(public_path($ruta), $nombreImagen);
            $input['imagen'] = $ruta . $nombreImagen; // Aquí se guarda la ruta completa
        } else {
            // Si no se ha cargado una nueva imagen, mantener la imagen existente
            $input['imagen'] = $libro->imagen;
        }

        $libro->update($input);

        $libro->generos()->sync( $request->input('genero_fks', []) );

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

        $tituloEliminado = $libro->titulo;

        //Borramos todos los registros relacionados con la tabla pivot libros_have_generos de la relacion con generos.
        $libro->generos()->detach();

        $libro->delete();

        return redirect()
            ->route('libroadm')
            ->with('feedback.message', 'El libro <b>"' . e($tituloEliminado) . '"</b> se eliminó con éxito.');
    }

}