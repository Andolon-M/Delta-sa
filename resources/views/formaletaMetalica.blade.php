@extends('layouts.page')
@section('main')

<x-nav-link />

<section class="relative formaleta-metalica overflow-hidden rounded-b-lg header-page ">
    <div class="informacion_formaleta_metalica rounded-3xl">
        <div>
            <div class="titulo_formaleta">
                <h1 class="">
                    Alquiler y venta de
                    <span class="color-primary">formaleta metalica</span>
                </h1>

            </div>
            <p class="descripcion_formaleta">
                DELTA INGENIERÍA S.A. ofrece formalestas metálicas en stock respaldadas por 20 años de experiencia en construcción. Nos enfocamos en satisfacer las necesidades del cliente con diseño y fabricación personalizados. Nuestro equipo técnico y comercial garantiza resultados óptimos en la utilización de nuestros productos, que incluyen: </p>
            <ul class="servicios_fomaleta flex justify-around items-center text-sm">
                <li>
                    <div>
                        <img src="{{asset('images/formaleta/icono_pantalla estructural.svg')}}" alt="">

                        <span>Pantallas<br>estrcturales</span>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="{{asset('images/formaleta/icono_Columnas.svg')}}" alt="">
                        <span>Columnas</span>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="{{asset('images/formaleta/icono_vigas.svg')}}" alt="">
                        <span>Vigas<br>aéreas</span>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="{{asset('images/formaleta/icono_Cimentacion.svg')}}" alt="">
                        <span>Cimentaciones<br>y caison</span>
                    </div>
                </li>
            </ul>
            <a href="#" class="my-2 flex flex-row items-center justify-center boton"><small>Ver más</small><i class='bx bxs-right-top-arrow-circle mx-2'></i></a>
            <a href="https://wa.me/573102780909" target="_blank" class="flex items-center bottom-4 left-4 px-2 py-2 z-50 bg-green-500 text-white rounded-full hover:transition-all hover:bg-green-900 hover:shadow-white scroll-trigger">
                <img src="{{ asset('images/whatsapp_logo_icon_229310.png') }}" class="w-8" alt="">
                <small class="ml-2 capitalize">Haga su cotizaicon ahora</small>
            </a>

        </div>

    </div>

</section>

<section class="relative  overflow-hidden rounded-b-lg header-page my-4 hidden">
 <div>
    <h1>
        Ventajas
    </h1>
    <p>

    </p>
 </div>
</section>

<section class="relative usos_formaleta overflow-hidden rounded-b-lg header-page my-4">

    <div class="informacion_usos_formaleta rounded-3xl">
        <div class="flex items-center">
            <h1 class="titulo_formaleta">
                Usos y Aplicaciones
            </h1>
            <ul class="list-disc pl-4">
            <li>Pantallas estructurales y muros de contención, Muros rectos y curvos.</li>
            <li>Columnas cuadradas, rectangulares, circulares, elipsoidales y hexagonales.</li>
            <li>Vigas aéreas, descolgadas y prefabricadas para postensados.</li>
            <li>Piscinas y tanques de almacenamiento.</li>
            <li>Placas macizas, aligeradas y nervadas.</li>
            <li>Cimentaciones y caisson.</li>
            <li>Bordillos, sardineles y pavimentos rígidos.</li>
            <li>Box culvert, puentes y cualquier otro elemento estructural en concreto.</li>
        </ul>

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