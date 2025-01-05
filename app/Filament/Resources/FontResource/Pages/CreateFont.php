<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Resources\Pages\CreateRecord;
use Http;

class CreateFont extends CreateRecord
{
    protected static string $resource = FontResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
    protected function afterCreate(): void
    {
//        dd($this->record);
        if($this->record->type=='file'){
            $path = storage_path('app/public/'.$this->record->file);
            $url= \Storage::url($this->record->file);
//                                               dd($url,$path);
//                                                dd( (array_values($get('font_file'))[0]));
            $fontName = getFontNameFromFile($path);
            if ($fontName) {
                $this->record->Name=[$fontName];
//                $set('font_name', $fontName);

                $css = "@font-face {
    font-family: '{$fontName}';
    src: url('" .$url . "');
}";
                $this->record->css=$css;
                $this->record->save();
//                $set('font_css', $css);
            }


        }else{
            $response = Http::get($this->record->url);
            $body = $response->body();
            preg_match_all('/font-family:\s*["\']?([a-zA-Z0-9\s\-,]+)["\']?/', $body, $matches);
            $uniqueFonts = array_values(array_unique($matches[1]));
            $this->record->css=$body;
            $this->record->name=$uniqueFonts;
            $this->record->save();
        }

        // Runs after the form fields are saved to the database.
    }
}
