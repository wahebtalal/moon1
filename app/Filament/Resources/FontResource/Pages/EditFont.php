<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
 use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\EditRecord;

class EditFont extends EditRecord
{
    protected static string $resource = FontResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
            Action::make('refresh')
                ->disabled(fn():bool=>$this->record->url==null||$this->record->type=='google')
                ->action(function (Set $set) {
                    $path = storage_path('app/public/'.$this->record->url);
                    $url= \Storage::url($this->record->url);
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
        ];
    }
}
