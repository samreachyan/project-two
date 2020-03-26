<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function prd()
    {
        return $this->hasMany('App\Model\Product', 'category_id', 'id');
    }
}
