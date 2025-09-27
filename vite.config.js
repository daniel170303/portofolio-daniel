import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";  


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            build: {
            outDir: "dist"   // <- default, biarin dist
  }
        }),
    ],
});


