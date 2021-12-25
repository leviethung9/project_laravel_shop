<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable =
        [
            'id',
            'p_title',
            'p_cate',
            'p_avatar',
            'p_content',
            
            
        ];

    public $timestamps = true;
    // protected $guarded = [''];
}
