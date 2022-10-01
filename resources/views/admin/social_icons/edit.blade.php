@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
               
            <div class="card-header">
                <h4> update socials
                    <a href="{{url('socials')}}" class="btn btn-danger float-end">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('update-social/'.$social->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  
                    
                    <div class="form-group mb-3">
                        <label for="">url</label>
                        <input type="text" name="url" value="{{$social->url}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">url</label>
                            <input type="text" name="url" value="{{$social->url}}" class="form-control">
                            </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">update </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection