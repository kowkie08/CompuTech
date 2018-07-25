@extends('user_master')

@section('title')
    Supplier
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

           <form action="/supplier/add" method="POST">
                              {{ csrf_field() }}
            <div class="well">
           
             
                <input type="text" name="name" id="name" class="form-control required" required="required" placeholder="Supplier Name">
                <input type="Email" name="email" id="email" class="form-control required" required="required" placeholder="Email">
                <input type="text" name="mobileNumber" id="mobileNumber" class="form-control required" required="required" placeholder="Contact Number">
 
            <input type="submit" value="Add">
            </div>
        </form>
        

            

               <table class="table table-hover">
                <thead">

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
