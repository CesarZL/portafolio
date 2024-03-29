@extends('layouts.app')

@section('content')

<div class="overflow-x-clip">
    <div class="max-w-screen-xl mx-auto px-5">
        <main class="grid lg:grid-cols-5 place-items-center relative">
            <div class="absolute w-96 h-96 blur-2xl -z-10 bg-gradient-radial from-indigo-200 right-0 top-0"></div>
            <div class="absolute w-96 h-96 blur-2xl -z-10 bg-gradient-radial from-purple-200 right-56 top-10"></div>
            <div class="max-w-sm md:max-w-max lg:col-span-2">
                <h2
                    class="text-3xl lg:text-4xl xl:text-6xl font-bold lg:tracking-tight xl:tracking-tighter [text-wrap:balance] text-center lg:text-start">
                    Hola, soy <span class="text-indigo-600">César Zavala López</span>                </h2>
                <p class="text-lg mt-4 max-w-lg text-slate-600 [text-wrap:balance] text-center lg:text-start">
                    Soy Ingeniero en TI. Me especializo en el desarrollo de aplicaciones web y el diseño de interfaces y experiencias de usuario. Mi enfoque se centra en crear soluciones prácticas y eficientes.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-3">
                    <a class="rounded-full text-center transition focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo px-7 py-2.5 bg-white border-2 border-indigo-500 hover:bg-indigo-50 text-indigo-600  flex gap-1 items-center justify-center"
                    href="{{ route('about') }}">
                        Conoce más
                    </a>

                    <a class="rounded-full text-center transition focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo px-7 py-2.5 bg-indigo-600 text-white hover:bg-indigo-800 flex gap-1 items-center justify-center"
                    href="{{route('contact')}}">
                        {{-- <svg viewBox="0 0 24 24" class="text-white w-5 h-5" astro-icon="bx:bxs-cloud-download">
                            <path fill="currentColor"
                                d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z">
                            </path>
                        </svg> --}}
                        Contáctame
                    </a>
                </div>
            </div>
            <div class="py-3 lg:col-span-3 lg:-mr-44">

                <img src="{{asset('img/yo.jfif')}}" alt="Hero image" class="lg:my-32 md:my-10 my-12 rounded-xl w-full max-w-md mx-auto shadow-2xl" loading="lazy" width="1270" height="1652" decoding="async">

            </div>
        </main>
    </div>
</div>




<div class="max-w-screen-xl mx-auto px-5">
    <div>
        <h2 class="text-center text-slate-500">
            Conocimiento y experiencia en las siguientes tecnologías y herramientas
        </h2>
        <div class="flex gap-x-8 gap-y-4 md:gap-20 lg:gap-28 items-center justify-center mt-6 flex-wrap">

            <div class="text-gray-500 my-2 h-7 md:h-9">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 70 35" class="h-full w-auto">
                    <g clip-path="url(#prefix__clip0)"><path fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd"/></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs>
                </svg>
            </div>

            <div class="text-gray-500 my-2 h-7 md:h-9">
                <svg height="2500" viewBox="0 -.11376601 50 53" width="2418" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-full w-auto">
                    <path d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"/>
                </svg>
            </div>

            <div class="text-gray-500 my-2 h-7 md:h-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="408" fill="currentColor" class="h-full w-auto" viewBox="0 0 512 408">
                    <defs><linearGradient id="bs-logo-a" x1="76.079" x2="523.48" y1="10.798" y2="365.945" gradientUnits="userSpaceOnUse"><stop stop-color="#9013fe"/><stop offset="1" stop-color="#6610f2"/></linearGradient><linearGradient id="bs-logo-b" x1="193.508" x2="293.514" y1="109.74" y2="278.872" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#f1e5fc"/></linearGradient><filter xmlns="http://www.w3.org/2000/svg" id="bs-logo-c" width="197" height="249" x="161.901" y="83.457" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="4"/><feGaussianBlur stdDeviation="8"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs><path d="M56.481 53.32C55.515 25.58 77.128 0 106.342 0h299.353c29.214 0 50.827 25.58 49.861 53.32-.928 26.647.277 61.165 8.964 89.31 8.715 28.232 23.411 46.077 47.48 48.37v26c-24.069 2.293-38.765 20.138-47.48 48.37-8.687 28.145-9.892 62.663-8.964 89.311.966 27.739-20.647 53.319-49.861 53.319H106.342c-29.214 0-50.827-25.58-49.86-53.319.927-26.648-.278-61.166-8.966-89.311C38.802 237.138 24.07 219.293 0 217v-26c24.069-2.293 38.802-20.138 47.516-48.37 8.688-28.145 9.893-62.663 8.965-89.31z"/><path fill="url(#bs-logo-b)" filter="url(#bs-logo-c)" stroke="#fff" d="M267.103 312.457c47.297 0 75.798-23.158 75.798-61.355 0-28.873-20.336-49.776-50.532-53.085v-1.203c22.185-3.609 39.594-24.211 39.594-47.219 0-32.783-25.882-54.138-65.322-54.138h-88.74v217h89.202zm-54.692-189.48h45.911c24.958 0 39.131 11.128 39.131 31.279 0 21.505-16.484 33.535-46.372 33.535h-38.67v-64.814zm0 161.961v-71.431h45.602c32.661 0 49.608 12.03 49.608 35.49 0 23.459-16.484 35.941-47.605 35.941h-47.605z"/>
                </svg>
            </div>

            <div class="text-gray-500 my-2 h-7 md:h-9">

                <svg width="456" height="456" viewBox="0 0 456 456" xmlns="http://www.w3.org/2000/svg" class="h-full w-auto" fill="currentColor">
                    
                    <rect width="456" height="456"/>
                    <path d="M81.2738 291.333C78.0496 291.333 75.309 290.259 73.052 288.11C70.795 285.906 69.6665 283.289 69.6665 280.259C69.6665 277.173 70.795 274.529 73.052 272.325C75.309 270.121 78.0496 269.019 81.2738 269.019C84.5518 269.019 87.3193 270.121 89.5763 272.325C91.887 274.529 93.0424 277.173 93.0424 280.259C93.0424 283.289 91.887 285.906 89.5763 288.11C87.3193 290.259 84.5518 291.333 81.2738 291.333Z" fill="white"/>
                    <path d="M210.167 289.515H189.209L133.994 202.406C132.597 200.202 131.441 197.915 130.528 195.546H130.044C130.474 198.081 130.689 203.508 130.689 211.827V289.515H112.149V171H134.477L187.839 256.043C190.096 259.57 191.547 261.994 192.192 263.316H192.514C191.977 260.176 191.708 254.859 191.708 247.365V171H210.167V289.515Z" fill="white"/>
                    <path d="M300.449 289.515H235.561V171H297.87V187.695H254.746V221.249H294.485V237.861H254.746V272.903H300.449V289.515Z" fill="white"/>
                    <path d="M392.667 187.695H359.457V289.515H340.272V187.695H307.143V171H392.667V187.695Z" fill="white"/>
                    </svg>
                    
            </div>

        </div>
    </div>
