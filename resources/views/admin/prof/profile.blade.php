
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> profile
                    <a href="{{url('add-profile')}}" class="btn btn-primary float-end">add profile</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>full_name</th>
                            
                            <th>email</th>
                            <th>phone_num</th>
                            <th>address</th>
                            <th>experience</th>
                            <th>birthdate</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($profile as $item) 
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->full_name}}</td>
                            {{-- <td>
                            <img src="{{asset('uploads/profiles/' .$item->image)}}"  width="70px" height="70px" alt="image"> --}}
                           </td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->experience}}</td>
                            <td>{{$item->birthdate}}</td>

                              
                           <td>
                            <a href="{{url('edit-profile/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-profile/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection