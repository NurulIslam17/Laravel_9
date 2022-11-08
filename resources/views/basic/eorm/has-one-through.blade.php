@extends('master')

@section('title')
    One to Many
@endsection

@section('body')
    <div class="container">

        <div class="row my-3">
            <div class="col-md-6 mx-auto">
                <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#machanic" type="button" role="tab" aria-controls="machanic" aria-selected="false">Machanic</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#car" type="button" role="tab" aria-controls="car" aria-selected="false">Car</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#owner" type="button" role="tab" aria-controls="owner" aria-selected="false">Owner</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3>ORM : Has One Through</h3>
                        <p>
                            Has One Through is use to make relation between to table via a intermediate table.In this lecture
                            We discussed about it and practice about <br/>
                            Here Mechanics is related to Car and Car is related to Owner . We will make a relation between  owner and Machanic
                            and owner using car.
                        </p>
                    </div>

                    <div class="tab-pane fade" id="machanic" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add machanics</h4>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('add.machanic') }}" method="post">
                                    @csrf
                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Mechanic Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="machanic_name" class="form-control rounded-0">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Mechanic Phone</label>
                                        <div class="col-md-8">
                                            <input type="text" name="machanic_phone" class="form-control rounded-0">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Mechanic Description</label>
                                        <div class="col-md-8">
                                            <textarea  name="machanic_desc" class="form-control rounded-0" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for=""></label>
                                        <div class="col-md-8">
                                            <input type="submit" class="btn btn-success rounded-0">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="card">
                            <div class="card-header">
                                <h4>Add Car</h4>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('add.car')  }}" method="post">
                                    @csrf

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Mechanic Name</label>
                                        <div class="col-md-8">
                                            <select class="form-select" name="machanic_name" aria-label="Default select example">
                                                <option selected disabled>Select Mechanic</option>
                                                @foreach($mechanics as $mechanic)
                                                    <option value="{{$mechanic->id}}">{{$mechanic->machanic_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Car Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="car_name" class="form-control rounded-0">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Car Description</label>
                                        <div class="col-md-8">
                                            <textarea name="car_desc" class="form-control rounded-0" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for=""></label>
                                        <div class="col-md-8">
                                            <input type="submit" value="Add Car" class="btn btn-success rounded-0">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="owner" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="card">
                            <div class="card-header">
                                <h4>Add Owner</h4>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('add.owner') }}" method="post">
                                    @csrf

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Car Name</label>
                                        <div class="col-md-8">
                                            <select class="form-select" name="car_id" aria-label="Default select example">
                                                <option selected disabled>Select Car</option>
                                                @foreach($cars as $car)
                                                    <option value="{{$car->id}}">{{$car->car_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">owner Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="owner_name" class="form-control rounded-0">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for="">Owner Description</label>
                                        <div class="col-md-8">
                                            <textarea name="owner_desc" class="form-control rounded-0" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-md-4" for=""></label>
                                        <div class="col-md-8">
                                            <input type="submit" value="Add Owner" class="btn btn-success rounded-0">
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

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="bg-info">
                        <th>Car</th>
                        <th>Owner</th>
                        <th>Mechanic Name</th>
                        <th>Mechanic Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mechanicOwners as $mechanicOwner)
                        <tr>
                            <td>{{ $mechanicOwner->car->car_name }}</td>
                            <td>{{ $mechanicOwner->carOwner->owner_name}}</td>
                            <td>{{ $mechanicOwner->machanic_name }}</td>
                            <td>{{ $mechanicOwner->machanic_phone }}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection
