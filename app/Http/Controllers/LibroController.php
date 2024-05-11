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

    public function createForm(){
        return view('libros.create-libro');
    }
}