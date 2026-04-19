import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/veloadmin.css',
                'resources/js/veloadmin.js',
            ],
            refresh: true,
        }),
    ],
});
