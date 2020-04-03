<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id', 'id');
    }
}
