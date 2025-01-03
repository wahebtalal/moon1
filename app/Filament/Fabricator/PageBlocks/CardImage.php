<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CardImage extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('card-image')
            ->label('باراجراف مع ايقونه ')

            ->schema([
                FileUpload::make('icon')
                    ->label('ايقونة او شعار العميل ')
                    ->required(),
                TinyEditor::make('title')
                    ->label('اسم العميل')
                    ->required(),
                TinyEditor::make('description')
                    ->label('وصف قصير')
                    ->required(),
                TextInput::make('url')->url()

                    ->label('الرابط'),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
