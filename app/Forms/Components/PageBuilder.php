<?php

namespace App\Forms\Components;

use App\Filament\Fabricator\PageBlocks\label;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Field;
use Z3d0X\FilamentFabricator\Enums\BlockPickerStyle;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\FilamentFabricatorPlugin;

class PageBuilder extends Builder
{
    protected string $view = 'filament-fabricator::components.forms.components.page-builder';

    protected BlockPickerStyle $blockPickerStyle = BlockPickerStyle::Dropdown;
    public function getPageBlocks(): array
    {
        $fonts='';
        foreach (\App\Models\Font::all() as $font) {
            foreach ($font->Name as $name) {
                $fonts.=$name.'='.$name.';';

            }
        }
        return collect( FilamentFabricator::getPageBlocksRaw())->map(fn ($block) => method_exists($block, 'getWahebSchema') ? $block::getWahebSchema(['fonts'=>$fonts]) : $block::getBlockSchema())->toArray();
    }

//    public function getPageBlocksRaw(): array
//    {
//        return $this->pageBlocks->toArray();
//    }
    protected function setUp(): void
    {
        parent::setUp();
//dd(FilamentFabricator::getPageBlocks(),FilamentFabricator::getPageBlocksRaw(),$this->getPageBlocks(),
//    FilamentFabricator::getPageBlocks()['card']==$this->getPageBlocks()['card']
//);
//        dd()
//        dd(method_exists(label::class, 'getWahebSchema'));
//        $this->blocks(FilamentFabricator::getPageBlocks());
        $this->blocks($this->getPageBlocks());

        $this->mutateDehydratedStateUsing(static function (?array $state): array {
            if (! is_array($state)) {
                return array_values([]);
            }

            $registerPageBlockNames = array_keys(FilamentFabricator::getPageBlocksRaw());

            return collect($state)
                ->filter(fn (array $block) => in_array($block['type'], $registerPageBlockNames, true))
                ->values()
                ->toArray();
        });

        $blockPickerStyle = FilamentFabricatorPlugin::get()->getBlockPickerStyle();

        if (! is_null($blockPickerStyle)) {
            $this->blockPickerStyle($blockPickerStyle);
        }
    }

    public function blockPickerStyle(BlockPickerStyle $style): static
    {
        if ($style === BlockPickerStyle::Modal) {
            $this->blockPickerColumns(3);
        }

        $this->blockPickerStyle = $style;

        return $this;
    }

    public function getBlockPickerStyle(): BlockPickerStyle
    {
        return $this->blockPickerStyle;
    }
}
