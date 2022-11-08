@extends('master')

@section('title')
    Many to Many
@endsection

@section('body')
    <div class="container my-5">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Eloquent ORM many to many</h3>
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
{{--                            @foreach($users as $user)--}}
                                <tr>
                                    <th scope="row">gh</th>
                                    <td>ffgh</td>
                                    <td>fgfh</td>
                                    <td>fv f f</td>
                                    <td>cdv f f .</td>
                                </tr>
{{--                            @endforeach--}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Eloquent ORM many to many</h3>
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
                            {{--                            @foreach($users as $user)--}}
                            <tr>
                                <th scope="row">gh</th>
                                <td>ffgh</td>
                                <td>fgfh</td>
                                <td>fv f f</td>
                                <td>cdv f f .</td>
                            </tr>
                            {{--                            @endforeach--}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
