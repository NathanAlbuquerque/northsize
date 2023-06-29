import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Slick Carousel
                'resources/vendor/slick-1.8.1/slick/slick.css',
                'resources/vendor/slick-1.8.1/slick/slick-theme.css',
                // App
                'resources/css/app.css',
                // JQuery
                'resources/js/jquery.min.js',
                'resources/js/jquery-migrate.min.js',
                // Slick Carousel
                'resources/vendor/slick-1.8.1/slick/slick.min.js',
                // App
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
