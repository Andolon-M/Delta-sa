@extends('layouts.page')
@section('main')

<x-nav-link />
<section class="relative formaleta-metalica overflow-hidden rounded-b-lg header-page ">
    <div class="informacion_formaleta_metalica ">
        <div>
            <div class="titulo_formaleta">
                <h1 class="">
                    Alquiler y venta de
                    <span class="color-primary">formaleta metalica</span>
                </h1>

            </div>
            <p class="descripcion_formaleta">
                DELTA INGENIERIA S.A ofrece formalestas en stock para proyectos de construcción, respaldados por 20 años de experiencia en el sector. Nuestro enfoque está en satisfacer las necesidades de los clientes mediante el diseño y fabricación de encofrados metálicos. Nuestros productos se adaptan a las necesidades específicas de cada proyecto, y nuestro equipo comercial y técnico está disponible para garantizar resultados óptimos en su utilización.
            </p>

            <a href="https://wa.me/573102780909" target="_blank" class="flex items-center bottom-4 left-4 px-2 py-2 z-50 bg-green-500 text-white rounded-full hover:transition-all hover:bg-green-900 hover:shadow-white scroll-trigger">
                <img src="{{ asset('images/whatsapp_logo_icon_229310.png') }}" class="w-8" alt="">
                <small class="ml-2 capitalize">Haga su cotizaicon ahora</small>
            </a>
        </div>

    </div>

</section>

<button id="scrollToTopBtn" class="fixed bottom-4 right-4 px-4 py-2 bg-sky-800 text-white rounded-full z-50 hover:bg-sky-900 scroll-trigger">
    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
    </svg>
</button>


<x-footer />
@endsection