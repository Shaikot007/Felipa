<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    private static $subscriber;

    public static function newSubscriber($request)
    {
        self::$subscriber = new Subscriber();
        self::$subscriber->email          = $request->email;
        self::$subscriber->save();
    }

    public static function updateSubscriber($request, $id)
    {
        self::$subscriber = Subscriber::find($id);
        self::$subscriber->email          = $request->email;
        self::$subscriber->save();
    }

    public static function deleteSubscriber($id)
    {
        self::$subscriber = Subscriber::find($id);
        self::$subscriber->delete();
    }
}
