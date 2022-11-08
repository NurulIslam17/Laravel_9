<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    private static $car;


    public static function storeCar($request)
    {
        self::$car = new Car();

        self::$car->machanic_id = $request->machanic_id;
        self::$car->car_name = $request->car_name;
        self::$car->car_desc = $request->car_desc;
        self::$car->save();
    }
}
