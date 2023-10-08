@extends('admin.master')
@section('title')
    Create Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Add New Blog</h6>
                        <hr/>
                        <form action="{{route('blogs.store')}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Blog Title </label>
                                <input type="text"  name="blog_title" class="form-control">
                                @error('blog_title')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Slug </label>
                                <input type="text"  name="slug" class="form-control">
                                @error('slug')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Catagory </label>
                                <select class="form-control" name="catagory_id" id="">
                                    <option value="">Select Catagory</option>
                                    @foreach($catagories as $catagory)
                                    <option value="{{$catagory->id}}"> {{$catagory->catagory_name}}</option>
                                    @endforeach
                                </select>
                                @error('catagory_id')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Author Name </label>
                                <input type="text"  name="author_name" class="form-control">
                                @error('author_name')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Description </label>
                                <textarea type="text"  name="description" class="form-control"></textarea>
                                @error('description')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Blog Image </label>
                                <input type="file"  name="image" class="form-control" accept="image/jpeg,jpg,png,webp">
                                @error('image')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
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
