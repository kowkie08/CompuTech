<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
     protected $fillable = [
        'id','orderID', 'productID', 'name', 'category', 'brand_name', 'description', 'isHot', 'quantity', 'image', 'price',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
