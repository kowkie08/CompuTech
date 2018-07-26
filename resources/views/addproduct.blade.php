
<?php
$suppliers = \App\Http\Controllers\SupplierController::getSuppliersAPI();
$suppliers = json_decode($suppliers, true);
(array)$supplier = $suppliers;
 ?>
@extends('admin_master')

@section('title')
    Product
@endsection

@section('content')
    <div id="wrapper">
     <div id="page-content-wrapper">
        <div class="container" id="main">
            <br/>
            <h1 class="header-title animated fadeIn">Add Product</h1><br/>
                <hr/>


    <div class="container">
                @if ($errors->any())
                                    <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                 @endif

           <form action="/product/insert" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
            <div class="well">
           
                <div class="col-lg-12">
                    <label for="supplierID">Supplier: </label>
                    <select name="supplierID" class="form-control" id="CityID">
                      

                                @foreach($supplier['supplier'] as $values)
                                        <option value="{{$values['id']}}">{{$values['name']}}</option>
                                @endforeach

                    </select>
                </div>

                <div class="col-lg-12">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" class="form-control required" required="required" placeholder="Product Name">

                </div>

                  <div class="col-lg-12">
                    <label for="category">Category: </label>
                    <select name="category" class="form-control" id="category">
                      
                          <option value="Laptop">Laptop</option>
                          <option value="Mobile Phone">Mobile Phone</option>
                          <option value="Computer">Computer</option>
                    </select>

                </div>


                <div class="col-lg-12">
                    <label for="brand_name">Brand Name: </label>
                    <input type="text" name="brand_name" id="name" class="form-control required" required="required" placeholder="Brand Name">
                </div>
      
                <div class="col-lg-12">
                    <label for="description">Description: </label>
                    <textarea name="description" id="description"></textarea>
                </div>


                <div class="col-lg-12">
                    <label for="isHot">Is Hot: </label>
                    <input type="radio" name="isHot" id="isHot" value="1">Yes</input>
                    <input type="radio" name="isHot" id="isHot" value="0">No</input>
                </div>



                <div class="col-lg-12">
                    <label for="quantity">Quantity: </label>
                    <input type="text" name="quantity" id="quantity" class="form-control required" required="required" placeholder="Quantity">
                </div>



                <div class="col-lg-12">
                    <label for="price">Price: </label>
                    <input type="currency" name="price" id="price" class="form-control required" required="required" placeholder="price">
                </div>


                <div class="col-lg-12">
                    <input type="file" name="image">
                </div>

            <input type="submit" value="Add">
            </div>
        </form>
        

          
 
    </div>
@endsection
