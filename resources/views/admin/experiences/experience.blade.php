@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Experience
                    <a href="{{url('add-experience')}}" class="btn btn-primary float-end">add experience</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>responsiblity</th>
                            <th>companyname</th>
                            <th>duration</th>
                           
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($experience as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->responsiblity}}</td>
                            <td>{{$item->companyname}}</td>
                             <td>{{$item->duration}}</td>
                            
                             <td>{{$item->status}}</td>
                             
                            
                          
                           <td>
                            <a href="{{url('edit-experience/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-experience/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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