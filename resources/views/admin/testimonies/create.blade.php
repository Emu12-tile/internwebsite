@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class='alert alert-success'>{{ session('status') }}</h6>
                @endif
                <div class="card-header">
                    <h4> add testimonies
                        <a href="{{ url('testimonies') }}" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-testimony') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">role</label>
                            <input type="text" name="role" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">comment</label>
                            <input type="text" name="comment" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">photo</label>
                            <input type="file" name="photo" class="form-control">
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
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">save </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
