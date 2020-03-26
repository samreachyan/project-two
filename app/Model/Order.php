<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function prd_order()
    {
        return $this->hasMany('App\Model\Product_Order', 'product_id','id');
    }
}
