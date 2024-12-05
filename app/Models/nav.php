<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Concern\ModelTree;
use Z3d0X\FilamentFabricator\Models\Page;

class nav extends Model
{
    use ModelTree;

    protected $fillable= ['page_id', 'title', 'parent_id', 'order'];


    protected $casts = [
        'parent_id' => 'int'
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
