@extends('admin.master')
@section('title')
    Edit Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Add New Blog</h6>
                        <hr/>
                        <form action="{{route('blogs.update',$blogs->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Blog Title </label>
                                <input type="text"  name="blog_title" value="{{$blogs->blog_title}}" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Slug </label>
                                <input type="text"  name="slug" value="{{$blogs->slug}}"  class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Catagory </label>
                                <select class="form-control" name="catagory_id" id="">
{{--                                    <option value="" selected>{{$catagory->catagory_name}}</option>--}}
                                    @foreach($catagories as $catagory)

                                        <option value="{{$catagory->id}}"> {{$catagory->catagory_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Author Name </label>
                                <input type="text"  name="author_name" value="{{$blogs->author_name}}"  class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Description </label>
                                <textarea type="text"  name="description" class="form-control"> {{$blogs->description}}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Image </label>
                                <input type="file"  name="image" class="form-control">
                                <img src="{{asset($blogs->image)}}" height="70px" width="70px" class="p-1" style="border-radius: 50%;" alt="">
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
