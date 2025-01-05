<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Builder\Block;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Card extends PageBlock
{
    /**
     * @throws \Exception
     */
    public static function getBlockSchema(): Block
    {
        return Block::make('card')
            ->label('كارد خدماتنا')
            ->schema([
                // Add fields to manage the content dynamically
                \Filament\Forms\Components\FileUpload::make('icon')
                    ->label('أيقونة')
                    ->disk('public')
//                    ->imageResizeMode('cover')
//                    ->imageCropAspectRatio('1:1')
                    ->imageEditor()
//                    ->imageEditorMode(3)

                    ->directory('icons')
                    ->image(),
                 WahebEditor::make('title')
                    ->label('العنوان')
                    ->required(),
     WahebEditor::make('description')
                    ->label('الوصف')
                    ,
            ]);
    }
    public static function getWahebSchema($data): Block
    {
        return Block::make('card')
            ->label('كارد خدماتنا')
            ->schema([
                // Add fields to manage the content dynamically
                \Filament\Forms\Components\FileUpload::make('icon')
                    ->label('أيقونة')
                    ->disk('public')
//                    ->imageResizeMode('cover')
//                    ->imageCropAspectRatio('1:1')
                    ->imageEditor()
//                    ->imageEditorMode(3)

                    ->directory('icons')
                    ->image(),
                 WahebEditor::make('title')
                    ->label('العنوان')
                     ->fonts($data['fonts'])
                    ,
     WahebEditor::make('description')
         ->fonts($data['fonts'])
                    ->label('الوصف')
                    ,
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
