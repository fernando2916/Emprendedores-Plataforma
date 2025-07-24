<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use App\Models\Vacante;
use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    public function index(Vacante $vacante)
    {
       return view('admin.vacantes.candidatos.index', [
        'vacante' => $vacante
       ]);
    }

}
