@extends('components.layouts.principal')

@section('titulo')
Vacantes |
@endsection

@section('contenido')
<header>
  <div class="p-[3rem] md:py-[9rem] items-center mx-auto text-center bg-light-300 dark:bg-cont-100">
    <span class="text-link-400 dark:text-link-100 font-bold text-xs md:text-3xl"> Agencia de Diseño Gráfico, Fotografía
      eh Impresión</span>
    <h3 class="text-lg md:text-5xl font-extrabold my-5">Vacantes</h3>
    <p class="text-sm md:text-xl">
      Encuentra el trabajo de tus sueños; ofrecemos vacantes para
      diseñadores, desarrolladores, fotográfos, impresores y mucho más!
    </p>
  </div>
</header>
<div class="py-12">
  <div class="max-w-7xl mx-auto">
     <h3 class="font-bold text-xl md:text-3xl container mx-auto mb-12">
              Nuestras Vacantes Disponibles
      </h3>
      <div class="bg-light-300 dark:bg-cont-100 rounded-lg p-6 shadow-sm divide-y divide-slate-300">
        @forelse ($vacantes as $vacante)
           <div class="md:flex md:justify-between md:items-center py-5">
            <div class="md:flex-1">
              <a wire:navigate class="text-3xl font-extrabold " href="{{ route('vacante.show', $vacante->identificador) }}">
                {{ $vacante->puesto }}
              </a>
              <p class="text-base mb-3">
                <i class="fa-solid fa-location-dot"></i>
                {{ $vacante->modalidad }}
              </p>
              <p class="text-base mb-3">
                <i class="fa-solid fa-clock"></i>
                  {{ $vacante->horario }}
              </p>
              <p class="text-base mb-3">
                 <i class="fa-solid fa-dollar"></i>
                  {{ $vacante->salario }} MXN.
              </p>
              <p class="font-bold text-xs">
                Último día para postularse:
                <span class="font-normal">{{ $vacante->postulacion->format('d/m/Y') }}</span>  
               </p>
            </div>
            <div class="mt-5 md:mt-0">
              <a wire:navigate class="bg-btn-200 hover:bg-btn-400 text-sm text-white dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors uppercase duration-150 rounded-lg mt-5 font-bold p-3" href="{{ route('vacante.show', $vacante->identificador) }}">Ver vacante</a>
            </div>
           </div>          

        @empty
            <div class="flex flex-col items-center justify-center my-20">
                    <h2 class="text-3xl text-center font-semibold">
                      Por el momento no tenemos vacantes disponibles.
                    </h2>
                    <a href="{{ route('contacto.index') }}" wire:navigate>
                      <button
                        type="button"
                        class="bg-btn-200 hover:bg-btn-400 text-white dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-md p-3 mt-5 cursor-pointer"
                      >
                        Solicitar Información
                      </button>
                    </a>
                  </div>
        @endforelse
         <div class="mt-4 m-5">
         {{ $vacantes->links('vendor.pagination.tailwind') }}
      </div>        
      </div>
  </div>
</div>
@endsection