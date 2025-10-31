<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoria_curso extends Model
{
    protected $fillable = [
        'nombre_subcategoria',
        'categoria_cursos_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria_curso::class, 'categoria_cursos_id');
    }
}
