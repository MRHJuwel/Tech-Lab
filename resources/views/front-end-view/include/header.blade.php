<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
       <img src="{{asset('admin-assets')}}/assets/images/techlab.png" alt="">
{{--            <h1>ZenBlog</h1>--}}
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('single-post')}}">Blog</a></li>


                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('category')}}">Catagory</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>

                @if(Session::get('visitorId'))
                    <li><a href="{{route('visitor.sing.up')}}" class=" text-center" style="padding: 10px;text-decoration: underline;">{{  Session::get('visitorName')}}</a></li>
                    <li><a href="{{route('visitor.logout')}}" class=" text-center" style="padding: 10px;color: orangered;">Log out</a></li>
                    <li><a href="{{route('profile')}}" class="text-center" style="padding: 10px;">My Profile</a></li>
                @else
                    <li class="nav-item"><a href="{{route('visitor.sing.up')}}" class=" text-center" style="padding: 10px; color: #0b5ed7">Sing Up</a></li>
                    <li class="nav-item"><a href="{{route('visitor.sing.in')}}" class=" text-center" style="padding: 10px;color: #0b5ed7">Sing In</a></li>

                @endif

            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative text-center">


            <ul class="nav navbar">

                <li class="nav-item"><a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                    <i class="bi bi-list mobile-nav-toggle"></i>

                    <!-- ======= Search Form ======= -->
                    <div class="search-form-wrap js-search-form-wrap">
                        <form action="#" class="search-form">
                            <span class="icon bi-search"></span>
                            <input type="text" placeholder="Search" class="form-control">
                            <button class="btn js-search-close"><span class="bi-x"></span></button>
                        </form>
                    </div><!-- End Search Form --></li>


            </ul>

        </div>

    </div>

</header><!-- End Header -->
