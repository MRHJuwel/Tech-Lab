@extends('front-end-view.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Contact us</h1>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>Mirpur-1, Dhaka-1207</address>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item info-item-borders">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+8801689048113</a></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">mdjuwel016@gmail.com</a></p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="form mt-5 card">
                <form action="{{route('feedback')}}" method="post"  class="form-group">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 pt-2">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 pt-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group pt-2">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                        @error('subject')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group pt-2">
                        <textarea class="form-control" name="message" placeholder="Message" ></textarea>
                        @error('message')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="text-center pt-2 m-auto "><button class="btn btn-success pt-2 pb-2" type="submit">Send Message</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>
@endsection
