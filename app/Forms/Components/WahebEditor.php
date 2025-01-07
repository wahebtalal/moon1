<?php

namespace App\Forms\Components;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\Field;
//use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class WahebEditor extends  TinyEditor
{
//    protected string $view = 'forms.components.waheb-editor';
//    protected string $view = 'forms.components.waheb-editor2';
    protected string $fonts = '';
    protected string $fontsUrl = '';

    public function fonts(string $fonts): static
    {
        $this->fonts = $fonts;

        return $this;
    }
    public function fontsUrl(string $fontsUrl): static
    {
        $this->fontsUrl = $fontsUrl;

        return $this;
    }
    public function getFonts(): string
    {
//        dd($this->fonts);
        return $this->fonts;
    }
    public function getFontFamilies(): string
    {
        return $this->fonts;
    }
    public function getFontsUrl(): string
    {
        return $this->fontsUrl;
    }
    public function getCustomConfigs(): string
    {
        $defaultConfigs = config("filament-tinyeditor.profiles.{$this->profile}.custom_configs", []);
        $customConfigs = $this->evaluate($this->customConfigs) ?? [];

        $mergedConfigs = array_replace_recursive($customConfigs, $defaultConfigs);
//dd($mergedConfigs);
        if (empty($mergedConfigs)) {
            return '{}';
        }
//dd( str_replace('"', "'", json_encode($mergedConfigs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)));
        return str_replace('"', "'", json_encode($mergedConfigs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }
}
