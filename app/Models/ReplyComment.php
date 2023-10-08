<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    use HasFactory;
    private static $reply;
    public  static function saveInfo($request,$id)
    {
        //self::$reply = ReplyComment::find($id);
        self::$reply = new ReplyComment(); //  atati korte hobe
        self::$reply->slugs = $request->slugs;
        self::$reply->pid = $request->pid;
        self::$reply->visitorId = $request->visitorID;
        self::$reply->visitorName = $request->visitorName;
        self::$reply->visitorEmail = $request->visitorEmail;
        self::$reply->reply = $request->reply;
        self::$reply->save();
    }
}
