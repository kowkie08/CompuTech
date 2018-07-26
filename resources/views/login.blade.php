@extends('user_master')

@section('title')
    Login
@endsection

@section('content')
        <div class="login-clean">
            <form method="post" enctype="multipart/form-data" action="/signin">
                 {{ csrf_field() }}
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
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
                <div class="form-group"><input class="form-control" type="email" name="email" id="email" class="form-control required" required="required" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" id="password" class="form-control required" required="required" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
                <a href="/register" class="forgot">Sign Up?</a>
            </form>
        </div>

@endsection
