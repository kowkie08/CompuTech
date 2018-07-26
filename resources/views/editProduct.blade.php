@extends('user_master')

@section('title')
    Register
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
                    <div class="form-container">
                        <form action="/product/edit" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="well">
                                <div class="col-lg-6 offset-3">
                                    <h1 class="header-title animated fadeIn">Edd</h1><br/>
                                    <hr/>
                          @foreach($products as $values)

                              <input type="hidden" value="{{$values->id}}" id="id" name="id">

                                    <div class="col-lg-12">
                                        <label for="name">Name: </label>
                                        <input type="text" name="name" id="name" class="form-control required"
                                               required="required" value="{{$values->name}}">

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
                                            <input type="text" name="brand_name" id="name" class="form-control required" required="required" value="{{$values->brand_name}}">
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="description">Description: </label>
                                            <textarea name="description" id="description" value="{{$values->description}}"></textarea>
                                        </div>


                                        <div class="col-lg-12">
                                            <label for="isHot">Is Hot: </label>
                                            <input type="radio" name="isHot" id="isHot" value="1">Yes</input>
                                            <input type="radio" name="isHot" id="isHot" value="0">No</input>
                                        </div>



                                        <div class="col-lg-12">
                                            <label for="quantity">Quantity: </label>
                                            <input type="text" name="quantity" id="quantity" class="form-control required" required="required" value="{{$values->quantity}}">
                                        </div>



                                        <div class="col-lg-12">
                                            <label for="price">Price: </label>
                                            <input type="currency" name="price" id="price" class="form-control required" required="required"  value="{{$values->price}}">
                                        </div>





                                </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Save">
                                    </div>

                                        @endforeach

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
@endsection