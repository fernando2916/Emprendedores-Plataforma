<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class ContadorComentarios extends Component
{
    public Blog $blog;
    public int $totalComentarios = 0;

    protected $listeners = ['comentarioAgregado' => 'actualizarTotal'];

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $this->actualizarTotal();
    }

    public function actualizarTotal()
    {
        $comentarios = $this->blog->comentarioPost()->withCount('replies')->get();
        $this->totalComentarios = $comentarios->count() + $comentarios->sum('replies_count');
    }

    public function render()
    {
        return view('livewire.contador-comentarios');
    }
}
