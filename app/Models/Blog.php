<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function PHPUnit\Runner\validate;

class Blog extends Model
{
    use HasFactory;
    private  static $blogs,$image,$imageName,$imageURL,$DIR,$slug,$status;

    public static function saveInfo($request,$id=null){
        $request->validate([
            'blog_title'    =>'required | string | max:200 | min:5',
            'slug'          => 'nullable | string',
            'catagory_id'   => 'required | integer',
            'author_name'   => 'required | string',
            'description'   => 'required | string',
            'image'         => 'image | mimes:jpg,jpeg,png,webp',
        ],[
            'blog_title.required'  => 'please gives a title',
            'blog_title.string'  => 'please gives string',
            'catagory_id.required'  => 'please select a catagory',
            'author_name.required'  => 'please gives a author name',
            'author_name.string'  => 'please gives a author name as string',
            'description.required'  => 'please gives some description',
            'image.image' =>'please select only image '
        ]);
        if ($id !=null){
            self::$blogs = Blog::find($id);
        }else{
            self::$blogs = new Blog();
        }
        self::$blogs->blog_title = $request->blog_title;

        self::$blogs->slug = self::saveSlug($request);
        self::$blogs->catagory_id = $request->catagory_id;
        self::$blogs->author_name = $request->author_name;
        self::$blogs->description = $request->description;
        if ($request->file('image'))
        {
            if (self::$blogs->image){
                if (file_exists(self::$blogs->image))
                {
                    unlink(self::$blogs->image);
                }
            }
            self::$blogs->image = self::saveImage($request);
        }

        self::$blogs->save();
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
            self::$slug = Str::slug($request->slug,'-');
        }
        else {
            self::$slug = Str::slug($request->blog_title,'-');
        }
        return self::$slug;
    }
    public static function showStatus($id){
        self::$status = Blog::find($id);
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
        return $this->belongsTo(Catagory::class);
    }

}

