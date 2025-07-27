<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Glosario;

class FiltrarPalabras extends Component
{
    public $titulo;

    public function leerDatosFormulario()
    {
        $this->dispatch('terminosBusqueda', $this->titulo);
    }

    public function render()
    {
        return view('livewire.filtrar-palabras');
    }
}
