<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class notice extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title','date','description',
    ];

    // public $original;
}
