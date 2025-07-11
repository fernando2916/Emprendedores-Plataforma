<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aviso;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avisos = Aviso::all();
        return view('admin.avisos.index', compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.avisos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string',
            'mensaje' => 'nullable|string',
            'expira_en' => 'required|date|after:now',
        ], [
            'titulo' => 'El titulo es requerido.',
            'expira_en' => 'El tiempo de expiración es requerido.',
        ]);

        $aviso = Aviso::create($data);

         // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Aviso creado correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.aviso.edit', compact('aviso'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Aviso $aviso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aviso $aviso)
    {
        return view('admin.avisos.edit', compact('aviso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aviso $aviso)
    {
         $data = $request->validate([
            'titulo' => 'required|string',
            'mensaje' => 'nullable|string',
            'expira_en' => 'required|date|after:now',
        ], [
            'titulo' => 'El titulo es requerido.',
            'expira_en' => 'El tiempo de expiración es requerido.',
        ]);

        $aviso->update($data);

         // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Aviso Actualizado correctamente.',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.aviso.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aviso $aviso)
    {
        $aviso->delete();

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Aviso Eliminado correctamente.',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.aviso.index');

    }
}
