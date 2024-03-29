@extends('layouts.page')
@section('main')
<!--Carrusel-->
<section>
    <x-nav-link />
    <div id="default-carousel" class="w-full " data-carousel="slide">

        <!-- Carousel wrapper -->
        <article class="relative overflow-hidden rounded-b-lg carrusel">
            <div id="capa-transparente" class="absolute top-0 z-30 w-full h-full fondo__carrusel"></div>
            <!-- Texto -->
            <div class="absolute  inset-0 flex flex-wrap gap-2 justify-end items-end m-16 mb-28 z-40 text-start text-xl md:text-3xl lg:text-5xl  texto-con-sombra">
                <p class=" titulo__banner max-w-screen-2xl">
                    Fotos reales de <span class="titulo__banner-dos">Nuestros Proyectos</span>
                </p>
            </div>
            <div class="absolute hidden inset-0 flex flex-col justify-end items-start m-16 z-40 text-start text-xl md:text-3xl lg:text-5xl  texto-con-sombra">
                <a href="#" class="text-white bg-cyan-700 hover:bg-cyan-800 text-lg font-bold ml-6 my-4 py-2 px-4 rounded-lg">
                    Contactenos
                </a>
            </div>

            @for($i = 1; $i <= 8; $i++) <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/Carrusel/carrusel ('.$i.').jpg') }}" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                @endfor

                <!-- Slider indicators -->
                <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-50 flex space-x-3 rtl:space-x-reverse">
                    @for($i = 1; $i <= 8; $i++) <button type="button" class="w-3 h-3 rounded-full {{ $i == 1 ? 'bg-gray-200' : 'bg-gray-200' }}" aria-current="{{ $i == 1 ? 'true' : 'false' }}" aria-label="Slide {{ $i }}" data-carousel-slide-to="{{ $i - 1 }}"></button>
                        @endfor
                </div>

                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
        </article>

    </div>
</section>

<div class="flex flex-col justify-center items-center ">
    <!-- Nuestra empresa -->
    <div id="aboutUs" class="grid grid-cols-1 sm:grid-cols-2 gap-8 my-6 p-8 max-w-screen-xl">
        <!-- Imagen con aumento de tamaño y recorte -->
        <div class="overflow-hidden">
            <img src="{{asset('images/nuestra_Empresa.png')}}" class="rounded-xl" alt="Nuestra Empresa">
        </div>

        <!-- Contenido de texto -->
        <div class="flex flex-col justify-center space-y-10 items-center bg-white shadow-md rounded-lg  p-8 h-full">
            <h1 class="text-6xl font-bold text-cyan-900">Nuestra <strong class="text-cyan-700">Empresa</strong></h1>
            <p class="m-2 text-lg">
                Somos una empresa Santandereana fundada en 1988; año desde
                el cual nos hemos especializado en la construcción de obras de
                concreto en sus dos modalidades: Sistema Tradicional y Sistema
                Industrializado. También hacemos presencia en el sector eléctrico
                colombiano, participando en grandes proyectos de Construcción
                Residencial, Comercial, Industrial, Redes de Electrificación Rural y
                Urbana, así como Líneas de Transmisión y Montaje de
                Subestaciones
            </p>
        </div>
    </div>

    <!-- Misión y visión -->
    <div class="py-10 z-50  w-full  flex justify-center items-center relative ">
        <img src="{{ asset('images/Carrusel/carrusel (8).jpg') }}" class="object-cover h-full w-full absolute z-30">
        <div class="w-full h-full mision-vision z-40 absolute"></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8  my-2  max-w-screen-xl z-50 ">
            <!-- Contenido de texto -->
            <div class="flex flex-col items-start bg- shadow-md p-8 rounded-lg text-white">
                <h1 class="text-6xl mb-6 font-bold ">Nuestra <strong class="text-cyan-600">Misión</strong></h1>
                <p class="m-2 text-md">
                    Ofrecer a nuestros clientes una alternativa innovadora, práctica, confiable y de la más alta calidad, durante la
                    concepción, maduración, diseño y ejecución de proyectos que involucren de alguna manera las diversas áreas de la
                    Ingeniería Eléctrica, Ingeniería Civil y Alquiler y Venta de equipos para la construcción.
                </p>
            </div>
            <div class="flex flex-col items-start bg- shadow-md p-8 rounded-lg text-white">
                <h1 class="text-6xl mb-6 font-bold ">Nuestra <strong class="text-cyan-600">Visión</strong></h1>
                <p class="m-2 text-md">
                    Nuestro crecimiento va de la mano con la excelencia en el servicio que prestamos. Para alcanzar nuestras metas
                    estamos comprometidos con la constante formación técnica y humana de nuestro personal y propender por un
                    continuo mejoramiento en los procesos, para garantizar un servicio de alta calidad, que contribuya al desarrollo social
                    de quienes depositan en nosotros su confianza
                </p>
            </div>

        </div>
    </div>





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
<!-- Footer -->
<x-footer />




@endsection