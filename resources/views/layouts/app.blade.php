<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="darkModeHandler()" x-bind:class="{'dark': darkMode }" x-init="init()">
    <head>
        <meta name="google-site-verification" content="yHQKs-b05Hlvr8mPgKkfJD5gxFEeO_luuyJ-vgzvW_E" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <script>
            // Modo oscuro en la carga inicial para evitar parpadeo
            (function() {
                const darkMode = localStorage.getItem('darkMode');
                const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (!darkMode && prefersDarkMode) {
                    localStorage.setItem('darkMode', true);
                }
                if (JSON.parse(localStorage.getItem('darkMode'))) {
                    document.documentElement.classList.add('dark');
                }
            })();
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-tr from-gray-100 to-gray-200 dark:bg-gradient-to-tr dark:from-gray-900 dark:to-slate-800">
            @include('layouts.navigation')
            <main>
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </div>
        
        @stack('scripts')
        @livewireScripts

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('darkModeHandler', () => ({
                    darkMode: JSON.parse(localStorage.getItem('darkMode') || 'false'),
                    init() {
                        this.$watch('darkMode', value => localStorage.setItem('darkMode', value));
                        this.$nextTick(() => {
                            if (this.darkMode) {
                                document.documentElement.classList.add('dark');
                            } else {
                                document.documentElement.classList.remove('dark');
                            }
                        });
                    },
                    toggleDarkMode() {
                        this.darkMode = !this.darkMode;
                        if (this.darkMode) {
                            document.documentElement.classList.add('dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                        }
                    },
                }))
            })
        </script>
    </body>
</html>
