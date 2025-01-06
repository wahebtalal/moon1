<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
 use Filament\Forms\Components\Builder\Block;
 use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class StaticContent extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('static-content')
            ->label('محتوى ثابت')
            ->schema([
                 WahebEditor::make('content')

        ->label('المحتوى')

                //
            ]);
    }
    public static function getWahebSchema($data): Block
    {
        return Block::make('static-content')
            ->label('محتوى ثابت')
            ->schema([
                 WahebEditor::make('content')
                     ->fonts($data['fonts'])

        ->label('المحتوى')

                //
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
