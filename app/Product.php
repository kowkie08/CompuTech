<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'id', 'supplierID', 'name', 'category', 'brand_name', 'description', 'isHot', 'quantity', 'image', 'price'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
