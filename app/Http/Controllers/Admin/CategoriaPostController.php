<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriaPost;
use Illuminate\Http\Request;

class CategoriaPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = CategoriaPost::all();
        return view('admin.post.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.categorias.create');        
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaPost $categoriaPost)
    {
        return view('admin.post.categorias.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,CategoriaPost $categoriaPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaPost $categoriaPost)
    {
        //
    }
}
