// vite.config.js
import { defineConfig } from "vite";
import react from "@vitejs/plugin-react"; // kalau pakai React

export default defineConfig({
  plugins: [react()],
  build: {
    outDir: "dist" // atau "public/build" sesuai pilihan kamu
  }
});
