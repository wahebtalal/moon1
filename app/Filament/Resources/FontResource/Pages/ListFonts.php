<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFonts extends ListRecords
{
    protected static string $resource = FontResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
