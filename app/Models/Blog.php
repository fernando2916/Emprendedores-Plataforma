<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
     protected $fillable = [
        'titulo',
        'imagen',
        'descripcion_corta',
        'slug',
        'contenido',
        'tiempo_de_lectura',
        'estado',
        'categoria_posts_id',
        'users_id'
    ];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function categoriaPost() : BelongsTo {
        return $this->belongsTo(CategoriaPost::class, 'categoria_posts_id');
    }

    public function autor() : BelongsTo {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function comentarioPost()
    {
        return $this->hasMany(PostComentario::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function totalComentarios()
    {
        $comentarios = $this->comentarioPost()->withCount('replies')->get();

        $totalComentarios = $comentarios->count();
        $totalRespuestas = $comentarios->sum('replies_count');

        return $totalComentarios + $totalRespuestas;
    }

    public function checkLike(?User $user)
    {
        if (!$user) {
        return false;
        }

        // return $this->likes()->where('user_id', $user->id)->exists();
        return $this->likes->contains('user_id', $user->id);
    }

    public function incrementShareCount()
    {
        $this->increment('share_count');
    }
}
