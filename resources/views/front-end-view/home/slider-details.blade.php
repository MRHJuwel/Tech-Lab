@extends('front-end-view.master')

@section('title')
    Slider Details
@endsection
@section('content')
    <section class="py-5">
        <div class="row">

                @foreach($sliders as $slider)
                    <div class="col-sm-6">
                        <img src="{{asset($slider->image)}}" width="600px" style="margin: 5px;padding-left: 10px;" alt="">
                    </div>
                    <div class="col-sm-6">
                        <p> <span>{{$slider->catagory->catagory_name}} &nbsp;</span>| &nbsp;{{$slider->created_at}}</p>
                        <h3 class="fw-bolder">{{$slider->slider_title}}</h3>
                        <p class="fs-5" ><span class="firstcharacter fs-3" >{{ substr($slider->description,0,1) }}</span>{{substr($slider->description,1,10000)}}</p>
                    </div>
                @endforeach

        </div>
    </section>
@endsection
