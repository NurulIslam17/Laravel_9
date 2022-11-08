@extends('master')

@section('title')
    One to Many
@endsection

@section('body')
    <div class="container">

        <div class="row my-3">
            <div class="col-md-5 mx-auto">
                <h4 class="text-center">{{ Session::get('success') }}</h4>
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Add Post</a>
                </p>

                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <form action="{{ route('store.post') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-md-4" for="">Post Title</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control rounded-0" name="post_title" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <textarea name="post_desc" placeholder="Post Desciption" class="form-control rounded-0" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4" for=""></label>
                                        <div class="col-md-8">
                                            <input type="submit" class="btn btn-success rounded-0">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-center">Eloquent ORM One to Many</h3>
                    </div>
                    <div class="card-body mt-0 pt-0">
                        @foreach($posts as $post)
                            <div class="row my-1">
                                <div class="col-md-4 border border-2">
                                    <h3>{{ $post->post_title }}</h3>
                                    <p style="text-align: justify">
                                       {{ $post->post_desc }}
                                    </p>

                                    {{--   comment--}}
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="card card-body border border-0">
                                                    <form action="{{ route('post.comment') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $post->id }}" name="post_id"  class="form-control rounded-0" >
                                                        <textarea name="comment_desc" placeholder="Comment Here" class="form-control mb-2 rounded-0" id="" cols="30" rows="2"></textarea>
                                                        <input type="submit" value="Comment" class="btn btn-success rounded-0">
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 border border-2 pt-1">
                                    <div class="card card-body pt-0" style="background-color: #3eefe3">
                                        @foreach($post->comment as $comnt)
                                            <div style="background-color: #7d7575" class="card card-body rounded-3 shadow my-2">
                                                <h5 class="text-light pb-0 mb-0">User#{{ $comnt->id }}</h5>
                                                <p style="font-style: italic;color: #c4d3ee;text-align: justify" class="pb-0 mb-0">{{ $comnt->comment_desc }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
