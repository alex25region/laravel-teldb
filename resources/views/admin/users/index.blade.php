@extends('admin.dashboard')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @include('admin.layouts.messages')
                <div class="row justify-content-end">
                    <nav class="navbar">
                        <a class="btn btn-md btn-primary bg-gradient-green" href="asd">Add User</a>
                    </nav>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2>Table - Users</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm table-striped">
                            <thead>
                            <tr class="thead-light">
                                <th class="sorting">id</th>
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
                            </thead>
                            <tbody>
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
                                    <td> asd | ad | asd</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
