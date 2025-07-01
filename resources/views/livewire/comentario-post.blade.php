<div class="px-6 lg:col-span-7 col-span-full">
    <!-- Lista de comentarios -->
    <p class="text-2xl font-semibold mb-5">Comentarios de los usuarios - {{ $blog->totalComentarios() }}</p>
     @auth
    <div class="col-span-full mb-3 lg:col-span-7">
        <textarea wire:model.defer="contenido" rows="5"
            class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 mt-2 w-full rounded-md border-2 bg-transparent p-2 outline-none placeholder:text-black focus:shadow-md dark:placeholder:text-gray-400"
            placeholder="Agrega un comentario..."></textarea>
        @error('contenido') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <div class="mt-2">
            <button wire:click="comentar"
                class="bg-btn-200 dark:bg-btn-400 mt-2 rounded-md px-3 py-2 text-white transition-colors duration-150">Comentar</button>
        </div>
    </div>
    @else
    <p class="text-white mt-5 flex items-center gap-2">Recuerda 
        <a href="{{ route('login') }}" wire:navigate class="text-link-100">
        iniciar sesión
        </a> 
        para comentar este artículo.
    </p>
    @endauth
    <!-- Lista de comentarios -->
    <div class="bg-[#13233d] p-5 rounded-md">

    @foreach($comentarios ?? [] as $comentario)
    <div class="comentario mb-4">
        <!-- Contenido del comentario principal -->
        <div class="flex items-start gap-3">
            <div class="dark:bg-cont-100 mt-2 rounded-md bg-light-200 p-5 text-white w-full">
                <div class="flex gap-3">
                    <div class="text-sm font-semibold flex gap-2 items-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($comentario->autor->nombre_completo) }}"
                            class="w-8 h-8 rounded-full" />
                        {{ $comentario->autor->nombre_completo }}
                        <span class="text-xs text-gray-400 ml-2">{{ $comentario->created_at->diffForHumans()
                            }}</span>

                    </div>
                </div>
                <p class="text-sm mt-2 ml-10">{{ $comentario->contenido }}</p>
                <!-- Botón para mostrar textarea de respuesta -->
                <div class="flex items-center gap-3 text-lg">
                    <button @if(Auth::check()) wire:click="likeComment({{ $comentario->id }})" @else
                        onclick="alert('Debes iniciar sesión para dar like')" @endif
                        class="flex items-center gap-1 cursor-pointer mt-2 ml-10">
                        @if($comentario->isLikedBy(Auth::id()))
                        <i class="fa-solid fa-thumbs-up text-link-100"></i>
                        @else
                        <i class="fa-regular fa-thumbs-up"></i>
                        @endif
                        {{ $comentario->likes->count() }}
                    </button>
                    <div class="mt-2 flex items-center gap-2">
                        <i class="fa-solid fa-comment"></i>
                        {{$comentario->replies->count()}}
                    </div>

                </div>
                @auth
                <div class="mt-2">

                    @if($respuestaActiva === $comentario->id)
                    <textarea wire:model="respuestas.{{ $comentario->id }}" rows="2"
                        class="w-full border rounded p-2 text-black dark:text-white dark:bg-gray-800 mt-2"
                        placeholder="Escribe tu respuesta..."></textarea>
                    <div class="flex items-center gap-2 mt-2">
                        <button wire:click="responder({{ $comentario->id }})"
                            class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 text-white px-3 py-1 rounded text-sm">
                            Responder
                        </button>
                        <button wire:click="$set('respuestaActiva', null)" class="text-sm text-gray-400">
                            Cancelar
                        </button>
                    </div>
                    @else
                    <div class="flex items-center gap-2">

                        <button wire:click="$set('respuestaActiva', {{ $comentario->id }})"
                            class="text-sm text-link-100 mt-2">
                            Responder
                        </button>
                    </div>
                    @endif
                </div>
                @endauth
            </div>
        </div>

        <!-- Lista de respuestas -->
        @foreach($comentario->replies ?? [] as $respuesta)
        <div
            class="ml-6 mt-3 border-l-2 pl-4 border-gray-300 dark:border-gray-600 bg-light-300 dark:bg-cont-300 p-5 rounded-md">
            <div class="text-sm font-semibold flex gap-2 items-center">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($respuesta->user->nombre_completo) }}"
                    class="w-8 h-8 rounded-full" />
                {{ $respuesta->user->nombre_completo }}
                <span class="text-xs text-gray-400 ml-2">{{ $respuesta->created_at->diffForHumans() }}</span>

            </div>
            <div class="flex mt-2 ml-10">
                <button @if(Auth::check()) wire:click="likeRespuesta({{ $respuesta->id }})" @else
                    onclick="alert('Debes iniciar sesión para dar like')" @endif
                    class="flex items-center gap-1 text-sm cursor-pointer">
                    @if($respuesta->isLikedBy(Auth::id()))
                    <i class="fa-solid fa-thumbs-up text-link-100"></i>
                    @else
                    <i class="fa-regular fa-thumbs-up"></i>
                    @endif
                    {{ $respuesta->likes->count() }}
                </button>
                <p class="text-sm ml-2">{{ $respuesta->contenido }}</p>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    </div>

   
</div>