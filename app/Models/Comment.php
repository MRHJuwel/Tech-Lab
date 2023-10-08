<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    private static $comments ;
    public static function saveInfo($request){

          self::$comments = new Comment();
          self::$comments->post_id = $request->post_id;
          self::$comments->name = $request->name;
          self::$comments->email = $request->email;
          self::$comments->message = $request->message;
          self::$comments->save();


    }

    public function replyComment($id){

    }
}
