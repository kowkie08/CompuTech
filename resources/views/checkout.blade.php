@extends('user_master')

@section('title')
    Checkout
@endsection

<?php
$cities = \App\Http\Controllers\CityController::getCities();
$cities = json_decode($cities, true);
(array)$city = $cities;
?>
@section('content')
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

@endsection

