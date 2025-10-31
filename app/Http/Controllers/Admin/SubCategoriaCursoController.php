<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria_curso;
use App\Models\SubCategoria_curso;
use Illuminate\Http\Request;

class SubCategoriaCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategorias = SubCategoria_curso::latest()->paginate(10);
        return view('admin.curso.subCategoria.index', compact('subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria_curso::all();   
        return view('admin.curso.subCategoria.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_subcategoria' => 'required|string|max:255',
            'categoria_cursos_id' => 'required|exists:categoria_cursos,id',
        ], [
            'nombre_subcategoria.required' => 'La sub categoria es requerida.',
            'categoria_cursos_id.required' => 'La categoria es requerida.',
        ]);

       $subcategoria = SubCategoria_curso::create($data);

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Sub Categoria creada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.subcategorias.edit', compact('subcategoria'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategoria_curso $subCategoria_curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategoria_curso $subcategoria)
    {
        $categorias = Categoria_curso::all();  
        return view('admin.curso.subCategoria.edit', compact('subcategoria', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategoria_curso $subcategoria)
    {
        $data = $request->validate([
            'nombre_subcategoria' => 'required|string|max:255',
            'categoria_cursos_id' => 'required|exists:categoria_cursos,id',
        ], [
            'nombre_subcategoria.required' => ' La sub categoria es requerida.',
            'categoria_cursos_id.required' => 'La categoria es requerida.',
        ]);

       $subcategoria->update($data);

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Sub Categoria Actualizada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.subcategorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategoria_curso $subcategoria)
    {
         $subcategoria->delete();

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Sub Categoria Eliminada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.subcategorias.index');
    }
}
