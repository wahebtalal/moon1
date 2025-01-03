<?php

namespace App\Filament\Resources\SocialMediaResource\Pages;

use App\Filament\Resources\SocialMediaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditSocialMedia extends EditRecord
{
    protected static string $resource = SocialMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
