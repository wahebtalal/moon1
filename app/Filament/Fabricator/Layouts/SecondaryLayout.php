<?php

namespace App\Filament\Fabricator\Layouts;

use Z3d0X\FilamentFabricator\Layouts\Layout;

class SecondaryLayout extends Layout
{
    protected static ?string $name = 'secondary';
    public static function getLabel(): string
    {
        return 'فرعي';
    }
}
