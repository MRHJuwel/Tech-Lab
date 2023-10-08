@extends('admin.master')
@section('title')
    Create Team
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Add New Team Member</h6>
                        <hr/>
                        <form action="{{route('teams.store')}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Name </label>
                                <input type="text"  name="name" class="form-control">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug </label>
                                <input type="text"  name="slug" class="form-control">


                            </div>
                            <div class="col-12">
                                <label class="form-label">Designation </label>
                                <select class="form-control" name="designation" id="">
                                    <option value="">Select Catagory</option>
                                    @foreach($catagories as $catagory)
                                        <option value="{{$catagory->id}}"> {{$catagory->catagory_name}}</option>
                                    @endforeach
                                </select>
                                @error('designation')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">about</label>
                                <textarea  name="about" class="form-control"> </textarea>
                                @error('about')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Member Image </label>
                                <input type="file"  name="image" class="form-control" accept="image/jpg,jpeg,png,webp">
                                @error('image')
                                <p class="text-danger">{{$message}}</p>
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
