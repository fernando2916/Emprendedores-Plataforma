<div class="h-full px-3 pb-4 overflow-y-auto bg-light-100 dark:bg-nav-900 pt-5">
      <ul class="space-y-2 font-medium">
         <li>
            <a wire:navigate href="{{ route('dashboard') }}" class="flex items-center p-2 text-black rounded-lg dark:text-white hover:bg-light-200 dark:hover:bg-nav-700 group">
              <i class="fa-solid fa-home"></i>
               <span class="ms-3">Inicio</span>
            </a>
         </li>
  <li>
        <button type="button"
          class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-light-300 dark:hover:bg-nav-700"
          aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
         <i class="fa-solid fa-tag"></i>
          <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Categorias</span>
         <i class="fa-solid fa-angle-down"></i>
        </button>
        <ul id="dropdown-example" class="hidden py-2 space-y-2">
          <li>
            <a href="#"
              class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-8 gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
              <i class="fa-solid fa-shirt"></i>
              Categoria Producto
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-8 gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
              <i class="fa-solid fa-laptop-code"></i>
              Categoria Curso
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-8 gap-3 group hover:bg-light-300 dark:hover:bg-nav-700">
              <i class="fa-solid fa-book"></i>
              Categoria Blog
            </a>
          </li>
        </ul>
      </li>
      </ul>
   </div>