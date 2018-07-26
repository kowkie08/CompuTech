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
                    <form action="/signup" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="well">
                            <div class="col-lg-6 offset-3">
                                <h1 class="header-title animated fadeIn">Register</h1><br/>
                                <hr/>
                                <div class="col-lg-12">
                                    <label for="cityID">City</label>
                                    <select name="cityID" class="form-control" id="cityIDs">


                                        @foreach($city['city'] as $values)
                                            <option value="{{$values['id']}}">{{$values['city']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12">
                                    <label for="first_name">First Name: </label>
                                    <input type="text" name="first_name" id="first_name" class="form-control required"
                                           required="required" placeholder="First Name">

                                </div>

                                <div class="col-lg-12">
                                    <label for="middle_name">Middle Name: </label>
                                    <input type="text" name="middle_name" id="middle_name" class="form-control"
                           placeholder="Middle Name">

                                </div>

                                <div class="col-lg-12">
                                    <label for="last_name">Last Name: </label>
                                    <input type="text" name="last_name" id="last_name" class="form-control required"
                                           required="required" placeholder="Last Name">
                                </div>

                                <div class="col-lg-12">
                                    <label for="mobileNumber">Mobile Number: </label>
                                    <input type="text" name="mobileNumber" id="mobileNumber"
                                           class="form-control required"
                                           required="required" placeholder="Mobile Number">
                                </div>

                                <div class="col-lg-12">
                                    <label for="email">Email: </label>
                                    <input type="email" name="email" id="email" class="form-control required"
                                           required="required" placeholder="Email">
                                </div>

                                <div class="col-lg-12">
                                    <label for="password">Password: </label>
                                    <input type="password" name="password" id="password" class="form-control required"
                                           required="required" placeholder="Password">
                                </div>

                                <div class="col-lg-12">
                                    <label for="password_confirmation">Confirm Password: </label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                           name="password_confirmation" placeholder="Confirm Password"
                                           required="required">
                                </div>

                                <div class="col-lg-12">
                                    <label for="street">Street: </label>
                                    <textarea name="street"></textarea>
                                </div>

                                <div class="col-lg-12">
                                    <label for="town">Town: </label>
                                    <input type="text" name="town" id="town" class="form-control required"
                                           required="required"
                                           placeholder="Town">
                                </div>
                                <div class="col-lg-12">
                                    <input type="file" name="image">
                                </div>
                                <div>

                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" value="Add">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
@endsection