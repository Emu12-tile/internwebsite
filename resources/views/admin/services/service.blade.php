@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>services
                    <a href="{{url('add-service')}}" class="btn btn-primary float-end">add services</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>service_name</th>
                            <th>description</th>
                            <th>status</th>
                           
                            
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($services as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->service_name}}</td>
                            <td>{{$item->description}}</td>
                          
                           
                             <td>{{$item->status}}</td>
                             
                            
                          
                           <td>
                            <a href="{{url('edit-service/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-service/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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