@extends('components.layouts.principal')

@section('contenido')

@include('plataforma.home.carousel')
@auth
<div class="flex justify-center">
    <h1 class="text-xl md:text-4xl font-bold">
        Hola de nuevo {{ auth()->user()->nombre_completo }}</h1>
</div>
@endauth
@include('plataforma.home.servicios')
<div class="mx-auto px-5 lg:container">
    <div class="">
        productos
    </div>
    <div class="">
        Cursos
    </div>
    <div>
        <div class="justify-center font-semibold mb-10 text-center text-2xl mx-auto">
            Últimas publicaciones
        </div>
        <div class="grid gap-4 pb-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($ultimosPost as $post)
           <a wire:navigate href={{ route('blog.show', $post->slug ) }} class="mb-4 block overflow-hidden rounded-lg">
            <article class="dark:bg-cont-100 bg-light-200 text-white">
              <div class="relative">
                <img src={{ $post->imagen ? Storage::url($post->imagen) : '' }} alt=""
                class=" aspect-video w-full object-cover "
                />
              </div>
              <div class="space-y-3 p-4 mt-2">
                <div class="flex items-center justify-between">
                  <span class="bg-categoria-200 rounded-md px-2 py-1 text-sm font-bold">
                    {{ $post->categoriaPost->nombre }}</span>
                  <div class="flex items-center justify-center gap-3 text-sm">

                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-eye"></i>
                      <p>Lectura de {{ $post->tiempo_de_lectura }} min.</p>
                    </div>
                  </div>
                </div>

                <h3 class="hover:text-link-400 dark:hover:text-link-200 mb-2 text-2xl font-semibold">{{ $post->titulo }}
                </h3>
                <div class="">
                  <p class="line-clamp-3 text-justify text-sm text-slate-200 dark:text-slate-300">
                    {{ $post->descripcion_corta }}
                  </p>
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center justify-center gap-3">
                    <div class="flex items-center justify-center gap-1">
                      <i class="fa-solid fa-thumbs-up"></i>
                      <p>{{ $post->likes->count() }}</p>
                    </div>
                    <div class="flex items-center justify-center gap-1">
                      <i class="fa-solid fa-comment"></i>
                      <livewire:contador-comentarios :post="$post" />
                    </div>
                  </div>
                  <div class="flex items-center justify-center gap-3 text-sm">
                    <div class="flex items-center gap-1">
                      <img src="https://ui-avatars.com/api/?name={{ urlencode($post->autor->nombre_completo) }}"
                                class="w-[25px] h-[25px] rounded-full" />
                      <p class="capitalize">{{$post->autor->nombre_completo}}</p>
                    </div>
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-calendar"></i>
                      {{ $post->created_at->diffForHumans() }}
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </a>
          @empty
          <p class="text-center">No hay publicaciones aun</p>
            @endforelse
        </div>
    </div>
</div>
@include('plataforma.home.boletin')
@include('plataforma.home.testimonios')
</div>
@endsection