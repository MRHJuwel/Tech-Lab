<div class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2 class="text-uppercase">Smart-Phone</h2>
            <div><a href="category.html" class="more">See All Smart-Phone</a></div>
        </div>

        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="single-post.html"><img src="{{asset('front-end-assets')}}/assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="{{asset('front-end-assets')}}/assets/img/person-7.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Esther Howard</h3>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-lg-8 border-start custom-border">
                        @foreach($blogs as $bl)
                            @if($bl->catagory->catagory_name =='SmartPhone')
                                <div class="d-lg-flex post-entry-2">
                                    <a href="{{route('blog.details',['slug'=>$bl->slug, 'id'=>$bl->id])}}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                        <img src="{{asset($bl->image)}}" alt="" class="img-fluid">
                                    </a>
                                    <div>
                                        <div class="post-meta"><span class="date">{{$bl->catagory->catagory_name}}</span> <span class="mx-1">&bullet;</span> <span>{{date('F j Y',strtotime($bl->created_at))}}</span></div>
                                        <h3><a href="{{route('blog.details',['slug'=>$bl->slug, 'id'=>$bl->id])}}">{{$bl->blog_title}}</a></h3>
                                        <p>{{substr($bl->description,0,200)}}</p>

                                    </div>
                                </div>



                            @endif
                        @endforeach
                    </div>

            </div>

        </div> <!-- End .row -->
    </div>
 </div>
<!-- End Lifestyle Category Section -->

<div class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2 class="text-uppercase">Monitor</h2>
            <div><a href="category.html" class="more">See All Monitor</a></div>
        </div>

        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-lg-8 border-start custom-border">
                        @foreach($blogs as $blog)
                            @if($blog->catagory->catagory_name =='Monitor')
                                <div class="d-lg-flex post-entry-2">
                                    <a href="{{route('blog.details',['slug'=>$blog->slug, 'id'=>$blog->id])}}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                        <img src="{{asset($blog->image)}}" alt="" class="img-fluid">
                                    </a>
                                    <div>
                                        <div class="post-meta"><span class="date">{{$blog->catagory->catagory_name}}</span> <span class="mx-1">&bullet;</span> <span>{{date('F j Y',strtotime($blog->created_at))}}</span></div>
                                        <h3><a href="{{route('blog.details',['slug'=>$blog->slug, 'id'=>$blog->id])}}">{{$blog->blog_title}}</a></h3>
                                        <p>{{substr($blog->description,0,200)}}</p>

                                    </div>
                                </div>



                            @endif
                        @endforeach
                    </div>

                </div>

            </div> <!-- End .row -->
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="single-post.html"><img src="{{asset('front-end-assets')}}/assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="{{asset('front-end-assets')}}/assets/img/person-7.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Esther Howard</h3>
                        </div>
                    </div>
                </div>



            </div>


    </div>
</div><!-- End Lifestyle Category Section -->
