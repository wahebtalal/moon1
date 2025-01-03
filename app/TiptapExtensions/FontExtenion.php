<?php

namespace App\TiptapExtensions;

use Tiptap\Core\Extension;
use Tiptap\Utils\InlineStyle;

class FontExtenion extends Extension
{
    public static $name = 'fontFamily';

    public function addOptions(): array
    {
        return [
            'types' => ['textStyle'], // The types where the font family can be applied
            'families' => ['Inter', 'Comic Sans MS, Comic Sans', 'serif', 'monospace', 'cursive'],
            'defaultFamily' => 'Inter',
        ];
    }

    public function addGlobalAttributes(): array
    {
        return [
            [
                'types' => $this->options['types'],
                'attributes' => [
                    'fontFamily' => [
                        'default' => $this->options['defaultFamily'],
                        'parseHTML' => fn($DOMNode) => InlineStyle::getAttribute($DOMNode, 'font-family') ?? $this->options['defaultFamily'],
                        'renderHTML' => function ($attributes) {
                            if (property_exists($attributes, 'style') && str_contains($attributes->style ?? '', 'font-family')) {
                                return null;
                            }

                            if ($attributes->fontFamily === $this->options['defaultFamily']) {
                                return null;
                            }

                            return ['style' => "font-family: {$attributes->fontFamily}"];
                        },
                    ],
                ],
            ],
        ];
    }
}
