<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Settings extends BaseSettings
{

    protected static ?string $title = 'البيانات';
protected static ?string $slug='/';
//protected static bool $shouldRegisterNavigation=false;
    public static function getNavigationLabel(): string
    {
        return 'البيانات';
    }

    public function getTitle(): string
    {
        return 'البيانات';
    }

    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->persistTab()
                ->id('settings-tabs')
                ->schema([


                    Tabs\Tab::make('header')
                        ->label('التروسية')
                        ->schema([
                            TextInput::make('header.title')
                                ->label('العنوان')
                                ->required(),
                            TextInput::make('header.preTitle')
                                ->label('نص فوق العنوان')
                                ->required(),
                            FileUpload::make('header.rightHero')
                                ->label('صورة العنوان اليمنى')
                                ->required(),

                            Textarea::make('header.paragraph')
                                ->label('الباراغراف')
                                ->required(),

                        ]),
                    Tabs\Tab::make('service')
                        ->label('خدماتنا')
                        ->schema([
                            Repeater::make('service')
                                ->label('خدماتنا')

                                ->schema([
                                    TextInput::make('title')
                                        ->label('العنوان')
                                        ->required(),
                                    Textarea::make('description')
                                        ->label('الوصف')
                                        ->required(),
                                    FileUpload::make('icon')
                                        ->label('ايقونة الخدمة')
                                        ->required(),
                                    Checkbox::make('featured')
                                        ->label('مميز')
                                        ->default(false)
                                        ->required(),

                                ]),


                        ]),
                    Tabs\Tab::make('message')
                        ->label('رسالتنا')
                        ->schema([
                            Textarea::make('message')
                                ->label('رسالتنا')
                                ->required(),



                        ]),
                    Tabs\Tab::make('aboutUs')
                        ->label('من نحن')
                        ->schema([
                            Textarea::make('aboutus')
                                ->label('من نحن')
                                ->required(),



                        ]),

                    Tabs\Tab::make('customer')
                        ->label('عملاءنا')
                        ->schema([
                            Repeater::make('customer')
                                ->label('عملاءنا')

                                ->schema([
                                    TextInput::make('title')
                                        ->label('اسم العميل')
                                        ->required(),
                                    Textarea::make('description')
                                        ->label('وصف قصير')
                                        ->required(),
                                    FileUpload::make('icon')
                                        ->label('ايقونة او شعار العميل ')
                                        ->required(),


                                ]),


                        ]),
                    Tabs\Tab::make('goal')
                        ->label('اهدافنا')
                        ->schema([
                            Repeater::make('goal')
                                ->label('اهدافنا')

                                ->schema([
                                    TextInput::make('goal')
                                        ->label('الهدف')
                                        ->required(),
                                    FileUpload::make('icon')
                                        ->label('الايقونة'),


                                ]),


                        ]),
                    Tabs\Tab::make('footer')
                        ->label('التذييل')
                        ->schema([
                            TextInput::make('ftitle')->label('النص تحت الشعار'),
                            FileUpload::make('fbackground')
                                ->required()
                                ->label('خلفية التذييل'),
                            Repeater::make('links')
                                ->label('روابط التذييل')

                                ->schema([
                                    TextInput::make('url')
                                        ->label('الرابط')
                                        ->required(),
                                    FileUpload::make('icon')
                                    ->label('الايقونة'),




                                ]),


                        ]),
                    Tabs\Tab::make('seo')
                        ->label('Seo')
                        ->schema([



                            TextInput::make('seo.description')
                                ->label('وصف الميتا')
                                ->placeholder('أدخل وصفًا مختصرًا للصفحة')
                                ->required(),

                            TagsInput::make('seo.keywords')
                                ->separator(',')
                                ->label('كلمات المفتاحية')
                                ->placeholder('الكلمات المفتاحية مفصولة بفواصل لتحسين محركات البحث'),

                            TextInput::make('seo.author')
                                ->label('المؤلف')
                                ->placeholder('اسم مؤلف الصفحة'),

                            TextInput::make('seo.robots')
                                ->label('الروبوتات')
                                ->default('index, follow'),

                            TextInput::make('seo.og_type')
                                ->label('نوع Open Graph')
                                ->default('website'),

                            TextInput::make('seo.og_title')
                                ->label('عنوان Open Graph')
                                ->placeholder('أدخل عنوان Open Graph'),

                            TextInput::make('seo.og_description')
                                ->label('وصف Open Graph')
                                ->placeholder('أدخل وصف Open Graph'),

                            FileUpload::make('seo.og_image')
                                ->label('صورة Open Graph')
                                ->placeholder('رابط صورة Open Graph'),

                            TextInput::make('seo.og_url')
                                ->label('رابط Open Graph')
                                ->placeholder('أدخل رابط Open Graph'),

                            TextInput::make('seo.twitter_card')
                                ->label('نوع بطاقة تويتر')
                                ->default('summary_large_image'),

                            TextInput::make('seo.twitter_title')
                                ->label('عنوان تويتر')
                                ->placeholder('أدخل عنوان تويتر'),

                            TextInput::make('seo.twitter_description')
                                ->label('وصف تويتر')
                                ->placeholder('أدخل وصف تويتر'),

                            FileUpload::make('seo.twitter_image')
                                ->label('صورة تويتر')
                                ->placeholder('رابط صورة تويتر'),


                        ]),
                ]),
        ];
    }
}
