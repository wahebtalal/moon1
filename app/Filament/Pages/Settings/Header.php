<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Header extends BaseSettings
{

    protected static ?string $title = 'الترويسة';
protected static ?string $slug='/header';
//protected static bool $shouldRegisterNavigation=false;
    public static function getNavigationLabel(): string
    {
        return 'الترويسة';
    }

    public function getTitle(): string
    {
        return 'الترويسة';
    }

    public function schema(): array|Closure
    {
        return [
            TinyEditor::make('header.title')
                ->label('العنوان')
            ,
            TinyEditor::make('header.preTitle')
                ->label('نص فوق العنوان')
            ,
            FileUpload::make('header.rightHero')
                ->label('صورة العنوان اليمنى')
                ->required(),

            TinyEditor::make('header.paragraph')
                ->label('الباراغراف')


        ];
    }
}
