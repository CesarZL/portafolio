document.addEventListener('DOMContentLoaded', function () {
    var themeToggleButtons = document.querySelectorAll('#theme-toggle-desktop, #theme-toggle-mobile');

    // Inicializa el estado del tema según lo guardado en localStorage o la preferencia del sistema
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }

    // Función para cambiar el tema
    function toggleTheme() {
        if (localStorage.getItem('color-theme') === 'dark') {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

    // Agrega evento a los botones para cambiar el tema
    themeToggleButtons.forEach(function(button) {
        button.addEventListener('click', toggleTheme);
    });
});


