@extends('front-end.master2')

@section('title')
{{ $page['title'] }}
@stop
@section('description', "$meta_desc")

@section('content')

<div id="pages-list">


    <section class="talend-rec-sec">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                    <div class="content-box">
                         {!!  $find_right_talends->banner_description  ?? '' !!}
                        <a href="{{ route('register') }}" class="btn btn-theme rounded-pill px-4">Get Started</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
                 @if(isset( $find_right_talends->about_talends_image) )
                 <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->about_talends_image)}}" class="w-100" alt="">
                @endif

        </div>
    </section>
    <section class="theme-list-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="theme_list_labels pl-0">
                    {!!  $find_right_talends->services_description  ?? '' !!}
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                    {!!  $find_right_talends->features_text  ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="budget-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-box">
                    {!!  $find_right_talends->project_description  ?? '' !!}
                    </div>
                </div>
                <div class="col-md-6 text-md-right text-center">
                    <div class="img-box">
                    @if(isset( $find_right_talends->talends_project_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->talends_project_image)}}" class="img-fluid" alt="">
            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="budget-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-left text-center">
                @if(isset( $find_right_talends->talends_work_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->talends_work_image)}}" class="img-fluid" alt="">
            @endif
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                    {!!  $find_right_talends->work_description  ?? '' !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="col-md-7">
                <div class="accordion" id="accordionFaq">
                {!!  $find_right_talends->freelancer_benefits  ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                {!!  $find_right_talends->project_description  ?? '' !!}

                    <a href="{{ route('browseJobs') }}" class="theme_btn inverse_btn">See other projects</a>
                </div>
                <div class="col-md-6">
                @if(isset( $find_right_talends->talends_project_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->talends_project_image)}}" class="w-100" alt="">
            @endif
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                @if(isset( $find_right_talends->talends_work_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->talends_work_image)}}" class="w-100" alt="">
            @endif
                </div>
                <div class="col-md-6">
                {!!  $find_right_talends->work_description  ?? '' !!}


                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                @if(isset( $find_right_talends->talends_support_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->talends_support_image)}}" class="w-100" alt="">
            @endif
                </div>
                <div class="col-md-6">
                {!!  $find_right_talends->support_description  ?? '' !!}

                    <a href="{{ route('register') }}" class="theme_btn inverse_btn">Reach Us</a>
                </div>
            </div>
        </div>
    </section> -->
    <section class="testimonial-sec theme_bg_dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-content-box">
                        <p class="text-white opcty_5 text-center">Testimonials</p>
                        <h2>We hired <span>they loved</span></h2>
                        <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-content">
                                        <p>Talends has helped me by exposing me to fields of work and regions of the world that would be out of my reach otherwise. By developing my technological skills across a wide variety of industries, I've become better at what I do.</p>
                                        <div class="author-detail text-center">
                                            <img src="{{asset('uploads/home-pages/find-right-talends/user1.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="100">
                                            <h5>Dynamics Stream</h5>
                                            <h6>Dubai, United Arab Emirates</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <p>Talends has helped me by exposing me to fields of work and regions of the world that would be out of my reach otherwise. By developing my technological skills across a wide variety of industries, I've become better at what I do.</p>
                                        <div class="author-detail text-center">
                                            <img src="{{asset('uploads/home-pages/find-right-talends/user2.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="100">
                                            <h5>Dynamics Stream</h5>
                                            <h6>Dubai, United Arab Emirates</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <p>Talends has helped me by exposing me to fields of work and regions of the world that would be out of my reach otherwise. By developing my technological skills across a wide variety of industries, I've become better at what I do.</p>
                                        <div class="author-detail text-center">
                                            <img src="{{asset('uploads/home-pages/find-right-talends/user3.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="100">
                                            <h5>Dynamics Stream</h5>
                                            <h6>Dubai, United Arab Emirates</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <p>Talends has helped me by exposing me to fields of work and regions of the world that would be out of my reach otherwise. By developing my technological skills across a wide variety of industries, I've become better at what I do.</p>
                                        <div class="author-detail text-center">
                                            <img src="{{asset('uploads/home-pages/find-right-talends/user4.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="100">
                                            <h5>Dynamics Stream</h5>
                                            <h6>Dubai, United Arab Emirates</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <p>Talends has helped me by exposing me to fields of work and regions of the world that would be out of my reach otherwise. By developing my technological skills across a wide variety of industries, I've become better at what I do.</p>
                                        <div class="author-detail text-center">
                                            <img src="{{asset('uploads/home-pages/find-right-talends/user5.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="100">
                                            <h5>Dynamics Stream</h5>
                                            <h6>Dubai, United Arab Emirates</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#testimonial-slider" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#testimonial-slider" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="form-sec pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('uploads/home-pages/find-right-talends/user1.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="100">
                        <div class="ml-3">
                            <p class="text-theme mb-0">Head of Sales</p>
                            <h5 class="text-theme">Amna Ali </h5>
                            <p class="text-theme">amna@talends.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-box">
                        <h2>Talk to the Expert <span class="text-theme d-md-block">Get your project done or Hire a Team</span></h2>
                        <form id="contactForm" method="post" action="">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control form-control-lg" placeholder="First Name" id="inputName">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control form-control-lg" placeholder="Last Name" id="inputName">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email" id="inputName">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control form-control-lg" placeholder="Contact" id="inputName">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <textarea rows="6" class="form-control form-control-lg">Requirement Brief</textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-theme px-5 rounded-pill">Share with a Recruiter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="theme_bg_dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pb-4">
                <h3 class="text-white" style="white-space: nowrap;font-size: 21px;"> Frequently Asked Questions </h3>
                </div>
                <div class="col-md-8">
                    <div class="talend_categorylist_box">

                        <div class="services_list_box_row">
                        {!!  $find_right_talends->freelancer_benefits  ?? '' !!}

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2>{!!  $find_right_talends->internees_benefits  ?? '' !!}</h2>
                </div>
                <div class="col-md-4 text-center">

                @if(isset( $find_right_talends->short_term_project_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->short_term_project_image)}}" class="pb-4" alt="">
            @endif
                    <h4 class="mb-2">Short-term projects</h4>
                    <p>Find go-to talent who get your needs</p>
                </div>
                <div class="col-md-4 text-center">
                @if(isset( $find_right_talends->recurring_engagements_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->recurring_engagements_image)}}" class="pb-4" alt="">
            @endif

                    <h4 class="mb-2">Recurring engagements</h4>
                    <p>Build trusted relationships with skilled professionals</p>
                </div>
                <div class="col-md-4 text-center">

                @if(isset( $find_right_talends->long_term_work_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->long_term_work_image)}}" class="pb-4" alt="">
            @endif

                    <h4 class="mb-2">Long-term work</h4>
                    <p>Expand your organization’s capabilitie</p>
                </div>
                <a hre="#" class="theme_btn inverse_btn"> Talk to Talends Recruiters</a>

            </div>
        </div>
    </section> -->
</div>
@endsection