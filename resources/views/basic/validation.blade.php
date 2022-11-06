@extends('master')

@section('title')
    Form Validation
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <h2 class="text-center py-3">Form Validation </h2>
            <div class="col-md-6">
                <p style="text-align: justify">Laravel provides several different approaches to validate your application's incoming data. It is most common to use the validate method available on all incoming HTTP requests. However, we will discuss other approaches to validation as well.
                </p>
                <p style="text-align: justify">Laravel includes a wide variety of convenient validation rules that you may apply to data, even providing the ability to validate if values are unique in a given database table. We'll cover each of these validation rules in detail so that you are familiar with all of Laravel's validation features.</p>
                <p style="text-align: justify"></p>
                <p style="text-align: justify"></p>
         </div>
            <div class="col-md-6">
                <div class="card rounded-0">
                    <div class="card-header bg-warning">
                        <h4 class="text-center">Create Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('form.validate.check') }}" method="post">
                            @csrf

                            <h5 class="text-center">{{ Session::get('msg') }}</h5>
                            <div class="row mb-3">
                                <label class="col-md-4" for="">Use Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="user" value="{{old('user')}}" class="  @error('user') is-invalid @enderror form-control rounded-0" placeholder="Enter Name">
                                    @error('user')
                                    <p class=" text-danger ms-auto mb-0 ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-md-4" for="">Use Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="{{ old('email') }}" class=" @error('email') is-invalid @enderror form-control rounded-0" placeholder="Enter Email">
                                    @error('email')
                                    <p class="ms-auto text-danger mb-0 ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-md-4" for="">Use Phone</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" value="{{ old('phone')  }}" class=" @error('phone') is-invalid @enderror form-control rounded-0" placeholder="Enter Phone">
                                    @error('phone')
                                    <p class="ms-auto text-danger mb-0 ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-4" for="">Use Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" value="{{ old('password') }}" class=" @error('password') is-invalid @enderror form-control rounded-0" placeholder="Enter Password">

                                    @error('password')
                                    <p class="ms-auto text-danger mb-0 ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-4" for=""></label>
                                <div class="col-md-8">
                                    <input type="submit"  value="Send Data" class="btn btn-success rounded-0" placeholder="Enter Password">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
