@extends('admin.master')
@section('title')
Feedback from Visitor
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

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$feedback->name}}</td>
                                <td>{{$feedback->email}}</td>
                                <td>{{$feedback->subject}}</td>

                                <td>{{substr( $feedback->message,1,60)}} ...</td>
                                <td>{{ $feedback->status==1?'active':'inactive'}} </td>
                                 <td>
{{--                                    <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-success m-1 float-start"> Edit</a>--}}

                                    @if($feedback->status == 1)
                                        <a href="{{route('contacts.show',$feedback->id)}}" class="btn btn-secondary text-uppercase m-1 float-start"> Inactive</a>
                                    @else
                                        <a href="{{route('contacts.show',$feedback->id)}}" class="btn btn-success text-uppercase m-1 float-start"> Active</a>
                                    @endif

                                    <form action="{{route('contacts.destroy',$feedback->id)}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-uppercase  m-1 float-start"
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
