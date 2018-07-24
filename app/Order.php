<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'id', 'customerID', 'street', 'town', 'cityID', 'total',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
