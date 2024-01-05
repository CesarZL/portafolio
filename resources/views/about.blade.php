@extends('layouts.app')

@section('content')

<div class="max-w-screen-xl mx-auto px-5 mb-20">
    

    <div class="mt-16 text-center">
        <div class="mb-4">
            <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">¿Quién soy?</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">Soy <span class="text-indigo-600">César Zavala López</span></h1>
        <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl">
            Un apasionado egresado de Ingeniería en Tecnologías de la Información de la Universidad Politécnica de Victoria, originario de Cd. Victoria, Tamaulipas, México, con 23 años de edad.
        </p>
    </div>


    <div class="mt-6 text-center">
        <a class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"
        href="{{route('download')}}">
            Descarga mi CV
        </a>
    </div>


    <div class="mt-16 border-y py-6 border-slate-100">
        <div>
            <h2 class="text-center text-slate-500 font-semibold">
                Mis certificaciones
            </h2>
            <div class="flex gap-x-8 gap-y-4 md:gap-20 lg:gap-28 items-center justify-center mt-6 flex-wrap">

                <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="09f6daae-885d-4f1b-ad2e-a62711869b8d" data-share-badge-host="https://www.credly.com"></div><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                
                <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="bceddad5-d56f-4014-b0f7-e0a257f36843" data-share-badge-host="https://www.credly.com"></div><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>

                <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="fa5d9a26-761c-4ae1-8cca-c06048195d23" data-share-badge-host="https://www.credly.com"></div><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
              
                <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="3be95b04-dcff-4c52-ae93-b721f3111d29" data-share-badge-host="https://www.credly.com"></div><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>

                {{-- <div class="text-gray-500 my-2 h-7 md:h-9 font-semibold">
                    CCNA (Cisco)
                </div> --}}

            </div>
        </div>
    </div>


    
    <div class="grid sm:grid-cols-2 gap-10 mx-auto mt-24">
        <div class="relative">
            <img class="rounded-xl w-full max-w-md mx-auto shadow-2xl" loading="lazy" width="1270" height="1652" decoding="async" src="{{asset('img/me.jpg')}}" alt="César Zavala López">
        </div>
        <div class="place-self-center">
            <h2 class="text-5xl text-gray-800 tracking-tight -mt-2">
                <span class="text-indigo-600">Sobre mí</span></h2>
            <p class="text-lg max-w-xl mt-4 leading-relaxed text-slate-500">
                Me especializo en el desarrollo de aplicaciones web, 
                destacándome en el uso de Laravel para construir soluciones 
                integrales desde el backend hasta el frontend.
                Mis proyectos van desde la investigación y el desarrollo de 
                la experiencia de usuario hasta la implementación de la aplicación
                en un entorno de producción. Me encanta aprender nuevas tecnologías 
                y compartir mis conocimientos con los demás.  



            </p>
            <ul class="grid mt-6 text-left gap-y-4">

                
                <li class="flex items-center gap-3 text-slate-800">
                    <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                        <path fill="currentColor"
                            d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                        </path>
                    </svg>
                    <span class="text-slate-600">TOEFL (Inglés B2)</span>
                </li>

                <li class="flex items-center gap-3 text-slate-800">
                    <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                        <path fill="currentColor"
                            d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                        </path>
                    </svg>
                    <span class="text-slate-600">Capacidad de adaptación</span>
                </li>

                <li class="flex items-center gap-3 text-slate-800">
                    <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                        <path fill="currentColor"
                            d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                        </path>
                    </svg>
                    <span class="text-slate-600">Autoaprendizaje</span>
                </li>

                <li class="flex items-center gap-3 text-slate-800">
                    <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                        <path fill="currentColor"
                            d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                        </path>
                    </svg>
                    <span class="text-slate-600">Orientación a resultados</span>
                </li>

                <li class="flex items-center gap-3 text-slate-800">
                    <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                        <path fill="currentColor"
                            d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                        </path>
                    </svg>
                    <span class="text-slate-600">Trabajo en equipo</span>
                </li>

                <li class="flex items-center gap-3 text-slate-800">
                    <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                        <path fill="currentColor"
                            d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                        </path>
                    </svg>
                    <span class="text-slate-600">Trabajo bajo presión</span>
                </li>
                
            </ul>
        </div>
    </div>


</div>


@endsection
