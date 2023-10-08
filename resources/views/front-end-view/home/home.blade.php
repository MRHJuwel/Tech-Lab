@extends('front-end-view.master')
@section('title')
    Home Page
@endsection
@section('content')
    <!-- ======= Hero Slider Section ======= -->
  @include('front-end-view.home.slider')
    <!-- ======= Post Grid Section ======= -->
   @include('front-end-view.home.post-grid')

    <!-- ======= Team  Section ======= -->
    @include('front-end-view.about.about-team')
    <!-- ======= Culture Category Section ======= -->
   @include('front-end-view.home.Culture-catagory-section')
    <!-- ======= Business Category Section ======= -->
    @include('front-end-view.home.business-catagory')
    <!-- ======= Lifestyle Category Section ======= -->
    @include('front-end-view.home.life-style-cata')
@endsection
