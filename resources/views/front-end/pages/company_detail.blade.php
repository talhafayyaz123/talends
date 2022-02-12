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
        background: url("https://media-exp1.licdn.com/dms/image/C4E1BAQHoisFySOjs4A/company-background_10000/0/1597767228875?e=1644775200&v=beta&t=9klFSdcVTeW_B_Iit_5600V7x6M49_LOBloJye3qmGE") no-repeat;
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

    .company-block ul.job_list_category li a{
     display: block;
     margin: 0 10px 5px 0;
    
    }



    .company-block ul.job_list_category li a{
        padding: 8px 10px !important;
    }

    .company-block.job_list_box{
     padding: 0px 30px !important;
    }
    .description_list{
        display: block !important;
        padding: 5px 30px !important;

    }

    .company-block .active_members{
        color: #349F1A;
    }


</style>

@endpush


@section('content')

<div id="pages-list">
    <div id='banners'>
        <section class="internee_sec theme_bg_color" style="height: 282px;">
            <div class="container">
                <div class="row row-eq-height" style="display: none;">
                    <div class="col-md-7 pb-3 align-self-center">
                        <h2 class="text-white">Trusted companies <br><span class="theme_color"> best suits your Needs</span></h2>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
        </section>

        <section class="internee_sec">
            <div class="container">
                <div class="row row-eq-height">
                    <div class="col-md-7 pb-3 align-self-center">
                        <div class="tlb__img"><img src=" {{ asset('talends/assets/img/company/banner_detail.jpg') }}" alt=""></div>

                        <p class="opcty_5 company_description">Bramerz is a leading digital agency, and the perfect partner for any brand, with a full set of digital and creative services.</p>
                    </div>
                    <div class="col-md-5 p-5">
                        <p>Active Team Members</p>
                        <ul class="team-members">
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                            <li><img src=" {{ asset('talends/assets/img/company/netsol.png') }}" alt=""></li>
                        </ul>

                    </div>
                </div>
        </section>

    </div>

    <h3 class="theme_bg_dark text-center text-white container">Expertise</h3>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 company-block">
                    <div class="job_list_box description_list">
                        <h3>Development Team</h3>
                        <span>Total Developers</span>
                        <p class='active_members'>20 Active Members</p>
                        
                        <span>Average Project Cost</span>
                        <p class="active_members">$10,000</p>
                        
                        <ul class="job_list_category">
                            <li><a>Web Design</a></li>
                            <li><a >Logo Design</a></li>
                            <li><a >SEO</a></li>
                            <li><a >Copywriting</a></li>
                        </ul>


                    </div>
                </div>

                <div class="col-md-4 company-block">
                    <div class="job_list_box description_list">
                        <h3>Development Team</h3>
                        <span>Total Developers</span>
                        <p class='active_members'>20 Active Members</p>
                        
                        <span>Average Project Cost</span>
                        <p class="active_members">$10,000</p>
                        
                        <ul class="job_list_category">
                            <li><a>Web Design</a></li>
                            <li><a >Logo Design</a></li>
                            <li><a >SEO</a></li>
                            <li><a >Copywriting</a></li>
                        </ul>


                    </div>
                </div>


                <div class="col-md-4 company-block">
                    <div class="job_list_box description_list">
                        <h3>Development Team</h3>
                        <span>Total Developers</span>
                        <p class='active_members'>20 Active Members</p>
                        
                        <span>Average Project Cost</span>
                        <p class="active_members">$10,000</p>
                        
                        <ul class="job_list_category">
                            <li><a>Web Design</a></li>
                            <li><a >Logo Design</a></li>
                            <li><a >SEO</a></li>
                            <li><a >Copywriting</a></li>
                        </ul>


                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6 mb-3">
                    <img src="{{ 'talends/assets/img/goverment/good_hands.png' }}" class="w-100" alt="">
                </div>
                <div class="col-md-6 pb-3 align-self-center">
                    <h5>Portfolio</h5>
                    <h2>PROJECTS WON & Delivered</h2>
                    <h4>A Project of Landing page has been delivered succesfully</h4>
                   <p>Based on our many years in UAE & GCC market, we do understand the real obstacle of Government Projects, especially when it comes to choosing the right Resource or agency</p>
                </div>
            </div>
        </div>
    </section>

    <h3 class="theme_bg_dark text-center text-white container">Latest Update</h3>


   
        <div class="container">
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
        </div>
    

</div>
@endsection