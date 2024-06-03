<x-app-layout>
    <div class="max-w-screen-xl mx-auto px-5 mb-20">
        
        <div class="mt-24 text-center">
            <div class="mb-4">
                <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">
                    {{-- Acerca de mí --}}
                    @lang('messages.about_me')
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight dark:text-white">
                {{-- Soy  --}}
                @lang('messages.i_am')
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-400">César Zavala López</span>
            </h1>
            <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl dark:text-white">
                {{-- Soy un apasionado egresado de Ingeniería en Tecnologías de la Información de la Universidad Politécnica de
                Victoria, originario de Cd. Victoria, Tamaulipas, México, con 23 años de edad. 🎓🌎 --}}
                @lang('messages.short_about_me_description')
            </p>

            <div class="mt-6 text-center">
                <a class=" gap-3 inline-flex rounded-full text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple px-6 py-2.5 bg-purple-600 text-white hover:bg-purple-800 items-center justify-center transition duration-300 ease-out"
                    href="{{route('download')}}">
                    <svg viewBox="0 0 24 24" class="text-white w-5 h-5" astro-icon="bx:bxs-cloud-download">
                        <path fill="currentColor"
                            d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z">
                        </path>
                    </svg>
    
                    {{-- Descarga mi CV --}}
                    @lang('messages.download_cv')
                </a>
            </div>

        </div>

        <div class="mt-24">
            <div class="text-center ">
                <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight dark:text-white">
                    {{-- Estas son algunas de  --}}
                    @lang('messages.these_are_some_of')
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500"> 
                        {{-- mis certificaciones --}}
                        @lang('messages.my_certifications')
                    </span>
                </h2>
                <p class="text-lg mt-4 text-slate-600 dark:text-white max-w-3xl mx-auto">
                    {{-- A lo largo de mi carrera profesional he obtenido diversas certificaciones que avalan mis 
                    conocimientos en diferentes áreas de la tecnología. 📜💻 --}}
                    @lang('messages.my_certifications_description')
                </p>
        
                <div class="flex gap-x-8 gap-y-4 md:gap-20 lg:gap-28 items-center justify-center mt-8 flex-wrap">
                    <a href="https://www.credly.com/badges/3be95b04-dcff-4c52-ae93-b721f3111d29" target="_blank" class="cursor-pointer duration-200 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800 rounded-2xl hover:shadow-lg p-2">
                        <img class="w-32 h-32 md:w-40 md:h-40" src="{{asset('img/certifications/ux.png')}}" alt="Certificado de Diseño de Experiencia del Usuario (UX) de Google">
                    </a>
        
                    <a href="https://www.credly.com/badges/fa5d9a26-761c-4ae1-8cca-c06048195d23" target="_blank" class="cursor-pointer duration-200 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800 rounded-2xl hover:shadow-lg p-2">
                        <img class="w-32 h-32 md:w-40 md:h-40" src="{{asset('img/certifications/ccna.png')}}" alt="CCNA: Switching, Routing, and Wireless Essentials">
                    </a>
        
                    <a href="https://www.credly.com/badges/bceddad5-d56f-4014-b0f7-e0a257f36843" target="_blank" class="cursor-pointer duration-200 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800 rounded-2xl hover:shadow-lg p-2">
                        <img class="w-32 h-32 md:w-40 md:h-40" src="{{asset('img/certifications/cs.png')}}" alt="Introduction to Cybersecurity">
                    </a>
        
                    <a href="https://www.credly.com/badges/09f6daae-885d-4f1b-ad2e-a62711869b8d" target="_blank" class="cursor-pointer duration-200 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800 rounded-2xl hover:shadow-lg p-2">
                        <img class="w-32 h-32 md:w-40 md:h-40" src="{{asset('img/certifications/ccna2.png')}}" alt="CCNA: Introduction to Networks">
                    </a>
                </div>
            </div>
        </div>
        

        <div class="grid sm:grid-cols-2 gap-10 mx-auto mt-24">
            <div class="relative">
                <img class="rounded-xl w-full max-w-md mx-auto shadow-2xl"  width="1270" height="1652"
                    decoding="async" src="{{asset('img/me.jpg')}}" alt="César Zavala López">
            </div>
            <div class="place-self-center">
                <h2 class="text-5xl text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500 tracking-tight -mt-2 font-bold">
                    {{-- Sobre mí --}}
                    @lang('messages.about_me')
                </h2>
                <p class="text-lg max-w-xl mt-4 leading-relaxed text-slate-500 dark:text-white">
                    {{-- Mi especialización se centra en el desarrollo de aplicaciones web, destacándome en el uso de Laravel para
                    construir soluciones integrales desde el backend hasta el frontend. Mis proyectos abarcan desde la investigación
                    y desarrollo de la experiencia de usuario hasta la implementación de la aplicación en un entorno de producción.
                    Disfruto aprender nuevas tecnologías y compartir mis conocimientos con los demás. 🚀📚 --}}
                    @lang('messages.long_about_me_description')
                </p>
                <ul class="grid mt-6 text-left gap-y-4">

                    <li class="flex items-center gap-3 text-slate-800 dark:text-white">
                        <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                            <path fill="currentColor"
                                d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                            </path>
                        </svg>
                        <span class="text-slate-600 dark:text-white">
                            {{-- TOEFL (Inglés B2) --}}
                            @lang('messages.toefl')
                        </span>
                    </li>

                    <li class="flex items-center gap-3 text-slate-800 dark:text-white">
                        <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                            <path fill="currentColor"
                                d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                            </path>
                        </svg>
                        <span class="text-slate-600 dark:text-white">
                            {{-- Capacidad de adaptación --}}
                            @lang('messages.adaptability')
                        </span>
                    </li>

                    <li class="flex items-center gap-3 text-slate-800 dark:text-white">
                        <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                            <path fill="currentColor"
                                d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                            </path>
                        </svg>
                        <span class="text-slate-600 dark:text-white">
                            {{-- Autoaprendizaje --}}
                            @lang('messages.self_learning')
                        </span>
                    </li>

                    <li class="flex items-center gap-3 text-slate-800 dark:text-white">
                        <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                            <path fill="currentColor"
                                d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                            </path>
                        </svg>
                        <span class="text-slate-600 dark:text-white">
                            {{-- Orientación a resultados --}}
                            @lang('messages.results_orientation')
                        </span>
                    </li>

                    <li class="flex items-center gap-3 text-slate-800 dark:text-white">
                        <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                            <path fill="currentColor"
                                d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                            </path>
                        </svg>
                        <span class="text-slate-600 dark:text-white">
                            {{-- Trabajo en equipo --}}
                            @lang('messages.team_work')
                        </span>
                    </li>

                    <li class="flex items-center gap-3 text-slate-800 dark:text-white">
                        <svg viewBox="0 0 256 256" class="w-5 h-5" astro-icon="ph:check-circle-fill">
                            <path fill="currentColor"
                                d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24zm49.5 85.8-58.6 56a8.1 8.1 0 0 1-5.6 2.2 7.7 7.7 0 0 1-5.5-2.2l-29.3-28a8 8 0 1 1 11-11.6l23.8 22.7 53.2-50.7a8 8 0 0 1 11 11.6z">
                            </path>
                        </svg>
                        <span class="text-slate-600 dark:text-white">
                            {{-- Trabajo bajo presión --}}
                            @lang('messages.work_under_pressure')
                        </span>
                    </li>

                </ul>
            </div>
        </div>


    </div>




</x-app-layout>