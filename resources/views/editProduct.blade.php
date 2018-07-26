@extends('admin_master')

@section('title')
    Edit Product
@endsection
<?php
$cities = \App\Http\Controllers\CityController::getCities();
$cities = json_decode($cities, true);
(array)$city = $cities;
?>
@section('content')
    <div id="wrapper">
        <div id="page-content-wrapper">
            <div class="container" id="main">
                <br/>


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
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="row register-form">
                        <div class="col-md-8 offset-md-2">
                            <form class="custom-form" action="/product/edit" method="POST"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h1 class="header-title animated fadeIn">Edit Product</h1><br/>
                                <hr/>
                                @foreach($products as $values)

                                    <input type="hidden" value="{{$values->id}}" id="id" name="id">

                                    <div class="form-row form-group">
                                        <label for="name">Name: </label>
                                        <input type="text" name="name" id="name" class="form-control required"
                                               required="required" value="{{$values->name}}">

                                    </div>

                                    <div class="form-row form-group">
                                        <label for="category">Category: </label>
                                        <select name="category" class="form-control" id="category">

                                            <option value="Laptop">Laptop</option>
                                            <option value="Mobile Phone">Mobile Phone</option>
                                            <option value="Computer">Computer</option>
                                        </select>

                                    </div>


                                    <div class="form-row form-group">
                                        <label for="brand_name">Brand Name: </label>
                                        <input type="text" name="brand_name" id="name"
                                               class="form-control required" required="required"
                                               value="{{$values->brand_name}}">
                                    </div>

                                    <div class="form-row form-group">
                                        <label for="description">Description: </label>
                                        <textarea name="description" id="description"
                                                  value="{{$values->description}}"></textarea>
                                    </div>


                                    <div class="form-row form-group">
                                        <label for="isHot">Is Hot: </label>
                                        <input type="radio" name="isHot" id="isHot" value="1">Yes</input>
                                        <input type="radio" name="isHot" id="isHot" value="0">No</input>
                                    </div>



                                    <div class="form-row form-group">
                                        <label for="quantity">Quantity: </label>
                                        <input type="text" name="quantity" id="quantity"
                                               class="form-control required" required="required"
                                               value="{{$values->quantity}}">
                                    </div>



                                    <div class="form-row form-group">
                                        <label for="price">Price: </label>
                                        <input type="currency" name="price" id="price"
                                               class="form-control required" required="required"
                                               value="{{$values->price}}">
                                    </div>



                                    <div class="form-row form-group">
                                        <input type="submit" class="btn btn-success" value="Save">
                                    </div>
                        </div>

                        @endforeach

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection