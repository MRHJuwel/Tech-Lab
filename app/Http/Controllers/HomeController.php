<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catagory;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\ReplyComment;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front-end-view.home.home',[
            'blogs' => Blog::where('status',1)
            ->orderBy('id','desc')
            ->get(),
            'teams' => Team::where('status',1)->first()->orderBy('id','desc')->get(),
            'catagories'=> Catagory::all(),
            'sliders' => Slider::where('status',1)->orderBy('id','desc')->take(5)->get(),

        ]);
    }


    public function about(){
        return view('front-end-view.about.about',[
            'teams' => Team::where('status',1)->first()->orderBy('id','desc')->get(),
            'catagories'=> Catagory::all(),
            'blogs'=>Blog::all()
        ]);
    }
    public function category(){
        return view('front-end-view.category.category',[
            'catagories' =>Catagory::all(),
            'blogs' => Blog::where('status',1)->orderBy('id','desc')->first()->get(),

        ]);
    }

    public function contact(){
        return view('front-end-view.contact.contact',[
            'blogs'=>Blog::all(),
            'catagories'=>Catagory::all()
        ]);
    }
    public function singlePost(){
        return view('front-end-view.single-post.single-post',[
            'catagories' => Catagory::all(),
            'blogs' => Blog::all(),
            'comments' => Comment::all()
        ]);
    }
    public function blogDetails($slug,$id){
        return view('front-end-view.single-post.slagshow',[
            'catagories' => Catagory::all(),
            'blogs' => Blog::where('slug',$slug)->where('id',$id)->get(),
            'comments' => Comment::all(),
            'replys' => ReplyComment::all()
        ]);
    }


    public function showTeamDetails($slug,$id){
        return view('front-end-view.about.tesm-details',[
           'teams' => Team::where('slug',$slug)
            ->where('id', $id)->get()
        ]);

    }

    public function showSliderDetails($slug,$id){
        return view('front-end-view.home.slider-details',[
           'sliders' => Slider::where('slug',$slug)
            ->where('id', $id)->get(),
            'catagories' =>Catagory::all(),
        ]);

    }
    public function feedback(Request $request){

        Feedback::saveInfo($request);
        return back();
    }

    public function publicComment(Request $request){

        Comment::saveInfo($request);
        return back();
    }




}
