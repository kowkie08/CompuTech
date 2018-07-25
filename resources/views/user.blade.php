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
            <h1 class="header-title animated fadeIn">Users</h1><br/>
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
                    <th> Name</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
               
                </tr>
                </thead>
                <tbody>

                   
                    @foreach($users as $values)
                    <tr>
            
                        <td>{{$values->last_name}}, {{$values->first_name}}</td>
                        <td>{{$values->street}}, {{$values->town}}, {{$values->city}}</td>
                        <td>{{$values->mobileNumber}}</td>
         <td>{{$values->email}}</td>
                
                    <td>
                        <a href="/user/{{$values->id}}" class="btn btn-primary">Edit</a> 
                  
                       </td>
                   </tr>
                   @endforeach

                </tbody>
            </table>
 
    </div>
</body>
</html>
