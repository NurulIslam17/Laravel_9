@extends('master')

@section('title')
    One to one
@endsection

@section('body')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Eloquent ORM One to One</h3>
                    </div>
                    <div class="card-body">
                        <table class="table border border-2 table-striped hover">
                            <thead class="thead-dark">
                            <tr class="bg-warning">
                                <th scope="col">SL</th>
                                <th scope="col">User</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone->phone_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone->phone_price }} Tk.</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
