<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ParagraphWithIcon extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('paragraph-with-icon')
            ->label('محتوى ثابت مع ايقونه ')

            ->schema([
                FileUpload::make('icon')
                    ->label('ايقونة او شعار العميل ')
                    ->required(),

                TinyEditor::make('text')
                    ->label('وصف قصير')
                    ->required(),
                //
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