</div>


<div class="max-w-screen-xl mx-auto px-5 mb-20">
    {{-- <div class="mt-24">
        <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
            Estos son algunos de <span class="text-indigo-600"> mis proyectos</span>
        </h2>
        <p class="text-lg mt-4 text-slate-600">
            Te invito a descubrir el resultado de mi pasión por el diseño y desarrollo web. Cada proyecto refleja un compromiso con la excelencia y la experiencia del usuario.
        </p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 mt-16 gap-10">
        @for ($i = 0; $i < 3; $i++)
            <div class="rounded-2xl p-8 bg-gray-50 transition-all ring-1 ring-gray-200/50 shadow hover:shadow-lg cursor-pointer">
                <div class="overflow-hidden flex items-start justify-center h-auto relative lg:h-60">
                    <img src="{{asset('img/img5.webp')}}" alt="Feature image" class="h-full w-full object-contain" loading="lazy" width="909" height="823" decoding="async">
                </div>
                <div class="mt-2">
                    
                    <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">
                        <span>
                            Categoria 1
                        </span>
                    </span>

                    <span class="ms-2 bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">
                        <span>
                            Categoria 2
                        </span>
                    </span>

                    <span class="ms-2 bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">
                        <span>
                            Categoria 3
                        </span>
                    </span>

                    <h3 class="text-xl lg:text-2xl font-medium mt-2"><span>Nombre del proyecto</span></h3>
                    <p class="text-slate-600 mt-2">
                        <span>
                            Pequeña descripción del proyecto para que el usuario sepa de que trata y se anime a visitarlo.
                        </span>
                    </p>
                </div>
            </div>
        @endfor
    </div>

    <div class="flex justify-center items-center mt-10 gap-4">
        <a class="bg-gray-100 px-5 py-2 rounded-md hover:bg-gray-200 transition" href="{{route('projects')}}">
            Ver más
        </a>
    </div> --}}


    
    <div class="mt-24 max-w-3xl mx-auto flex flex-col items-center justify-center">
        <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">
            Mi experiencia
        </span>
        <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight mt-4 text-center">
           Esto es un poco de mi <span class="text-indigo-600">experiencia laboral</span>
        </h2>
        <p class="text-lg mt-4 text-slate-600 text-center [text-wrap:pretty]">
            A lo largo de mi carrera profesional he tenido la oportunidad de trabajar en diferentes proyectos, tanto de manera independiente como en equipo, lo que me ha permitido desarrollar habilidades de comunicación y trabajo colaborativo.
        </p>
    </div>



    {{-- boton que abre modal de tailwinds css con flowbite para agregar experiencia laboral --}}
    @auth

       {{-- arreglar background del boton para que sea verde y no blanco --}}
         <div class="flex justify-center items-center mt-10 gap-4">
            <button class="bg-green-100 px-5 py-2 rounded-md hover:bg-green-200 transition" data-modal-target="static-modal" data-modal-toggle="static-modal">
                Agregar Trabajo <span class="text-green-600">+</span>
            </button>
        </div>

         <!-- Main modal -->
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Agregar experiencia laboral
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="static-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Cerrar modal</span>
                        </button>
                    </div>
                   
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">

                        <form action="{{route('home.store')}}" method="POST" id="form">
                            @csrf

                            <div class="mb-5">
                                <label for="position" class="sr-only">Puesto</label>
                                <input id="position" type="text" placeholder="Puesto" name="position" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
                                @error('position')
                                <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="place" class="sr-only">Lugar</label>
                                <input id="place" type="text" placeholder="Lugar" name="place" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
                                @error('place')
                                <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="description" class="sr-only">Descripción</label>
                                <textarea id="description" type="text" placeholder="Descripción" name="description" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100"></textarea>
                                @error('description')
                                <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="start_date" class="sr-only">Fecha de inicio</label>
                                <input id="start_date" type="date" placeholder="Fecha de inicio" name="start_date" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
                                @error('start_date')
                                <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="end_date" class="sr-only">Fecha de fin</label>
                                <input id="end_date" type="date" placeholder="Fecha de fin" name="end_date" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
                                @error('end_date')
                                <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </form>
                        
                    </div>

                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b gap-4">
                        <a class="bg-green-200 px-5 py-2 rounded-md hover:bg-green-300 transition cursor-pointer" onclick="event.preventDefault(); document.getElementById('form').submit();">
                            Agregar Trabajo
                        </a>

                        
                        <button class="bg-red-200 px-5 py-2 rounded-md hover:bg-red-300 transition" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            Cancelar
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>


    @endauth
  
    <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-8 md:gap-16">
        
        @foreach ($experiences as $experience)
            
        <div class="flex flex-col gap-4 items-start group hover:bg-slate-100 hover:border-slate-200 border border-transparent rounded-lg transition-all md:-m-5 p-5 bg-slate-50">
            <div class="flex flex-col flex-grow">
                
                @auth
                    <div class="flex items-center gap-2 mb-5">
                        <form method="POST" action="{{ route('home.destroy', $experience->id) }}" class="delete-form">
                            @csrf
                            <button type="submit"class="mt-1 bg-indigo-50 border shadow shadow-indigo-100/50 border-indigo-100 transition-colors rounded-lg grid place-items-center  p-2 w-10 h-10 shrink-0 hover:bg-red-500">
                                <img src="{{asset('img/logo.svg')}}" alt="Feature image" class="h-full w-full object-contain" loading="lazy" width="909" height="823" decoding="async">
                            </button>
                        </form>    
                        
                        <button class="mt-1 bg-indigo-50 border shadow shadow-indigo-100/50 border-indigo-100 transition-colors rounded-lg grid place-items-center  p-2 w-10 h-10 shrink-0 hover:bg-indigo-500" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <img src="{{asset('img/logo.svg')}}" alt="Feature image" class="h-full w-full object-contain" loading="lazy" width="909" height="823" decoding="async">
                        </button>

                    </div>     
                @endauth

                <div>
                    <h3 class="font-semibold text-lg">
                        {{$experience->position}}
                    </h3>
                    <h2 class="text-slate-500 font-semibold">
                        {{$experience->place}}
                    </h2>
                    
                    <p class="text-slate-500 mt-2 leading-relaxed mb-2">
                        {{$experience->description}}
                    </p>

                </div>
            </div>
            <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                {{\Carbon\Carbon::parse($experience->start_date)->locale('es_ES')->isoFormat('MMM YYYY')}} - {{\Carbon\Carbon::parse($experience->end_date)->locale('es_ES')->isoFormat('MMM YYYY')}}
            </span>
        </div>
        
        @endforeach
        

    </div>
