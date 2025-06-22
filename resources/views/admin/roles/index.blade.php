@extends('components.layouts.admin')

@section('contenido')
<div class="w-full flex justify-between items-center max-w-screen-xl mx-auto">
  <p class="text-xl font-semibold">
    Roles
  </p>
  <a wire:navigate href="{{ route('admin.roles.create') }}">
    <button
      class="bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 text-white dark:hover:bg-btn-600 duration-300 transition-colors rounded-md px-3 py-2 cursor-pointer">
      <i class="fa-solid fa-pen"></i>
      Crear Rol
    </button>
  </a>
</div>

<section class="pt-3">
  <div class="mx-auto max-w-screen-xl">
    <!-- Start coding here -->
    <div class="bg-light-200 dark:bg-cont-100 relative shadow-md rounded-lg overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
          <thead class="uppercase bg-light-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-4 py-3">Id</th>
              <th scope="col" class="px-4 py-3">Nombre</th>
              <th scope="col" class="px-4 py-3">Permisos</th>
              <th scope="col" class="px-4 py-3">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($roles as $role )
            <tr class="border-b dark:border-gray-700 ">
              <th scope="row" class="px-4 py-3 font-medium whitespace-nowrap dark:text-white">{{ $role->id
                }}</th>
              <td class="px-4 py-3">{{ $role->name }}</td>
              <td class="px-4 py-3">
                @if ($role->permissions)
                @foreach ($role->permissions as $permission )
                  <span class="bg-gray-700 text-sm font-medium px-2.5 py-0.5 rounded-sm dark:bg-gray-800">
                  {{ $permission->name }}
                  </span>
                  @endforeach
                @endif
              </td>
              <td class="px-4 py-3 flex items-center justify-end">
                <div class="flex items-center gap-2">
                  <a href="{{ route('admin.roles.edit', $role) }}" wire:navigate>
                    <button class="px-3 py-2 bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-md cursor-pointer">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                  </a>
                  <form class="delete-form" action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-2 bg-btn-200 hover:bg-btn-400 dark:bg-btn-400 dark:hover:bg-btn-600 transition-colors duration-150 rounded-md cursor-pointer">
                      <i class="fa-solid fa-trash"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="m-5">
         {{ $roles->links('vendor.pagination.tailwind') }}
      </div>
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