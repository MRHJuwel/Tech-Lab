@extends('front-end-view.master')
@section('title')
    About Us
@endsection
@section('content')


{{--    about us top section --}}
   @include('front-end-view.about.aboutus-sec')
{{--    latest news sectio n--}}
    @include('front-end-view.about.lates-news')
{{--   about team section --}}
    @include('front-end-view.about.about-team')
@endsection

