<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CotizacionFoto;
use Illuminate\Http\Request;

class CotizacionFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = CotizacionFoto::latest()->get();
        return view('admin.foto.cotizaciones.index', compact('citas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CotizacionFoto $cita)
    {
        $cita->delete();
    }
}
