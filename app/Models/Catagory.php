<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Runner\validate;

class Catagory extends Model
{
    use HasFactory;
    private static $catagory,$status;
    public static function saveInfo ($request, $id=null)
    {
        $request->validate([
            'catagory_name' => 'required | string | max:100 | min:3'
        ],[
            'catagory_name.required' => 'Please add catagory name',
            'catagory_name.min' => 'Please add catagory name minimum 3 char',
            'catagory_name.max' => 'Please add catagory name maximum 100 char',
        ]);

        if ($id != null)
        {
            self::$catagory = Catagory::find($id);

        }
        else {
            self::$catagory = new Catagory();
        }
        self::$catagory->catagory_name = $request->catagory_name;
        self::$catagory->save();
    }
    public static function showStatus($id){
        self::$status = Catagory::find($id);
        if (self::$status->status == 1)
        {
            self::$status->status = 0;
        }
        else {
            self::$status->status = 1;
        }
        self::$status->save();
    }
}
