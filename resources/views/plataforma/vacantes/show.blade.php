@extends('components.layouts.principal')

@section('titulo')
Vacantes |
@endsection

@section('contenido')
<div class="p-5 space-y-5 max-w-7xl mx-auto">
  <div class="">

    <h3 class="text-3xl font-extrabold">
      {{ $vacante->puesto }}
    </h3>
    <div class="flex items-center gap-5">
      <p class="text-base">
        <i class="fa-solid fa-location-dot"></i>
        {{ $vacante->modalidad }}
      </p>
      <p class="text-base">
        <i class="fa-solid fa-clock"></i>
        {{ $vacante->horario }}
      </p>
      <p class="text-base">
        <i class="fa-solid fa-dollar"></i>
        {{ $vacante->salario }} MXN.
      </p>
      <p class="font-bold">
        Último día para postularse:
        <span class="font-normal">{{ $vacante->postulacion->format('d/m/Y') }}</span>
      </p>
    </div>
  </div>

  <div class="space-y-5">
    <div class="">
      {{ $vacante->requisitos }}
    </div>
    <div class="post-content bg-cont-100 rounded-md p-3 text-lg">
      {!! $vacante->descripcion !!}
    </div>
  </div>
  <div class="w-full">
    <h3 class="text-center font-bold text-3xl mb-4">Postúlate</h3>

    <form class="space-y-3" action="{{ route('vacante.store', $vacante->id) }}"  method="POST" noValidate  enctype="multipart/form-data">
      @csrf
        <!-- Campo nombre -->
        <div>
            <label for="nombre" class="font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre Completo"
                class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-300 dark:placeholder:text-slate-400 mt-2 @error('nombre')
          dark:border-alerts-500  @enderror">
            @error('nombre') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Campo correo -->
        <div>
            <label for="correo" class="font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Correo</label>
            <input type="email" name="correo" placeholder="Correo Electrónico"
                class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-300 dark:placeholder:text-slate-400 mt-2 @error('correo')
          dark:border-alerts-500  @enderror">
            @error('correo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Campo telefono -->
        <div>
            <label for="telefono" class="font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">Teléfono</label>
            <input type="tel" name="telefono" placeholder="Número de contacto"
                class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-300 dark:placeholder:text-slate-400 mt-2 @error('telefono')
          dark:border-alerts-500  @enderror">
            @error('telefono') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Campo CV -->
        <div>
            <label for="curriculum" class="font-medium mb-2 after:ml-0.5 after:text-red-500 after:content-['*']">CV / Hoja de vida</label>
            <input type="file" name="curriculum" accept=".pdf"
                class="disabled:bg-nav-900 disabled:border-nav-900 border-link-100 focus:shadow-link-200 w-full rounded-md border-2 bg-transparent p-2 outline-none focus:shadow-md placeholder:text-slate-300 dark:placeholder:text-slate-400 mt-2 @error('curriculum')
          dark:border-alerts-500  @enderror">
            @error('curriculum') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Botón -->
        <button type="submit"
            class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 text-white transition-colors duration-150 rounded-md p-3 mt-5 cursor-pointer">
            Postularme
        </button>
    </form>
</div>
</div>
@endsection

@push('scripts')
@if (session('swal'))
<script>
    Swal.fire(@json(session('swal')));
</script>
@endif
@endpush