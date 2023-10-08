<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;
use function PHPUnit\Runner\validate;

class Team extends Model
{
    use HasFactory;
    private static $teams, $slug,$image,$imageName, $imageURL,$DIR;
    public static function saveInfo($request,$id=null){
        $request->validate([
            'name' => 'required | string | max:100 | min:4',
            'slug' => 'nullable | string',
            'designation' => 'required',
            'about' => 'required | string',
            'image' => 'image | mimes:png,jpg,jpeg,webp',
        ],[
            'name.required' => 'please add persons name',
            'name.min' => 'please input minimum 4 cahr',
            'name.max' => 'please input minimum 100 cahr',
            'designation.required' => 'please select this field',
            'about.required' => 'please select this field',
            'image.image' => 'please select only image',
            'image.mimes' => 'please select jpg,jpeg,png,webp',
        ]);
        if ($id != null){
            self::$teams =Team::find($id);
        } else {
            self::$teams = new  Team();

        }
        self::$teams->name = $request->name;
//        for edit fild
        if (self::$teams->slug != $request->slug){
            self::$teams->slug = self::makeSlug($request);
        }

           // self::$teams->slug = self::makeSlug($request);


        self::$teams->designation = $request->designation;
        self::$teams->about = $request->about;
        if ($request->file('image')){
            self::$teams->image = self::saveImage($request);
        }
        self::$teams->save();
    }
//    image processing
    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName =$request->name.'_'.rand().self::$image->extension();
        self::$DIR = 'assets/img/';
        self::$imageURL = self::$DIR.self::$imageName;
        self::$image->move(self::$DIR, self::$imageName);
        return self::$imageURL;
    }
//    slug making
    public static function makeSlug($request){
       if ($request->slug)
       {
           self::$slug =Str::slug($request->slug,'-');
       }
       else {
           self::$slug = Str::slug($request->name,'-');
       }
       return self::$slug;
    }
    //
    public function postCatagory(){
        return $this->belongsTo(Catagory::class,'designation');
    }
}
