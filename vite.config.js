import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                
                'resources/assets/css/app.min.css',
                'resources/assets/css/style.css',
                'resources/assets/css/components.css',
                'resources/assets/css/custom.css',
                'resources/assets/css/estiloticket.css',

                'resources/assets/js/app.min.js',
                'resources/assets/js/page/contact.js',
                'resources/assets/js/scripts.js',
                'resources/assets/js/custom.js',

                'resources/assets/css/app.min.css',
                'resources/assets/bundles/bootstrap-daterangepicker/daterangepicker.css',
                'resources/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
                'resources/assets/bundles/select2/dist/css/select2.min.css',
                'resources/assets/bundles/jquery-selectric/selectric.css',
                'resources/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
                'resources/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
                'resources/assets/css/style.css',
                'resources/assets/css/components.css',
                'resources/assets/css/custom.css',
                'resources/assets/bundles/select2/dist/js/select2.full.min.js',
                'resources/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
                'resources/assets/bundles/bootstrap-daterangepicker/daterangepicker.js',


            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            
        }
    },
});
