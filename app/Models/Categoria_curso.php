<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria_curso extends Model
{
    protected $fillable = [
        'nombre_categoria'
    ];

    public function subcategorias()
    {
        return $this->hasMany(SubCategoria_curso::class);
    }
}
