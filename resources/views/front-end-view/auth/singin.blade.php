@extends('front-end-view.master')
@section('title')
    Sing In
@endsection
@section('content')
<div class="container  ">
  <div class="row">
      <div class="col-md-4  py-5">
          <h3 class="text-center text-primary"> Sing In here</h3>
          <h3 class="text-center text-danger"> {{ session('message') }}</h3>

      </div>
      <div class="col-md-4 offset-md-2   py-5">

          <form action="{{route('visitor.log.in.check')}}" method="post">
              @csrf

              <div class="mb-3">
                  <label for="email" class="form-label">Email: </label>
                  <input type="text" class="form-control" id="email" name="user_name">
                  @error('email')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>

              {{--            <div class="mb-3">--}}
              {{--                <label for="mobile" class="form-label">Email: </label>--}}
              {{--                <input type="text" class="form-control" id="mobile" name="mobile">--}}
              {{--                @error('mobile')--}}
              {{--                <p class="text-danger">{{$message}}</p>--}}
              {{--                @enderror--}}
              {{--            </div>--}}

              <div class="mb-3">
                  <label for="password" class="form-label">Password: </label>
                  <input type="password" class="form-control" id="password" name="password">
                  @error('password')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>



              <button type="submit" class="btn btn-primary">Sing Up</button>
          </form>
      </div>
  </div>
</div>
@endsection
