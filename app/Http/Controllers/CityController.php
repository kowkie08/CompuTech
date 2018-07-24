<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
     public static function getCities(){
        $city = array();
        $city['city'] = City::all();
        
         return json_encode($city);
    }
}
