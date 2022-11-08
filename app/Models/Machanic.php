<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machanic extends Model
{
    use HasFactory;
    private static $machanic;

    public  static function storeMachanic($request)
    {
        self::$machanic = new Machanic();

        self::$machanic->machanic_name  = $request->machanic_name;
        self::$machanic->machanic_phone  = $request->machanic_phone;
        self::$machanic->machanic_desc  = $request->machanic_desc;

        self::$machanic->save();
    }

    public function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }

    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
