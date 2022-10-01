
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
            <div class="card-header">
                <h4> add  profile
                    <a href="{{url('profiles')}}" class="btn btn-danger float-end">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('add-profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group mb-3">
                    <label for="">full_name</label>
                    <input type="text" name="full_name" class="form-control">
                    </div>
                    {{-- <div class="form-group mb-3">
                                <label for="">image</label>
                                <input type="file"  name="image" class="form-control">
                    </div> --}}
                    <div class="form-group mb-3">
                        <label for="">email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                      
                     
                    <div class="form-group mb-3">
                    <label for="">phone_number</label>
                    <input type="number" name="phone_number" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">address</label>
                        <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">experience</label>
                            <input type="text" name="experience" class="form-control">
                            </div>
                        <div class="form-group mb-3">
                            <label for="">birthdate</label>
                            <input type="date" name="birthdate" class="form-control">
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