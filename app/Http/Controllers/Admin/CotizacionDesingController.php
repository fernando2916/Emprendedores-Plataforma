<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CotizacionDiseño;
use Illuminate\Http\Request;

class CotizacionDesingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotizaciones = CotizacionDiseño::latest()->get();
        return view('admin.cotizaciones.index', compact('cotizaciones'));
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CotizacionDiseño $cotizacion)
    {
        $cotizacion->delete();

        // mensaje flash
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Cotización Eliminada correctamente',
            'background' => '#120024',
            'color' => '#ffffff',
        ]);

        return redirect()->route('admin.cotizacion.index');
    }
}
