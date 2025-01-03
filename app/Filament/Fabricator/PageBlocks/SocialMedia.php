<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SocialMedia extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('social-media')
            ->label('مواقع التواصل')
            ->schema([

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
