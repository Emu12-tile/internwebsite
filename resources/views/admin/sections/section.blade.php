@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4> section control
                   
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>sections</th>
                    
                            <th>status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($section as $member)
                        <tr>
                            <td>{{$member->id}}</td>
                            
                            <td>{{$member->sections}}</td>
                          
                           
                               <td> <input data-id="{{$member->id}}" class="toggle-class" type="checkbox" 
                                data-onstyle="success"
                                 data-offstyle="danger" data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $member->status ? 'checked' : '' }}
                                
>
                               </td>
                        </tr>
                     @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var section_id = $(this).data('id'); 
           
          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/updateStatus',
              data: {'status': status, 'section_id': section_id},
              success: function(data){
                console.log(success)
              }
          });
      })
    })
    
  </script>
@endsection
{{-- <!DOCTYPE html>
<html>
<head>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>sections</h1>
        <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Name</th>
                  
                  <th>Status</th>
               </tr> 
            </thead>
            <tbody>
               @foreach($section as $member)
                  <tr>
                     <td>{{ $member->sections }}</td>
                    
                     <td>
                        <input data-id="{{$member->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $member->status ? 'checked' : '' }}>
                     </td>
                  </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</body>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var member_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/sections',
            data: {'status': status, 'member_id': member_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
</html> --}}

