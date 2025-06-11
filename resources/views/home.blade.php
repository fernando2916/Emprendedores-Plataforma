@extends('components.layouts.principal')

@section('contenido')

<x-plataforma.home.carousel />
@auth
<div class="flex justify-center">
    <h1 class="text-xl md:text-4xl font-bold">
        Bienvenido(a) {{ auth()->user()->nombre_completo }}</h1>
</div>
@endauth
<x-plataforma.home.servicios />
<div class="">
    productos 
</div>
<div class="">
    Cursos 
</div>
<div class="">
    Blog 
</div>
<x-plataforma.home.boletin />
<x-plataforma.home.testimonios/>
</div>
@endsection