<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use App\Models\Vacante;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacantes = Vacante::orderBy('id', 'asc')->paginate(5);
        $candidatos = Candidato::all();
        return view('admin.vacantes.index', compact('vacantes', 'candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vacantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'puesto' => 'required|string',
            'modalidad' => 'required|string',
            'horario' => 'required',
            'empresa' => 'required',
            'descripcion' => 'required',
            'salario' => 'required',
            'postulacion' => 'required|date_format:Y-m-d',
            'requisitos' => 'required',
        ], [
            'puesto' => 'El puesto es requerido.',
            'modalidad' => 'La modalidad es requerida.',
            'horario' => 'El horario es requerido.',
            'empresa' => 'La empresa es requerida.',
            'descripcion' => 'La descripción es requerida.',
            'salario' => 'El salario es requerido.',
            'postulacion' => 'La postulación es requerida.',
            'requisitos' => 'Los requisitos son requeridos.',
        ]);

        $vacante = Vacante::create([
            'puesto' => $data['puesto'],
            'modalidad' => $data['modalidad'],
            'horario' => $data['horario'],
            'empresa' => $data['empresa'],
            'descripcion' => $data['descripcion'],
            'salario' => $data['salario'],
            'postulacion' => $data['postulacion'],
            'requisitos' => $data['requisitos'],
            'identificador' =>  Str::uuid(),
        ]);

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Vacante creada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.vacante.edit', compact('vacante'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidato $candidatos)
    {
        return view('admin.vacantes.candidatos.index', $candidatos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacante $vacante)
    {
        return view('admin.vacantes.edit', compact('vacante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacante $vacante)
    {
         $data = $request->validate([
            'puesto' => 'required|string',
            'modalidad' => 'required|string',
            'horario' => 'required',
            'empresa' => 'required',
            'descripcion' => 'required',
            'salario' => 'required',
            'postulacion' => 'required',
            'requisitos' => 'required',
        ], [
            'puesto' => 'El puesto es requerido.',
            'modalidad' => 'La modalidad es requerida.',
            'horario' => 'El horario es requerido',
            'empresa' => 'La empresa es requerida.',
            'descripcion' => 'La descripción es requerida.',
            'salario' => 'El salario es requerido.',
            'postulacion' => 'La postulación es requerida',
            'requisitos' => 'Los requisitos son requeridos.',
        ]);

        $vacante->update($data);

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Vacante creada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

         return redirect()->route('admin.vacante.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacante $vacante)
    {
        $vacante->delete();

         // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Vacante eleminada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.vacante.index');
    }
}
