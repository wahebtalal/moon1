<?php

namespace App\Filament\Plugins;

use App\Filament\Plugins\Pages\Artisan;
use Filament\Panel;

class FilamentArtisanPlugin extends \TomatoPHP\FilamentArtisan\FilamentArtisanPlugin
{
    public function register(Panel $panel): void
    {

            $this->isActive = true;


//        if($this->isActive) {
            $panel
//                ->plugin(FilamentDeveloperGatePlugin::make())
                ->pages([
                    Artisan::class,
                ]);
//        }

    }
}
