<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CatePost extends Model
{
    protected $table = 'cate_post';
    protected $fillable =
        [
            'id',
            'cate_post_title',
        ];

    public $timestamps = true;
    // protected $guarded = [''];
}
