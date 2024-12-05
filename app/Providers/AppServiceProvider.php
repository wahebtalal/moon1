<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        //Add custom tags (like `<meta>` & `<link>`)
        FilamentFabricator::pushMeta([
            new HtmlString('<link rel="manifest" href="/site.webmanifest" />'),
        ]);

//Register scripts
        FilamentFabricator::registerScripts([
//            'https://unpkg.com/browse/tippy.js@6.3.7/dist/tippy.esm.js', //external url
//            mix('js/app.js'), //laravel-mix
            app(Vite::class)('resources/js/app.js'), //vite
            asset('js/web.js'), // asset from public folder
        ],);

//Register styles
        FilamentFabricator::registerStyles([
            'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap', //external url
            'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap', //external url
//            mix('css/app.css'), //laravel-mix
            app(Vite::class)('resources/css/app.css'), //vite
//            asset('css/app.css'), // asset from public folder
        ]);

        FilamentFabricator::favicon(asset('favicon.ico'));
    }
}
