<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria_curso;
use Illuminate\Http\Request;

class CategoriaCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria_curso::latest()->paginate(10);
        return view('admin.curso.categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.curso.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_categoria' => 'required|string',
        ], [
            'nombre_categoria.required' => 'El nombre de la categoria es requerido.',
        ]);

       $categoria = Categoria_curso::create([
            'nombre_categoria' => $data['nombre_categoria'],
        ]);

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Categoria creada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria_curso $categoria_curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria_curso $categoria)
    {
        return view('admin.curso.categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria_curso $categoria)
    {
        $data = $request->validate([
            'nombre_categoria' => 'required|string',
        ], [
            'nombre_categoria.required' => 'El nombre de la categoria es requerido.',
        ]);

       $categoria->update($data);

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Categoria Actualizada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria_curso $categoria)
    {
        $categoria->delete();

         // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Categoria Eliminada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.categorias.index');
    }
}
