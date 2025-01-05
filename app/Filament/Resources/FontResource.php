<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FontResource\Pages;
use App\Models\Font;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Http;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FontResource extends Resource
{
    protected static ?string $model = Font::class;

    protected static ?string $slug = 'fonts';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
protected static ?string $pluralModelLabel='الخطوط';
protected static ?string $modelLabel='الخط';
    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Select::make('type')->label('النوع')->options([
                    'google' => 'جوجل',
                    'file' => 'ملف',
                ])->live()->columnSpanFull()->disabledOn('edit'),
                TextInput::make('url')->url()->visible(fn($get)=> filled($get('type')) && $get('type')=='google'),
                FileUpload::make('file')
                    ->previewable()
                    ->visibility('public')
                    ->label('ملف الخط')
                    ->required()
                    ->directory('fonts')->visible(fn($get)=> filled($get('type')) && $get('type')=='file'),
                KeyValue::make('Name')
                    ->label('الاسم')
                    ->visibleOn('edit'),
                Textarea::make('css')
                    ->extraAttributes(['dir'=>'ltr'])
                    ->label('CSS')
                    ->visibleOn('edit')
                    ->rows(5)
                    ->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Name')->label('الاسم')->listWithLineBreaks()->searchable()->sortable(),

                TextColumn::make('url')->toggleable()->label('رابط جوجل')->visible(fn($livewire)=>($livewire->activeTab=='google')),
                TextColumn::make('file')                    ->label('ملف الخط')->visible(fn($livewire)=>($livewire->activeTab=='file'))
                ,

//                TextColumn::make('css'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFonts::route('/'),
            'create' => Pages\CreateFont::route('/create'),
            'edit' => Pages\EditFont::route('/{record}/edit'),
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
        return [];
    }
}
