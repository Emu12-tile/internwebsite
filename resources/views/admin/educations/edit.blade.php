@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
               
            <div class="card-header">
                <h4> update educations
                    <a href="{{url('educations')}}" class="btn btn-danger float-end">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('update-education/'.$education->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="form-group mb-3">
                    <label for="">institution_name</label>
                    <input type="text" name="institution_name"  value="{{$education->institution_name}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">degree_type</label>
                        <input type="text" name="degree_type" value="{{$education->degree_type}}" class="form-control">
                        </div>
                          
                            <div class="form-group mb-3">
                                <label for="">department</label>
                             <input type="text" name="department" value="{{$education->department}}" class="form-control">
                                </div>
                             
                             <div class="form-group mb-3">
                                <label for="">start_year</label>
                             <input type="text" name="start_year" value="{{$education->start_year}}" class="form-control">
                                </div>
                                
                                <div class="form-group mb-3">
                                <label for="">passing_year</label>
                             <input type="text" name="passing_year" value="{{$education->passing_year}}" class="form-control">
                                </div>

                       <div class="form-group mb-3">
                            
                     <div class="row  "  >
                       Status
                  
                    <div>
                     <label for="" class="mr-3 ml-3 text-xs" >Active</label>
                    <input type="radio" name="status" class="form-control " id="1" value="1">
                    </div>
                    <div>
                        <label for=""class="text-xs" >Deactive</label>
                    <input type="radio" name="status" class="form-control" id="0" value="0">
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