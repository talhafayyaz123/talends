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
        

    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                    <h2 class="">Top Rated <br><span class="theme_color"> Talented People’s Web </span></h2>
                    <p class="w-50 mx-auto">We nurture merit-based system that makes sure every project is delivered on the time with quality</p>
                    <a href="#" class="theme_btn inverse_btn">Get Started</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <img src="{{ asset('talends/assets/img/why-talends/why.png')}}" class="w-100" alt="">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
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
                <div class="col-md-6">
                    <h2>A whole community <span class="theme_color"> of local talent at your fingertips</span></h2>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>The best <br><span class="theme_color"> for every budget</span></h2>
                    <p>Find high-quality services at every price point. No hourly rates, just project-based pricing</p>
                    <a href="#" class="theme_btn inverse_btn">See other projects</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/why-talends/budget.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/why-talends/quality.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <h2><span class="theme_color">Quality work  <br></span>done quickly</h2>
                    <p>Find the right freelancer to begin working on your project within minutes</p>
                    <a href="#" class="theme_btn inverse_btn">Apply to Join</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Protected payments,<br><span class="theme_color">  every time</span></h2>
                    <p>Always know what you'll pay upfront. Your payment isn't released until you approve the work</p>
                    <a href="#" class="theme_btn inverse_btn">Find a freelancer</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/why-talends/Scene.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/why-talends/support.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <h2>24/7 <br><span class="theme_color"> support</span></h2>
                    <p>Questions? Our round-the-clock support team is available to help anytime, anywhere.</p>
                    <a href="#" class="theme_btn inverse_btn">join talends</a>
                </div>
            </div>
        </div>
    </section>
    <section class="theme_bg_dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pb-4">
                    <h2 class="text-white"> Telends <br> <span class="theme_color">for every one</span> </h2>
                    <p class="text-white opcty_5">Telends is one of its kind, where we share equal opportunities to every talented individual & every organization that quick resource that fits into their needs</p>
                </div>
                <div class="col-md-8">
                    <div class="talend_categorylist_box">
                        <h4>Freelancers</h4>
                        <div class="services_list_box_row">
                            <div class="services_list_box">🙌🏻 Local opportunities</div>
                            <div class="services_list_box">🔐 Secured on-time payments</div>
                            <div class="services_list_box">💚 Focus on the work you love</div>
                            <div class="services_list_box">💪 Offer work-life balance</div>
                            <div class="services_list_box">👥 Get connected with people from same crafts</div>
                            <div class="services_list_box">📈 Increase your passion/craft exposure</div>
                            <div class="services_list_box">🗓 Don’t follow conventional 9-to-5 office work</div>
                            <div class="services_list_box">❇️ Broaden your skill set</div>
                            <div class="services_list_box">💼 Produce brilliant quality of work</div>
                        </div>
                    </div>
                    <div class="talend_categorylist_box">
                        <h4>Internees’s</h4>
                        <div class="services_list_box_row">
                            <div class="services_list_box">🎓 Sharpen your skills</div>
                            <div class="services_list_box">📕Opportunity to implement, what you study</div>
                            <div class="services_list_box">👨‍ Learn from experts</div>
                            <div class="services_list_box">🏫 Be ready once you’re out of university</div>
                            <div class="services_list_box">💵 Get paid & support your fream</div>
                            <div class="services_list_box">🙌🏻 Get full-time opportunities oncefinish studies</div>
                        </div>
                    </div>
                    <div class="talend_categorylist_box">
                        <h4>Companies/Agencies</h4>
                        <div class="services_list_box_row">
                            <div class="services_list_box">👥Access talent anywhere pool of thousands of Local talents</div>
                            <div class="services_list_box">⏳ Save hiring problems & costs</div>
                            <div class="services_list_box">👩🏽 Hire talent on demand</div>
                            <div class="services_list_box">📑 Smooth Project delivery system emplaced</div>
                            <div class="services_list_box">❇️ Broaden your skill set</div>
                            <div class="services_list_box">💼 Produce brilliant quality of work</div>
                        </div>
                    </div>
                    <div class="talend_categorylist_box">
                        <h4>Goverment</h4>
                        <div class="services_list_box_row">
                            <div class="services_list_box">👨 Dedicated project manager</div>
                            <div class="services_list_box">💵 Pricings</div>
                            <div class="services_list_box">🔒 Ensure secure deliverability</div>
                            <div class="services_list_box">📚 Local resources</div>
                            <div class="services_list_box">📊 Ensure best suitable resource for any job assigned</div>
                            <div class="services_list_box">⏱ Deliverables quality</div>
                            <div class="services_list_box">💻 Data Secutrity</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2>Hire for any scope of work</h2>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('talends/assets/img/why-talends/short-term.png')}}" class="pb-4" alt="">
                    <h4 class="mb-2">Short-term projects</h4>
                    <p>Find go-to talent who get your needs</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('talends/assets/img/why-talends/recurring.png')}}" class="pb-4" alt="">
                    <h4 class="mb-2">Recurring engagements</h4>
                    <p>Build trusted relationships with skilled professionals</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('talends/assets/img/why-talends/long-term.png')}}" class="pb-4" alt="">
                    <h4 class="mb-2">Long-term work</h4>
                    <p>Expand your organization’s capabilitie</p>
                </div>
            </div>
        </div>
    </section>
           
         
    </div>
@endsection