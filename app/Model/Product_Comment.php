<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product_Comment extends Model
{
    protected $table = 'product_comment';

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id', 'id');
    }
}
