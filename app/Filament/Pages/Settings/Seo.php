<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Seo extends BaseSettings
{

    protected static ?string $title = 'SEO';
protected static ?string $slug='/seo';
//protected static bool $shouldRegisterNavigation=false;
    public static function getNavigationLabel(): string
    {
        return 'SEO';
    }

    public function getTitle(): string
    {
        return 'SEO';
    }

    public function schema(): array|Closure
    {
        return [


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


        ];
    }
}
