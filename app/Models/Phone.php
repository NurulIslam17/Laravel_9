<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Phone extends Model
{
    use HasFactory;

    private static $phone;

    public static function saveData($request)
    {
        self::$phone = new Phone();

        self::$phone->user_id       = $request->user_id;
        self::$phone->phone_name    = $request->phone_name;
        self::$phone->phone_price   = $request->phone_price;
        self::$phone->phone_model   = $request->phone_model;
        self::$phone->phone_desc    = $request->phone_desc;

        self::$phone->save();

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
