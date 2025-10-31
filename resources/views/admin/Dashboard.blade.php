@extends('components.layouts.admin')

@section('contenido')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
  <livewire:estadisticas-usuarios />
  <livewire:estadisticas-post />
  {{-- <div class="bg-cont-100 p-5 rounded-lg">
    <div class="flex justify-between items-center">  
      <p class="font-bold">Usuarios</p>
      <p class="">
         <i class="fa-solid fa-users"></i>
      </p>
    </div>
    <div class="">
      Total de usuarios: {{ $totalusuarios }}
    </div>
  </div> --}}
  {{-- <div class="bg-cont-100 p-5 rounded-lg">
    <div class="flex justify-between items-center">  
      <p class="font-bold">Publicaciones</p>
      <p class="">
         <i class="fa-solid fa-book"></i>
      </p>
    </div>
    <div class="">
      Total de publicaciones: {{ $totalpublicaciones }}
    </div>
  </div>
  <div class="bg-cont-100 p-5 rounded-lg">
    <div class="flex justify-between items-center">  
      <p class="font-bold">Productos</p>
      <p class="">
         <i class="fa-solid fa-store"></i>
      </p>
    </div>
    <div class="">
      Total de productos: {{ $totalproductos }}
    </div>
  </div>
  <div class="bg-cont-100 p-5 rounded-lg">
    <div class="flex justify-between items-center">  
      <p class="font-bold">Usuarios</p>
      <p class="">
         <i class="fa-solid fa-users"></i>
      </p>
    </div>
    <div class="">
      Total de usuarios: {{ $totalusuarios }}
    </div>
  </div> --}}
  
</div>
@endsection