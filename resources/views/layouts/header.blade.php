<header class="astronav-sticky-header sticky top-0 border-b z-20 transition-all is-active py-2 bg-white/80 border-gray-200 backdrop-blur-lg" active="">
    <div class="max-w-screen-xl mx-auto px-5">
        <div class="flex flex-col lg:flex-row justify-between items-center relative z-10">
            <div class="flex w-full lg:w-auto items-center justify-between">
                <a href="{{ route('home') }}" class="text-lg flex items-center transition focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo rounded-full px-2 -ml-2">
                    <span class="font-bold text-indigo-600">< César</span>
                    <span class="text-slate-600 ms-1">Zavala /> </span>
                </a>
                <div class="block lg:hidden">
                    <button id="astronav-menu" aria-label="Toggle Menu">
                        <svg fill="currentColor" class="w-4 h-4 text-gray-800" width="24" height="24"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Cerrar menú</title>
                            <path class="astronav-close-icon astronav-toggle hidden" fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M18.278 16.864a1 1 0 01-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 01-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 011.414-1.414l4.829 4.828 4.828-4.828a1 1 0 111.414 1.414l-4.828 4.829 4.828 4.828z">
                            </path>
                            <path class="astronav-open-icon astronav-toggle" fill-rule="evenodd"
                                d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <nav class="astronav-items astronav-toggle hidden w-full lg:w-auto mt-2 lg:flex lg:mt-0">
                <ul class="flex flex-col lg:flex-row lg:gap-3">
                    <li>
                        <a class="flex lg:px-3 py-2 text-sm text-gray-600 hover:text-indigo-600 focus-visible:ring-2 focus-visible:ring-offset-2 transition focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo rounded-full" href="{{ route('home') }}">Inicio</a>
                    </li>

                    <li>
                        <a class="flex lg:px-3 py-2 text-sm text-gray-600 hover:text-indigo-600 focus-visible:ring-2 focus-visible:ring-offset-2 transition focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo rounded-full" href="{{ route('about') }}">Sobre mí</a>
                    </li>

                    <li>
                        <a class="flex lg:px-3 py-2 text-sm text-gray-600 hover:text-indigo-600 focus-visible:ring-2 focus-visible:ring-offset-2 transition focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo rounded-full" href="{{ route('projects') }}">Mis proyectos</a>
                    </li>

                    <li>
                        <a class="flex lg:px-3 py-2 text-sm text-gray-600 hover:text-indigo-600 focus-visible:ring-2 focus-visible:ring-offset-2 transition focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo rounded-full" href="{{ route('tech') }}">Tecnologías</a>
                    </li>

                    <li>
                        <a class="flex lg:px-3 py-2 text-sm text-gray-600 hover:text-indigo-600 focus-visible:ring-2 focus-visible:ring-offset-2 transition focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo rounded-full" href="{{ route('contact') }}">Contacto</a>
                    </li>
                </ul>

                @auth
                    <div class="lg:hidden flex items-center mt-3 gap-4">
                        <a class="rounded-full text-center transition focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500 focus-visible:outline-none focus-visible:shadow-outline-indigo w-full px-5 py-2 bg-red-600 text-white hover:bg-red-800 cursor-pointer"
                            href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endauth

            </nav>

            @auth
                <div>
                    <div class="hidden lg:flex items-center gap-4">
                        <a class="rounded-full text-center transition focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500 focus-visible:outline-none focus-visible:shadow-outline-indigo px-4 py-2 text-sm bg-red-600 text-white hover:bg-red-800 inline-flex items-center group gap-px cursor-pointer"
                            href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            @endauth
        
        
        </div>
    </div>
</header>