@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> social media
                    <a href="{{url('add-social')}}" class="btn btn-primary float-end">add image</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>url</th>
                            <th>icon</th>
                            
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($socials as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            
                            
                           
                       
                            <td>{{$item->url}}</td>
                            <td>{{$item->icon}}</td>
                            <td>
                           
                            <a href="{{url('edit-social/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-social/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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