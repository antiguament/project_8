import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/mi-componente1.css'], // Asegúrate de incluir tu archivo CSS
            refresh: true,
        }),
    ],
});