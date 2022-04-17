@extends('front-end.master2')

@push('stylesheets')
<style>
    .company_description {
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        line-height: 20px;
        color: #000000;
        opacity: 0.7;
    }


    .theme_bg_color {
        background: url("https://talends.talha-fayyaz.com/talends/assets/img/company/banner.jpg") no-repeat;
        background-size: cover;
    }

    .team-members {
        display: flex;
        justify-content: space-evenly;
    }

    .team-members>li>img {
        width: 73px;
        height: 73px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        display: block;
    }

    #banners .internee_sec:last-child {
        padding: 0;
    }

    #banners .internee_sec:last-child .tlb__img {
        width: 200px;
        height: 200px;
        -moz-transform: translateY(-30%);
        -webkit-transform: translateY(-30%);
        -o-transform: translateY(-30%);
        -ms-transform: translateY(-30%);
        transform: translateY(-30%);
    }


    #banners .internee_sec:last-child .company_description {
        margin-top: -3em;
    }

    .company-block .tlb__content {
        background: #f8faf7;
        border-radius: 16px;
        padding: 0;
        margin-bottom: 0;
    }

    .company-block ul.job_list_category li a {
        display: block;
        margin: 0 10px 5px 0;

    }



    .company-block ul.job_list_category li a {
        padding: 8px 10px !important;
    }

    .company-block.job_list_box {
        padding: 0px 30px !important;
    }

    .description_list {
        display: block !important;
        padding: 5px 30px !important;

    }

    .company-block .active_members {
        color: #349F1A;
    }

    .internee_sec .profile_sec>div {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        overflow: hidden;
    }

    #banners .internee_sec:last-child .company_description {
        margin: 0 0 2em 1em;
    }

    .skill-item {
        padding: 8px 24px !important;
        text-align: center;
        border-radius: 20px;
        text-decoration: none;
        border: 1px solid #c2c2c2;
        margin: 0 10px 5px 0;
        font-size: 16px;
        line-height: 28px;
        background-color: transparent;
        display: inline-block !important;
        overflow: hidden !important;
        color: #6a6a6a;
    }

    .h_rate {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        margin: 0 0 2em 1em;
    }

    .h_rate>li>span {
        padding: 8px 24px !important;
        text-align: center;
        border-radius: 20px;
        border: 1px solid #c2c2c2;
        margin: 0 10px 5px 0;
        font-size: 16px;
        line-height: 28px;
        background-color: transparent;
        overflow: hidden !important;
        color: #6a6a6a;

    }
</style>

@endpush


@section('content')

<div id="pages-list">
    <div id='banners'>
        <section class="internee_sec theme_bg_color" style="height: 282px;">
            <div class="container">
                <div class="row row-eq-height" style="display: none;">
                    <div class="col-md-12 pb-3 align-self-center">
                        <h2 class="text-white">Trusted companies <br><span class="theme_color"> best suits your Needs</span></h2>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
        </section>

        <section class="internee_sec">
            <div class="container">
                <div class="row row-eq-height profile_sec">
                    <div class="col-md-12 pb-3 align-self-center ">
                        <div class="tlb__img"><img src=" {{ asset('talends/assets/img/company/banner_detail.jpg') }}" alt=""></div>
                        <div class="tlb_desc">
                            <p class="opcty_5 company_description">Bramerz is a leading digital agency, and the perfect partner for any brand, with a full set of digital and creative services.</p>
                            <ul class="h_rate">
                                <li><span>Company Hourly Rate: ${{ $profile->hourly_rate ?? 0}}</span></li>
                                <li><span>Minimum Project Size: ${{ $profile->no_of_employees ?? 0}}</span></li>
                            </ul>
                        </div>

                    </div>
                    <!--        <div class="col-md-5 p-5">
                        <p>Active Team Members</p>
                        <ul class="team-members">
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                        </ul>

                    </div> -->
                </div>
        </section>

    </div>



    <h3 class="theme_bg_dark text-center text-white container">Overview</h3>

    <section>
        <div class="container">
            <div class="row">
                @if (!empty($company_detail) && !empty($company_detail))


                {!! $company_detail->detail ?? '' !!}
                @endif
            </div>
        </div>
    </section>

    <h3 class="theme_bg_dark text-center text-white container">Expertise</h3>

    <section>
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
    </section>

    <h3 class="theme_bg_dark text-center text-white container">Skills</h3>

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

    <section>
        <div class="container">
            <div class="wt-tag wt-widgettag">
                @if(isset($skills))
                @foreach($skills as $skill)
                <a class="skill-item" href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>
                @endforeach
                @endif
            </div>
        </div>
    </section>
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
    <h3 class="theme_bg_dark text-center text-white container">Latest Portfolio</h3>

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
                    @auth<a href="{{url("hire/agency",['id'=>$id ])}}" class="theme_btn m-0 ">Hire The Agency Now</a>@endauth

                        <p class="d-flex align-items-center mb-0 ml-4">Contact<a href="tel:+923214757001" class="pl-2">+923214757001</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <h3 class="theme_bg_dark text-center text-white container">Latest Update</h3> -->



    <!--         <div class="container">
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
@endsection