@extends('admin_master')

@section('title')
    Product
@endsection

@section('content')
    <div id="wrapper">
        @include('navbar-admin')
        <div id="page-content-wrapper">
            <div class="container" id="main">
                <br/>
                <h1 class="header-title animated fadeIn">Order Details</h1><br/>
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


                    <table class="table table-hover">
                        <thead>

                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($orderDetails as $values)
                            <tr>

                                <td>{{$values->name}}</td>
                                <td>{{$values->quantity}}</td>
                                <td>{{$values->price}}</td>


                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

