@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
               
            <div class="card-header">
                <h4> update profile
                    <a href="{{url('profiles')}}" class="btn btn-danger float-end ">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('update-profile/'.$profile->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="form-group mb-3">
                    <label for="">full_name</label>
                    <input type="text" name="full_name"  value="{{$profile->full_name}}" class="form-control">
                    </div>
                     {{-- <div class="form-group mb-3">
                                <label for="">image</label>
                                <input type="file"  name="image" class="form-control">
                                <img src="{{asset('uploads/profiles/' .$profile->image)}}"  width="70px" height="70px" alt="image">
                                </div> --}}
                    <div class="form-group mb-3">
                        <label for="">email</label>
                        <input type="email" name="email" value="{{$profile->email}}" class="form-control">
                        </div>
                          
                           
                        <div class="form-group mb-3">
                    <label for="">phone_number</label>
                    <input type="number" name="phone_number" value="{{$profile->phone_number}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">address</label>
                        <input type="text" name="address" value="{{$profile->address}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">experience</label>
                        <input type="text" name="experience" value="{{$profile->experience}}" class="form-control">
                        </div>
                    <div class="form-group mb-3">
                        <label for="">birthdate</label>
                        <input type="date" name="birthdate" value="{{$profile->birthdate}}" class="form-control">
                    </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">update </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection