<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
class ProductController extends Controller
{
    public function getProducts(){
//    	$products = Product::all()->where('Status' , 1);
        $products = DB::table('products')
        ->join('suppliers', 'products.supplierID', '=', 'suppliers.id')
        ->select('products.*', 'suppliers.name AS supplier')
        ->get();

    	return view("product")->with('products', $products);
    }

    public function getProductById($id){
    	$products = Product::all()->where('id', $id);

    	return json_encode($products);
    }

    public function edit(Request $request){

    	$product = Product::all()->where('id', $request->id);
    	$product->supplierID = $request->supplierID;
    	$product->name = $request->name;
    	$product->category = $request->category;
    	$product->brand_name = $request->brand_name;
    	$product->description = $request->description;
    	$product->isHot = $request->isHot;
    	$product->quantity = $request->quantity;
    	$product->image = $request->image;
    	$product->price = $request->price;

    	if($product->save()){

    	}else{

    	}

    }

    public function archive(Request $request){
    	$product = Product::all()->where('id', $id);
    	$product->Status = "0";
    	if($product->save()){

    	}else{

    	}
    }

    public function add(Request $request){

    	$data = $request->all();
    	$product = new Product($data);
    	$product->Status = 1;
         $code1 = str_random(10);
        if($request->hasFile('image')){
                    $request->file('image');

                    $request->image->storeAs('public', $code1.".jpeg");

                    $product->image = $code1;
         }

    	if($product->save()){
            return Redirect::to('/product');

    	}else{
    		
    	}
    }
}
