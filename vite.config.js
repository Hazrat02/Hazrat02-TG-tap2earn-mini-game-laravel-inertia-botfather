import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js','resources/css/frontend/bot.css', 'resources/css/app.css','resources/css/admin.css','resources/js/admin.js'], 
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),

    ],
    build: {
        manifest: 'assets.json',
    },
   
});
