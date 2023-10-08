<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="display-4">Our Team</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                    </div>
                </div>
            </div>
            @foreach($teams as $team)
            <div class="col-lg-4 text-center mb-5">
                <a href="{{route('show.team.details',['slug'=> $team->slug, 'id' =>$team->id])}}"><img src="{{asset($team->image)}}" alt="" class="img-fluid rounded-circle w-50 mb-4"></a>
                <a href="{{route('show.team.details',['slug'=> $team->slug, 'id' =>$team->id])}}"> <h4>{{$team->name}}</h4></a>
                <span class="d-block mb-3 text-uppercase">{{$team->postCatagory->catagory_name}}</span>
                <p>
                     {{$team->about}}
                </p>
            </div>
            @endforeach

        </div>
    </div>
</section>
