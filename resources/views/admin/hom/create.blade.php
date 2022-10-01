@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
            <div class="card-header">
                <h4> add listing with IMAGE
                    <a href="{{url('home')}}" class="btn btn-danger float-end">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('add-home')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group mb-3">
                    <label for="">home_title</label>
                    <input type="text" name="home_title" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">home_description</label>
                        <input type="text" name="home_description" class="form-control">
                    </div>
                     <div class="form-group mb-3">
                            <label for="">logo</label>
                            <input type="file" name="logo" class="form-control">
                    </div>  
                     <div class="form-group mb-3">
                                <label for="">home_image</label>
                                <input type="file"  name="home_image" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                    <label for="">status</label>
                    <input type="text" name="status" class="form-control">
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