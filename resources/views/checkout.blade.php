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

    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Company Name</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-white active"
                                                                href="{{route('product.Cart')}}">CART&nbsp;
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-info">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span>
                        </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="#">&nbsp;ABOUT
                            US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">PRODUCTS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">WHAT'S HOT</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">CONTACT US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>

<div class="row">
    <div class="col-sm-6 col-md-6 offset-3 offset-3">
        <h1>Checkout</h1>
        <h4>Your Total: Php {{ $total }}</h4>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="row">

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="street">Street: </label>
                        <input type="text" id="street" name="street"class="form-control" required>
                    </div>
                </div>
                <hr>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="town">Town: </label>
                        <input type="text" name="town" d="town" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="cityID">City</label>
                    <select name="cityID" class="form-control" id="cityID">


                        @foreach($city['city'] as $values)
                            <option value="{{$values['id']}}">{{$values['city']}}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success">Buy now</button>
        </form>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
