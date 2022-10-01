@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> Blogs
                    <a href="{{url('add-blog')}}" class="btn btn-primary float-end">add blog</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> name</th>
                            <th>topic</th>
                            <th>image</th>
                            <th>content</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($blog as $item) 
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->users->name}}</th>
                            <td>{{$item->topic}}</td>
                            <td>
                            <img src="{{asset('uploads/blogs/' .$item->image)}}"  width="70px" height="70px" alt="image">
                           </td>
                            <td>{{$item->content}}</td>
                            <td>{{$item->status}}</td>
                              
                           <td>
                            <a href="{{url('edit-blog/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-blog/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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