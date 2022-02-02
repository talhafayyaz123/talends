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
        
    <section class="goverment_banner theme_bg_dark pb-0">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-7 pb-3 align-self-center">
                    <h2 class="text-white quotes_heading">“We must believe in people. Human beings — their ideas, innovations, dreams, and connections <br> — are the capital of the future.</h2>
                    <p class="text-white opcty_5">HH Sheikh Mohammed Bin Rashid Al Maktoum </p>
                    <p><small class="theme_color">A True Visionary Leader</small></p>
                </div>
                <div class="col-md-5 align-self-end">
                    <img src="{{ asset('talends/assets/img/goverment/banner.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('talends/assets/img/goverment/good_hands.png')}}" class="w-100" alt="">
                </div>
                <div class="col-md-6 pb-3 align-self-center">
                    <h5>GOVERNMENTS</h5>
                    <h2> You’re <br> in <span class="theme_color">Good Hands</span></h2>
                    <h4>Government projects and programs contribute to national growth at a great magnitude</h4>
                    <p>Based on our many years in UAE & GCC market, we do understand the real obstacle of Government Projects, especially when it comes to choosing the right Resource or agency</p>
                    <p>How Talends.com can participate in easing the process and deliverability of any project</p>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12">
                    <h2>Problem</h2>
                </div>
                <div class="col-md-6">
                    <div class="problem_box">
                        <h3>Opportunity Providers</h3>
                        <ul class="theme_list">
                            <li>Finding the right agency/people</li>
                            <li>Pricing</li>
                            <li>Quality of work</li>
                            <li>Expensive hirings</li>
                            <li>Local resource</li>
                            <li>Project management</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="problem_box">
                        <h3>Opportunity Seekers</h3>
                        <ul class="theme_list">
                            <li>Finding the opportunity</li>
                            <li>Under paid</li>
                            <li>Limited access to projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 pb-5">
                    <h2>Smooth Process for any Government Project is <span class="theme_color">very easy on Talends.com</span></h2>
                </div>
                <div class="col-md-12">
                    <div class="process_sec">
                        <ul>
                            <li>
                                <h4><span>1</span> Register with Talends.com</h4>
                            </li>
                            <li>
                                <h4> <span>2</span> Submit</h4>
                                <p>After Resource verification/ finalization, share a project with Talent/ Team Submit Your project by yourself or with help of Dedicated Project Manager</p>
                            </li>
                            <li>
                                <h4><span>3</span> Find Talent</h4>
                                <p>Find the Right Local Talent or Team for your Project</p>
                            </li>
                            <li>
                                <h4><span>4</span> Verify yourself</h4>
                                <p>Complete documentation of Each Talent will be Saved for any Data Security Reason</p>
                            </li>
                            <li>
                                <h4><span>5</span> Share a Project</h4>
                                <p>After Resource verification/ finalization, share a project with Talent/ Team</p>
                            </li>
                            <li>
                                <h4><span>6</span> Complete the Project</h4>
                            </li>
                            <li>
                                <h4><span>7</span> Reporting</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="theme_bg_dark">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6">
                    <h2 class="text-white"><span class="theme_color">Move fast&nbsp;</span> without Breaking things</h2>
                    <p class="text-white">Talends.com is ready to make sure every minute is being utilized to make it success with our own Local Resources</p>
                </div>
                <div class="col-md-6">
                    <ul class="theme_list_labels">
                        <li>
                            <h4>⚒ Better framework </h4>
                        </li>
                        <li>
                            <h4>📱 24/7 support</h4>
                        </li>
                        <li>
                            <h4>💻 Better customer service</h4>
                        </li>
                        <li>
                            <h4>📘 Better Project Management</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center">
                    <h2>Get Register <br> Today <span class="theme_color">for Better <br> Tomorrow</span></h2>
                    <a href="index.html" class="theme_btn inverse_btn">Join Talends</a>
                    <a href="index.html" class="theme_btn ml-3">ask Question</a>
                </div>
            </div>
        </div>
    </section>
           
         
    </div>
@endsection