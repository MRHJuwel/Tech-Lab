@extends('admin.master')
@section('title')
    View Commants
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div class="card  ">

                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-center text-danger fs-3">Comment Table</h6>
                    <hr/>
                    <table class="table mb-0 ">
                        <thead class="table table-hover table-bordered table-striped">
                        <tr>
                            <th scope="col">Si. No</th>
                            <th scope="col">Post ID</th>
                            <th scope="col">Catagory Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$comment->post_id}}</td>
                                <td>{{$comment->name}}</td>
                                <td>{{$comment->email}}</td>
                                <td>{{$comment->message}}</td>
{{--                                <td>--}}
{{--                                    <a href="{{route('catagories.edit',$catagory->id)}}" class="btn btn-success m-1 float-start"> Edit</a>--}}
{{--                                    @if($catagory->status == 1)--}}
{{--                                        <a href="{{route('catagories.show',$catagory->id)}}" class="btn btn-success m-1 float-start"> Active</a>--}}
{{--                                    @else--}}
{{--                                        <a href="{{route('catagories.show',$catagory->id)}}" class="btn btn-secondary m-1 float-start"> Inactive</a>--}}
{{--                                    @endif--}}
{{--                                    <form action="{{route('catagories.destroy',$catagory->id)}}"  method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit" class="btn btn-danger text-uppercase m-1">Delete</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
