@extends('front-end.master2')

@section('title')
        @if ($home == false)
            {{ $page['title'] }}
        @else 
            {{ config('app.name') }} 
        @endif
    @stop
@section('description', "$meta_desc")

@section('content')
   
    <div id="pages-list">
        

    <section class="home-banner p-0">
        <div id="theme_slider" class="theme_slider carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#theme_slider" data-slide-to="0" class="active"></li>
                <li data-target="#theme_slider" data-slide-to="1"></li>
                <li data-target="#theme_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row row-eq-height">
                                <div class="col-md-6 align-self-center">
                                    <div class="content_box_wrapper">
                                        <div class="content_box">
                                            <h1>Hire Incredible <br>Talent, <span class="theme_color">Locally</span>
                                            </h1>
                                            <h4>Middle East’s Premium Marketplace Provides <br> Hand-Picked Local Talents To Local Organizations</h4>
                                            <a href="#" class="theme_btn inverse_btn">Find a
                                                Job</a>
                                            <a href="#" class="theme_btn">Submit a Project</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="content_box_wrapper">
                                        <div class="content_box">
                                            <img src="{{ asset('talends/assets/img/banner.png')}}" class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trustedby_sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="trustedby_box">
                        <p>Trusted by:</p>
                        <img src="{{ asset('talends/assets/img/trustedby.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-3">
                    <h5>FOR CLIENTS</h5>
                    <h2>Find a Talend, <span class="theme_color">Locally!</span></h2>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                    <img src="{{ asset('talends/assets/img/hire.png')}}" alt="">
                        <h3>Post your job & Hire a Local Talent</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/browse.png')}}" alt="">
                        <h3>Browse a Job/BUY A PROJECT </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/find.png')}}" alt="">
                        <h3>Let us help you to find “The Right Talent”</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="internee_sec theme_bg_dark">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-7 pb-3 align-self-center">
                    <h5 class="text-white opcty_5">for internees</h5>
                    <h2 class="text-white">Find Paid Internships <br><span class="theme_color">& Advance Your
                            Career</span></h2>
                    <p class="text-white opcty_5">At Talends, we support our young generation to play their role in a society. We create an eco-system for students to land their Dream Jobs.</p>
                    <a href="#" class="theme_btn inverse_btn">I’m an Intern</a>
                    <a href="#" class="theme_btn ml-3">I’m Hiring an Intern</a>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('talends/assets/img/internee_bg.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/join_community.png')}}" class="w-100" alt="">
                </div>
                <div class="col-md-6 pb-3 align-self-center">
                    <h5>for internees</h5>
                    <h2> We’re Surprisingly <span class="theme_color">Amazing</span></h2>
                    <div class="community_icons_box">
                        <h3> <img src="{{ asset('talends/assets/img/icons/handshake.png')}}" alt=""> Hand Picked Local Resources</h3>
                        <p>We’re a community with a mission to share hand-picked talented people with local organizations.</p>
                        <h3><img src="{{ asset('talends/assets/img/icons/database-check.png')}}" alt="">Project Management</h3>
                        <p>Share your project, and we make sure our dedicated project manager picks best resources for your Project.</p>
                        <h3><img src="{{ asset('talends/assets/img/icons/chat-question.png')}}" alt="">Live Chat Supprt 24/7 Available</h3>
                        <p>Our dedicated support team always excited & ready to keep up with your projects.</p>
                    </div>
                    <div class="d-flex align-contents-center">
                        <a href="" class="theme_btn m-0">Join the community</a>
                        <p class="d-flex align-items-center mb-0 ml-4">Support 24/7<a href="tel:052-768-4867" class="pl-2">052-768-4867</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section>
        <div class="container py-30">
            <div class="row row-eq-height">
                <div class="col-12">
                    <h2>Build Amazing <span class="theme_color">Teams, <br> On Demand</span></h2>
                    <p>Quickly assemble the teams you need, exactly when you need them.</p>
                </div>
                <div class="col-md-7">
                    <div class="row row-eq-height pt-5">
                        <div class="col-md-6">
                            
                            <h4>Hire Quickly</h4>
                            <p>Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements from hourly to full-time.</p>
                        </div>
                        <div class="col-md-6">
                            
                            <h4>The Top 3%</h4>
                            <p>Every applicant to the Toptal network is rigorously tested and vetted. Our highly selective process leads to a 98% trial-to-hire success rate.</p>
                        </div>
                    </div>
                    <div class="row row-eq-height pt-5">
                        <div class="col-md-6">
                            
                            <h4>Leading the Future of Work</h4>
                            <p>Our network is ready for tomorrow's business challenges by embracing advanced and specialized skills including blockchain and AI.</p>
                        </div>
                        <div class="col-md-6">
                            
                            <h4>A Level Above</h4>
                            <p>Every single freelancer in our global network embodies the highest levels of integrity, professionalism, and communication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 align-self-end">
                    <div class="teams_stack">
                        <div class="talent_list_box talent_box_sm">
                            <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user6.png')}}" alt=""></div>
                            <div class="tlb__content">
                                <h3>Mohammed Ismail</h3>
                                <p>User Interface Designer</p>
                                <div class="tlb__reviews">
                                    <div class="bh-stars" data-bh-rating="3">
                                        <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    </div>
                                    <div class="tlb__reviews_score">
                                        <ul>
                                            <li>5.0/5.0</li>
                                            <li>12 Reviews</li>
                                        </ul>
                                    </div>
                                </div>
                                <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="talent_list_box talent_box_sm wow ">
                            <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user5.png')}}" alt=""></div>
                            <div class="tlb__content">
                                <h3>Mohammed Ismail</h3>
                                <p>User Interface Designer</p>
                                <div class="tlb__reviews">
                                    <div class="bh-stars" data-bh-rating="3">
                                        <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    </div>
                                    <div class="tlb__reviews_score">
                                        <ul>
                                            <li>5.0/5.0</li>
                                            <li>12 Reviews</li>
                                        </ul>
                                    </div>
                                </div>
                                <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="talent_list_box talent_box_sm">
                            <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user3.png')}}" alt=""></div>
                            <div class="tlb__content">
                                <h3>Mohammed Ismail</h3>
                                <p>User Interface Designer</p>
                                <div class="tlb__reviews">
                                    <div class="bh-stars" data-bh-rating="3">
                                        <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                        <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    </div>
                                    <div class="tlb__reviews_score">
                                        <ul>
                                            <li>5.0/5.0</li>
                                            <li>12 Reviews</li>
                                        </ul>
                                    </div>
                                </div>
                                <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 pb-3">
                    <h2>Meet Talent in our Network</h2>
                    <ul class="nav nav-tabs products_tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#teamTabs_developers">Developers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#teamTabs_designers">Designers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#teamTabs_finance">Finance Experts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#teamTabs_project">Project Managers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#teamTabs_product">Product Managers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 pt-3">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="teamTabs_developers" class="tab-pane active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user6.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user1.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="teamTabs_designers" class="tab-pane">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user2.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user3.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="teamTabs_finance" class="tab-pane">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user4.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user6.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="teamTabs_project" class="tab-pane">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user5.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user6.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="teamTabs_product" class="tab-pane">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user1.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img"><img src="{{ asset('talends/assets/img/find-talents/user6.png')}}" alt=""></div>
                                        <div class="tlb__content">
                                            <h3>Mohammed Ismail</h3>
                                            <p>User Interface Designer</p>
                                            <div class="tlb__reviews">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        <li>12 Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <h3>Why Organizations <br>Choose Talends</h3>
                    <p>Discover the many ways in which our clients have embraced the benefits of the Talends network.</p>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/browse.png')}}" alt="">
                        <h3>Browse a Job/BUY A PROJECT </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/find.png')}}" alt="">
                        <h3>Let us help you to find “The Right Talent”</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/browse.png')}}" alt="">
                        <h3>Browse a Job/BUY A PROJECT </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/find.png')}}" alt="">
                        <h3>Let us help you to find “The Right Talent”</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        <img src="{{ asset('talends/assets/img/find.png')}}" alt="">
                        <h3>Let us help you to find “The Right Talent”</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  

      
             
            
         
    </div>
@endsection