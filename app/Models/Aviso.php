<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $fillable = [
        'titulo',
        'mensaje',
        'expira_en',
    ];

    protected $casts = [
    'expira_en' => 'datetime',
];
}
