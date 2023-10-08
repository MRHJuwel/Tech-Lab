@extends('admin.master')
@section('title')
    Edit Slider
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Add New Blog</h6>
                        <hr/>
                        <form action="{{route('sliders.update',$slider->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Slider Title </label>
                                <input type="text"  name="slider_title" value="{{$slider->slider_title}}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Slider Slug </label>
                                <input type="text"  name="slug" value="{{$slider->slug}}"  class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Slider Catagory </label>
                                <select class="form-control" name="sli_catagory_id" id="">
                                    {{--                                    <option value="" selected>{{$catagory->catagory_name}}</option>--}}
                                    @foreach($catagories as $catagory)

                                        <option value="{{$catagory->id}}" {{$catagory->id == $slider->sli_catagory_id ? 'selected':''}}> {{$catagory->catagory_name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-12">
                                <label class="form-label">Slider Description </label>
                                <textarea type="text"  name="description" class="form-control"> {{$slider->description}}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Image </label>
                                <input type="file"  name="image" class="form-control">
                                <img src="{{asset($slider->image)}}" height="70px" width="70px" class="p-1" style="border-radius: 50%;" alt="">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Catagory</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
