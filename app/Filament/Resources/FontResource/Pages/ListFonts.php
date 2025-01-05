<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListFonts extends ListRecords
{
    protected static string $resource = FontResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'file' => Tab::make()
                ->label('ملف')

                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'file')),
            'google' => Tab::make()
                ->label('جوجل')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'google')),
        ];
    }


}