</div>





@endsection



{{-- VOLUNTARIADO
Un Cachito de Luz A.C. l Cd. Victoria/Tamaulipas 2017 - 2022
Diseño de base datos y sistema de captura de entrega de donaciones de 
medicamentos realizado en Visual Basic. 

DESARROLLADOR FULL-STACK 
ITACE l Cd. Victoria/Tamaulipas FEB 2020 - MAR 2020
Diseño y desarrollo de una aplicación .NET programada en lenguaje Visual Basic que 
permite el registro de asistencia con códigos QR y alerta a los tutores de la actividad de 
entrada y salida del plantel. 

DESARROLLADOR BACK-END 
Cactu Nieves l Cd. Victoria/Tamaulipas MAR 2022 - ABR 2022
Diseño, desarrollo e implementación de una aplicación .NET programada en lenguaje C# 
que permite el control sobre los procesos de venta y administración de la empresa.

DESARROLLADOR FRONT-END 
SVAM international l Cd. Victoria/Tamaulipas ENE 2022 - FEB 2022
Creación y ejecución de la actualización de la interfaz de la aplicación web LEADS, 
utilizando Bootstrap 5, incorporando Datatables y Google Charts

DESARROLLADOR FULL-STACK 
UPV l Cd. Victoria/Tamaulipas SEP 2023 - DIC 2023
Diseño y desarrollo de una aplicación en LARAVEL y FLASK en conjunto con ARDUINO 
que permite el pase de lista con reconocimiento facial a alumnos de la Universidad 
Politécnica de Victoria en proceso de implementación interno de la institución.  --}}