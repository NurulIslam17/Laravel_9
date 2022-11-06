<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormValudate extends Model
{
    private static $validationForm;
    use HasFactory;

    public static  function storeData($request){
        self::$validationForm = new FormValudate();

        self::$validationForm->user = $request->user;
        self::$validationForm->email = $request->email;
        self::$validationForm->phone = $request->phone;
        self::$validationForm->password = bcrypt($request->password);

        self::$validationForm->save();
    }
}
