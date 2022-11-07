@extends('master')

@section('title')
    Add
@endsection

@section('body')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h3 class="text-center">Eloquent ORM Add data</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
                        <form action="{{ route('store.phone') }}" method="post">
                            @csrf

                            <div class="row mb-2">
                                <label class="col-md-4" for="">User name</label>
                                <div class="col-md-8">
                                    <select class="form-select" name="user_id" aria-label="Default select example">
                                        <option selected>Select User Name</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="">Phone name</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone_name" class="form-control rounded-0">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="">Phone price </label>
                                <div class="col-md-8">
                                    <input type="number" name="phone_price" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-md-4" for="">Phone Model</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone_model" class="form-control rounded-0">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <textarea name="phone_desc" placeholder="Phone Description" class="form-control rounded-0" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-md-4" for=""></label>
                                <div class="col-md-8">
                                    <input type="submit" name="" class="btn btn-success rounded-0">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
