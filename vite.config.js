import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'
import { fileURLToPath, URL } from "node:url";
import svgLoader from 'vite-svg-loader';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        // vue({
        //     transformAssetUrls: {
        //         // The Vue plugin will re-write asset URLs, when referenced
        //         // in Single File Components, to point to the Laravel web
        //         // server. Setting this to `null` allows the Laravel plugin
        //         // to instead re-write asset URLs to point to the Vite
        //         // server instead.
        //         base: null,

        //         // The Vue plugin will parse absolute URLs and treat them
        //         // as absolute paths to files on disk. Setting this to
        //         // `false` will leave absolute URLs un-touched so they can
        //         // reference assets in the public directory as expected.
        //         includeAbsolute: false,
        //     },
        // }),
        vue({ 
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        // laravel.default({
        //     input: ['resources/css/app.css', 'resources/js/app.js'],
        //     refresh: [
        //         ...refreshPaths,
        //         'app/Filament/**',
        //         'app/Forms/Components/**',
        //         'app/Livewire/**',
        //         'app/Infolists/Components/**',
        //         'app/Providers/Filament/**',
        //         'app/Tables/Columns/**',
        //     ],
        //     publicPath: 'public',
        // }),
        laravel.default({
            input: [
                // 'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
            publicPath: 'public',
            assets: ['images'],
        }),
        svgLoader()
    ],
    resolve: {
        alias: {
            "@": fileURLToPath(new URL("./resources/js", import.meta.url)),
        },
    },
})


// import { defineConfig } from "vite";
// import laravel from "laravel-vite-plugin";
// import vue from "@vitejs/plugin-vue";
// import { fileURLToPath, URL } from "node:url";
// import svgLoader from 'vite-svg-loader';

// export default defineConfig({
    
//     plugins: [
//         vue({
//             transformAssetUrls: {
//                 // The Vue plugin will re-write asset URLs, when referenced
//                 // in Single File Components, to point to the Laravel web
//                 // server. Setting this to `null` allows the Laravel plugin
//                 // to instead re-write asset URLs to point to the Vite
//                 // server instead.
//                 base: null,

//                 // The Vue plugin will parse absolute URLs and treat them
//                 // as absolute paths to files on disk. Setting this to
//                 // `false` will leave absolute URLs un-touched so they can
//                 // reference assets in the public directory as expected.
//                 includeAbsolute: false,
//             },
//         }),
//         laravel({
//             input: [
//                 // 'resources/css/app.css',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//             publicPath: 'public',
//             assets: ['images'],
//         }),
//         svgLoader()
//     ],
//     resolve: {
//         alias: {
//             "@": fileURLToPath(new URL("./resources/js", import.meta.url)),
//         },
//     },
//     build: {
//         rollupOptions: {
//             // external: [/\/images\/.*/],
//         }
//     },
// });