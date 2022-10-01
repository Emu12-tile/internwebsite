@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> testimonies
                    <a href="{{url('add-testimony')}}" class="btn btn-primary float-end">add testimony</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>comment</th>
                            <th>role</th>
                            <th>photo</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($testimony as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->comment}}</td>
                             <td>{{$item->role}}</td>
                           
                           <td>
                            <img src="{{asset('uploads/testimonies/' .$item->photo)}}"  width="70px" height="70px" alt="image">
                           </td>
                            <td>{{$item->status}}</td>
                              
                           <td>
                            <a href="{{url('edit-testimony/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-testimony/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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