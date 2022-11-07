<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class EloquentOrmController extends Controller
{
    //add data
    public function addData()
    {
        return view('basic.eorm.add',[
            'users' => User::get(),
        ]);
    }
    //storePhone
    public function storePhone(Request $request)
    {
//       return $request;
        Phone::saveData($request);
        return back()->with('success','Phone Stored Successfully');
    }

    //oneToOne
    public function oneToOne()
    {

//        return User::find(2)->phone;

        return view('basic.eorm.one_to_one',[
            'users' => User::all(),
        ]);
    }
}
