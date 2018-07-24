<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Session;

class UserController extends Controller
{
    //
    public function register(Request $request){


        $data = $request->all();
        $user = new User($data);
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->userType = "Customer";
        $code1 = str_random(10);
        if($request->hasFile('image')){
            $request->file('image');

            $request->image->storeAs('public', $code1.".jpeg");

            $user->pictureUrl = $code1;
        }
        if($user->save()){
            return Redirect::to('/login');
        }else{

        }
    }

    public function login(Request $request)
    {
        try{
            $user = User::all()
                ->where('email', $request->email)
                ->first();

            if (Hash::check($request->password, $user->password)) {
                // The passwords match...

            }
            else{
                return Redirect::to('/error1');
            }

            if(isset($user->id)){
                Session::put("id", $user->id);
                Session::put("Email", $user->Email);
                Session::put("userType", $user->userType);

                return Redirect::to('/home');
            }else{
                return Redirect::to('/error');
            }
        }catch (Exception $exception){
            return $exception->getMessage();
        }


    }

}