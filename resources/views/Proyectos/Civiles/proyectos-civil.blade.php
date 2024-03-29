@extends('layouts.page')
@section('main')


<x-nav-link />
<div class="relative  overflow-hidden rounded-b-lg header-page ">


    <!-- Encabezado  -->
    <div class="duration-700 ease-in-out flex  ">
        <div class=" fondo__carrusel absolute top-0 left-0 z-20 w-full h-full nav-bg-scroll"></div>
        <img src="{{ asset('images/Carrusel/carrusel (1).jpg') }}" class="absolute h-full w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
        <h1 class="font-sans text-white text-5xl absolute bottom-10 left-10 z-40 mb-4 ml-4 texto-con-sombra"><strong>Proyectos Ingeniería </strong> <strong class="titulo__banner-dos"> Civil</strong></h1>
    </div>

</div>

<div class="p-5 w-full flex flex-col space-y-5 items-center">

    @foreach ($civilProjects as $city => $projects)
    <div class="flex flex-col w-full max-w-screen-2xl items-center border p-2 rounded-xl bg-white ">

        <h2 class="text-cyan-900 text-4xl font-extrabold mb-5 titulo__ciudad">{{ $city }}</h2>
        <hr>

        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($projects as $civilProject)
            <div class="tarjeta_proyecto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a data-modal-target="default-modal-id:{{$civilProject->id}}" data-modal-toggle="default-modal-id:{{$civilProject->id}}" class="block h-40 overflow-hidden">
                    <img class="object-cover w-full h-full rounded-t-lg" src="{{ $civilProject->urls_fotos[0] ?? null}}" alt="Imagen">
                </a>
                <div class="p-5 contenido_proyecto">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$civilProject->nombre}}</h5>

                    <p class="mb-3 text-gray-700 dark:text-gray-400 proyecto_descripcion">{{$civilProject->descripcion ?? null}}</p>
                    <!-- Modal toggle -->
                    <a data-modal-target="default-modal-id:{{$civilProject->id}}" data-modal-toggle="default-modal-id:{{$civilProject->id}}" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ver más
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Main modal -->
            <div id="default-modal-id:{{$civilProject->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                {{$civilProject->nombre}}
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-id:{{$civilProject->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="flex flex-wrap space-x-2 space-y-2">
                                @if (!empty($civilProject->urls_fotos))
                                @if (count($civilProject->urls_fotos) > 1)
                                <div id="default-carousel-id:{{$civilProject->id}}" class="relative w-full overflow-hidden" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                        <!-- Imágenes del Proyecto -->
                                        @foreach($civilProject->urls_fotos as $index => $urlFoto)
                                        <a href="{{$urlFoto}}" class="{{ $index === 0 ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item target="blank">
                                            <img src="{{ $urlFoto }}" class="absolute inset-0 w-full h-full object-cover" alt="Imagen {{ $index + 1 }}">
                                        </a>
                                        @endforeach
                                    </div>

                                    <!-- Controles del Carrusel -->
                                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                        @foreach($civilProject->urls_fotos as $index => $urlFoto)
                                        <button type="button" class="w-3 h-3 rounded-full {{ $index === 0 ? 'bg-white dark:bg-gray-800' : 'bg-gray-300 dark:bg-gray-600' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                                        @endforeach
                                    </div>

                                    <!-- Controles de Navegación -->
                                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                            </svg>
                                            <span class="sr-only">Previous</span>
                                        </span>
                                    </button>
                                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                                    </button>
                                </div>
                                @else
                                <!-- Muestra la imagen estática si solo hay un elemento -->
                                <a href="{{$civilProject->urls_fotos[0] ?? null}}" class="relative w-full h-96 overflow-hidden rounded-lg" target="blank">

                                    <img src="{{ $civilProject->urls_fotos[0] ?? null }}" class="absolute inset-0 w-full h-full object-cover" alt="Imagen única">
                                </a>

                                @endif
                                @endif




                            </div>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                {{$civilProject->descripcion ?? null}}.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal-id:{{$civilProject->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            <p>No hay proyectos para esta ciudad.</p>
            @endforelse
        </div>

    </div>
    @endforeach
</div>

<button id="scrollToTopBtn" class="fixed bottom-4 right-4 px-4 py-2 bg-sky-800 text-white rounded-full z-50 hover:bg-sky-900 scroll-trigger">
    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
    </svg>
</button>

<a href="https://wa.me/573102780909" target="_blank" class="fixed flex items-center bottom-4 left-4 px-2 py-2 z-50 bg-green-500 text-white rounded-full hover:bg-green-900 scroll-trigger">
    <img src="{{ asset('images/whatsapp_logo_icon_229310.png') }}" class="w-8" alt="">
    <small class="ml-2">Escribir por WhatsApp</small>
</a>
<x-footer />
@endsection