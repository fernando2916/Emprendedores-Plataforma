@extends('components.layouts.admin')

@section('contenido')
<x-breadcrumb :items="[
    ['url' => route('admin.categorias.index'), 'label' => 'Categorias', 'navigate' => true],
    ['url' => '', 'label' => 'Editar categoria']  {{-- Último elemento desactivado --}}
]" />

<div class="bg-light-200 dark:bg-cont-100 p-5 rounded-lg">
    <div class="">
        <div class="">
            <h3 class="text-3xl font-bold">Editar Categoria</h3>
        </div>
        <div class="">
            <form action="{{ route('admin.categorias.update', $categoria) }}" method="POST" noValidate>
                @csrf
                @method('PUT')
                <div>
                    <label for="name"
                        class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Nombre de la categoria
                        </label>
                    <input id="name" name="nombre_categoria" value="{{ old('nombre_categoria', $categoria->nombre_categoria) }}" type="text" placeholder="Tecnologia" class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-900 dark:placeholder:text-slate-400 mt-2 @error('nombre_categoria')
          dark:border-alerts-500
          @enderror">
                    @error('nombre_categoria')

                    <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
                    @enderror
                </div>
                @if(session('message'))
                <p class="text-red-500 text-sm mt-2">{{ session('message') }}</p>
                @endif

               

                <button type="submit"
                    class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 w-full mt-5 cursor-pointer">Editar
                    Categoria</button>
            </form>
        </div>
    </div>
</div>
@endsection