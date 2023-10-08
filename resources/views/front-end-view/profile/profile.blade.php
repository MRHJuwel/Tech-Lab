@extends('front-end-view.master')
@section('title')
    My Profile
@endsection

@section('content')
    <div class="container">
        <div class="row  py-3" style="height: 400px;">

                <div class="col-md-3">
                    @foreach($images as $image)

                    <img  style="border-radius: 50%; height: 200px; width: 200px;" class="pt-2 " src="{{asset($image->image)}}" alt="">
                    @endforeach
                    <form class="pt-2" action="{{route('profile.image',Session::get('visitorId'))}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="visitorId" value="{{Session::get('visitorId')}}">
                        <input type="hidden" name="visitorName" value="{{Session::get('visitorName')}}">
                        <input type="hidden" name="visitorEmail" value="{{Session::get('visitorEmail')}}">
                        <input type="hidden" name="visitorMobile" value="{{Session::get('visitorMobile')}}">
                        <input type="file" name="image" accept="image/jpg,jpeg,png" class="form-group pt-2">
                        <button type="submit" class="btn btn-success mt-2">Upload</button>
                    </form>
                </div>
                <div class="col-md-9 pt-5 ">
                    <h3>{{Session::get('visitorName')}}</h3>
                    <p class="fa bi-envelope fs-5"> &nbsp;{{Session::get('visitorEmail')}}</p>
                    <p class="fa bi-phone-vibrate fs-5"> &nbsp;{{Session::get('visitorMobile')}}</p>
                </div>


        </div>


    </div>
@endsection


