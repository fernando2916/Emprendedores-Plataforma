<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'contenido',
        'post_comentario_id',
        'user_id'

    ];

    public function comentarioPost()
    {
        return $this->belongsTo(PostComentario::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes()
    {
        return $this->hasMany(ReplyLike::class);
    }

    public function isLikedBy($userId)
    {
        return $this->likes->contains('user_id', $userId);
    }
}
