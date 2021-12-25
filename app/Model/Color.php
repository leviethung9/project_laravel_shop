<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';

    protected $fillable =
        [
            'color_name',
          
            
        ];

    public $timestamps = true;
    // protected $guarded = [''];
}
