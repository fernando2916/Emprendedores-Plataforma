<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="darkMode()" x-init="init()"
  :class="{ 'dark': isDarkMode }">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Panel de Administración | Emprendedores Creativos &copy; </title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://kit.fontawesome.com/255bc8dd2c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @livewireStyles

</head>

<body class="bg-fondo-100 dark:bg-fondo-200 font-display text-white selection:bg-selec-100 selection:text-white">

  <nav class="fixed top-0 z-50 w-full bg-light-100 border-b border-gray-200 dark:bg-nav-900 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-light-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Abrir panel</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="{{ route('dashboard') }}" wire:navigate class="flex ms-2 md:me-24">
            <img src="{{ asset('images/emprende-blanco.png') }}" class="h-8 me-3" alt="FlowBite Logo" />            
          </a>
        </div>
        <div class="flex items-center">
          <x-btn-darkMode />
          <div class="flex items-center ms-3">
            <div>
              <button type="button"
                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-link-600"
                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Abrir menu usuario</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                  alt="user photo">
              </button>
            </div>
            <div
              class="z-50 hidden my-4 text-base list-none bg-light-300 divide-y divide-gray-100 rounded-md shadow-sm dark:bg-nav-800 w-56 dark:divide-gray-600"
              id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm" role="none">
                  {{ auth()->user()->nombre_completo }} Admin
                </p>
                <p class="text-sm font-medium truncate text-link-100" role="none">
                  {{ auth()->user()->email }}
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg  dark:text-white hover:bg-light-200 focus:outline-hidden focus:bg-gray-100 text-slate-200 dark:hover:bg-nav-700" 
      wire:navigate 
      href="{{ route('home') }}"
      >
          <i class="fa-solid fa-home"></i>
         Plataforma
        </a>
                </li>
                <li>
                  <form action=" {{ route('logout') }}" method="post">

                    @csrf
                    <button type="submit"
                      class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm dark:text-white hover:bg-light-200 focus:outline-hidden focus:bg-gray-100 text-slate-200 dark:hover:bg-nav-700 w-full cursor-pointer">
                      <i class="fa-solid fa-right-from-bracket"></i>
                      Salir
                    </button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-[3.5rem] transition-transform -translate-x-full bg-bg-light-100 border-r border-gray-200 sm:translate-x-0 dark:bg-nav-900 dark:border-gray-700"
    aria-label="Sidebar">
    <x-navigation.items-dash />
  </aside>

  <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">

      @yield('contenido')
    </div>
  </div>

  @livewireScripts
  @if (session('swal'))
  <script>
    Swal.fire(@json(session('swal')));
  </script>
  @endif
  <script>
    function darkMode() {
        return {
            isDarkMode: false,
            init() {
                const storedTheme = localStorage.getItem('theme');
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                this.isDarkMode = storedTheme === 'dark' || (!storedTheme && prefersDark);
                this.applyTheme();

                Livewire.hook('message.processed', () => {
                    this.applyTheme();
                });
            },
            toggle() {
                this.isDarkMode = !this.isDarkMode;
                localStorage.setItem('theme', this.isDarkMode ? 'dark' : 'light');
                this.applyTheme();
            },
            applyTheme() {
                document.documentElement.classList.toggle('dark', this.isDarkMode);
            }
        }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>