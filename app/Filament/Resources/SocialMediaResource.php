<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialMediaResource\Pages;
use App\Forms\Components\WahebEditor;
use App\Models\SocialMedia;
use App\Tables\Columns\IconColumn as TableIconColumn;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $slug = 'social-medias';

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

    public static function getModelLabel(): string
    {
        return ' التواصل الاجتماعي';
    }

    public static function getPluralModelLabel(): string
    {
        return ' التواصل الاجتماعي';
    }

    public static function form(Form $form): Form
    {
        $fonts='';
        foreach (\App\Models\Font::all() as $font) {
            foreach ($font->Name as $name) {
                $fonts.=$name.'='.$name.';';

            }
        }
        return $form
            ->schema([
                WahebEditor::make('title')

                    ->fonts($fonts)
                    ->label('العنوان')
//                    ->required()
                ,

                TextInput::make('url')
                    ->label('الرابط')
                    ->required()
                ->autocomplete('url')
                    ->extraInputAttributes(['dir' => 'ltr'])
                    ->datalist([
                        'https://',      // URL example
                        'mailto:',   // Email example
                        'tel:',             // Phone example
                        'https://www.google.com/maps?q=25.276987,55.296249', // Google Maps example
                    ])
                    ->helperText('يمكنك اختيار بريد إلكتروني أو رقم هاتف أو رابط موقع.')

                ,

                IconPicker::make('icon')
                    ->label('الأيقونة')
                    ->required(),

                ColorPicker::make('color')
                    ->label('اللون')
                    ->required(),

                Checkbox::make('show')
                    ->label('مرئي بقسم الصفحة'),
                Checkbox::make('floating')
                    ->label('عائم'),

                Placeholder::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->content(fn(?SocialMedia $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('تاريخ التعديل الأخير')
                    ->content(fn(?SocialMedia $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    TableIconColumn::make('icon')

                        ->color(fn($record) => $record->color)
                        ->grow()
                        ->alignCenter()
                        ->columnSpanFull()
                        ->label('الأيقونة'),
                    TextColumn::make('title')
                    ->label('العنوان')
                        ->grow()
                        ->alignCenter()
                        ->columnSpanFull()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('url')
                    ->grow()
                    ->url(fn($state) => $state)
                    ->alignCenter()
                    ->columnSpanFull()
                    ->label('الرابط'),



//                ColorColumn::make('color')
//
//                    ->label('اللون'),

//                IconColumn::make('floating')
//                    ->boolean()
//
//                    ->label('عائم'),
                    ])

            ]) ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->filters([
                TrashedFilter::make()
                    ->label('المحذوفات'),
            ])
            ->actions([
                EditAction::make()
                    ->label('تعديل'),
                DeleteAction::make()
                    ->label('حذف'),
                RestoreAction::make()
                    ->label('استعادة'),
                ForceDeleteAction::make()
                    ->label('حذف نهائي'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('حذف المحدد'),
                    RestoreBulkAction::make()
                        ->label('استعادة المحدد'),
                    ForceDeleteBulkAction::make()
                        ->label('حذف المحدد نهائياً'),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocialMedias::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }
}
