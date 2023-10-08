<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'email',
        'mobile',
        'password',

    ];
    private static $image,$imageName,$imageURL,$DIR,$images;
    public static function saveImage($request,$visitorId=null){
        if ($visitorId !=null)
        {
            self::$image = Visitor::find($visitorId);
        }
        else{
            self::$image = new Visitor();
        }

        self::$image->name = $request->visitorName;
        self::$image->email = $request->visitorEmail;
        self::$image->mobile = $request->visitorMobile;
        if ($request->file('image'))
        {
            if (self::$image->image)
            {
                if (file_exists(self::$image->image))
                {
                    unlink(self::$image->image);
                }
            }
            self::$image->image = self::addImage($request);
        }
      self::$image->save();

    }
    public static function addImage($request){

        self::$images = $request->file('image');
        self::$imageName = $request->visitorName.'_'.rand().'.'.self::$images->extension();
        self::$DIR = 'assets/profile/';
        self::$imageURL = self::$DIR.self::$imageName;
        self::$images->move(self::$DIR, self::$imageName);
        return self::$imageURL;

    }
}
