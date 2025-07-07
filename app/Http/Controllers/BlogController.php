<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->skip(4)->paginate(6);

        // Post más reciente
        $postReciente = Blog::latest()->first();

        // Últimos 3 excluyendo el más reciente
       $ultimosPosts = collect(); // por si no hay posts

        if ($postReciente) {
            $ultimosPosts = Blog::where('id', '!=', $postReciente->id)
                ->latest()
                ->take(3)
                ->get();
        }
        return view('plataforma.blog.index', compact('blogs', 'postReciente', 'ultimosPosts' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('plataforma.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
