<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    @yield('styles')
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean">
    <div class="container"><a class="navbar-brand" href="#">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="{{route('product.Cart')}}">CART&nbsp;
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="badge badge-pill badge-info">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span>
                    </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="/">&nbsp;ABOUT US</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link text-white" href="{{route('product.index')}}">PRODUCTS</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link text-white" href="{{route('product.hot')}}">WHAT'S HOT</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link text-white" href="/login">LOGIN</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>