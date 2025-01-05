<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;
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
                 WahebEditor::make('title')
                    ->label('اسم العميل')
                    ->required(),
                 WahebEditor::make('description')
                    ->label('وصف قصير')
                    ->required(),
                TextInput::make('url')->url()

                    ->label('الرابط'),

            ]);
    }
    public static function getWahebSchema($data): Block
    {
        return Block::make('card-image')
            ->label('كارت مع صورة')

            ->schema([
                FileUpload::make('icon')
                    ->label('صورة ')
                   ,
                 WahebEditor::make('title')
                     ->fonts($data['fonts'])
                    ->label('اسم ')
                  ,
                 WahebEditor::make('description')
                     ->fonts($data['fonts'])
                    ->label('وصف قصير')
                   ,
                TextInput::make('url')->url()

                    ->label('الرابط'),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }



}
