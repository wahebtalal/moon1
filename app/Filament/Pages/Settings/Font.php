<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Http;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Font extends BaseSettings
{

    protected static ?string $title = 'الخطوط';
    protected static ?string $slug = '/font';

//protected static bool $shouldRegisterNavigation=false;
    public static function getNavigationLabel(): string
    {
        return 'الخطوط';
    }

    public function getTitle(): string
    {
        return 'الخطوط';
    }

    public function schema(): array|Closure
    {
        return [
            Tabs::make('Tabs')
                ->tabs([
                    Tabs\Tab::make('جوجل')
                        ->schema([
                            Repeater::make('fonts')
                                ->schema([
                                    TextInput::make('url')->url()
                                        ->afterStateUpdated(function (Get $get, Set $set, $state) {
                                            $response = Http::get($state);
                                            $body = $response->body();
                                            preg_match_all('/font-family:\s*["\']?([a-zA-Z0-9\s\-,]+)["\']?/', $body, $matches);
                                            $uniqueFonts = array_values(array_unique($matches[1]));
                                            $set('css', $body);
                                            $set('name', $uniqueFonts);
                                        }),
                                    KeyValue::make('name'),
                                    Textarea::make('css'),
                                ]),
                        ]),
                    Tabs\Tab::make('ملفات')
                        ->schema([
                            Repeater::make('fonts_file')
                                ->schema([

                                Section::make('hi')
                                    ->hiddenLabel()
                                     ->heading('ملف خط')
                                    ->headerActions([
                                        Action::make('refresh')
                                            ->disabled(fn($get)=>!($get('font_file')&&is_string(array_values($get('font_file'))[0])))
                                            ->action(function (Set $set,Get $get) {
                                               $path = storage_path('app/public/'.array_values($get('font_file'))[0]);
                                               $url= \Storage::url(array_values($get('font_file'))[0]);
//                                               dd($url,$path);
//                                                dd( (array_values($get('font_file'))[0]));
                                                $fontName = getFontNameFromFile($path);
                                                if ($fontName) {
                                                    $set('font_name', $fontName);

                                                    $css = "@font-face {
    font-family: '{$fontName}';
    src: url('" .$url . "');
}";
                                                    $set('font_css', $css);
                                                }

                                            })
                                        ->label('تحديث')
                                    ])
                                    ->schema([
                                    FileUpload::make('font_file')

                                        ->previewable()
//                                        ->getUploadedFileNameForStorageUsing()
                                        ->visibility('public')
                                        ->label('ملف الخط')

                                        ->required()
                                        ->directory('fonts')

                                        ,

                                    TextInput::make('font_name')
                                        ->label('Font Name')
                                        ->visible(fn($state):bool=>$state??false)
                                        ->readOnly(),

                                    Textarea::make('font_css')
                                        ->extraAttributes(['dir'=>'ltr'])
                                        ->label('Generated CSS')
                                        ->visible(fn($state):bool=>$state??false)

                                        ->rows(5)
                                        ->readOnly(),
                                ]),

                                ]),
                        ]),

                ]),


        ];
    }
}
