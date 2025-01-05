<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class label extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('label')
            ->label('عنوان')
            ->schema([
                 WahebEditor::make('title')->label('عنوان')->required()

                //
            ]);
    }
    public static function getWahebSchema($data): Block
    {


        return Block::make('label')
            ->label('عنوان')
            ->schema([
                 WahebEditor::make('title')->label('عنوان')->required()
                ->fonts($data['fonts'])

                //
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }

}
