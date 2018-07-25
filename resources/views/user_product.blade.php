@extends('user_master')

@section('title')
    Product
@endsection

@section('content')
<div id="wrapper">

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
            @if(Session::has('success'))
                <div class="row">
                    <div class="col-sm-6 col-md-4 offset-4 offset-3">
                        <div id="charge-message" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <br/>
            <h1 class="header-title animated fadeIn">Products</h1><br/>
            <hr/>

                    <div class="card-group">
                        @foreach($products as $values)
                            <div class="col-sm-12 col-md-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="{{ asset('storage/'.$values->image.'.jpg') }}">
                            <div class="card-body">
                                <h4 class="card-title">{{$values->name}}</h4>
                                <p class="card-text">{{$values->category}}</p>
                                <p class="card-text">Php {{$values->price}}</p>
                                <a href="{{route('product.addToCart', ['id' => $values->id])}}" class="btn btn-primary" role="button">Add To Cart</a></div>
                        </div>
                            </div>
                        @endforeach
                    </div>

@endsection