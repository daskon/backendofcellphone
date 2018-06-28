<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileDetails extends Model
{
    protected $fillable = [
        'item_id','title','description','specifications','manufacturer','model','contact','price','user_id'
    ];
}
