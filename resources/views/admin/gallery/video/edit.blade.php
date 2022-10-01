@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class='alert alert-success'>{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <h4> update video
                        <a href="{{ url('videos') }}" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-video/' . $video->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="form-group mb-3">
                            <label for="">videos</label>
                            <input type="file" name="video" class="form-control">
                            <video src="{{ asset('uploads/videos/' . $video->video) }}" width="320" height="240"
                                alt="logo"></video>
                        </div>
                        {{-- <video width="320" height="240" controls>
                                <source src="movie.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                            
                                </video> --}}

                        <div class="form-group mb-4">

                            <div class="row  ">
                                Status

                                <div>
                                    <label for="" class="mr-3 ml-3 text-xs">Active</label>
                                    <input type="radio" name="status" class="form-control " id="1"
                                        value="1">
                                </div>
                                <div>
                                    <label for=""class="text-xs">Deactive</label>
                                    <input type="radio" name="status" class="form-control" id="0" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">update </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
