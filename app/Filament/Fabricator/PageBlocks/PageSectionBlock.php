<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PageSectionBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('page-section')
            ->label('قسم')
            ->schema([
                TextInput::make('columns')
                    ->label('عدد الأعمدة')
//                    ->label('Columns')
//                    ->label(fn()=>dd(
//                        array_filter( FilamentFabricator::getPageBlocks(), fn ($key) => $key!== 'grid',
//                        ARRAY_FILTER_USE_KEY )
//                    ))
                    ->integer()
                    ->required(),

                Builder::make('blocks')
                    ->label('محتوى القسم')
//                    ->blocks(FilamentFabricator::getPageBlocks())
                ->blocks(fn()=>     array_filter( FilamentFabricator::getPageBlocks(), fn ($key) => $key!== 'page-section',
                    ARRAY_FILTER_USE_KEY ))



            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
