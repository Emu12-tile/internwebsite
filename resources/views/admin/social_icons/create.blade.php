
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
            <div class="card-header">
                <h4> add url 
                    <a href="{{url('socials')}}" class="btn btn-danger float-end">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('add-social')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 
                    <div class="form-group mb-3">
                                <label for="">url</label>
                                <input type="text"  name="url" class="form-control">
                    </div>
                   
                    <div class="form-group mb-3">
                        <label for="">icon</label>
                        <input type="text"  name="icon" class="form-control">
            </div>
           
                     
                  
                    <div class="form-group mb-3">
                     <button type="submit" class="btn btn-primary">save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection