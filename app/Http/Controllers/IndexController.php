<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function catalogo()
    {
        return view('catalogo');
    }

    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        return view('about');
    }
}
