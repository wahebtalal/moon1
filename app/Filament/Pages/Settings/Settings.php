<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Settings extends BaseSettings
{
    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tabs\Tab::make('General')
                        ->schema([
                            TextInput::make('general.brand_name')
//                                ->required()
                            ,
                            FileUpload::make('general.brand_logo')
                        ]),
                    Tabs\Tab::make('Seo')
                        ->schema([
                            TextInput::make('seo.title')
//                                ->required()
                            ,
                            TextInput::make('seo.description')
//                                ->required()
                            ,
                        ]),
                    Tabs\Tab::make('Main')
                        ->schema([
                            TextInput::make('main.title')
                                ->required(),
                                FileUpload::make('main.background')
                                ->required(),
                        ]),
                ]),
        ];
    }
}
