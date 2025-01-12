<?php
//
//namespace App\Filament\Fabricator\PageBlocks;
//
//use App\Forms\Components\WahebEditor;
//use Filament\Forms\Components\Builder\Block;
//use Filament\Forms\Components\FileUpload;
//use Filament\Forms\Components\MarkdownEditor;
//use Filament\Forms\Components\TextInput;
//use Z3d0X\FilamentFabricator\Models\Contracts\Page;
//use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
//
//class CardImage extends PageBlock
//{
//    public static function getBlockSchema(): Block
//    {
//        return Block::make('card-image')
//            ->label('كارت مع صورة')
//
//            ->schema([
//                FileUpload::make('icon')
//                    ->label('ايقونة او شعار العميل ')
//                    ->required(),
//                 WahebEditor::make('title')
//                    ->label('اسم العميل')
//                    ->required(),
//                 WahebEditor::make('description')
//                    ->label('وصف قصير')
//                    ->required(),
//                TextInput::make('url')->url()
//
//                    ->label('الرابط'),
//
//            ]);
//    }
//    public static function getWahebSchema($data): Block
//    {
//        return Block::make('card-image')
//            ->label('كارت مع صورة')
//
//            ->schema([
//                FileUpload::make('icon')
//                    ->label('صورة ')
//                   ,
//                 WahebEditor::make('title')
//                     ->fonts($data['fonts'])
//                    ->label('اسم ')
//                  ,
//                 WahebEditor::make('description')
//                     ->fonts($data['fonts'])
//                    ->label('وصف قصير')
//                   ,
//                TextInput::make('url')->url()
//
//                    ->label('الرابط'),
//
//            ]);
//    }
//
//    public static function mutateData(array $data): array
//    {
//        return $data;
//    }
//
//
//
//}


namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\WahebEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CardImage extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('card-image')
//            ->label('كارت مع صورة')
            ->label(function ($state) {
                return $state['lab'] ?? 'كارت مع صورة';
            })

            ->schema([
                TextInput::make('lab')->lazy()->label('عنوان داخلي '),
                FileUpload::make('icon')
                    ->label('ايقونة او شعار العميل')
                    ->required()
                    ->downloadable()
                    ->image()
                    ->imageEditor(),

                WahebEditor::make('title')
                    ->label('اسم العميل')
                    ->required(),

                WahebEditor::make('description')
                    ->label('وصف قصير')
                    ->required(),

                TextInput::make('url')
                    ->label('الرابط')
                    ->url()
                    ->nullable(),

                // Card background color
                ColorPicker::make('cardbackgroundcolor')
                    ->label('لون خلفية الكارت')
                    ->default('#ffffff'),

                // Card border settings
                TextInput::make('cardborderradius')
                    ->label('نصف قطر حواف الكارت (بالبكسل)')
                    ->numeric()
                    ->default(8),

                ColorPicker::make('cardbordercolor')
                    ->label('لون حواف الكارت')
                    ->default('#cccccc'),

                // Image styling options
                TextInput::make('imagewidth')
                    ->label('عرض الصورة (بالبكسل)')
                    ->numeric()
                    ->nullable(),

                TextInput::make('imageheight')
                    ->label('ارتفاع الصورة (بالبكسل)')
                    ->numeric()
                    ->nullable(),

                Select::make('imagehovereffect')
                    ->label('تأثير عند مرور الماوس على الصورة')
                    ->options([
                        'none' => 'بدون تأثير',
                        'zoom' => 'تكبير (Zoom)',
                        'shadow' => 'ظل (Shadow)',
                    ])
                    ->default('none'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        // Set default values if not provided
        $data['cardbackgroundcolor'] = $data['cardbackgroundcolor'] ?? '#ffffff';
        $data['cardborderradius'] = $data['cardborderradius'] ?? 8;
        $data['cardbordercolor'] = $data['cardbordercolor'] ?? '#cccccc';
        $data['imagewidth'] = $data['imagewidth'] ?? null;
        $data['imageheight'] = $data['imageheight'] ?? null;
        $data['imagehovereffect'] = $data['imagehovereffect'] ?? 'none';
        return $data;
    }
}

