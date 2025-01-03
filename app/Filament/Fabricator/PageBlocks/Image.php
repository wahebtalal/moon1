<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Image extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('image')
            ->label('صورة')
//            ->columns(2)
            ->schema([
                // Tab Group
                Tabs::make('Image Options')
                    ->tabs([
                        // Tab 1: General
                        Tabs\Tab::make('عام')
                            ->schema([
                                // Image upload field with cropping
                                FileUpload::make('image')
                                    ->label('صورة')
                                    ->required()
                                    ->downloadable()
                                    ->image()
                                    ->imageEditor(),

                                // Alt text for SEO
                                TextInput::make('alt')
                                    ->columnSpan(1)
                                    ->label('وصف الصورة لتحسين محرك البحث')
                                    ->required(),

                                // Title text (optional)
                                TextInput::make('title')
                                    ->columnSpan(1)
                                    ->label('عنوان الصورة (اختياري)')
                                    ->nullable(),

                                // Caption for the image
                                TextArea::make('caption')
                                    ->label('التعليق (اختياري)')
                                    ->rows(2)
                                    ->nullable(),
                            ]),

                        // Tab 2: Display Settings


                        // Tab 3: Dimensions
                        Tabs\Tab::make('الأبعاد')
                            ->schema([
                                // Set width and height
                                TextInput::make('width')
                                    ->columnSpan(1)
                                    ->label('العرض (بالبكسل)')
                                    ->numeric()
                                    ->nullable(),

                                TextInput::make('height')
                                    ->columnSpan(1)
                                    ->label('الارتفاع (بالبكسل)')
                                    ->numeric()
                                    ->nullable(),
                            ]),

                        Tabs\Tab::make('إعدادات العرض')
                            ->schema([
                                // Display mode options
                                Select::make('displaymode')
                                    ->columnSpan(1)
                                    ->label('طريقة عرض الصورة')
                                    ->options([
                                        'full_width' => 'عرض كامل (Full Width)',
                                        'inline' => 'ضمن النص (Inline)',
                                        'thumbnail' => 'صورة مصغرة (Thumbnail)',
                                    ])
                                    ->default('full_width')
                                    ->required(),

                                // Link for the image
                                TextInput::make('link')
                                    ->columnSpan(1)
                                    ->label('رابط الصورة (اختياري)')
                                    ->url()
                                    ->nullable(),

                                // Open link in new tab
                                Toggle::make('newtab')
                                    ->columnSpan(1)
                                    ->label('فتح الرابط في تبويب جديد')
                                    ->default(false),
                            ]),
                    ]),
            ]);

    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
