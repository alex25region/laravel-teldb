@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <table class="table table-bordered table-sm table-striped">
                    <tr class="thead-light">
                        <th>id</th>
                        <th>post</th>
                        <th>created_at</th>
                        <th>update_at</th>
                        <th>action</th>

                    </tr>
                    @foreach($posts as $post)

                        <tr>
                            <td> {{ $post->id }} </td>
                            <td> {{ $post->post }} </td>
                            <td> {{ $post->created_at }} </td>
                            <td> {{ $post->update_at}} </td>
                            <td>  </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
