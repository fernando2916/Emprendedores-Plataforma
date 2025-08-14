<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Recurso;

class RecursoController extends Controller
{    
   public function index()
   {
    $recursos = Recurso::all();
    return view('plataforma.recursos.index', compact('recursos'));
   }

   public function download($id)
   {
      $recurso = Recurso::findOrFail($id);

     // Si guardaste solo la ruta en el campo 'archivo'
    return Storage::download($recurso->archivo);
   }
}
