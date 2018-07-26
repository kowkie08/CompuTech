@extends('admin_master')

@section('title')
    Product
@endsection

@section('content')

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
                <a href="/supplier/add" class="btn btn-primary">Add Supplier</a>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                </tr>
                </thead>
                <tbody>

                   
                    @foreach($supplier as $values)
                    <tr>
            
                        <td>{{$values->name}}</td>
                        <td>{{$values->email}}</td>
                        <td>{{$values->mobileNumber}}</td>
  
                
                    <td>
                        <a href="/supplier/{{$values->id}}" class="btn btn-primary">Edit</a> |
                        <a class="btn btn-danger" href="/supplier/archive/{{$values->id}}"
                           onclick='return confirm("Are you sure you want to archive this record?");'>Archive</a>
                       </td>
                   </tr>
                   @endforeach

                </tbody>
            </table>
 
    </div>
@endsection
