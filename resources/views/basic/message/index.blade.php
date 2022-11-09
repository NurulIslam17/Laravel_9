@extends('master')

@section('title')
    Send Message
@endsection

@section('body')
    <div class="container">

        <div class="row mt-3">
            <div class="col-md-4 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h4 class="text-center text-info">Send SMS Laravel</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('send.to.user') }}" method="post">
                            @csrf

                            <p>{{ Session::get('success') }}</p>
                            <div class="row mb-3">

                                <div class="col-md-12">
                                <textarea name="user_message" class="form-control rounded-0 m-0 p-3" placeholder="Message here..." id="" cols="30" rows="4">

                                </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4" for="">Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="user_number" class="form-control rounded-0 @error('user_number') is-invalid @enderror">
                                </div>
                                @error('user_number')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4" for=""></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success rounded-0" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
