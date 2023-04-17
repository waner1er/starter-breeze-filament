import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/user/css/app.css',
                'resources/assets/user/js/app.js',
                'resources/assets/public/scss/guest.scss',
                'resources/assets/public/js/guest.js',
            ],
            refresh: true,
        }),
    ],
});
