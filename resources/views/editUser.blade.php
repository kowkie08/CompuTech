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
                        <form action="/admin/user/edit" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="well">
                                <div class="col-lg-6 offset-3">
                                    <h1 class="header-title animated fadeIn">Edit User</h1><br/>
                                    <hr/>
                             @foreach($users as $values)
                                 <input type="hidden" name="id" id="id" value="{{$values->id}}">
                                    <div class="col-lg-12">
                                        <label for="first_name">First Name: </label>
                                        <input type="text" name="first_name" id="first_name" class="form-control required"
                                               required="required" value="{{$values->first_name}}">

                                    </div>

                                    <div class="col-lg-12">
                                        <label for="middle_name">Middle Name: </label>
                                        <input type="text" name="middle_name" id="middle_name" class="form-control required"
                                               required="required" value="{{$values->middle_name}}">

                                    </div>

                                    <div class="col-lg-12">
                                        <label for="last_name">Last Name: </label>
                                        <input type="text" name="last_name" id="last_name" class="form-control required"
                                               required="required" value="{{$values->last_name}}">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="mobileNumber">Mobile Number: </label>
                                        <input type="text" name="mobileNumber" id="mobileNumber"
                                               class="form-control required"
                                               required="required" value="{{$values->mobileNumber}}">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="email">Email: </label>
                                        <input type="email" name="email" id="email" class="form-control required"
                                               required="required" value="{{$values->email}}">
                                    </div>


                                    <div class="col-lg-12">
                                        <label for="street">Street: </label>
                                        <textarea name="street" value="{{$values->street}}"></textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="town">Town: </label>
                                        <input type="text" name="town" id="town" class="form-control required"
                                               required="required"
                                               value="{{$values->town}}">
                                    </div>

                                    <div>

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