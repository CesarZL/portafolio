<x-app-layout>
    <div class="max-w-screen-xl mx-auto px-5">
        <div class="grid mt-24 lg:mt-0 lg:grid-cols-5 place-items-center relative">
            <div
                class="absolute w-96 h-96 blur-3xl z-20 bg-gradient-radial from-indigo-200 dark:from-indigo-800 right-0 top-0">
            </div>
            <div
                class="absolute w-96 h-96 blur-3xl z-20 bg-gradient-radial from-purple-200 dark:from-purple-800 right-56 top-10">
            </div>
            <div class="max-w-sm md:max-w-max lg:col-span-2 z-30">
                <h2
                    class="text-3xl lg:text-4xl xl:text-6xl font-bold lg:tracking-tight xl:tracking-tighter [text-wrap:balance] text-center lg:text-start dark:text-white">
                    @lang('messages.hello')
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-400">César
                        Zavala López
                    </span> 
                </h2>
                <p
                    class="text-lg mt-4 max-w-lg text-slate-600 [text-wrap:balance] text-center lg:text-start dark:text-white">
                    @lang('messages.bio')
                </p>
                <div class="mt-6 flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-3">
                    <a class="rounded-full text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple px-6 py-2.5 bg-white border-2 border-purple-500 hover:bg-purple-50 text-purple-600  flex gap-1 items-center justify-center transition duration-300 ease-out"
                        href="{{route('about')}}" wire:navigate>
                        @lang('messages.about')
                    </a>

                    <a class="rounded-full text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple px-6 py-2.5 bg-purple-600 text-white hover:bg-purple-800 flex gap-1 items-center justify-center transition duration-300 ease-out"
                        href="{{route('contact')}}" wire:navigate>
                        @lang('messages.contact')
                    </a>
                </div>
            </div>
            <div class="py-3 lg:col-span-3 lg:-mr-44 z-30">
                <img src="{{asset('img/hero.jpg')}}" alt="César Zavala López - Desarrollador web"
                    class="w-5/6 md:w-full md:h-full lg:my-32 md:my-10 my-12 rounded-xl max-w-md mx-auto shadow-2xl"
                    width="1270" height="1652" decoding="async">
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-5">
        <h2 class="text-center text-slate-500 dark:text-white">
            @lang('messages.tech_experience')
        </h2>
        <div class="flex gap-x-8 gap-y-4 md:gap-20 lg:gap-28 items-center justify-center mt-6 flex-wrap">

            <div class="text-gray-500 my-2 h-7 md:h-9 dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 70 35" class="h-full w-auto">
                    <g clip-path="url(#prefix__clip0)">
                        <path fill-rule="evenodd"
                            d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                            clip-rule="evenodd" />
                    </g>
                    <defs>
                        <clipPath id="prefix__clip0">
                            <path fill="#fff" d="M0 0h54v32.4H0z" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="text-gray-500 my-2 h-7 md:h-9 dark:text-white">
                <svg height="2500" viewBox="0 -.11376601 50 53" width="2418" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" class="h-full w-auto">
                    <path
                        d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z" />
                </svg>
            </div>

            <div class="text-gray-500 my-2 h-7 md:h-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="408" fill="currentColor"
                    class="h-full w-auto" viewBox="0 0 512 408">
                    <defs>
                        <linearGradient id="bs-logo-a" x1="76.079" x2="523.48" y1="10.798" y2="365.945"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9013fe" />
                            <stop offset="1" stop-color="#6610f2" />
                        </linearGradient>
                        <linearGradient id="bs-logo-b" x1="193.508" x2="293.514" y1="109.74" y2="278.872"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff" />
                            <stop offset="1" stop-color="#f1e5fc" />
                        </linearGradient>
                        <filter xmlns="http://www.w3.org/2000/svg" id="bs-logo-c" width="197" height="249" x="161.901"
                            y="83.457" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="8" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                        </filter>
                    </defs>
                    <path
                        d="M56.481 53.32C55.515 25.58 77.128 0 106.342 0h299.353c29.214 0 50.827 25.58 49.861 53.32-.928 26.647.277 61.165 8.964 89.31 8.715 28.232 23.411 46.077 47.48 48.37v26c-24.069 2.293-38.765 20.138-47.48 48.37-8.687 28.145-9.892 62.663-8.964 89.311.966 27.739-20.647 53.319-49.861 53.319H106.342c-29.214 0-50.827-25.58-49.86-53.319.927-26.648-.278-61.166-8.966-89.311C38.802 237.138 24.07 219.293 0 217v-26c24.069-2.293 38.802-20.138 47.516-48.37 8.688-28.145 9.893-62.663 8.965-89.31z" />
                    <path class="fill-current text-white" filter="url(#bs-logo-c)" stroke="#fff"
                        d="M267.103 312.457c47.297 0 75.798-23.158 75.798-61.355 0-28.873-20.336-49.776-50.532-53.085v-1.203c22.185-3.609 39.594-24.211 39.594-47.219 0-32.783-25.882-54.138-65.322-54.138h-88.74v217h89.202zm-54.692-189.48h45.911c24.958 0 39.131 11.128 39.131 31.279 0 21.505-16.484 33.535-46.372 33.535h-38.67v-64.814zm0 161.961v-71.431h45.602c32.661 0 49.608 12.03 49.608 35.49 0 23.459-16.484 35.941-47.605 35.941h-47.605z" />
                </svg>
            </div>

            <div class="text-gray-500 my-2 h-7 md:h-9 dark:text-white">

                <svg width="456" height="456" viewBox="0 0 456 456" xmlns="http://www.w3.org/2000/svg"
                    class="h-full w-auto" fill="currentColor">

                    <rect width="456" height="456" />
                    <path class="fill-current text-white dark:text-gray-500"
                        d="M81.2738 291.333C78.0496 291.333 75.309 290.259 73.052 288.11C70.795 285.906 69.6665 283.289 69.6665 280.259C69.6665 277.173 70.795 274.529 73.052 272.325C75.309 270.121 78.0496 269.019 81.2738 269.019C84.5518 269.019 87.3193 270.121 89.5763 272.325C91.887 274.529 93.0424 277.173 93.0424 280.259C93.0424 283.289 91.887 285.906 89.5763 288.11C87.3193 290.259 84.5518 291.333 81.2738 291.333Z" />
                    <path class="fill-current text-white dark:text-gray-500"
                        d="M210.167 289.515H189.209L133.994 202.406C132.597 200.202 131.441 197.915 130.528 195.546H130.044C130.474 198.081 130.689 203.508 130.689 211.827V289.515H112.149V171H134.477L187.839 256.043C190.096 259.57 191.547 261.994 192.192 263.316H192.514C191.977 260.176 191.708 254.859 191.708 247.365V171H210.167V289.515Z" />
                    <path class="fill-current text-white dark:text-gray-500"
                        d="M300.449 289.515H235.561V171H297.87V187.695H254.746V221.249H294.485V237.861H254.746V272.903H300.449V289.515Z" />
                    <path class="fill-current text-white dark:text-gray-500"
                        d="M392.667 187.695H359.457V289.515H340.272V187.695H307.143V171H392.667V187.695Z" />
                </svg>

            </div>

        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-5 {{ $projects->isEmpty() ? 'hidden' : '' }}">
        <div class="mt-24 max-w-3xl mx-auto">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight mt-4 text-center dark:text-white">
                @lang('messages.explore_projects') <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600"> @lang('messages.my_projects')</span>
            </h2>
            <p class="text-lg mt-4 text-slate-600 text-center [text-wrap:pretty] dark:text-white">
                @lang('messages.project_intro')
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 mt-16 gap-10">
            @foreach ($projects as $project)
            <div>
                <a href="{{ route('projects.show', $project) }}" wire:navigate>
                    <article
                        class="h-full p-6 bg-white rounded-lg border-gray-200 shadow-md dark:bg-gray-800 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span
                                class="text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-purple-100 text-purple-800 dark:bg-purple-200 dark:text-purple-800 border-purple-200 dark:border-purple-700 border">
                                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                </svg>
                                @if (app()->getLocale() == 'en')
                                {{ $project->category->name_en }}
                                @else
                                {{ $project->category->name }}
                                @endif
                            </span>
                        </div>
                        <img class="mb-5 w-full h-48 object-cover rounded-lg"
                            src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                            <span
                                class="transition duration-300 ease-out hover:text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600 dark:from-purple-300 dark:to-indigo-300">
                                @if (app()->getLocale() == 'en')
                                {{ $project->title_en }}
                                @else
                                {{ $project->title }}
                                @endif
                            </span>
                        </h2>
                        <p class="font-light text-gray-500 dark:text-gray-300">
                            @if (app()->getLocale() == 'en')
                            {{ $project->abstract_en }}
                            @else
                            {{ $project->abstract }}
                            @endif
                        </p>
                    </article>
                </a>

                @auth
                <div class="text-center mt-5">
                    <a class="rounded-lg text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple py-2 bg-purple-600 text-white hover:bg-purple-800 flex gap-1 items-center justify-center transition duration-300 ease-out"
                        href="{{route('projects.edit', $project)}}">
                        @lang('messages.edit_project')
                    </a>
                </div>

                <div class="text-center mt-2">
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="w-full rounded-lg text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500 focus-visible:outline-none focus-visible:shadow-outline-red py-2 bg-red-600 text-white hover:bg-red-800 flex gap-1 items-center justify-center transition duration-300 ease-out"
                            type="submit">
                            Eliminar proyecto
                        </button>
                    </form>
                </div>
                @endauth
            </div>
            @endforeach
        </div>


        <div class="flex justify-center items-center mt-10 gap-4">
            <a class="rounded-full text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple px-6 py-2.5 bg-white border-2 border-purple-500 hover:bg-purple-50 text-purple-600  flex gap-1 items-center justify-center transition duration-300 ease-out"
                href="{{ route('projects.index') }}" wire:navigate>
                @lang('messages.see_more')
            </a>
        </div>
    </div>


    <div class="max-w-screen-xl mx-auto px-5">
        <div class="mt-24 max-w-3xl mx-auto">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight mt-4 text-center dark:text-white">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600">
                    @lang('messages.work_experience')
                </span>
            </h2>
            <p class="text-lg mt-4 text-slate-600 text-center [text-wrap:pretty] dark:text-white">
                @lang('messages.work_experience_intro')
            </p>
        </div>


        <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-8 md:gap-16 md:px-5">

            <div
                class="rounded-lg p-8 bg-gray-50 dark:bg-gray-800 transition ring-1 ring-gray-200/50 dark:ring-gray-700/50 shadow cursor-pointer flex flex-col gap-4 items-start group md:-m-5 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                <div class="flex flex-col flex-grow">
                    <div>
                        <h3 class="font-semibold text-lg dark:text-white">
                            {{-- Voluntariado --}}
                            @lang('messages.volunteer')
                        </h3>

                        <h2 class="text-slate-500 dark:text-slate-300 font-semibold">
                            Un Cachito de Luz A.C.
                        </h2>

                        <p class="text-slate-500 dark:text-slate-300 mt-2 leading-relaxed mb-2">
                            {{-- Diseño de base de datos y sistema de captura de entrega de donaciones de medicamentos
                            realizado en Visual Basic. --}}
                            @lang('messages.volunteer_description')
                        </p>
                    </div>
                </div>
                <span
                    class="bg-purple-100 dark:bg-purple-100 border-purple-200 dark:border-purple-700 border text-purple-600 dark:text-purple-800 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                    {{-- ENE. 2017 - ENE. 2022 --}}
                    @lang('messages.cachito_date')
                </span>
            </div>

            <div
                class="rounded-lg p-8 bg-gray-50 dark:bg-gray-800 transition ring-1 ring-gray-200/50 dark:ring-gray-700/50 shadow cursor-pointer flex flex-col gap-4 items-start group md:-m-5 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                <div class="flex flex-col flex-grow">
                    <div>
                        <h3 class="font-semibold text-lg dark:text-white">
                            {{-- Dessarrollador --}}
                            @lang('messages.title_dev')
                        </h3>

                        <h2 class="text-slate-500 dark:text-slate-300 font-semibold">
                            ITACE
                        </h2>

                        <p class="text-slate-500 dark:text-slate-300 mt-2 leading-relaxed mb-2">
                            {{-- Diseño y desarrollo de una aplicación .NET programada en Visual Basic para el registro de
                            asistencia mediante códigos QR. --}}
                            @lang('messages.itace_description')
                        </p>
                    </div>
                </div>
                <span
                    class="bg-purple-100 dark:bg-purple-100 border-purple-200 dark:border-purple-700 border text-purple-600 dark:text-purple-800 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                    {{-- FEB. 2020 - MAR. 2020 --}}
                    @lang('messages.itace_date')
                </span>
            </div>

            <div
                class="rounded-lg p-8 bg-gray-50 dark:bg-gray-800 transition ring-1 ring-gray-200/50 dark:ring-gray-700/50 shadow cursor-pointer flex flex-col gap-4 items-start group md:-m-5 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                <div class="flex flex-col flex-grow">
                    <div>
                        <h3 class="font-semibold text-lg dark:text-white">
                            {{-- Dessarrollador Back-End --}}
                            @lang('messages.backend_developer')
                        </h3>

                        <h2 class="text-slate-500 dark:text-slate-300 font-semibold">
                            Cactu Nieves
                        </h2>

                        <p class="text-slate-500 dark:text-slate-300 mt-2 leading-relaxed mb-2">
                            {{-- Diseño, desarrollo e implementación de una aplicación .NET programada en C# para el control
                            de procesos de venta (POS). --}}
                            @lang('messages.cactu_description')
                        </p>
                    </div>
                </div>
                <span
                    class="bg-purple-100 dark:bg-purple-100 border-purple-200 dark:border-purple-700 border text-purple-600 dark:text-purple-800 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                    {{-- MAR. 2022 - ABR. 2022 --}}
                    @lang('messages.cactu_date')
                </span>
            </div>

            <div
                class="rounded-lg p-8 bg-gray-50 dark:bg-gray-800 transition ring-1 ring-gray-200/50 dark:ring-gray-700/50 shadow cursor-pointer flex flex-col gap-4 items-start group md:-m-5 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                <div class="flex flex-col flex-grow">
                    <div>
                        <h3 class="font-semibold text-lg dark:text-white">
                            {{-- Desarrollador Front-End --}}
                            @lang('messages.frontend_developer')
                        </h3>

                        <h2 class="text-slate-500 dark:text-slate-300 font-semibold">
                            SVAM international
                        </h2>

                        <p class="text-slate-500 dark:text-slate-300 mt-2 leading-relaxed mb-2">
                            {{-- Contribución a la actualización de la interfaz de la aplicación web LEADS, utilizando
                            tecnologías como Bootstrap 5, Datatables y Google Charts. --}}
                            @lang('messages.svam_description')
                        </p>
                    </div>
                </div>
                <span
                    class="bg-purple-100 dark:bg-purple-100 border-purple-200 dark:border-purple-700 border text-purple-600 dark:text-purple-800 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                    {{-- ENE. 2022 - FEB. 2022 --}}
                    @lang('messages.svam_date')
                </span>
            </div>

            <div
                class="rounded-lg p-8 bg-gray-50 dark:bg-gray-800 transition ring-1 ring-gray-200/50 dark:ring-gray-700/50 shadow cursor-pointer flex flex-col gap-4 items-start group md:-m-5 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                <div class="flex flex-col flex-grow">
                    <div>
                        <h3 class="font-semibold text-lg dark:text-white">
                            {{-- Desarrollador --}}
                            @lang('messages.title_dev')
                        </h3>

                        <h2 class="text-slate-500 dark:text-slate-300 font-semibold">
                            UPV
                        </h2>

                        <p class="text-slate-500 dark:text-slate-300 mt-2 leading-relaxed mb-2">
                            {{-- Diseño y desarrollo de una aplicación en LARAVEL y FLASK en conjunto con
                            ARDUINO para el pase de lista con reconocimiento facial a alumnos. --}}
                            @lang('messages.upv_description')
                        </p>
                    </div>
                </div>
                <span
                    class="bg-purple-100 dark:bg-purple-100 border-purple-200 dark:border-purple-700 border text-purple-600 dark:text-purple-800 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                    {{-- SEP. 2023 - DIC. 2023 --}}
                    @lang('messages.upv_date')
                </span>
            </div>

                    
            <div
            class="rounded-lg p-8 bg-gray-50 dark:bg-gray-800 transition ring-1 ring-gray-200/50 dark:ring-gray-700/50 shadow cursor-pointer flex flex-col gap-4 items-start group md:-m-5 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
            <div class="flex flex-col flex-grow">
                <div>
                    <h3 class="font-semibold text-lg dark:text-white">
                        {{-- Freelancer --}}
                        @lang('messages.freelancer')
                    </h3>

                    <h2 class="text-slate-500 dark:text-slate-300 font-semibold">
                        {{-- Autónomo --}}
                        @lang('messages.freelancer_name')

                    </h2>

                    <p class="text-slate-500 dark:text-slate-300 mt-2 leading-relaxed mb-2">
                        {{-- Me desempeño como desarrollador freelancer especializado en la creación de páginas web 
                        así como en el diseño de interfaces y experiencia de usuario. --}}
                        @lang('messages.freelancer_description')
                    </p>
                </div>
            </div>
            <span
                class="bg-purple-100 dark:bg-purple-100 border-purple-200 dark:border-purple-700 border text-purple-600 dark:text-purple-800 rounded-full text-xs font-medium px-3 py-1 uppercase mb-2">
                {{-- SEP. 2023 - Actualidad --}}
                @lang('messages.freelancer_date')
            </span>
        </div>






        </div>
    </div>
</x-app-layout>

