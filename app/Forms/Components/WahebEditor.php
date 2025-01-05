<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class WahebEditor extends TinyEditor
{
    protected string $view = 'forms.components.waheb-editor';
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
    public function getFontsUrl(): string
    {
        return $this->fontsUrl;
    }

}
