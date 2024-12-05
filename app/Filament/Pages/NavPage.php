<?php

namespace App\Filament\Pages;

use App\Models\nav;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Pages\Actions\CreateAction;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Actions;
use SolutionForest\FilamentTree\Concern;
use SolutionForest\FilamentTree\Pages\TreePage as BasePage;
use SolutionForest\FilamentTree\Support\Utils;
use Z3d0X\FilamentFabricator\Models\Page;

class NavPage extends BasePage
{
    protected static string $model = nav::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static int $maxDepth = 4;

    protected function getActions(): array
    {
        return [
            $this->getCreateAction(),

            // SAMPLE CODE, CAN DELETE
            //\Filament\Pages\Actions\Action::make('sampleAction'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            Select::make('page_id')->relationship('page','title')->live()
//                ->formatStateUsing(fn($state) =>isset($record)? dd($record):$record)
                ->afterStateUpdated(fn(Set $set,$state,)=>$set('title',Page::find($state)->title))
                ->required(fn(Get $get)=>$get('title') === null),
            Forms\Components\TextInput::make('title')->live()

                ->required(fn(Get $get)=>$get('page_id') === null),

            //
        ];
    }

    protected function hasDeleteAction(): bool
    {
        return false;
    }

    protected function hasEditAction(): bool
    {
        return true;
    }

    protected function hasViewAction(): bool
    {
        return false;
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }



//     CUSTOMIZE ICON OF EACH RECORD, CAN DELETE
//     public function getTreeRecordIcon(?\Illuminate\Database\Eloquent\Model $record = null): ?string
//     {
//         return $record->page_id==null?'مجموعة : '.$record->title:' : صفحة'.$record->title;
//     }

    public function getTreeRecordTitle(?Model $record = null): string
    {
        return $record->page_id==null?'مجموعة : '.$record->title:'صفحة : '.$record->title;

    }


}
