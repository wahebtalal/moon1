<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Fieldset;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Forms\Components\PageBuilder;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PageSectionBlock extends PageBlock
{

    public static string $fonts = '';


    public static function getBlockSchema(): Block
    {
        return Block::make('page-section')
            ->label(function ($state) {
                return $state['lab'] ?? 'قسم';
            })

            ->schema([
                TextInput::make('lab')->lazy()->label('عنوان داخلي '),
                // Select layout type: Grid or Flex
                Select::make('layout')
                    ->label('نوع التخطيط')
                    ->live()
                    ->options([
                        'grid' => 'شبكة (Grid)',
                        'flex' => 'مرن (Flex)',
                    ])
                    ->default('grid')
                    ->required(),

                // Layout-specific options
                Section::make('خيارات التخطيط')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        // Grid-specific options
                        Repeater::make('columns')
                            ->label('إعداد الأعمدة حسب النقاط')
                            ->helperText('قم بإعداد عدد الأعمدة استنادًا إلى أحجام الشاشة المختلفة.')
                            ->schema([
                                Select::make('breakpoint')
                                    ->label('حجم الشاشة')
                                    ->options([
                                        'default' => 'Default (الحجم الافتراضي)',
                                        'sm' => 'Small (شاشات صغيرة)',
                                        'md' => 'Medium (شاشات متوسطة)',
                                        'lg' => 'Large (شاشات كبيرة)',
                                        'xl' => 'Extra Large (شاشات كبيرة جدًا)',
                                    ])
                                    ->default('default')
                                    ->required()
                                    ->helperText('حدد حجم الشاشة التي تريد تخصيص عدد الأعمدة لها.'),

                                TextInput::make('value')
                                    ->label('عدد الأعمدة')
                                    ->integer()
                                    ->required()
                                    ->helperText('أدخل عدد الأعمدة المطلوب لهذا الحجم من الشاشة.'),
                            ])
                            ->minItems(1)
                            ->defaultItems(1)
                            ->helperText('يجب تعيين عنصر واحد على الأقل لتحديد عدد الأعمدة.')
                            ->visible(fn ($get) => $get('layout') === 'grid'),

                        Fieldset::make('المسافة بين العناصر')

                            ->schema([
                                TextInput::make('gap')
                                    ->label('المسافة بين العناصر (Gap)')
                                    ->numeric()
                                    ->default(4)
                                    ->helperText('تحديد المسافة العامة بين جميع العناصر في الشبكة أو التوزيع المرن (Grid/Flex).'),

                                TextInput::make('row_gap')
                                    ->label('المسافة بين الصفوف (Row Gap)')
                                    ->numeric()
                                    ->nullable()
                                    ->visible(fn ($get) => $get('layout') === 'grid')
                            ->helperText('تحديد المسافة بين الصفوف عند استخدام تخطيط الشبكة (Grid).'),

                                TextInput::make('column_gap')
                                    ->label('المسافة بين الأعمدة (Column Gap)')
                                    ->numeric()
                                    ->nullable()
                                    ->visible(fn ($get) => $get('layout') === 'grid')

                            ->helperText('تحديد المسافة بين الأعمدة عند استخدام تخطيط الشبكة (Grid).'),
                            ]),


                        // Flex-specific options
                        Select::make('flex_alignment')
                            ->label('محاذاة المحتوى (Flex Alignment)')
                            ->options([
                                'start' => 'البداية (Start)',
                                'center' => 'منتصف (Center)',
                                'end' => 'النهاية (End)',
                                'baseline' => 'على السطر (Baseline)',
                                'stretch' => 'احتواء (Stretch)',

                            ])
                            ->default('center')
                            ->visible(fn ($get) => $get('layout') === 'flex'),

                        Select::make('flex_direction')
                            ->live()
                            ->label('اتجاه المحتوى (Flex Direction)')
                            ->options([
                                'row' => 'صف (Row)',
                                'row-reverse' => 'صف معكوس (Row Reverse)',
                                'col' => 'عمود (Column)',
                                'col-reverse' => 'عمود معكوس (Column Reverse)',
                            ])
                            ->default('row')
                            ->visible(fn ($get) => $get('layout') === 'flex'),

                        Select::make('flex_wrap')
                            ->label('التفاف العناصر (Flex Wrap)')
                            ->options([
                                'nowrap' => 'بدون التفاف (No Wrap)',
                                'wrap' => 'التفاف (Wrap)',
                                'wrap-reverse' => 'التفاف معكوس (Wrap Reverse)',
                            ])
                            ->helperText('Wrap :نزول سطر جديد عند امتلاء الصف الحالي.')

                    ->default('nowrap')
                            ->visible(fn ($get) => $get('layout') === 'flex'&&($get('flex_direction') === 'row'||$get('flex_direction') === 'row-reverse')),

                        Select::make('justify_content')
                            ->label('محاذاة المحور الأفقي (Justify Content)')
                            ->options([
                                'start' => 'البداية (Start)',
                                'center' => 'منتصف (Center)',
                                'end' => 'النهاية (End)',
                                'between' => 'توزيع متساوي (Space Between)',
                                'around' => 'توزيع حول (Space Around)',
                                'evenly' => 'توزيع متساوي (Space Evenly)',
                            ])
                            ->default('flex-start')
                            ->visible(fn ($get) => $get('layout') === 'flex'&&($get('flex_direction') === 'row'||$get('flex_direction') === 'row-reverse')),

                        Select::make('justify_items')
                            ->label('محاذاة العناصر (Justify Items)')
                            ->options([
                                'start' => 'البداية (Start)',
                                'center' => 'منتصف (Center)',
                                'end' => 'النهاية (End)',
                                'stretch' => 'تمدد (Stretch)',
                            ])
                            ->default('start')
                            ->visible(fn ($get) => $get('layout') === 'grid'),
                    ]),

                // Content blocks
                Builder::make('blocks')
                    ->cloneable()

                    ->label('محتوى القسم')
                    ->blocks(fn () => array_filter(
                        collect( FilamentFabricator::getPageBlocksRaw())->map(fn ($block) => method_exists($block, 'getWahebSchema') ? $block::getWahebSchema(['fonts'=>static::$fonts]) : $block::getBlockSchema())->toArray(),
                        fn ($key) => $key !== 'page-section',
                        ARRAY_FILTER_USE_KEY
                    )),
            ]);
    }
    public static function getWahebSchema($data): Block
    {
static::$fonts=$data['fonts'];
return static::getBlockSchema();

    }
    public static function getPageBlocks(): array
    {
//        $fonts='';
//        foreach (\App\Models\Font::all() as $font) {
//            foreach ($font->Name as $name) {
//                $fonts.=$name.'='.$name.';';
//
//            }
//        }
        return collect( FilamentFabricator::getPageBlocksRaw())->map(fn ($block) => method_exists($block, 'getWahebSchema') ? $block::getWahebSchema(['fonts'=>static::$fonts]) : $block::getBlockSchema())->toArray();
    }
    public static function mutateData(array $data): array
    {
        // Mutate or preprocess data before saving
        return $data;
    }
}
