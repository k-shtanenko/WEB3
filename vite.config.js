import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/styles.sass', 'resources/js/index.js', 'resources/css/bootstrap/dist/css/bootstrap.css', 'resources/css/bootstrap/dist/js/bootstrap.bundle.min.js'],
            refresh: true,
        }),
    ],
});
