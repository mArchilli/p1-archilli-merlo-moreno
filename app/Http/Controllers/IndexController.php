<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Libro;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        $libro = Libro::all();

        return view('index', [
            'blog' => $blog,
            'libro' => $libro,
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
