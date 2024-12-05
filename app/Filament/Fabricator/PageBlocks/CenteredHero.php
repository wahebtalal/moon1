<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CenteredHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('centered-hero')
            ->schema([
            TextInput::make('title')->label('العنوان'),
                Textarea::make('content')->label('المحتوى'),
                Fieldset::make('buttons')->schema([
                    Checkbox::make('active')->label('تفعيل')->live(),
                    TextInput::make('buttontext')
                        ->label('النص للزر')
                        ->disabled(fn(Get $get)=>!$get('active'))
                        ->required(fn(Get $get)=>$get('active'))
                    ,
                    TextInput::make('buttonurl')
                        ->label('الرابط للزر')
                        ->disabled(fn(Get $get)=>!$get('active'))
                        ->required(fn(Get $get)=>$get('active'))

                    ,
                ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
