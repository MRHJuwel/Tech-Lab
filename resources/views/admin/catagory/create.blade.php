@extends('admin.master')
@section('title')
    Create Catagory
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Add New Catagory</h6>
                        <hr/>
                        <form action="{{route('catagories.store')}}" method="post" class="row g-3">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Catagory Name </label>
                                <input type="text"  name="catagory_name" class="form-control">
                                @error('catagory_name')
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
