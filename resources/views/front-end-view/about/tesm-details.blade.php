@extends('front-end-view.master')
@section('title')
    Show Team Details
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="row py-5 ">
            @foreach($teams as $team)
            <div class="col-6 text-center mb-5" style="border-right: 1px solid black;">

                    <div class="col-lg-6">
                        <img src="{{asset($team->image)}}" alt="" class="rounded-2">
                </div>
            </div>

                <div class="col-lg-6 mb-5 p-3 pt-2" >

                    <h4>{{$team->name}}</h4>
                    <span class="d-block mb-3 text-uppercase" >{{$team->postCatagory->catagory_name}}</span>
                    <p>
                        {{$team->about}}
                    </p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
