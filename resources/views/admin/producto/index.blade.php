@extends('components.layouts.admin')

@section('contenido')

<div class="w-full flex justify-between items-center max-w-screen-xl mx-auto">
  <p class="text-xl font-semibold">
    Productos
  </p>
  @can('producto create')
  
  <a href="{{ route('admin.producto.create') }}" wire:navigate>
    <button
    class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 cursor-pointer">
    <i class="fa-solid fa-plus"></i>
    Crear Producto
  </button>
</a>
@endcan
</div>


@endsection