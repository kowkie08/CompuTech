<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;

class UserController extends Controller
{
    //
    public function register(Request $request){

     $valid = Validator::make($request->all(), [
                'email' => 'bail|required|max:191|unique:users',
                'first_name' => 'bail|required|max:50',
                'middle_name' => 'bail|required|max:50',
                'last_name' => 'bail|required|max:50',
                'street' => 'bail|required|max:50',
                'town' => 'bail|required|max:50',
                'first_name' => 'bail|required|max:50',
                'mobileNumber' => 'bail|required|max:13',
                'password' => 'bail|required|confirmed|max:64|min:8',
            ]);

       if($valid->fails()){
                return redirect('/register')
                    ->withErrors($valid)
                    ->withInput();
            }else{

            }

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

             Session::flash('message', 'Registration failed.');
            Session::flash('alert-class', 'alert-success');
                    return Redirect::to('/login');

        }
    }

      public function addAdmin(Request $request){

     $valid = Validator::make($request->all(), [
                'email' => 'bail|required|max:191|unique:users',
                'first_name' => 'bail|required|max:50',
                'middle_name' => 'bail|required|max:50',
                'last_name' => 'bail|required|max:50',
                'street' => 'bail|required|max:50',
                'town' => 'bail|required|max:50',
                'first_name' => 'bail|required|max:50',
                'mobileNumber' => 'bail|required|max:13',
                'password' => 'bail|required|confirmed|max:64|min:8',
            ]);

       if($valid->fails()){
                return redirect('/register')
                    ->withErrors($valid)
                    ->withInput();
            }else{

            }

        $data = $request->all();
        $user = new User($data);
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->userType = "Administrator";
        $code1 = str_random(10);
        if($request->hasFile('image')){
            $request->file('image');

            $request->image->storeAs('public', $code1.".jpeg");

            $user->pictureUrl = $code1;
        }
        if($user->save()){
            Session::flash('message', 'Registration success.');
            Session::flash('alert-class', 'alert-success');
            return Redirect::to('/admin/user');
        }else{

             Session::flash('message', 'Registration failed.');
            Session::flash('alert-class', 'alert-success');
                    return Redirect::to('/admin/user');

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

                if(isset($user->id)){
                Session::put("id", $user->id);
                Session::put("Email", $user->Email);
                Session::put("userType", $user->userType);

                if($user->userType = "Customer"){
                    return Redirect::to('/products');
                }else if($user->userType = "Administrator"){
                       return Redirect::to('/dashboard');
                }else{
                     Session::flash('message', 'Invalid username/password');
                Session::flash('alert-class', 'alert-success');
                    return Redirect::to('/login');
                }

             
            }else{
                 Session::flash('message', 'Invalid username/password');
                Session::flash('alert-class', 'alert-success');
                    return Redirect::to('/login');
            }

            }
            else{
                 Session::flash('message', 'Incorrect username/password.');
                Session::flash('alert-class', 'alert-success');
                    return Redirect::to('/login');
            }

       
        }catch (Exception $exception){
            return $exception->getMessage();
        }


    }
    public function logout(){
        Session::flush();

        return redirect()->route('product.index');
    }

    public function getCustomers(){
        $customers = DB::table('users')
            ->join('cities', 'users.cityID', '=', 'cities.id')
            ->select('users.*', 'cities.city as city')
            ->where('userType', "Customer")
            ->get();
        return view('customers')->with('customers', $customers);
    }

    public function getCustomerByID(Request $request){
        $users = DB::table('users')
            ->join('cities', 'users.cityID', '=', 'cities.id')
            ->select('users.*', 'cities.city as city')
            ->where('users.id', $request->id)
            ->where('userType', "Customer")
            ->get();
        return view('user')->with('users', $users);
    }

       public function getUsers(){
       $users = DB::table('users')
            ->join('cities', 'users.cityID', '=', 'cities.id')
            ->select('users.*', 'cities.city as city')
            ->get();
        return view('user')->with('users', $users);
    }

    public function getUserByID(Request $request){
        $users = DB::table('users')
            ->join('cities', 'users.cityID', '=', 'cities.id')
            ->select('users.*', 'cities.city as city')
            ->where('users.id', $request->id)
            ->get();
        return view('user')->with('users', $users);
    }
    public function edit(Request $request){

           $user = User::all()->where('id', $request->id)->first();
           $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->street = $request->street;
        $user->town = $request->town;
        $user->mobileNumber = $request->mobileNumber;

        if($user->save()){
            return Redirect::to('/admin/users');
        }else{
            return Redirect::to('/admin/users');
        }

    }

    public function editCustomer(Request $request){

        $user = User::all()->where('id', $request->id)->first();
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->street = $request->street;
        $user->town = $request->town;
        $user->mobileNumber = $request->mobileNumber;

        if($user->save()){
            return Redirect::to('/admin/customers');
        }else{
            return Redirect::to('/admin/customers');
        }

    }
  
}