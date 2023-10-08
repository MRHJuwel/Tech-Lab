@extends('front-end-view.master')

@section('content')

    <div class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->

                                        @foreach($blogs as $blog)
                                        `


                                        <div class="single-post">
                                            <div class="post-meta"><span class="date">{{$blog->catagory->catagory_name}} </span> <span class="mx-1">&bullet;</span> <span>{{$blog->created_at}}</span></div>
                                            <h1 class="mb-5">{{$blog->blog_title}}</h1>
                                            <pre style="font-family: 'Open Sans'; font-size: 18px;" class=""> <p >{{$blog->description}}</p> </pre>

                                            <figure class="my-4 text-center">
                                                <img src="@php if (isset($blog->image)) {echo asset($blog->image);} else {echo asset('assets').'/img/dumy.jpg';} @endphp" alt="" style=" height: 400px; text-align: center; width: 600px;">

                                            </figure>
                                         </div><!-- End Single Post Content -->










                                        <!-- ======= Comments ======= -->
                                        @foreach($comments as $comment)
                                            @if($comment->post_id == $blog->id)
                                        <div class="comments">
                                            <h5 class="comment-title py-4">
                                                <hr></h5>
                                            <div class="comment d-flex mb-4">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <img class="avatar-img" src="{{asset('front-end-assets')}}/assets/img/person-5.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                                    <div class="comment-meta d-flex align-items-baseline">
                                                        <h6 class="me-2">{{$comment->name}}</h6>
                                                        <span class="text-muted">{{$comment->updated_at->day}} d</span>
                                                    </div>
                                                    <div class="comment-body" >
                                                        {{$comment->message}} <br>

                                                        @if( Session::get('visitorName') )
                                                            <p  style="color: #0b5ed7;" class="fs-54  text-decoration-underline">reply</p>

{{--                                                        <form action="{{ route('visitor.reply',['id'=>$blog->id ,'vname' =>Session::get('visitorID')] ) }}" method="post">--}}
                                                        <form action="{{ route('visitor.reply',$blog->id) }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="slugs" value="{{$blog->slug}}">
                                                            <input type="hidden" name="pid" value="{{$blog->id}}">
                                                            <input type="hidden" name="visitorId" value="{{Session::get('visitorId')}}">
                                                            <input type="hidden" name="visitorName" value="{{Session::get('visitorName')}}">
                                                            <input type="hidden" name="visitorEmail" value="{{Session::get('visitorEmail')}}">
                                                            <textarea name="reply" class="form-control"></textarea>
                                                            <button type="submit" class="btn btn-success">post</button>
                                                        </form>
                                                        @else
                                                            <p  style="color: #0b5ed7;" class="fs-54  text-decoration-underline">reply</p>
                                                        @endif

                                                    </div>


                                                    <div class="comment-replies bg-light p-3 mt-3 rounded">

                                                        @foreach($replys as $rep)
{{--                                                            <h6 class="comment-replies-title mb-4 text-muted text-uppercase">{{$loop->iteration}} Replys</h6>--}}
                                                            <h6 class="comment-replies-title mb-4 text-muted text-uppercase">{{count($replys)}} Replys</h6>
                                                        <div class="reply d-flex mb-4">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar avatar-sm rounded-circle">
                                                                    <img class="avatar-img" src="{{asset('front-end-assets')}}/assets/img/person-4.jpg" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                                <div class="reply-meta d-flex align-items-baseline">
                                                                    <h6 class="mb-0 me-2">{{{$rep->visitorName}}} &nbsp; |</h6>
                                                                    <span class="text-muted">{{date('F j Y',strtotime($rep->created_at))}}</span>
                                                                </div>
                                                                <div class="reply-body">
                                                                    {{$rep->reply}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- End Comments -->
                            @endif
                                            @endforeach

                                        <!-- ======= Comments Form ======= -->
                                        <div class="row justify-content-center mt-5">

                                            <div class="col-lg-12">
                                                <h5 class="comment-title">Leave a Comment</h5>
                                                <div class="row">
                                                    <form action="{{route('public.comment')}}" method="post">
                                                        @csrf

                                                        <input type="hidden" name="post_id" value="{{$blog->id}}">
                                                        <div class="col-lg-6 mb-3 float-start ">
                                                            <label for="comment-name">Name</label>
                                                            <input type="text" class="form-control " name="name"  id="comment-name" placeholder="Enter your name">
                                                        </div>
                                                        <div class="col-lg-6 mb-3 float-start ">
                                                            <label for="comment-email " class="">Email</label>
                                                            <input type="email" class="form-control " id="comment-email" name="email" placeholder="Enter your email">
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label for="comment-message">Message</label>

                                                            <textarea class="form-control" name="message" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="submit" class="btn btn-primary" value="Post comment">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- End Comments Form -->
                                            <hr/>

                    @endforeach



                </div>
                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div> <!-- End Popular -->

                            <!-- Trending -->
                            <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div> <!-- End Trending -->

                            <!-- Latest -->
                            <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                            </div> <!-- End Latest -->

                        </div>
                    </div>

                    <div class="aside-block">
                        <h3 class="aside-title">Video</h3>
                        <div class="video-post">
                            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="{{asset('front-end-assets')}}/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Video -->

                    <div class="aside-block">
                        <h3 class="aside-title">Categories</h3>
                        <ul class="aside-links list-unstyled">
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                        </ul>
                    </div><!-- End Categories -->

                    <div class="aside-block">
                        <h3 class="aside-title">Tags</h3>
                        <ul class="aside-tags list-unstyled">
                            <li><a href="category.html">Business</a></li>
                            <li><a href="category.html">Culture</a></li>
                            <li><a href="category.html">Sport</a></li>
                            <li><a href="category.html">Food</a></li>
                            <li><a href="category.html">Politics</a></li>
                            <li><a href="category.html">Celebrity</a></li>
                            <li><a href="category.html">Startups</a></li>
                            <li><a href="category.html">Travel</a></li>
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
        </div>
    </div>

@endsection
