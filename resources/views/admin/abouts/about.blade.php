@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> about
                    <a href="{{url('add-about')}}" class="btn btn-primary float-end">add about</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>about_title</th>
                            <th>description</th>
                            <th>quote</th>
                            <th>image1</th>
                            <th>image2</th>
                            <th>image3</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($about as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->about_title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->quote}}</td>
                           
                           <td>
                            <img src="{{asset('uploads/abouts/' .$item->image1)}}"  width="70px" height="70px" alt="image">
                           </td>
                           <td>
                            <img src="{{asset('uploads/abouts/' .$item->image2)}}"  width="70px" height="70px" alt="image">
                           </td>
                           <td>
                            <img src="{{asset('uploads/abouts/' .$item->image3)}}"  width="70px" height="70px" alt="image">
                           </td>
                            <td>{{$item->status}}</td>
                             
                           <td>
                            <a href="{{url('edit-about/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-about/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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