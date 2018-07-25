<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">

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
            <h1 class="header-title animated fadeIn">Products</h1><br/>
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
                    <th>Name</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Brand Name</th>
                    <th>Is hot</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                </thead>
                <tbody>

                   
                    @foreach($products as $values)
                    <tr>
            
                        <td>{{$values->name}}</td>
                        <td>{{$values->category}}</td>
                        <td>{{$values->supplier}}</td>
                        <td>{{$values->brand_name}}</td>
                        <td>
                            <?php
                            echo($values->isHot == 1 ? 'Yes' : "No");
                            ?>
                        </td>

                        <td>{{$values->price}}</td>
                        <td>{{$values->quantity}}</td>
  
                
                    <td>
                        <a href="/product/{{$values->id}}" class="btn btn-primary">Edit</a> |
                        <a class="btn btn-danger" href="/product/archive/{{$values->id}}"
                           onclick='return confirm("Are you sure you want to archive this record?");'>Archive</a>
                       </td>
                   </tr>
                   @endforeach

                </tbody>
            </table>
 
    </div>
</body>
</html>
