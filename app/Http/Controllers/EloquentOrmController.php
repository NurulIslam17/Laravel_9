<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
}
