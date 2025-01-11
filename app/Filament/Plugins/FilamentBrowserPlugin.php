<?php

namespace App\Filament\Plugins;

use App\Filament\Plugins\Pages\Browser;
use Filament\Panel;
use TomatoPHP\FilamentDeveloperGate\FilamentDeveloperGatePlugin;

class FilamentBrowserPlugin extends \TomatoPHP\FilamentBrowser\FilamentBrowserPlugin
{

    public function register(Panel $panel): void
    {

            $this->isActive = true;


        if($this->isActive) {
            $panel
                ->plugin(FilamentDeveloperGatePlugin::make())
                ->pages([
                    Browser::class
                ]);
        }    }
}
