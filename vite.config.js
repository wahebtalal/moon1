import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js' ,
            'node_modules/@tiptap/extension-font-family/dist/index.js',
                'node_modules/@tiptap/extension-text-style/dist/index.js',
                'resources/css/filament/admin/theme.css'

            ],
            refresh: true,
        }),
    ],
});
