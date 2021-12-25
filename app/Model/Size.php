<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';

    protected $fillable =
        [
            'size_name',
            
            
        ];

    public $timestamps = true;
    // protected $guarded = [''];
}
