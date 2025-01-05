<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Dotswan\FilamentGrapesjs\Fields\GrapesJs;
use Filament\Forms\Components\FileUpload;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Font extends BaseSettings
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
                ->template('example')
                ->label('العنوان')
            ,     TinyEditor::make('header.ji')
                ->template('example')
                 ->label('ji')
            ,
            GrapesJs::make('page_layout')
                ->id('page_layout'),
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
