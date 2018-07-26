<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Sidebar-Menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    @yield('styles')
</head>
<body>
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
        <li class="sidebar-brand"> <a class="text-white" href="#">Home </a></li>
        <li> <a class="text-white" href="/admin/customers">Customers </a></li>
        <li> <a class="text-white" href="/admin/product">Products </a></li>
        <li> <a class="text-white" href="/admin/users">User </a></li>
        <li> <a class="text-white" href="/supplier">Supplier </a></li>
        <li> <a class="text-white" href="/admin/orders">Orders </a></li>
        <li> <a class="text-white" href="/logout">Logout </a></li>
    </ul>
</div>
<div class="container">
    @yield('content')
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Sidebar-Menu.js"></script>
@yield('scripts')
</body>
</html>