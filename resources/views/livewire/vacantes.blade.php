<div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-white min-h-[60vh]  overflow-hidden">
    <!-- Lista de Vacantes -->
    <div class="overflow-y-auto">
        <h2 class="text-2xl font-bold p-6 border-b border-gray-700">Nuestras Vacantes Disponibles</h2>
        <div class="divide-y divide-gray-800 overflow-y-scroll">
            @forelse($vacantes as $vacante)
                <div wire:click="seleccionarVacante({{ $vacante->id }})"
                     class="p-5 cursor-pointer hover:bg-gray-800 transition space-y-3 {{ $vacanteSeleccionada && $vacanteSeleccionada->id === $vacante->id ? 'bg-gray-800' : '' }}">
                    <h3 class="text-lg font-semibold">{{ $vacante->puesto }}</h3>

                        <div class="text-sm mt-1 flex items-center gap-2">
                            <i class="fa-solid fa-location-dot w-4 h-4"></i>
                             {{ $vacante->modalidad }} 
                        </div>
                    <div class="text-sm flex items-center gap-2 mt-1">
                        <i class="fa-solid fa-clock w-4 h-4"></i>
                            {{ $vacante->horario }}
                    </div>
                    <div class="text-sm flex items-center gap-2 mt-1">
                        <i class="fa-solid fa-building w-4 h-4"></i>
                         {{ $vacante->empresa }}
                    </div>
                    <div class="text-sm mt-1 font-medium">
                        <i class="fa-solid fa-dollar w-4 h-4"></i>
                        {{ $vacante->salario }} MXN
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
        </div>
    </div>

    <!-- Detalle de Vacante -->
    <div class="p-8 min-h-1/2">
        @if($vacanteSeleccionada)
            <h2 class="text-3xl font-bold mb-2">{{ $vacanteSeleccionada->puesto }}</h2>            
            <p class="text-gray-400 mb-4">{{ $vacanteSeleccionada->modalidad }} | {{ $vacanteSeleccionada->horario }}</p>
            <p class="text-2xl font-semibold text-pink-500 mb-6">${{ $vacanteSeleccionada->salario }} MXN</p>
            <div class=" flex items-center gap-2 my-2">
                        <i class="fa-solid fa-building w-4 h-4"></i>
                         {{ $vacante->empresa }}
                    </div>

            <h3 class="text-lg font-semibold mb-2">Descripción</h3>
            <p class="text-gray-300 leading-relaxed post-content">{!! $vacanteSeleccionada->descripcion !!}</p>

            <div class="mt-6 flex justify-between items-center">
                <p class=" text-gray-400">Último día para postularse: 
                    <span class="text-white font-medium">
                        {{ $vacante->postulacion->format('d/m/Y') }}
                    </span>
                </p>
            </div>
            <a wire:navigate class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 px-4 py-2 rounded-lg font-semibold mt-3 w-full justify-center cursor-pointer" href="{{ route('vacante.show', $vacante->identificador) }}">Postularme</a>
        @else
            <p class="text-gray-400 text-center mt-10">Selecciona una vacante para ver los detalles</p>
        @endif
    </div>
</div>

