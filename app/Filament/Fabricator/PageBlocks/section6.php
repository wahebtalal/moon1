<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class section6 extends PageBlock
{
    protected static ?string $component='section.6';
    public static function getBlockSchema(): Block
    {
        return Block::make('section6')
            ->schema([

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
