<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catagory;
use App\Models\ReplyComment;
use App\Models\Slider;
use App\Models\Visitor;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class VisitorAuthController extends Controller
{
    private  static $visitor;
    public function visitorSingUp(){
        return view('front-end-view.auth.singup');
    }
    public function visitorSingIn(){
//        return view('front-end-view.home.home',[
//            'blogs' => Blog::where('status',1)
//                ->orderBy('id','desc')
//                ->take(5)
//                ->get(),
//            'teams' => Team::where('status',1)->first()->orderBy('id','desc')->get(),
//            'catagories'=> Catagory::all(),
//            'sliders' => Slider::where('status',1)->orderBy('id','desc')->take(5)->get(),
//        ]);
        return view('front-end-view.auth.singin',[
            'catagories' =>Catagory::all(),
            'blogs' => Blog::where('status',1)->orderBy('id','desc')->first()->get(),

        ]);
    }

    public function visitorSingStore(Request $request){

        $request->validate([
            'name'      => 'required | string | max:100 | min:4',
            'email'     => 'required',
            'mobile'    => 'required ',
            'password'  => 'required ',
            'confirm_password'  => 'required | same:password',
            'image'  => 'nullable ',
        ],[
            'name.required'      => 'Please set a username',
            'name.min'      => 'Please set a username more than 4 char',
            'name.max'      => 'Please set a username less than 100 char',
            'mobile.required' => 'Please input a number',
            'password.required' => 'Please set a password',
            'confirm_password.required' => 'Please set  pasword again ',
            'confirm_password.same' => 'Please set same pasword there ',
        ]);
        Visitor::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'image' => $request->image,


        ]);
        return redirect(route('home'));
    }

    public function visitorLogInCheck(Request $request){
        self::$visitor = Visitor::where('email',$request->user_name)
            ->orWhere('mobile',$request->user_name)
            ->first();

        if (self::$visitor){
            if (password_verify($request->password,self::$visitor->password))
            {
                Session::put('visitorId',self::$visitor->id);
                Session::put('visitorName',self::$visitor->name);
                Session::put('visitorEmail',self::$visitor->email);
                Session::put('visitorMobile',self::$visitor->mobile);

//                return view('front-end-view.profile.profile',[
//                    'blogs'=>Blog::where('status',1)->orderBy('id','desc')->take(5)->first()->get(),
//                    'catagories'=> Catagory::all()
//                ]);
                return redirect(route('home'));

            } else {
                return back()->with('message','Please input valid password.');
            }
        }else {
            return back()->with('message','Please input valid username.');
        }

    }
    public function visitorLogout ()
    {
        Session::forget('visitorId');
        Session::forget('visitorName');
        Session::forget('visitorEmail');
        Session::forget('visitorMobile');
        return redirect(route('home'));
    }

    public function visitorReply(Request $request,$id)
    {

        ReplyComment::saveInfo($request,$id);
        return back();
    }

    public function visitorProfile(){
        return view('front-end-view.profile.profile',[
            'blogs' => Blog::where('status', 1)->take(5)->first()->get(),
            'catagories' => Catagory::all(),
            'images' =>Visitor::where('name',Session::get('visitorName') )
                ->where('id',Session::get('visitorId') )->first()->get(),

        ]);
    }

    public function visitorProfileImage(Request $request,$visitorId){
       Visitor::saveImage($request,$visitorId);
       return back();
    }
}
