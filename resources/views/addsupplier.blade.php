@extends('admin_master')

@section('title')
    Add Supplier
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
                <h1 class="header-title animated fadeIn">Add Supplier</h1><br/>
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
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="form-container">
                        <form action="/admin/supplier/add" method="POST">
                            {{ csrf_field() }}
                            <div class="well">


                                <input type="text" name="name" id="name" class="form-control required"
                                       required="required" placeholder="Supplier Name">
                                <input type="Email" name="email" id="email" class="form-control required"
                                       required="required" placeholder="Email">
                                <input type="text" name="mobileNumber" id="mobileNumber" class="form-control required"
                                       required="required" placeholder="Contact Number">

                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection