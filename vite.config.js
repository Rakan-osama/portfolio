import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    root: 'resources/static',
    publicDir: 'public',
    plugins: [tailwindcss()],
    build: {
        outDir: '../../dist',
        emptyOutDir: true,
    },
});
