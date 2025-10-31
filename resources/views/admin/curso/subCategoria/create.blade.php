@extends('components.layouts.admin')

@section('contenido')
<x-breadcrumb :items="[
    ['url' => route('admin.subcategorias.index'), 'label' => 'Sub Categorias', 'navigate' => true],
    ['url' => '', 'label' => 'Crear Subcategoria']  {{-- Último elemento desactivado --}}
]" />

<div class="bg-light-200 dark:bg-cont-100 p-5 rounded-lg">
  <div class="">
    <div class="">
      <h3 class="text-3xl font-bold">Crear Sub Categoria</h3>
    </div>
    <div>
      <form action="{{ route('admin.subcategorias.store') }}" method="POST" noValidate>
        @csrf
        <div>
          <label for="name" class="text-sm font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Nombre
            de la sub categoria
          </label>
          <input id="name" name="nombre_subcategoria" value="{{ old('nombre_subcategoria') }}" type="text"
            placeholder="Tecnologia" class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-900 dark:placeholder:text-slate-400 mt-2 @error('nombre_subcategoria')
          dark:border-alerts-500
          @enderror">
          @error('nombre_subcategoria')

          <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="categoria_cursos_id" class="block mb-2 text-sm font-medium text-white mt-3">Seleciona una
            categoria</label>
          <select name="categoria_cursos_id" id="categoria_cursos_id"
            class="border border-link-300 text-gray-900 text-sm rounded-lg focus:ring-link-500 focus:border-link-500 block w-full p-2.5 dark:bg-gray-800 dark:border-link-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-link-500 dark:focus:border-link-500">
            <option selected disabled>Selecciona una categoria</option>
            @foreach ($categorias as $category)
            <option value="{{ $category->id }}">{{ $category->nombre_categoria }}</option>
            @endforeach
          </select>
          @error('categoria_post_id')
          <p class="text-sm font-semibold text-alerts-500">{{ $message }}</p>
          @enderror
        </div>
        @if(session('message'))
        <p class="text-red-500 text-sm mt-2">{{ session('message') }}</p>
        @endif



        <button type="submit"
          class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 w-full mt-5 cursor-pointer">Crear
          sub categoria</button>
      </form>
    </div>
  </div>
</div>
@endsection