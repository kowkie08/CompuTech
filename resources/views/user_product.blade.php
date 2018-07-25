<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">

</head>

<body>
<div id="wrapper">
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
            <div class="jumbotron red">
                <h1 class="text-center">CompuTech Shop</h1>
                <p class="text-center">We sell all types of computer</p>
                <p></p>
            </div>
    <div id="page-content-wrapper">
        <div class="container" id="main">
            <br/>
            <h1 class="header-title animated fadeIn">Products</h1><br/>
            <hr/>








                    <div class="photo-gallery"></div>
                    <div class="card-group">
                        @foreach($products as $values)
                        <div class="card"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">{{$values->name}}</h4>
                                <p class="card-text">{{$values->category}}</p>
                                <p class="card-text">Php {{$values->price}}</p>
                                <a href="{{route('product.addToCart', ['id' => $values->id])}}" class="btn btn-primary" role="button">Add To Cart</a></div>
                        </div>
                        @endforeach
                    </div>

                    <script src="assets/js/jquery.min.js"></script>
                    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


            </div>
</body>
</html>
