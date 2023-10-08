
<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        @foreach($sliders as $slider)
                        <div class="swiper-slide">
                            <a href="{{route('show.slider.details',['slug'=>$slider->slug , 'id' =>$slider->id])}}" class="img-bg d-flex align-items-end" style="background-image: url({{asset($slider->image)}});">
                                <div class="img-bg-inner">
                                    <h2 class="fw-light">{{$slider->slider_title}}</h2>
                                    <p>{{substr($slider->description,1,200)}} .... </p>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero Slider Section -->

