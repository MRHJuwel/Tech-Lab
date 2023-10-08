@extends('admin.master')
@section('title')
    Manage Teams
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div class="card  ">

                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-center text-danger fs-3">All Tema Members </h6>
                    <hr/>
                    <table id="example" class="table mb-0 ">
                        <thead class="table table-hover table-bordered table-striped">
                        <tr>
                            <th scope="col">Si. No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Post Name</th>
                            <th scope="col">ablut</th>
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->slug}}</td>
                                <td>{{$team->slug}}</td>
                                <td>{{$team->postCatagory->catagory_name}}</td>
                                <td>{{substr( $team->about,1,60)}} ...</td>
                                <td>{{ $team->status}} </td>
                                <td><img src="@php if (isset($team->image)) { echo asset($team->image);} else { echo asset('assets').'/img/dumy.jpg';} @endphp" height="50px" width="50px" style="border-radius: 50%;" alt=""></td>
                                <td>
                                    <a href="{{route('teams.edit',$team->id)}}" class="btn btn-success m-1 float-start"> Edit</a>

                                    @if($team->status == 1)
                                        <a href="{{route('teams.show',$team->id)}}" class="btn btn-success m-1 float-start"> Active</a>
                                    @else
                                        <a href="{{route('teams.show',$team->id)}}" class="btn btn-secondary m-1 float-start"> Inactive</a>
                                    @endif

                                    <form action="{{route('teams.destroy',$team->id)}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger  m-1 float-start"
                                                onclick="return confirm('Are you sure to Delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
