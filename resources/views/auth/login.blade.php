@extends('layouts.app')

@section('content')

  <div class="max-w-screen-xl mx-auto px-5">
    <div class="mt-16 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">Login</h1>
        <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl">Inicia sesión en tu portafolio</p>
    </div>
    <div class="grid gap-10 mx-auto max-w-4xl mt-16">
        <div class="bg-slate-100 p-5 md:p-8 rounded-xl mb-5">
            <form action="{{ route('login') }}" method="POST" id="form">
                @csrf
                <div class="mb-5">
                    <input type="email" placeholder="Correo Electrónico" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100" name="email">                    
                    @error('email')
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-5"><label for="email_address" class="sr-only">Email Address</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
                    @error('password')
                    <div class="invalid-feedback text-red-400 text-sm mt-1">
                        Please provide a valid email address.
                    </div>
                    @enderror
                </div>
                
                <button type="submit" class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-6 py-3 bg-indigo-600 text-white hover:bg-indigo-800  border-2 border-transparent">
                   Iniciar sesión
                </button>
                {{-- <div id="result" class="mt-3 text-center">
                    aqui va el mensaje de confirmacion o error
                </div> --}}
            </form>
        </div>
    </div>
</div>




@endsection
