<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'keyword';

    protected $fillable =
        [
            'k_name',
            'k_slug',
            'k_status'
            
        ];

    public $timestamps = true;
    // protected $guarded = [''];
}
