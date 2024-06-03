import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        chunkSizeWarningLimit: 20000, // Increase the chunk size warning limit
        rollupOptions: {
            output: {
                manualChunks: (id) => {
                    if (id.includes('node_modules')) {
                        return 'vendor';
                    }
                },
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
