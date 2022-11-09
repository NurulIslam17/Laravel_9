<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Machanic;
use App\Models\Owner;
use App\Models\Phone;
use App\Models\Post;
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
        //return $request;
        Phone::saveData($request);
        return back()->with('success','Phone Stored Successfully');
    }

    //oneToOne
    public function oneToOne()
    {

        //return User::find(2)->phone;

        return view('basic.eorm.one_to_one',[
            'users' => User::all(),
        ]);
    }

    //oneToOne
    public function oneToMany()
    {

        $allInfo =  Post::with('comment')->get();
        return view('basic.eorm.one_to_many',[
            'posts' => $allInfo,
        ]);
    }

    public function storePost(Request $request)
    {
        Post::store($request);
        return back()->with('success','New Post Added');
    }

    public function postComment(Request $request)
    {
        Comment::postComment($request);
        return back()->with('success','Comment is posted');
    }

    //manyToMany

    public function manyToMany()
    {
        $catePost = Category::with('posts')->get();
        $postCate = Post::with('categories')->get();

//        return  $postCate;

        return view('basic.eorm.many_to_many',[
            'category'=>$catePost,
            'postData' =>$postCate,
        ]);
    }

    //hasOneThrough

    public function addMachanic(Request $request)
    {
        //return $request;

        Machanic::storeMachanic($request);
        return back()->with('success','New Mechanic Added');
    }

    public function addCar(Request $request)
    {
        //return $request;
        Car::storeCar($request);
        return  back()->with('success','New Car Added');
    }

    public function addOwner(Request $request)
    {
        //return $request;
        Owner::storeOwner($request);
        return  back()->with('success','New Owner Added');
    }

    public function hasOneThrough()
    {
//       return Machanic::with('carOwner','cars')->get();
        $mechanicOwner = Machanic::with('carOwner','cars')->get();

        return view('basic.eorm.has-one-through',[
            'mechanics' => Machanic::get(),
            'cars' => Car::get(),
            'mechanicOwners' => $mechanicOwner,
        ]);
    }
}
