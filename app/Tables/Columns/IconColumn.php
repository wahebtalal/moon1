<?php

namespace App\Tables\Columns;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Concerns\HasColor;

class IconColumn extends Column
{
    use HasColor;
    protected string $view = 'tables.columns.icon-column';
}
