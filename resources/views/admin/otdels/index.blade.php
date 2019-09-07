@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <table class="table table-bordered table-sm table-striped">
                    <tr class="thead-light">
                        <th>id</th>
                        <th>otdel</th>
                        <th>address</th>
                        <th>telefon</th>
                        <th>email</th>
                        <th>created_at</th>
                        <th>update_at</th>
                        <th>action</th>

                    </tr>
                    @foreach($otdels as $otdel)
                        <tr>
                            <td> {{ $otdel->id }} </td>
                            <td> {{ $otdel->otdel }} </td>
                            <td> {{ $otdel->address }} </td>
                            <td> {{ $otdel->telefon }} </td>
                            <td> {{ $otdel->email }} </td>
                            <td> {{ $otdel->created_at }} </td>
                            <td> {{ $otdel->update_at}} </td>
                            <td>  </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
