<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('id', 'asc')->paginate(2);
        return view('blog', compact('data'));
    }

    public function show(string $id)
    {
        $data = Blog::where('slug', $id)->first();
        return view('detail', ['data' => $data]);
    }
}
