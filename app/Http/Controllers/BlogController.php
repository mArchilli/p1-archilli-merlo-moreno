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

    public function view(int $id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.view', [
            'blog' => $blog,
        ]);
    }
}
