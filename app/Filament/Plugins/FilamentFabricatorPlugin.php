<?php

namespace App\Filament\Plugins;

use Filament\Panel;
use Pboivin\FilamentPeek\FilamentPeekPlugin;

class FilamentFabricatorPlugin extends \Z3d0X\FilamentFabricator\FilamentFabricatorPlugin
{
    public function register(Panel $panel): void
    {
//        $panel->resources(array_filter([
//            config('filament-fabricator.page-resource'),
//        ]));

        if (! $panel->hasPlugin(FilamentPeekPlugin::ID)) {
            //Automatically register FilamentPeekPlugin if it is not already registered
            $panel->plugin(FilamentPeekPlugin::make());
        }
    }
}
