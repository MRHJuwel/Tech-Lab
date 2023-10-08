<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Runner\validate;

class Feedback extends Model
{
    use HasFactory;
    private static $feedback,$status;
    public static function saveInfo($request){
        $request->validate([
            'name' =>'nullable | string | max:50',
            'email' => 'required | string',
            'subject' => 'nullable | string',
            'message' => 'required | string'
        ],[
            'name.max' => 'please input less than 50 char',
            'email.required' => 'please fillup email fields',
            'message.required' => 'please add some feedback otherwise not submit form',
        ]);
        self::$feedback = new Feedback();
        self::$feedback->name = $request->name;
        self::$feedback->email = $request->email;
        self::$feedback->subject = $request->subject;
        self::$feedback->message = $request->message;
        self::$feedback->save();
    }
    public static function showStatus($id){
        self::$status = Feedback::find($id);
        if (self::$status->status ==1){
            self::$status->status = 0;
        }
        else {
            self::$status->status = 1;
        }
        self::$status->save();

    }
}
