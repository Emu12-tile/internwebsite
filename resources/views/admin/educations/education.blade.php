@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>education
                    <a href="{{url('add-education')}}" class="btn btn-primary float-end">add educations</a></h4>
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>institution_name</th>
                            <th>degree_type</th>
                            <th>department</th>
                            <th>start_year</th>
                            <th>passing_year</th>
                            
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($education as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->institution_name}}</td>
                            <td>{{$item->degree_type}}</td>
                             <td>{{$item->department}}</td>
                             <td>{{$item->start_year}}</td>
                             <td>{{$item->passing_year}}</td>
                             <td>{{$item->status}}</td>
                             
                            
                          
                           <td>
                            <a href="{{url('edit-education/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           </td>
                           <td>
                            <a href="{{url('delete-education/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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