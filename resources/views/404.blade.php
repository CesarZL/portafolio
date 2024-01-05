@extends('layouts.app')

@section('content')



<div class="max-w-screen-xl mx-auto px-5">
    <div class="min-h-[calc(100vh-20rem)] flex items-center justify-center">
        <div class="mt-16 text-center">
            <h1 class="text-6xl lg:text-9xl font-bold lg:tracking-tight bg-gradient-to-b from-indigo-600 to-indigo-300 bg-clip-text text-transparent">
                404
            </h1>
            <p class="text-lg lg:text-2xl font-medium mt-4 text-slate-700">
                La página que estás buscando no existe.
            </p>
            <div class="mt-10">
                <a class="rounded-full text-center transition focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500 focus-visible:outline-none focus-visible:shadow-outline-indigo px-7 py-2.5 bg-white border-2 border-indigo-500 hover:bg-indigo-50 text-indigo-600 " 
                href="{{ route('home') }}">
                    Volver al inicio
                </a>
            </div>
        </div>
    </div>
</div>


@endsection