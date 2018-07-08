<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CellPictures extends Model
{
    protected $fillable = [
        'img_path', 'item_id'
    ];

    public function CellDetails(){
        return $this->belongsTo('App\MobileDetails');
    }
}
