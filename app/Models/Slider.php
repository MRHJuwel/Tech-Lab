<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;

class Slider extends Model
{
    use HasFactory;
    private  static $slider,$image,$imageName,$imageURL,$DIR,$slug,$status;

    public static function saveInfo($request,$id=null){
        $request->validate([
            'slider_title'    =>'required | string | max:200 | min:5',
            'slug'          => 'nullable | string',
            'sli_catagory_id'   => 'required | integer',
            'description'   => 'required | string',
            'image'         => 'image | mimes:jpg,jpeg,png,webp',
        ],[
            'slider_title.required'  => 'please gives a title',
            'slider_title.string'  => 'please gives string',
            'sli_catagory_id.required'  => 'please select a catagory',
            'description.required'  => 'please gives some description',
            'image.image' =>'please select only image '
        ]);
        if ($id !=null){
            self::$slider = Slider::find($id);
        }else{
            self::$slider = new Slider();
        }
        self::$slider->slider_title = $request->slider_title;

        self::$slider->slug = self::saveSlug($request);
        self::$slider->sli_catagory_id = $request->sli_catagory_id;
        self::$slider->description = $request->description;
        if ($request->file('image'))
        {
            if (self::$slider->image){
                if (file_exists(self::$slider->image))
                {
                    unlink(self::$slider->image);
                }
            }
            self::$slider->image = self::saveImage($request);
        }

        self::$slider->save();
    }
//    image processing
    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = $request->blog_title.'_'.rand().'.'.self::$image->extension();
        self::$DIR = 'assets/img/';
        self::$imageURL = self::$DIR.self::$imageName;
        self::$image->move(self::$DIR, self::$imageName);
        return self::$imageURL;
    }

    public static function saveSlug($request)
    {

        if ($request->slug)
        {
            self::$slug = Str::slug($request->slug,'-').'-'.rand();
        }
        else {
            self::$slug = Str::slug($request->slider_title,'-').'-'.rand();
        }
        return self::$slug;
    }
    public static function showStatus($id){
        self::$status = Slider::find($id);
        if (self::$status->status == 1)
        {
            self::$status->status = 0;
        }
        else {
            self::$status->status = 1;
        }
        self::$status->save();
    }
//    relational database
    public  function catagory()
    {
        return $this->belongsTo(Catagory::class,'sli_catagory_id');
    }

}
