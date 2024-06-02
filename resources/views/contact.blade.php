<x-app-layout>
    <div class="max-w-screen-xl mx-auto px-5">
        <div class="mt-16 text-center">
            <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                Contacto
            </h1>
            <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl dark:text-white">
                Envía un mensaje y te responderé lo antes posible.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10 mx-auto max-w-4xl mt-16">
            <div>
                <h2 class="font-medium text-2xl text-gray-800 dark:text-white">
                    Contáctame
                </h2>
                <p class="text-lg leading-relaxed text-slate-500 mt-3 dark:text-white">
                    ¿Tienes alguna duda? Estoy aquí para ayudarte. Rellena el formulario o llámame por teléfono.
                </p>
                <div class="mt-5">
                    <div class="flex items-center mt-2 space-x-2 text-gray-600 dark:text-gray-400">
                        <svg viewBox="0 0 24 24" class="text-gray-400 w-4 h-4" astro-icon="uil:map-marker">
                            <path fill="currentColor"
                                d="M12 2a8 8 0 0 0-8 8c0 5.4 7.05 11.5 7.35 11.76a1 1 0 0 0 1.3 0C13 21.5 20 15.4 20 10a8 8 0 0 0-8-8zm0 17.65c-2.13-2-6-6.31-6-9.65a6 6 0 0 1 12 0c0 3.34-3.87 7.66-6 9.65zM12 6a4 4 0 1 0 4 4 4 4 0 0 0-4-4zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2z">
                            </path>
                        </svg>
                        <span>Cd. Victoria, Tamaulipas, México</span>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 text-gray-600 dark:text-gray-400">
                        <svg viewBox="0 0 24 24" class="text-gray-400 w-4 h-4" astro-icon="uil:envelope">
                            <path fill="currentColor"
                                d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm-.41 2-5.88 5.88a1 1 0 0 1-1.42 0L5.41 6zM20 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7.41l5.88 5.88a3 3 0 0 0 4.24 0L20 7.41z">
                            </path>
                        </svg>
                        <a href="mailto:cesarzavalamx15@gmail.com">cesarzavalamx15@gmail.com</a>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 text-gray-600 dark:text-gray-400">
                        <svg viewBox="0 0 24 24" class="text-gray-400 w-4 h-4" astro-icon="uil:phone">
                            <path fill="currentColor"
                                d="M19.44 13c-.22 0-.45-.07-.67-.12a9.44 9.44 0 0 1-1.31-.39 2 2 0 0 0-2.48 1l-.22.45a12.18 12.18 0 0 1-2.66-2 12.18 12.18 0 0 1-2-2.66l.42-.28a2 2 0 0 0 1-2.48 10.33 10.33 0 0 1-.39-1.31c-.05-.22-.09-.45-.12-.68a3 3 0 0 0-3-2.49h-3a3 3 0 0 0-3 3.41 19 19 0 0 0 16.52 16.46h.38a3 3 0 0 0 2-.76 3 3 0 0 0 1-2.25v-3a3 3 0 0 0-2.47-2.9zm.5 6a1 1 0 0 1-.34.75 1.05 1.05 0 0 1-.82.25A17 17 0 0 1 4.07 5.22a1.09 1.09 0 0 1 .25-.82 1 1 0 0 1 .75-.34h3a1 1 0 0 1 1 .79q.06.41.15.81a11.12 11.12 0 0 0 .46 1.55l-1.4.65a1 1 0 0 0-.49 1.33 14.49 14.49 0 0 0 7 7 1 1 0 0 0 .76 0 1 1 0 0 0 .57-.52l.62-1.4a13.69 13.69 0 0 0 1.58.46q.4.09.81.15a1 1 0 0 1 .79 1z">
                            </path>
                        </svg>
                        <a href="tel:+52 (834) 1982 974">+52 (834) 1982 974</a>
                    </div>
                </div>
            </div>
            

            <div class="bg-white p-5 md:p-8 rounded-xl mb-5 shadow-lg dark:bg-gray-800">
                <form action="{{ route('contact.send') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-5">
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                            :value="old('name')" required autofocus placeholder="¿Cómo te llamas?" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="mb-5">
                        <x-input-label for="email" :value="__('Correo electrónico')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                            :value="old('email')" required placeholder="Déjame tu correo para poder responderte" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div class="mb-3">
                        <x-input-label for="message" :value="__('Mensaje')" />
                        <textarea placeholder="¿Sobre qué quieres hablar? ¡Cuéntame!"
                            class="text-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-purple-500 dark:focus:border-purple-600 focus:ring-purple-500 dark:focus:ring-purple-600 rounded-md shadow-sm placeholder-gray-400 dark:placeholder-gray-500 mt-1 block w-full"
                            name="message"></textarea>

                        <x-input-error class="mt-2" :messages="$errors->get('message')" />
                    </div>

                    <x-primary-button class="w-full justify-center">
                        {{ __('Enviar mensaje') }}
                    </x-primary-button>
                </form>

                @if (session('status') === 'message-sent')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 dark:text-green-400 w-full text-center mt-7">
                    {{ __('Mensaje enviado correctamente')}}
                </p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>