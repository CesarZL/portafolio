@extends('layouts.app')

@section('content')

<div class="max-w-screen-xl mx-auto px-5 mb-20">

    <div class="mt-16 text-center">
        <div class="mb-4">
            <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">¿Quién soy?</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">Soy <span class="text-indigo-600">César Zavala López</span></h1>
        <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl">
            Soy un recién egresado de la carrera de Ingeniería en TI, con experiencia en el desarrollo de aplicaciones web y de escritorio, así como en el diseño de interfaces y experiencia de usuario.

        </p>
    </div>

    <div class="mt-6 text-center">
        <a class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"
        href="{{asset('docs/CV.pdf')}}" target="_blank" download="curriculum-cesar-zavala">
            Descarga mi CV
        </a>
    </div>

    <div class="mt-16 border-y py-6 border-slate-100">
        <div>
            <h2 class="text-center text-slate-500">
                Mis certificaciones
            </h2>
            <div class="flex gap-x-8 gap-y-4 md:gap-20 lg:gap-28 items-center justify-center mt-6 flex-wrap">
                
                <div class="text-gray-500 my-2 h-7 md:h-9 font-semibold">
                    CCNA (Cisco)
                </div>
                
                <div class="text-gray-500 my-2 h-7 md:h-9 font-semibold">
                    Introduction to Cybersecurity (Cisco)
                </div>

                <div class="text-gray-500 my-2 h-7 md:h-9 font-semibold">
                    Diseño de Experiencia del Usuario (UX) (Google)
                </div>

            </div>
        </div>
    </div>


    
    <div class="grid sm:grid-cols-2 gap-10 mx-auto mt-24">
        <div class="relative">
            {{-- <div class="absolute hidden md:block w-96 h-96 bg-purple-100 rounded-full right-0 top-1/3"></div>
            <div class="absolute hidden md:block w-44 h-44 bg-purple-100 rounded-full left-10 top-1/4"></div> --}}

            <img src="{{asset('img/me.jpg')}}" alt="Imagen mía" class="rounded-xl w-full max-w-md mx-auto shadow-2xl" loading="lazy" width="1270" height="1652" decoding="async">
        </div>
        <div class="place-self-center">
            <h2 class="text-5xl text-gray-800 tracking-tight -mt-2">
                <span class="text-indigo-600">Sobre mí</span></h2>
            <p class="text-lg max-w-xl mt-4 leading-relaxed text-slate-500">
                Soy un recién egresado de Ingeniería en Tecnologías de la Información de la Universidad Politénica de Victoria.
                mi pasión radica en el desarrollo de aplicaciones web. Especializado en LARAVEL, me destaco por construir 
                soluciones desde el backend hasta el frontend. Utilizo Bootstrap para proyectos ágiles 
                y Tailwind CSS para iniciativas más elaboradas. Me destaco por mi capacitación en el área de 
                experiencia de usuario, lo que me permite crear interfaces intuitivas y atractivas para el usuario. 

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

            </ul>
        </div>
    </div>
</div>


@endsection
