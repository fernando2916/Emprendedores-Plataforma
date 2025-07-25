@extends('components.layouts.admin')

@section('contenido')
<div class="w-full flex justify-between items-center max-w-screen-xl mx-auto">
  <p class="text-xl font-semibold">
    Usuarios
  </p>
  @can('usuarios create')

  <a href="{{ route('admin.users.create') }}" wire:navigate>
    <button
      class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 cursor-pointer">
      <i class="fa-solid fa-plus"></i>
      Crear Usuario
    </button>
  </a>
  @endcan
</div>

<section class="pt-3">
  <div class="mx-auto max-w-screen-xl">
    <!-- Start coding here -->
    <div class="bg-light-200 dark:bg-cont-100 relative shadow-md rounded-lg overflow-hidden">
      <div class="flex items-center justify-between p-4 gap-2">
        <div class="md:w-1/2">
          <form class="">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Buscar usuario" required="">
            </div>
          </form>
        </div>
        <div
          class="md:w-auto flex flex-col md:flex-row md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
          <div class="flex items-center w-full md:w-auto">
            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
              class="w-full md:w-auto flex items-center justify-center px-3 py-2  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
              type="button">
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400"
                viewbox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                  clip-rule="evenodd" />
              </svg>
              Filter
              <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
              </svg>
            </button>
            <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
              <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
              <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                <li class="flex items-center">
                  <input id="apple" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple
                    (56)</label>
                </li>
                <li class="flex items-center">
                  <input id="fitbit" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft
                    (16)</label>
                </li>
                <li class="flex items-center">
                  <input id="razor" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor
                    (49)</label>
                </li>
                <li class="flex items-center">
                  <input id="nikon" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon
                    (12)</label>
                </li>
                <li class="flex items-center">
                  <input id="benq" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ (74)</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left table-fixed">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-4 py-3">Id</th>
              <th scope="col" class="px-4 py-3">Nombre Completo</th>
              <th scope="col" class="px-4 py-3">Rol</th>
              <th scope="col" class="px-4 py-3">Correo</th>
              <th scope="col" class="px-4 py-3">Nombre de usuario</th>
              <th scope="col" class="px-4 py-3">Verificado</th>
              <th scope="col" class="px-4 py-3">Creado</th>
              <th scope="col" class="px-4 py-3">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user )
            <tr class="border-b dark:border-gray-700">
              <th scope="row" class="px-4 py-3 font-medium whitespace-nowrap dark:text-white">{{ $user->id
                }}</th>
              <td class="px-4 py-3">{{ $user->nombre_completo }}</td>
              <td class="px-4 py-3">
                @foreach ($user->roles as $role)
                @php
                // Asignar color según el nombre del rol
                $color = match($role->name) {
                'Admin' => 'bg-red-600 text-white',
                'Editor' => 'bg-blue-600 text-white',
                'Auditor' => 'bg-yellow-400 text-black',
                'Usuario' => 'bg-gray-400 text-white',
                default => 'bg-purple-500 text-white',
                };
                @endphp

                <span class="px-2 py-1 rounded text-xs font-semibold {{ $color }}">
                  {{ $role->name }}
                </span>
                @endforeach
              </td>
              <td class="px-4 py-3">{{ $user->email }}</td>
              <td class="px-4 py-3">{{ $user->username }}</td>
              <td class="px-4 py-3">
                <span class="bg-">
                  @if ($user->is_verified === 'Pendiente')
                  <span
                    class="border-transparent bg-red-700 text-white capitalize inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0">
                    {{ $user->is_verified}}
                  </span>
                  @else
                  <span
                    class="border-transparent bg-green-700 text-white capitalize inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0">
                    {{ $user->is_verified}}
                  </span>

                  @endif
                </span>
              </td>
              <td class="px-4 py-3">{{ $user->created_at->format('d-m-Y')}}</td>
              <td class="px-4 py-3 flex items-center justify-end">
                <div class="flex items-center gap-2">
                  @can('usuarios edit')

                  <a href="{{ route('admin.users.edit', $user) }}">
                    <button
                      class="px-3 py-2 bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-md cursor-pointer">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                  </a>
                  @endcan
                  @can('usuarios delete')

                  <form action="{{ route('admin.users.destroy', $user) }}" class="delete-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                      class="px-3 py-2 bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-md cursor-pointer">
                      <i class="fa-solid fa-trash"></i>
                    </button>
                  </form>
                  @endcan
                </div>
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
      </div>
      <div class="m-5">
         {{ $users->links('vendor.pagination.tailwind') }}
      </div>

  </div>
</section>

@endsection

@push('scripts')
<script>
  document.querySelectorAll('.delete-form').forEach(form => {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        Swal.fire({
                  title: "¿Estás seguro?",
                  text: "¡No podrás revertir esto!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Sí, eliminar",
                  cancelButtonText: "Cancelar",
                  background: "#120024",
                  color: "#ffffff",
                }).then((result) => {
                  if(result.isConfirmed) {
                    form.submit();
                  }
                })
      })
    })
</script>
@endpush