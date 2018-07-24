<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{  
 protected $fillable = [
        'id', 'CityID', 'mobileNumber', 'pictureUrl', 'first_name', 'middle_name', 'last_name', 'email', 'password',
        'street', 'town', 'userType',
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'password',
    ];
}
