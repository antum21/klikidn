import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { bunny } from "laravel-vite-plugin/fonts";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            fonts: [
                bunny("Instrument Sans", {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        host: "0.0.0.0", // Mengizinkan Vite diakses dari luar container Docker
        port: 5173, // Memastikan port tetap di 5173
        hmr: {
            host: "localhost", // Memastikan browser laptop Anda bisa terhubung untuk Hot Reload
        },
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
