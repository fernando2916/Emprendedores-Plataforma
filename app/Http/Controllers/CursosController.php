<?php

namespace App\Http\Controllers;

use App\Models\Categoria_curso;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $categorias = Categoria_curso::orderBy('nombre_categoria', 'asc')->get();
        $especialidades = Especialidad::orderBy('nombre', 'asc')->get();
        return view('plataforma.cursos.index', compact('categorias', 'especialidades'));
    }
}
