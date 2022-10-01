@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> laravel 8 Image crud 
                    <a href="{{url('add-home')}}" class="btn btn-primary float-end">add home</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>home_title</th>
                            <th>home_description</th>
                            <th>logo</th>
                            <th>home_image</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($home as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->home_title}}</td>
                            <td>{{$item->home_description}}</td>
                            
                           <td>
                            <img src="{{asset('uploads/homes/' .$item->logo)}}"  width="30px" height="30px" alt="logo">
                            </td>
                           <td>
                            <img src="{{asset('uploads/homes/' .$item->home_image)}}"  width="70px" height="70px" alt="image">
                           </td>
                            <td>{{$item->status}}</td>
                              
                           <td>
                            <a href="{{url('edit-home/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-home/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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