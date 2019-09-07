@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <table class="table table-bordered table-sm table-striped">
                    <tr class="thead-light">
                        <th>id</th>
                        <th>surname</th>
                        <th>firstname</th>
                        <th>secondname</th>
                        <th>post_id</th>
                        <th>iptel</th>
                        <th>tel</th>
                        <th>otdel_id</th>
                        <th>created_at</th>
                        <th>update_at</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($users as $user)

                        <tr>
                            <td> {{ $user->id }} </td>
                            <td> {{ $user->surname }} </td>
                            <td> {{ $user->firstname }} </td>
                            <td> {{ $user->secondname}} </td>
                            <td> {{ $user->post_id }} </td>
                            <td> {{ $user->iptel }} </td>
                            <td> {{ $user->tel }} </td>
                            <td> {{ $user->otdel_id }} </td>
                            <td> {{ $user->created_at }} </td>
                            <td> {{ $user->update_at}} </td>
                            <td>  </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
