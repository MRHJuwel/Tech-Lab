<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="single-post.html"><img src="{{asset('front-end-assets')}}/assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="{{asset('front-end-assets')}}/assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Cameron Williamson</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-lg-8">
                        @php  $i=1;  @endphp
                        @foreach($blogs as $blog)
                            @if($i !=4 )
                        <div class="col-lg-8 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="{{route('blog.details',['slug' =>$blog->slug, 'id' =>$blog->id])}}"><img src="{{$blog->image}}" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{$blog->catagory->catagory_name}}</span> <span class="mx-1">&bullet;</span> <span>{{date('"F j, Y')}}</span></div>
                                <h2><a class="fs-3" href="{{route('blog.details',['slug' =>$blog->slug, 'id' =>$blog->id])}}">{{$blog->blog_title}}</a></h2>
                            </div>

                        </div>
                            @php  $i++;  @endphp
                        @endif
                        @endforeach
                    </div>

                    <!-- Trending Section -->
                    <div class="col-lg-4">

                        <div class="trending">
                            <h3>Trending</h3>
                            <ul class="trending-post">
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">1</span>
                                        <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                        <span class="author">Jane Cooper</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">2</span>
                                        <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                                        <span class="author">Wade Warren</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">3</span>
                                        <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
                                        <span class="author">Esther Howard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">4</span>
                                        <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                        <span class="author">Cameron Williamson</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">5</span>
                                        <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                        <span class="author">Jenny Wilson</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>

        </div> <!-- End .row -->
    </div>
</section> <!-- End Post Grid Section -->
