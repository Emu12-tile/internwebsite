@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> Image
                    <a href="{{url('add-image')}}" class="btn btn-primary float-end">add image</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>images</th>
                    
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($image as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            
                            
                           <td>
                            <img src="{{asset('uploads/images/' .$item->images)}}"  width="30px" height="30px" alt="images">
                            </td>
                       
                            <td>{{$item->status}}</td>
                            <td>
                           
                            <a href="{{url('edit-image/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-image/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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