<nav id="Navbar" class="nav  z-50  w-full  py-2 fixed">
    <div class="max-w-screen-2xl flex flex-wrap object-fill h-16 items-center justify-between mx-auto px-4 py-1 relative z-50">
        
        <x-logoDELTA-imagen />


        <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-between text-lg text-gray-300 hover:text-cyan-900 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden" aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <div class="hidden w-full ml-full md:flex md:w-auto md:bg-transparent bg-white rounded-md shadow-lg lg:shadow-none ml-auto mt-2 " id="navbar-multi-level">
            <ul class="flex flex-col md:flex-row font-medium p-2 md:p-0 mt-4 md:text-gray-950 lg:text-zinc-100 rounded-lg md:space-x-8 rtl:space-x-reverse  md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li class="rounded-md px-1">
                    <a href="/" class="block py-2 px-3 md:p-0 sm:text-gray-950 md:text-zinc-200 hover:text-cyan-700  transition-colors duration-300 font-semibold text-lg md:text-base" aria-current="page">Inicio</a>
                </li>
                <li class="rounded px-1">
                    <a href="/#aboutUs" class="block py-2 px-3 md:p-0 sm:text-gray-950 md:text-zinc-200 hover:text-cyan-700 hover:shadow-md transition-colors duration-300 font-semibold text-lg md:text-base">Nuestra Empresa</a>
                </li>

                <button id="botonProyectos" data-dropdown-toggle="dropdown-proyectos" class="button-style sm:text-gray-950 md:text-zinc-200 hover:text-cyan-200 transition-colors duration-300 font-semibold text-lg md:text-base flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                    Proyectos
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown-proyectos" class="hidden z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-56 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdown-proyectos">
                        <li>
                            <a href="{{route('proyectos/ing/civil')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ingeniería civil</a>
                        </li>
                        <li>
                            <a href="{{route('proyectos/ing/electrica')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ingeniería Electrica</a>
                        </li>
                    </ul>
                </div>
                <!--Productos y servicios-->
                <button id="productos-y-servicios" data-dropdown-toggle="dropdown-productos-y-servicios" class="button-style sm:text-gray-950 md:text-zinc-200 hover:text-cyan-200 transition-colors duration-300 font-semibold text-lg md:text-base flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                    Productos y Servicios
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown-productos-y-servicios" class="hidden z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-56 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdown-productos-y-servicios">
                        <li>
                            <a href="{{route('formaleta-metalica')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Alquiler y venta de fomaleta metálica</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ingeniería civil</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ingeniería Electrica</a>
                        </li>
                    </ul>
                </div>


                


                <!-- Otros elementos del menú aquí -->
            </ul>




        </div>

    </div>
    <div id="menu-productos-y-servicios" class=" hidden mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Alquiler o venta de fomaleta metálica</div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Ingeniería civil</div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Ingeniería Electrica</div>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div id="menu-proyectos" class=" hidden mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul>
                <li>
                    <a href="{{route('proyectos/ing/civil')}}" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Ingeniería civil</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Ingeniería Electronica</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>