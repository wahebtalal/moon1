<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class label extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('label')
            ->label('عنوان')
            ->schema([
                WahebEditor::make('title')
                    ->label('عنوان')
                    ->required(),
                ColorPicker::make('backgroundcolor')
                    ->label('لون الخلفية')
                    ->default('#FFD700'), // Default to gold
                TextInput::make('borderradius')
                    ->label('نصف قطر الحواف')
                    ->numeric()
                    ->default(8), // Default to 8px
            ]);
    }

    public static function getWahebSchema($data): Block
    {
        return Block::make('label')
            ->label(function ($state) {
                return $state['lab'] ?? 'عنوان';
            })

            ->schema([
                TextInput::make('lab')->lazy()->label('عنوان داخلي '),
                WahebEditor::make('title')->label('عنوان')->required()
                    ->fonts($data['fonts']),
                ColorPicker::make('backgroundcolor')
                    ->label('لون الخلفية')
                    ->default('#FFD700'),
                TextInput::make('borderradius')
                    ->label('نصف قطر الحواف')
                    ->numeric()
                    ->default(8),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
