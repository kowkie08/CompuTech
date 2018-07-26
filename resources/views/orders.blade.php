@extends('admin_master')

@section('title')
    Product
@endsection

@section('content')
    <div id="wrapper">
     <div id="page-content-wrapper">
        <div class="container" id="main">
            <br/>
            <h1 class="header-title animated fadeIn">Orders</h1><br/>
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
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Total</th>
               
                </tr>
                </thead>
                <tbody>

                   
                    @foreach($orders as $values)
                    <tr>
            
                        <td>{{$values->name}}</td>
                        <td>{{$values->street}}, {{$values->town}}, {{$values->city}}</td>
                        <td>{{$values->total}}</td>
  
                
                    <td>
                        <a href="/order/{{$values->id}}" class="btn btn-primary">View Details</a> |
                  
                       </td>
                   </tr>
                   @endforeach

                </tbody>
            </table>
 
    </div>
@endsection
