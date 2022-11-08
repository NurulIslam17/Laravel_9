@extends('master')

@section('title')
    Many to Many
@endsection

@section('body')

    <div class="container my-5">

        <div class="row mb-4">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Eloquent ORM many to many</h3>
                    </div>
                    <div class="card-body">
                        @foreach($category as $val)
                            <div class="row border border-2 m-3">
                                <div class="col-md-4">
                                    <h4>Category</h4>
                                    <hr>
                                    <p>Category Id: {{ $val->id }}</p>
                                    <p>Category name: {{ $val->name }}</p>
                                </div>
                                <div class="col-md-8">
                                    <h4>Posts</h4>
                                    @foreach($val->posts as $p)
                                        <p>Post Id : {{ $p->id }}</p>
                                        <p>Post Title : {{ $p->post_title }}</p>
                                        <hr>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Eloquent ORM many to many</h3>
                    </div>
                    <div class="card-body">
                        @foreach($postData as $val)
                            <div class="row border border-2 m-3">
                                <div class="col-md-4">
                                    <h4>Post</h4>
                                    <hr>
                                    <p>Post Id: {{ $val->id }}</p>
                                    <p>Post name: {{ $val->post_title }}</p>
                                </div>
                                <div class="col-md-8">
                                    <h4>Categories</h4>
                                    @foreach($val->categories as $p)
                                        <p>Category Id : {{ $p->id }}</p>
                                        <p>Category Name : {{ $p->name }}</p>
                                        <hr>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
