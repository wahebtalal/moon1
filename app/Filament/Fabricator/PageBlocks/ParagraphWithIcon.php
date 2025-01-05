<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ParagraphWithIcon extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('paragraph-with-icon')
            ->label('باراجراف مع ايقونه يمنى')

            ->schema([
                FileUpload::make('icon')
                    ->label('ايقونة  ')
                    ->required(),

                 WahebEditor::make('text')
                    ->label('وصف قصير')
                    ->required(),
                //
            ]);
    }
    public static function getWahebSchema($data): Block
    {
        return Block::make('paragraph-with-icon')
            ->label('محتوى ثابت مع صورة ')

            ->schema([
                FileUpload::make('icon')
                    ->label('ايقونة او شعار العميل ')
                    ->required(),

                 WahebEditor::make('text')
                     ->fonts($data['fonts'])
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
