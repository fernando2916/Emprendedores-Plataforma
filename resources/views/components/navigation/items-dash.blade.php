<div class="h-full px-3 pb-4 overflow-y-auto bg-light-100 dark:bg-nav-900 pt-5">
  <ul class="space-y-2 font-medium">
    <li>
      <a wire:navigate href="{{ route('dashboard') }}"
        class="flex items-center p-2 rounded-lg dark:text-white hover:bg-light-200 dark:hover:bg-nav-700 group">
        <i class="fa-solid fa-home"></i>
        <span class="ms-3">Inicio</span>
      </a>
    </li>
    @can('usuarios index')

    <li>
      <a wire:navigate href="{{ route('admin.users.index') }}"
        class="flex items-center p-2 rounded-lg dark:text-white hover:bg-light-200 dark:hover:bg-nav-700 group">
        <i class="fa-solid fa-users"></i>
        <span class="ms-3">Usuarios</span>
      </a>
    </li>
    @endcan
    @can('roles index')

    <li>
      <a href="{{ route('admin.roles.index') }}" wire:navigate
        class="flex items-center p-2 rounded-lg dark:text-white hover:bg-light-200 dark:hover:bg-nav-700 group">
        <i class="fa-solid fa-user-gear"></i>
        <span class="ms-3">
          Roles
        </span>
      </a>
    </li>
    @endcan
    @can('permisos index')

    <li>
      <a href="{{ route('admin.permissions.index') }}" wire:navigate
        class="flex items-center p-2 rounded-lg dark:text-white hover:bg-light-200 dark:hover:bg-nav-700 group">
        <i class="fa-solid fa-user-shield"></i>
        <span class="ms-3">
          Permisos
        </span>
      </a>
    </li>
    @endcan
    @can('ver blog')

    <div>
      <p class="text-gray-400 ml-2">Blog</p>
      @can('blog index')
        
      <li>
        <a href="{{ route('admin.blogs.index') }}" wire:navigate
        class="flex items-center w-full p-2 transition duration-75 rounded-lg  gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
        <i class="fa-solid fa-book"></i>
        Publicaciones
      </a>
    </li>
    @endcan
      @can('categoria post index')        
      <li>
        <a href="{{ route('admin.categories.index') }}" wire:navigate
        class="flex items-center w-full p-2 transition duration-75 rounded-lg gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
        <i class="fa-solid fa-tag"></i>
        Categorias Post
      </a>
    </li>
    @endcan
      
    </div>
    @endcan
    @can('ver diseño')

    <div>
      <p class="text-gray-400 ml-2">Diseño</p>
      @can('plan desing index')
        
      <li>
        <a href="{{ route('admin.plans.index') }}" wire:navigate
        class="flex items-center w-full p-2 transition duration-75 rounded-lg  gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
        <i class="fa-solid fa-dollar-sign"></i>
        Planes Diseño
      </a>
    </li>
    @endcan
      @can('cotizacion desing index')
        
      <li>
        <a href="{{ route('admin.cotizacion.index') }}" wire:navigate
        class="flex items-center w-full p-2 transition duration-75 rounded-lg  gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
        <i class="fa-solid fa-folder-tree"></i>
        Cotizaciones Diseño
      </a>
    </li>
    @endcan      
      @can('proyectos index')
        
      <li>
        <a href="{{ route('admin.proyecto.index') }}" wire:navigate
        class="flex items-center w-full p-2 transition duration-75 rounded-lg  gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
        <i class="fa-solid fa-briefcase"></i>
        Proyectos Diseño
      </a>
    </li>
    @endcan      
      @can('opinion desing index')
        
      <li>
        <a href="{{ route('admin.opinion.index') }}" wire:navigate
        class="flex items-center w-full p-2 transition duration-75 rounded-lg  gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
        <i class="fa-solid fa-message"></i>
        Opiniones Diseño
      </a>
    </li>
    @endcan      
    </div>
    @endcan
  </ul>
</div>