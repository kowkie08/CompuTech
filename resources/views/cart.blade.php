@extends('user_master')

@section('title')
    Cart
@endsection

@section('content')
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

@endsection