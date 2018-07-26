<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;
class SupplierController extends Controller
{
    public function add(Request $request){

    	 $valid = Validator::make($request->all(), [
                'email' => 'bail|required|max:191',
                'name' => 'bail|required|max:50',
                'mobileNumber' => 'bail|required|max:13',
            ]);



            if($valid->fails()){
                return redirect('/supplier')
                    ->withErrors($valid)
                    ->withInput();
            }else{
            	try{

            	$data = $request->all();
            	$supplier = new Supplier($data);
            	$supplier->Status = 1;
            	if($supplier->save()){

            	Session::flash('message', 'Supplier Added.');
				Session::flash('alert-class', 'alert-success');
                return Redirect::to('/supplier');


            	}else{
				Session::flash('message', 'Supplier has not been added.');
				Session::flash('alert-class', 'alert-success');
                return Redirect::to('/supplier');

            	}
            	}catch(\Exception $ex){

            	Session::flash('message', 'Supplier has not been added.');
				Session::flash('alert-class', 'alert-success');
                return Redirect::to('/supplier');

            	}
  	

    }
}

    public function getSupplierName($id){

        $supplier = Supplier::find($id);
        $name = $supplier->name;
        return $name;
    }
    public function getSuppliers(){
    	$supplier = Supplier::all()->where('Status', 1);

    	return view("supplier")->with('supplier', $supplier);
    }

    public static function getSuppliersAPI(){
        $supplier = array();
        $supplier['supplier'] = Supplier::all()->where('Status', 1);

        return json_encode($supplier);
    }


    public function getSupplierById(Request $request){

    	$supplier = Supplier::all()->where('id', $request->id);

    	return view('editSupplier')->with('supplier', $supplier);
    }


    public function edit(Request $request){

        $supplier = Supplier::all()->where('id', $request->id)->first();
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->mobileNumber = $request->mobileNumber;


        if($supplier->save()){
            return Redirect::to('/supplier');
        }else{
            return Redirect::to('/supplier');
        }
    }


    public function archive(Request $request){

    	$supplier = Supplier::all()->where('id', $request->id);
    	$supplier->Status = "0";
    	if($supplier->save()){
    		 return Redirect::to('/supplier');

    	}else{
				Session::flash('message', 'Supplier has not been deleted.');
				Session::flash('alert-class', 'alert-success');
                return Redirect::to('/supplier');

    	}
    }
}
