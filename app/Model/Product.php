<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable =
        [
            'pro_name',
            'pro_slug',
            'pro_price',
            'pro_price_sale',
            'pro_name_cate',
            'pro_avatar',
            'pro_total',
            'pro_desc',
            'pro_detail',
            'pro_size',
            'pro_tag',
            'pro_color',
            'pro_album',
        ];

    public $timestamps = true;
    // protected $guarded = [''];

}
