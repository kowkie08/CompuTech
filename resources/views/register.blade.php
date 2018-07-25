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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">


</head>

<style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: gray !important;
        color: #fff !important;
    }
</style>
<body>
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="{{route('product.Cart')}}">CART&nbsp;
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-info">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="#">&nbsp;ABOUT US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">PRODUCTS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">WHAT'S HOT</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">CONTACT US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
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
                                    <label for="CityID">City</label>
                                    <select name="CityID" class="form-control" id="CityID">


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
                                    <input type="text" name="middle_name" id="middle_name" class="form-control required"
                                           required="required" placeholder="Middle Name">

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
</body>
</html>
