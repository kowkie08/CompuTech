
        <!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




</head>

<style>
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: gray !important;
        color: #fff !important;
    }
</style>
<body>
<div id="wrapper">
    @include('navbar-admin')
    <div id="page-content-wrapper">
        <div class="container" id="main">
            <br/>
            <h1 class="header-title animated fadeIn">Login</h1><br/>
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

                <form action="/signin" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="well">


                        <div class="col-lg-12">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email" class="form-control required" required="required" placeholder="Email">
                        </div>

                        <div class="col-lg-12">
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password" class="form-control required" required="required" placeholder="Password">
                        </div>



                        <input type="submit" value="Login">
                    </div>
                </form>




            </div>
</body>
</html>
