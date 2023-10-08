@extends('admin.master')
@section('title')
    Edit Catagory
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Add New Catagory</h6>
                        <hr/>
                        <form action="{{route('catagories.update',$catagory->id)}}" method="post" class="row g-3">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$catagory->id}}">
                            <div class="col-12">
                                <label class="form-label">Catagory Name </label>
                                <input type="text"  name="catagory_name" value="{{$catagory->catagory_name}}" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Edit Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
