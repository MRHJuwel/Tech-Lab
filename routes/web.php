<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CatagoriController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VisitorAuthController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/category',[HomeController::class,'category'])->name('category');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/single/post',[HomeController::class,'singlePost'])->name('single-post');
Route::get('/blog/details/{slug}/{id}',[HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/show/team/details/{slug}/{id}',[HomeController::class,'showTeamDetails'])->name('show.team.details');
Route::get('/show/slider/details/{slug}/{id}',[HomeController::class,'showSliderDetails'])->name('show.slider.details');
Route::post('/public/comment',[HomeController::class,'publicComment'])->name('public.comment');
Route::post('/feedback',[HomeController::class,'feedback'])->name('feedback');
//Route::post('/search/post',[HomeController::class,'searchPost'])->name('search-post');

// Client Log in
Route::get('/visitor/sing/up',[VisitorAuthController::class,'visitorSingUp'])->name('visitor.sing.up');
Route::get('/visitor/sing/in',[VisitorAuthController::class,'visitorSingIn'])->name('visitor.sing.in');
Route::get('/visitor/logout',[VisitorAuthController::class,'visitorLogout'])->name('visitor.logout');

Route::post('/visitor/sing/in',[VisitorAuthController::class,'visitorSingStore'])->name('visitor.sing.store');
Route::post('/visitor/sing/up',[VisitorAuthController::class,'visitorLogInCheck'])->name('visitor.log.in.check');
Route::post('/visitor/reply/{id}',[VisitorAuthController::class,'visitorReply'])->name('visitor.reply');
Route::get('/visitor/profile',[VisitorAuthController::class,'visitorProfile'])->name('profile');
Route::post('/visitor/profile/image/{visitorId}',[VisitorAuthController::class,'visitorProfileImage'])->name('profile.image');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('index');
    Route::resources(['catagories'=> CatagoriController::class]);
    Route::resources(['blogs'=> BlogController::class]);
    Route::resources(['comments'=> CommentController::class]);
    Route::resources(['teams'=> TeamController::class]);
    Route::resources(['sliders'=> SliderController::class]);
    Route::resources(['contacts'=> ContactController::class]);

});
