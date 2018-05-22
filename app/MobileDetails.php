<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileDetails extends Model
{
    protected $fillable = [
        'title','description','specifications','manufacturer','model','contact','price'
    ];
}
