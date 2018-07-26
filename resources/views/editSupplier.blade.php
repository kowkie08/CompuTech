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
                        <form action="/supplier/edit" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="well">
                                <div class="col-lg-6 offset-3">
                                    <h1 class="header-title animated fadeIn">Edd</h1><br/>
                                    <hr/>
                                    @foreach($supplier as $values)

                                        <input type="hidden" value="{{$values->id}}" id="id" name="id">

                                        <div class="col-lg-12">
                                            <label for="name">Name: </label>
                                            <input type="text" name="name" id="name" class="form-control required" required="required" value="{{$values->name}}">

                                        </div>



                                        <div class="col-lg-12">
                                            <label for="email">Email: </label>
                                            <input type="Email" name="email" id="email" class="form-control required" required="required" value="{{$values->email}}">
                                        </div>


                                        <div class="col-lg-12">
                                            <label for="mobileNumber">Mobile Number: </label>
                                            <input type="text" name="mobileNumber" id="mobileNumber" class="form-control required" required="required" value="{{$values->mobileNumber}}">
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