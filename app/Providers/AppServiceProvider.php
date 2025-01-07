<?php

namespace App\Providers;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Builder;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Foundation\Vite;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Forms\Components\PageBuilder;

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
     * @throws \Exception
     */
    public function boot(): void
    {
        PageBuilder::configureUsing(function (PageBuilder $builder) {
            $builder->collapsible()    ->collapsed()->cloneable()

            ; //You can use any method supported by the Builder field
        });
        Builder::configureUsing(function (Builder $builder) {
            $builder->collapsible()    ->collapsed()->cloneable()

            ; //You can use any method supported by the Builder field
        });

        WahebEditor::configureUsing(function (WahebEditor $editor) {

//            $fonts=implode(';',array_map(
//                    function ($item){
//                        return $item.'='.$item;
//                    },
//                    array_values(
////                    array_unique(
//                        array_merge(
//                            array_map(function ($item){
//                                return $item['name'];
//                            }, setting('fonts')
//                            )
//                        )
////                    )
//                    )[0]
//                )).';';
            $fonts='';
//            foreach (\App\Models\Font::all() as $font) {
//                foreach ($font->Name as $name) {
//                    $fonts.=$name.'='.$name.';';
//
//                }
//            }
            $editor
//                ->fonts($fonts)
            ->fontsUrl(url('/font/css'))
                ->setCustomConfigs(['font_css'=>url('/font/css')])
                ->toolbarSticky(false)
            ->profile('full');
        });

//TinyEditor::configureUsing(function (TinyEditor $editor) {
//            $editor->profile('all');
//});
        FilamentFabricator::registerStyles([
//            '', //external url
//            mix('css/app.css'), //laravel-mix
            app(Vite::class)('resources/css/app.css'), //vite
//            asset('css/app.css'), // asset from public folder
        ]);
//        FilamentAsset::register([
////            Js::make('waheb_tinymce', 'https://cdn.jsdelivr.net/npm/tinymce@7.6.0/tinymce.min.js'),
//            Js::make('waheb-editor', __DIR__.'/../../resources/js/tiny.js'),
//            ]);


    }
}
