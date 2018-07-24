<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     protected $fillable = [
        'id', 'name', 'email', 'mobileNumber',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
