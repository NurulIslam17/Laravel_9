<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    private static $owner;

    public static function storeOwner($request)
    {
        self::$owner = new Owner();

        self::$owner->car_id  = $request->car_id;
        self::$owner->owner_name  = $request->owner_name;
        self::$owner->owner_desc  = $request->owner_desc;
        self::$owner->save();
    }
}
