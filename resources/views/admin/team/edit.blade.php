@extends('admin.master')
@section('title')
    Edit Team
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Edit Team Details</h6>
                        <hr/>
                        <form action="{{route('teams.update',$team->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$team->id}}">
                            <div class="col-12">
                                <label class="form-label">Name </label>
                                <input type="text"  name="name" value="{{$team->name}}" class="form-control">
                                @error('blog_title')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug </label>
                                <input type="text"  name="slug" value="{{$team->slug}} " class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Designation </label>
                                <select class="form-control" name="designation" id="">

                                    @foreach($catagories as $catagory)
                                        <option value="{{$catagory->id}}" {{$catagory->id == $team->designation ?'selected':''}}> {{$catagory->catagory_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">about</label>
                                <textarea  name="about" class="form-control">{{$team->about}} </textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Member Image </label>
                                <input type="file"  name="image" class="form-control">
                                <img src="{{asset($team->image)}}" height="50px" width="50px" alt="">
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
