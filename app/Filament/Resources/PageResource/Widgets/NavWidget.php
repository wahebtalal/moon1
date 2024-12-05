<?php

namespace App\Filament\Resources\PageResource\Widgets;

use App\Models\nav;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Actions\Action;
use SolutionForest\FilamentTree\Actions\ActionGroup;
use SolutionForest\FilamentTree\Actions\DeleteAction;
use SolutionForest\FilamentTree\Actions\EditAction;
use SolutionForest\FilamentTree\Actions\ViewAction;
use SolutionForest\FilamentTree\Widgets\Tree as BaseWidget;

class NavWidget extends BaseWidget
{
    protected static string $model = nav::class;

    protected static int $maxDepth = 2;

    protected ?string $treeTitle = 'التنقلات';

    protected bool $enableTreeTitle = true;

    protected function getFormSchema(): array
    {
        return [

            Select::make('page_id')->relationship('page')->required(),
            //
        ];
    }

    // INFOLIST, CAN DELETE
    public function getViewFormSchema(): array {
        return [
            //
        ];
    }

    // CUSTOMIZE ICON OF EACH RECORD, CAN DELETE
    // public function getTreeRecordIcon(?\Illuminate\Database\Eloquent\Model $record = null): ?string
    // {
    //     return null;
    // }

    // CUSTOMIZE ACTION OF EACH RECORD, CAN DELETE
//     protected function getTreeActions(): array
//     {
//         return [
//             Action::make('helloWorld')
//                 ->action(function () {
//                     Notification::make()->success()->title('Hello World')->send();
//                 }),
//             // ViewAction::make(),
//             // EditAction::make(),
//             ActionGroup::make([
//
//                 ViewAction::make(),
//                 EditAction::make(),
//             ]),
//             DeleteAction::make(),
//         ];
//     }
    // OR OVERRIDE FOLLOWING METHODS
    //protected function hasDeleteAction(): bool
    //{
    //    return true;
    //}
    //protected function hasEditAction(): bool
    //{
    //    return true;
    //}
    //protected function hasViewAction(): bool
    //{
    //    return true;
    //}

    public function getTreeRecordTitle(?Model $record = null): string
    {
        return $record->page_id==null?'مجموعة : '.$record->title:'صفحة : '.$record->title;

    }

}
