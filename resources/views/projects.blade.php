@extends('layouts.app')

@section('content')

<div class="max-w-screen-xl mx-auto px-5 mb-10">
    <div class="mt-16 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">Mis Proyectos</h1>
        <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl">
            Estos son algunos de los proyectos que he realizado en mi carrera profesional
        </p>
    </div>
    <main class="mt-16">
        <ul class="grid sm:grid-cols-2 md:grid-cols-3 gap-10 lg:gap-16">
            @for ($i = 0; $i < 6; $i++)
            <li>
                <a href="#" class="">
                    <div class="bg-white rounded-md shadow-md p-6 hover:shadow-lg transition duration-300 ease-in-out">
                        <img src="{{asset('img/pr.webp')}}" alt="alt text" class="w-full rounded-md object-cover" width="800" height="600">
                        <div class="mt-4">
                            <span class="text-blue-500 uppercase tracking-wider text-xs font-medium">Fullstack</span>
                            <h2 class="text-xl font-semibold leading-snug tracking-tight mt-1">Desarrollo de mi portafolio web personal con Laravel y TailwindCSS</h2>
                            <div class="flex gap-2 mt-3 text-sm">
                                <span class="bg-purple-100 border-purple-200 border text-purple-600 rounded-full text-xs font-medium px-3 py-1 ">
                                    <span>
                                        Enero 2021
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            @endfor
        </ul>
        <div class="flex justify-center items-center mt-10 gap-4">
            <a class="bg-gray-100 px-5 py-2 rounded-md hover:bg-gray-200 transition" href="/blog/2" title="Go to Next">
                Siguiente →
            </a>
        </div>
    </main>
</div>

@endsection
