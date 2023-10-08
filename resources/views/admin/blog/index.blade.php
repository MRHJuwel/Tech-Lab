@extends('admin.master')
@section('title')
    Manage Blogs
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div class="card  ">

                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-center text-danger fs-3">All Blogs </h6>
                    <hr/>
                    <table id="example" class="table mb-0 ">
                        <thead class="table table-hover table-bordered table-striped">
                        <tr>
                            <th scope="col">Si. No</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Catagory Name</th>
                            <th scope="col">Author Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blog->blog_title}}</td>
                                <td>{{$blog->slug}}</td>
                                <td>{{$blog->catagory->catagory_name}}</td>
                                <td>{{$blog->author_name}}</td>
                                <td>{{substr( $blog->description,1,60)}} ...</td>
                                <td>{{ $blog->status}} </td>
                                <td><img src="@php if (isset($blog->image)) { echo asset($blog->image);} else { echo asset('assets').'/img/dumy.jpg';} @endphp" height="50px" width="50px" style="border-radius: 50%;" alt=""></td>
                                <td>
                                    <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-success m-1 float-start"> Edit</a>

                                    @if($blog->status == 1)
                                        <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-success m-1 float-start"> Active</a>
                                    @else
                                        <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-secondary m-1 float-start"> Inactive</a>
                                    @endif

                                    <form action="{{route('blogs.destroy',$blog->id)}}"  method="post">
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
