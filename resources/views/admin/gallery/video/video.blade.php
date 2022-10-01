@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4> video
                        <a href="{{ url('add-video') }}" class="btn btn-primary float-end">add video</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>videos</th>
                                <th>status</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($video as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>


                                    <td>
                                        <video width="320" height="240" controls>
                                            <source src="movie.mp4" type="video/mp4">
                                            <source src="movie.ogg" type="video/ogg">

                                        </video>
                                    </td>
                                    <td>
                                        {{ $item->status }}
                                    </td>



                                    <td>

                                        <a href="{{ url('edit-video/' . $item->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-video/' . $item->id) }}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var video_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/videos',
                    data: {
                        'status': status,
                        'video_id': video_id
                    },
                    success: function(data) {
                        console.log(success)
                    }
                });
            })
        })
    </script> --}}
@endsection
