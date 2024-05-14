<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Libro;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->take(4)->get();
        $libro = Libro::all();
        $librosRecomendados = Libro::whereIn('id', [14, 4, 17])->get();

        return view('index', [
            'blog' => $blog,
            'libro' => $libro,
            'librosRecomendados' => $librosRecomendados
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function admin(){
        return view('admin');
    }
}
