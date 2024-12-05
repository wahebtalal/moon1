<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroWithFigure extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero-with-figure')
            ->schema([
                Group::make([
                    TextInput::make('title')
                        ->label('العنوان')
                        ->required(),

                    Textarea::make('description')
                        ->label('الوصف')
                        ->required(),
                ]),

                Group::make([
                    FileUpload::make('image')
                        ->label('الصورة')
                        ->required(),
                ]),

                Grid::make()
                    ->schema([
                        Checkbox::make('active')->default(false)->label('تفعيل')->live(),

                        TextInput::make('buttontext')
                            ->disabled(fn(Get $get)=>!$get('active'))
                            ->label('النص للزر')
                            ->required(fn(Get $get)=>$get('active'))
                        ,

                        TextInput::make('buttonurl')
                            ->required(fn(Get $get)=>$get('active'))
                            ->disabled(fn(Get $get)=>!$get('active'))

                            ->label('الرابط للزر')
                            ->url(),
                    ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
