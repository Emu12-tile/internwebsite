@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class='alert alert-success'>{{ session('status') }}</h6>
                @endif

                <div class="card-header">
                    <h4> update projects
                        <a href="{{ url('project') }}" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-project/' . $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">project_title</label>
                            <input type="text" name="project_title" value="{{ $project->project_title }}"
                                class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">project_images</label>
                            <input type="file" name="project_images" class="form-control">
                            <img src="{{ asset('uploads/projects/' . $project->project_images) }}" width="70px"
                                height="70px" alt="image">
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label for="">project_description</label>
                                <input type="text" name="project_description" value="{{ $project->project_description }}"
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
                                        <input type="radio" name="status" class="form-control" id="0"
                                            value="0">
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
