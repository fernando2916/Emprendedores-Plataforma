@extends('components.layouts.admin')

@section('contenido')
<x-breadcrumb :items="[
    ['url' => route('users.index'), 'label' => 'Usuarios', 'icon' => 'fa-solid fa-users', 'navigate' => true],
    ['url' => '', 'label' => 'Crear Usuario']  {{-- Último elemento desactivado --}}
]" />
@endsection