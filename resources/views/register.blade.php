
<?php
$cities = \App\Http\Controllers\CityController::getCities();
$cities = json_decode($cities, true);
(array)$city = $cities;
?>
        <!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




</head>

<style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: gray !important;
        color: #fff !important;
    }
</style>
<body>
<div id="wrapper">
    @include('navbar-admin')
    <div id="page-content-wrapper">
        <div class="container" id="main">
            <br/>
            <h1 class="header-title animated fadeIn">Register</h1><br/>
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

                <form action="/signup" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="well">

                        <div class="col-lg-12">
                            <label for="CityID">City</label>
                            <select name="CityID" class="form-control" id="CityID">


                                @foreach($city['city'] as $values)
                                    <option value="{{$values['id']}}">{{$values['city']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label for="first_name">First Name: </label>
                            <input type="text" name="first_name" id="first_name" class="form-control required" required="required" placeholder="First Name">

                        </div>

                        <div class="col-lg-12">
                            <label for="middle_name">Middle Name: </label>
                            <input type="text" name="middle_name" id="middle_name" class="form-control required" required="required" placeholder="Middle Name">

                        </div>

                        <div class="col-lg-12">
                            <label for="last_name">Last Name: </label>
                            <input type="text" name="last_name" id="last_name" class="form-control required" required="required" placeholder="Last Name">
                        </div>

                        <div class="col-lg-12">
                            <label for="mobileNumber">Mobile Number: </label>
                            <input type="text" name="mobileNumber" id="mobileNumber" class="form-control required" required="required" placeholder="Mobile Number">
                        </div>

                        <div class="col-lg-12">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email" class="form-control required" required="required" placeholder="Email">
                        </div>

                        <div class="col-lg-12">
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password" class="form-control required" required="required" placeholder="Password">
                        </div>

                        <div class="col-lg-12">
                            <label for="password_confirmation">Confirm Password: </label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required="required">
                        </div>

                        <div class="col-lg-12">
                            <label for="street">Street: </label>
                           <textarea name="street"></textarea>
                        </div>

                        <div class="col-lg-12">
                            <label for="town">Town: </label>
                            <input type="text" name="town" id="town" class="form-control required" required="required" placeholder="Town">
                        </div>
                        <div class="col-lg-12">
                            <input type="file" name="image">
                        </div>

                        <input type="submit" value="Add">
                    </div>
                </form>




            </div>
</body>
</html>
