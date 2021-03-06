<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function product_order()
    {
        return $this->hasMany('App\Model\Product_Order', 'product_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Product_Comment');
    }

    public function product_category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id', 'id');
    }
}
