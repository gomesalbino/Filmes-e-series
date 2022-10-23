import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import manifestSRI from 'vite-plugin-manifest-sri';

import.meta.glob([
    '../images/**',
    '../fonts/**',
    
  ]);

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

            ],
            refresh: ['public/build/manifest.json'],
        }),
        manifestSRI(),
    ],
});
