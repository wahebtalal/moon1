<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\TiptapExtensions\FontExtenion;
use Filament\Forms\Components\Builder\Block;
use FilamentTiptapEditor\TiptapEditor;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class StaticContent extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('static-content')
            ->label('محتوى ثابت')
            ->schema([
                TinyEditor::make('content')

        ->label('المحتوى')

                //
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
