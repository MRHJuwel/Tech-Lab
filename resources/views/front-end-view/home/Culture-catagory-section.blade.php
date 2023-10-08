<section class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2 class="text-uppercase">Mobiles</h2>
            <div><a href="{{route('category')}}" class="more">See All Mobiles</a></div>
        </div>

        <div class="row">
            <div class="col-md-9">
                    @foreach($blogs as $blog)
                     @if($blog->catagory->catagory_name =='Mobile')
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

            <div class="col-md-3">
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>



            </div>
        </div>
    </div>
</section><!-- End Culture Category Section -->
