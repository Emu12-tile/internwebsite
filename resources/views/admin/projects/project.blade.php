@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> Projects
                    <a href="{{url('add-project')}}" class="btn btn-primary float-end">add projects</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>project_title</th>
                            <th>project_images</th>
                            <th>project_description</th>
                          
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($project as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->project_title}}</td>
                            <td>
                                <img src="{{asset('uploads/projects/' .$item->project_images)}}"  width="70px" height="70px" alt=" ">
                                </td>
                            <td>{{$item->project_description}}</td>
                            
                          
                            <td>{{$item->status}}</td>
                              
                           <td>
                            <a href="{{url('edit-project/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-project/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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