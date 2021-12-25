<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [''];

    public function hasTransaction()
    {
        return $this->hasOne(Transaction::class, 'id','od_transaction_id');
    }

    public function hasProduct()
    {
        return $this->hasOne(Product::class, 'id', 'od_product_id');
    }
}
