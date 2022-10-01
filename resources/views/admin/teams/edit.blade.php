@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class='alert alert-success'>{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <h4> update team
                        <a href="{{ url('teams') }}" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-team/' . $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" value="{{ $team->name }}" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">photo</label>
                            <input type="file" name="photo" class="form-control">
                            <img src="{{ asset('uploads/teams/' . $team->photo) }}" width="70px" height="70px"
                                alt="image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">responsiblity</label>
                            <input type="text" name="responsiblity" value="{{ $team->responsiblity }}"
                                class="form-control">
                        </div>
                        <div class="form-group mb-3">

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
                        <div class="form-group mb-3 mt-3">
                            <button type="submit" class="btn btn-primary">update </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
