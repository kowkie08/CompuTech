@extends('admin_master')

@section('title')
    Customers
@endsection

@section('content')
    <div id="wrapper">
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

                    <a href="/admin/user/add" class="btn btn-primary">Add Administrator</a>
            

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
                        <a href="/admin/user/{{$values->id}}" class="btn btn-primary">Edit</a>
                  
                       </td>
                   </tr>
                   @endforeach

                </tbody>
            </table>
 
    </div>
@endsection
