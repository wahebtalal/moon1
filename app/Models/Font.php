<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Font extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'Name',
        'url',
        'css',
        'type',
        'file'
    ];
    protected $casts=[
        'Name'=>'array',
    ];
}
