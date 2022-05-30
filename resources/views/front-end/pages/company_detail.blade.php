@extends('front-end.master2')

@push('stylesheets')
<style>
    #readMore {display: none;}
</style>

@endpush


@section('content')

<div id="pages-list">
    <section class="agency_banner"></section>
    <section class="agency_intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex mt-3 mt-md-n2  mb-4">
                        <img src=" {{ asset('talends/assets/img/company/banner_detail.jpg') }}" class="img-fluid" alt="Company Image"/>
                        <div class="ml-md-4 pt-4 px-3">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</p>
                            <p><span class="mr-3"><i class="bi-geo-alt-fill mr-2"></i> Lahore, Pakistan</span>
                            <span class="mr-3"><i class="bi-share-fill mr-2"></i> Share</span></p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="company-detail">
        <div class="container px-md-0">
            <div class="row">
                <div class="col-lg-10 col-md-8 border-right">
                    <div class="company-detail-content px-4">
                        <h3>Overview</h3>
                        <p>THE WAY WE DO IT</p>
                        <p>Our human-first approach to innovation, is proven and tested method. We always put people at the forefront of whatever we do, whether it’s a design, UI user interface /UX user experience or website architecture/ development. When it comes to the performance marketing, we use our thorough methods of audience signal research, collect data and reach to the right audience by data-driven campaigns.</p>
                        <p>Leveraging our human-centered approach as an organisation, we are firm believers of the human to human approach. We always educate our clients to no longer think of a website as just a presentation of your business, but consider it a platform that can actually add real value to your busine<span id="dots">...</span><span id="readMore">ss erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
                        </p>
                        <button class="btn btn-link text-success pl-0" onclick="readMoreFunction()" id="myBtn">Read more <i class="bi-caret-down-fill"></i></button> 
                        <h3>Expertise</h3>
                        <div class="accordion" id="accordionExpertise">
                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="headingOne">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Mobile Application Development <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExpertise">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                        lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">                                        
                                        Website Developement <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExpertise">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                        lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Skills</h3>
                        <div class="skill-tags">
                            <ul>
                                <li>UI/UX</li>
                                <li>Wordpress</li>
                                <li>Web Development</li>
                                <li>Landing Page</li>
                                <li>SEO</li>
                                <li>SEM / SMM</li>
                                <li>Wordpress</li>
                                <li>Design</li>
                                <li>JavaScript</li>
                                <li>UI/UX</li>
                                <li>Wordpress</li>
                                <li>Web Development</li>
                                <li>Landing Page</li>
                                <li>SEO</li>
                                <li>SEM / SMM</li>
                                <li>Wordpress</li>
                                <li>Design</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                        <h3>Latest Portfolio</h3>
                        <section class="featured_success_stories_sec p-0">
                            <div class="container px-md-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <h2>UI / UX</h2>
                                                <div class="carousel-item active">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="{{asset('/talends/assets/img/internee_bg.png')}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer? Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="{{asset('/talends/assets/img/find-agency-img.png')}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer? Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="{{asset('/talends/assets/img/internee_bg.png')}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer? Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="{{asset('/talends/assets/img/find-agency-img.png')}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer? Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 pr-md-0 mt-md-0 mt-4">
                    <div class="company-detail-stats">
                        <h5>Talends Activity</h5>
                        <p class="mb-0 mt-4">Hourly Rate</p>
                        <p><b>40$</b></p>
                        <p class="mb-0 mt-4">Total Jobs</p>
                        <p><b>5</b></p>
                        <p class="mb-0 mt-4">Joined Since</p>
                        <p><b>2021</b></p>
                    </div>
                    <hr/>
                    <div class="company-detail-stats">
                        <p class="mb-4 mt-5">Company Information</p>
                        <p class="mb-0 mt-4">Agency Talent Size</p>
                        <p><b>2-10</b></p>
                        <p class="mb-0 mt-4">Year Founded</p>
                        <p><b>2020</b></p>
                        <p class="mb-0 mt-4">Client Focus</p>
                        <p><b>Medium business Very small business Small business</b></p>
                        <p class="mb-0 mt-4">Language</p>
                        <p><b>Russian English</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stepper-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="stepper-container">
                        <h2>Hire this Agency</h2>
                        <p class="mb-5">Please fill the brief below to get in touch the agency with much better and faster response. Feel free to add as much detail as needed.</p>
                        <form id="agencyform">
                        <!-- progressbar -->
                            <ul id="progressbaragency">
                                <li class="active" id="account"><span>1</span></li>
                                <li id="personal"><span>2</span></li>
                                <li id="payment"><span>3</span></li>
                                <li id="confirm"><span>4</span></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="fs-title">Contact Details:</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="">Name</label>
                                            <div class="input-container">
                                                <input type="text" class="form-control" placeholder="Jhon Doe">
                                                <i class="bi-person"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="">Email</label>
                                            <div class="input-container">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                                <i class="bi-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="">Phone Number</label>
                                            <div class="input-container">
                                                <input type="text" class="form-control" placeholder="(971) 123 9890">
                                                <i class="bi-phone"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="">Company</label>
                                            <div class="input-container">
                                                <input type="text" class="form-control" placeholder="Company Name">
                                                <i class="bi-building"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button float-right" value="Next"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="fs-title mb-0">Our Services:</h3>
                                            <p class="mb-5">Please select which service you are interested in.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox1" checked/>
                                                <label for="myCheckbox1"><img src="{{ asset('talends/assets/img/icons/programming-icon2.png')}}" class="rounded-circle" width="40"/>Web Development</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox2" />
                                                <label for="myCheckbox2"><img src="{{ asset('talends/assets/img/icons/design-icon2.png')}}" class="rounded-circle" width="40"/>UI/UX</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox3" />
                                                <label for="myCheckbox3"><img src="{{ asset('talends/assets/img/icons/programming-icon2.png')}}" class="rounded-circle" width="40"/>Programming</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox4" />
                                                <label for="myCheckbox4"><img src="{{ asset('talends/assets/img/icons/writing-icon2.png')}}" class="rounded-circle" width="40"/>Content Writing</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox5" />
                                                <label for="myCheckbox5"><img src="{{ asset('talends/assets/img/icons/marketing-icon2.png')}}" class="rounded-circle" width="40"/>Marketing/SEO</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox6" />
                                                <label for="myCheckbox6"><img src="{{ asset('talends/assets/img/icons/graphic-icon.png')}}" class="rounded-circle" width="40"/>Graphics</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox7" />
                                                <label for="myCheckbox7"><img src="{{ asset('talends/assets/img/icons/video-icon2.png')}}" class="rounded-circle" width="40"/>Video Editing</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox8" />
                                                <label for="myCheckbox8"><img src="{{ asset('talends/assets/img/icons/call-icon.png')}}" class="rounded-circle" width="40"/>Call Center</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="image-checkboxes">
                                                <input type="checkbox" id="myCheckbox9" />
                                                <label for="myCheckbox9"><img src="{{ asset('talends/assets/img/icons/other-icon.png')}}" class="rounded-circle" width="40"/>Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="fs-title mb-0">What’s your project budget?</h3>
                                            <p class="mb-5">Please select the project budget range you have in mind.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="custom-control custom-radio radio-control">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadioInline1">AED5,000 - AED10,000</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="custom-control custom-radio radio-control">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">AED10,000 - AED20,000</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="custom-control custom-radio radio-control">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">AED20,000 - AED50,000</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="custom-control custom-radio radio-control">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline4">AED50,000+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                    <input type="button" name="next" class="next action-button" value="Next"/>
                                
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-8 mx-auto text-center">
                                            <img src="{{ asset('talends/assets/img/icons/success-icon.png')}}" class="img-fluid mb-4"/>
                                            <h3 class="fs-title text-center mb-3">Submit you request:</h3>
                                            <p>Please review all the information you previously typed in the past steps, and if all is okay, submit your message to receive a response as soon as possible.</p>
                                            <input type="submit" name="next" class="next action-button float-none" value="Submit"/>
                                        </div>
                                    </div>
                                </div>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <h3 class="theme_bg_dark text-center text-white container">Overview</h3> -->

    <!-- <section>
        <div class="container">
            <div class="row">
                @if (!empty($company_detail) && !empty($company_detail))


                {!! $company_detail->detail ?? '' !!}
                @endif
            </div>
        </div>
    </section> -->

    <!-- <h3 class="theme_bg_dark text-center text-white container">Expertise</h3> -->

    <!-- <section>
        <div class="container">
            <div class="row">
                @if (!empty($company_expertise) && !empty($company_expertise))


                @foreach ($company_expertise as $unserialize_key => $value)
                <div class="col-md-4 company-block">
                    <div class="job_list_box description_list">
                        <h3>{{ $value['title'] }}</h3>
                        <span>Total Developers</span>
                        <p class='active_members'>{{ $value['total_developers'] }} Active Members</p>

                        <span>Average Project Cost</span>
                        <p class="active_members">${{ $value['project_cost'] }}</p>

                        <ul class="job_list_category">
                            @foreach ($value['categories'] as $key => $category)

                            <li><a>{{ App\Category::find($category)->title }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endforeach
                @else

                <p>Not Found</p>
                @endif
            </div>
        </div>
    </section> -->

    <!-- <h3 class="theme_bg_dark text-center text-white container">Skills</h3> -->

    @php
    $user_category_skills = \App\UserCategorySkills::where('user_id', $id)->get();
    $skills_arr=array();
    foreach($user_category_skills as $skill)
    {
    $skills_arr[]=$skill['skill_id'];
    }

    if(!empty($skills_arr)){
    $skills = \App\Skill::whereIn('id', $skills_arr)->get();

    }
    @endphp

    <!-- <section>
        <div class="container">
            <div class="wt-tag wt-widgettag">
                @if(isset($skills))
                @foreach($skills as $skill)
                <a class="skill-item" href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>
                @endforeach
                @endif
            </div>
        </div>
    </section> -->
    <!-- 
    <h3 class="theme_bg_dark text-center text-white container">latest Portfolio</h3>

    <section>
        <div class="container">
            <div class="row">
                @if (!empty($company_detail) && !empty($company_expertise))


                {!! $company_detail->portfolio !!}
                @endif
            </div>
        </div>
    </section> -->
    <!-- <h3 class="theme_bg_dark text-center text-white container">Latest Portfolio</h3>

    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6 mb-3">
                    @if( isset($expertise->portfolio_image) )
                    <img src="{{ asset('uploads/company/'.$expertise->portfolio_image)}}" class="w-100" alt="">
                    @endif
                </div>
                <div class="col-md-6 pb-3 align-self-center">
                    <h5>Portfolio</h5>
                    {!! $expertise->portfolio_detail ?? '' !!}
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/join_community.png') }}" class="w-100" alt="">
                </div>
                <div class="col-md-6 pb-3 align-self-center">
                    <h2> Hiring The Best Is The Most important Job</h2>
                    <div class="community_icons_box">
                        <h3> <img src="{{ asset('talends/assets/img/icons/handshake.png') }}" alt="">Pre-vetted Agencies</h3>
                        <p>We’re a community with a mission to share hand-picked talented people with local organizations.</p>
                        <h3><img src="{{ asset('talends/assets/img/icons/database-check.png') }}" alt="">Easy Project Management</h3>
                        <p>Share your project, and we make sure our dedicated project manager picks best resources for your Project.</p>
                        <h3><img src="{{ asset('talends/assets/img/icons/chat-question.png') }}" alt="">Affordability With Quality </h3>
                        <p>Our dedicated support team always excited & ready to keep up with your projects.</p>
                    </div>
                    <div class="d-flex align-contents-center">
                    @guest<a href="{{ route('login') }}" class="theme_btn m-0 ">Hire The Agency Now</a>@endguest
                    @auth
                      
                    @if(Auth::user()->getRoleNames()[0]=='employer')
                     
                    <a href="{{url("hire/agency",['id'=>$id ])}}" class="theme_btn m-0 ">Hire The Agency Now</a>
                    @endif
                    
                    @endauth

                        <p class="d-flex align-items-center mb-0 ml-4">Contact<a href="tel:+923214757001" class="pl-2">+923214757001</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <h3 class="theme_bg_dark text-center text-white container">Latest Update</h3> -->



    <!--<div class="container">
            <div class="row row-eq-height">
                <div class="col-md-8 pb-3 align-self-center">
                    <div class="job_list_box">
                        <div class="job_list_head">
                            <ul>
                                <li>
                                    <h4><img src="assets/img/find-talents/user1.png" alt=""> Mohammed Ismail</h4>
                                </li>
                                <li>
                                    <h4>Posted 2 hours ago</h4>
                                </li>
                                <li>
                                    <h4><i class="fas fa-map-marker-alt">&nbsp;</i>Remote</h4>
                                </li>
                            </ul>
                            <ul class="job_price">
                                <li class="theme_color">$1000-1500</li>
                            </ul>
                        </div>
                        <h4>Wireframing websites, content strategy, Virtual Assistant</h4>
                        <p>I am a freelance wordpress developer. i have clients that have ideas they need brought to life on their websites but i dont have the time to wireframe and build their ideas for them...</p>
                        <ul class="job_list_category">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Copywriting</a></li>
                        </ul>
                    </div>   
                </div>

                <div class="col-md-4 mb-3">
                    <img src="{{ 'talends/assets/img/goverment/good_hands.png' }}" class="w-100" alt="">
                </div>
                
            </div>
        </div> -->


</div>
<script>
    function readMoreFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("readMore");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = `Read More <i class="bi-caret-down-fill"></i>`;
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = `Read Less <i class="bi-caret-up-fill"></i>`;
            moreText.style.display = "inline";
        }
    }
</script>
<script>
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbaragency li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbaragency li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
        .css("width",percent+"%")   
    }

    $(".submit").click(function(){
        return false;
    });
</script>
@endsection