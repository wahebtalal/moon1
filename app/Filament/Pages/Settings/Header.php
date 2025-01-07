<?php

namespace App\Filament\Pages\Settings;

//use App\Forms\Components\WahebEditor;
use App\Forms\Components\WahebEditor;
use Closure;
//use Daothanh\Tinymce\Forms\Components\TinymceField;
use Dotswan\FilamentGrapesjs\Fields\GrapesJs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
//use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;

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
        $fonts='';
        foreach (\App\Models\Font::all() as $font) {
            foreach ($font->Name as $name) {
                $fonts.=$name.'='.$name.';';

            }
        }
        return [

            WahebEditor::make('header.title')
//                ->template('example')
                ->fonts($fonts)

                ->label('العنوان'),

             WahebEditor::make('header.preTitle')
                 ->fonts($fonts)

                 ->label('نص فوق العنوان')
            ,
            FileUpload::make('header.rightHero')
                ->label('صورة العنوان اليمنى')
                ->required(),

             WahebEditor::make('header.paragraph')
                 ->fonts($fonts)

                 ->label('الباراغراف')
//

        ];
    }
}
