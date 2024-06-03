document.addEventListener('DOMContentLoaded', function () {
    var themeToggleButtons = document.querySelectorAll('#theme-toggle-desktop, #theme-toggle-mobile');


    // Función para cambiar el tema
    function toggleTheme() {
        if (localStorage.getItem('color-theme') === 'dark') {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            document.dispatchEvent(new CustomEvent('theme-changed', { detail: { theme: 'light' } }));
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            document.dispatchEvent(new CustomEvent('theme-changed', { detail: { theme: 'dark' } }));
        }
    }

    // Agrega evento a los botones para cambiar el tema
    themeToggleButtons.forEach(function(button) {
        button.addEventListener('click', toggleTheme);
    });
});
