<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\CommentLike;
use App\Models\PostComentario;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ComentarioPost extends Component
{
    public $blog;
    public $comentarios;
    public $contenido = "";
    public $respuestas = [];
    public $respuestaActiva = null;

    protected $listeners = ['respuestaAgregada' => 'actualizarComentarios'];

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $this->cargarComentarios();
    }

    public function cargarComentarios()
    {
        $this->comentarios = $this->blog->comentarioPost()
            ->with(['autor', 'replies.user', 'replies.likes',]) // Cargar relaciones
            ->latest()
            ->get();
    }

    public function comentar()
    {
        $this->validate([
            'contenido' => 'required|string|max:1000',
        ]);

        $comentario = PostComentario::create([
            'blog_id' => $this->blog->id,
            'user_id' => Auth::id(),
            'contenido' => $this->contenido,
        ]);

        $this->comentarios->prepend($comentario);
        $this->contenido = '';

        $this->cargarComentarios();
        $this->dispatch('comentarioAgregado');
    }

    // Método para agregar respuestas
    public function responder($comentarioId)
    {
        $this->validate([
            'respuestas.'.$comentarioId => 'required|string|max:1000',
        ]);

        Reply::create([
            'post_comentario_id' => $comentarioId,
            'user_id' => Auth::id(),
            'contenido' => $this->respuestas[$comentarioId],
        ]);

        $this->respuestas[$comentarioId] = ''; // Limpiar el campo
        $this->respuestaActiva = null; // Cierra el textarea después de responder
        $this->cargarComentarios();// Actualizar la lista
        $this->dispatch('comentarioAgregado');

    }

     // Actualizar los comentarios después de agregar una respuesta
    public function actualizarComentarios()
    {
        $this->cargarComentarios();
    }

    public function getTotalComentariosProperty()
    {
        return $this->comentarios->count() + $this->comentarios->sum(fn($c) => $c->replies->count());
    }

    public function likeRespuesta($replyId)
    {
        if (!Auth::check()) return;
        
        $userId = Auth::id();

        $reply = Reply::findOrFail($replyId);

        $like = $reply->likes()->where('user_id', $userId)->first();

        if($like) {
            $like->delete();
        } else {
            $reply->likes()->create([
                'user_id' => $userId
            ]);
        }

        $this->cargarComentarios();    
    }

    public function likeComment($comentarioId)
    {
        $userId = Auth::id();

        $comentario = PostComentario::findOrFail($comentarioId);

        $like = $comentario->likes()->where('user_id', $userId)->first();

        if($like) {
            $like->delete();
        } else {
            $comentario->likes()->create([
                'user_id' => $userId
            ]);
        }

        $this->cargarComentarios();    
    }

    public function render()
    {
        return view('livewire.comentario-post');
    }
}
