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

@if(Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6 offset-3 offset-3">
                <table class="table table-hover">
                    @foreach($products as $product)
                    <tr>

                        <td><strong>{{ $product['item']['name'] }}</strong></td>
                        <td><span class="label label-success">{{ $product['price'] }}</span></td>
                        <td><span class="badge badge-pill badge-info">{{ $product['qty'] }}</span></td>
                        <td><div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Reduce by 1</a></li>
                                    <li><a href="#">Reduce All</a></li>
                                </ul>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </table>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 offset-3">
            <strong>Total: {{ $totalPrice }}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 offset-3">
            <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
        </div>
    </div>
@else
    <div class="row">
        <div class="col-sm-6 col-md-6  offset-3 text-md-center">
            <h2>No Items in Cart!</h2>
        </div>
    </div>
@endif

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
