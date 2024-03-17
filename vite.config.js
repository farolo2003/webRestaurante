import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/views/dish.blade',
                'resources/views/menu.blade',
                'resources/views/reservaConfirmada.blade',
                'resources/views/restaurante.blade',
            ],
            refresh: true,
        }),
    ],
});
