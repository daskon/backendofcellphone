<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CellPictures extends Model
{
    protected $fillable = [
        'img_path','mobile_details_id'
    ];
}
