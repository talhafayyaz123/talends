@extends('front-end.master2')

@section('title')
Why Join Agency Plan
@stop
@section('description', " Why Join Agency Plan")

@section('content')


    <section class="plan-banner pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center pb-5">
                    <!-- <h2>Get projects from Dubai and Drive Revenue like Never <span>Before</span></h2> -->
                    <!-- <p>Dubai is known for it’s thriving economy, advanced Technology infrastructure & Luxury. Talends.com is first one of it’s kind premium agencies marketplace that connects world-class agencies to Dubai & UAE.</p> -->
                   {!! $why_agency_plan->banner_description ?? '' !!}
                    <a href="{{ route('register') }}" class="btn btn-theme px-4 rounded-pill">Register Your Agency</a>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            @if(isset($why_agency_plan->about_talends_image) )
            <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->about_talends_image)}}"
                    alt="" class="img-fluid w-100">
            @endif
        </div>
    </section>
    <section class="plan-theme-list-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="content-box">
                        <h3>Why Dubai & UAE is the most suitable place to expand your business</h3>
                        <p>Every month, more than 300k people search, compare & hire agencies like yours in Dubai</p>
                        <!-- {!! $why_agency_plan->features_text ?? '' !!} -->
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="theme_list_labels">
                        {!! $why_agency_plan->services_description ?? '' !!}

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="budget-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-box">
                        <!-- <h2>How Talends brings The best for every<span>agency</span></h2> -->
                        <!-- <p>Your all-in-one marketing and sales solution for your agency much affordable & Generate Leads that are 100 times better than many marketing tools</p> -->
                        {!! $why_agency_plan->features_text ?? '' !!}
                    </div>
                </div>
                <div class="col-md-6 text-md-right text-center">
                    <div class="img-box">
                        <img src="{{asset('uploads/home-pages/find-right-talends/Group 37323.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {!! $why_agency_plan->project_description ?? '' !!}

                </div>
                <div class="col-md-6">
                    <ul class="tal-features">
                        <li>
                            <div class="t-f">
                                <div class="ficon-wrap">
                                    @if(isset($why_agency_plan->talends_project_image) )
                                    <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->talends_project_image)}}" alt="" class="w-100">
                                    @endif
                                </div>
                                <div class="ftitle-wrap">
                                    <strong>Strengthen your online reputation</strong>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="t-f">
                                <div class="ficon-wrap">
                                    @if(isset($why_agency_plan->short_term_project_image) )
                                    <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->short_term_project_image)}}" alt="" class="w-100">
                                    @endif
                                </div>
                                <div class="ftitle-wrap">
                                    <strong>Strengthen your online reputation</strong>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="t-f">
                                <div class="ficon-wrap">
                                    @if(isset($why_agency_plan->recurring_engagements_image) )
                                    <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->recurring_engagements_image)}}" alt="" class="w-100">
                                    @endif
                                </div>
                                <div class="ftitle-wrap">
                                    <strong>Strengthen your online reputation</strong>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @if( isset($why_agency_plan->talends_project_image))
                    <img src="{{ asset('uploads/home-pages/about_talends/'.$why_agency_plan->talends_project_image)}}" class="w-100" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section> -->


    <section class="trustedby_sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    agencies trusted us increased their revenue’s
                </div>
                <div class="col-md-9">
                    <div class="trustedby_box">
                        @if(isset($why_agency_plan->long_term_work_image) )
                        <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->long_term_work_image)}}" alt="" class="w-100">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="flex-plans-sec">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-7">
                    <!--<div class="block-wrap">
                        <a href="{{ route('companyRegistraton') }}" class="theme_btn inverse_btn">join talends</a>
                        <p>Support 24/7 <span>+971 52 768 4867</span></p>
                    </div> -->
                    <div class="content-box">
                        {!! $why_agency_plan->work_description ?? '' !!}
                        <!-- <h3>Our Flexible & Affordable <span>plans</span></h3> -->
                        <!-- <h6>“You grow we Grow”</h6> -->
                        <!-- <ul class="my-5">
                            <div class="row p-0">
                                <div class="col-md-6">
                                    <li>Get a certified member badge</li>
                                    <li>Get qualified Leads & opportunities</li>
                                    <li>0% commission fee on signed deals</li>
                                    <li>Dedicated Support</li>
                                </div>
                                <div class="col-md-6">
                                    <li>Get a certified member badge</li>
                                    <li>Get qualified Leads & opportunities</li>
                                    <li>0% commission fee on signed deals</li>
                                    <li>Dedicated Support</li>
                                </div>
                            </div>                            
                        </ul> -->
                        <div class="mb-5">
                            <a href="{{ route('register') }}" class="rounded-pill px-4 btn mb-2">Talk to an Advisor</a>
                            <span class="ml-md-4 mb-2">Support 24/7 <a href="tel:+971 52 768 4867" class="phone-number ml-2">+971 52 768 4867</a></span>
                        </div>                        
                        
                    </div>

                </div>
                <div class="col-md-5">
                    <!-- <img src="{{asset('uploads/home-pages/why_agency_plan/plan-img.png')}}" class="img-fluid"/> -->
                    @if( isset($why_agency_plan->talends_work_image ))
                        <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->talends_work_image)}}"/>
                    @endif
                </div>
            </div>
    </section>
    <div class="talends-plan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-md-0">
                    <div class="plan-content">
                        <div class="table-responsive-lg">
                            <table class="table table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th class="col-desc">What You’ll Get PRICE($)</th>
                                        <th class="bg-light col-plan1 border-right border-success">
                                            <div class="plan-title">                                            
                                                <h4> <span><img src="{{asset('uploads/home-pages/why_agency_plan/plan-icon.png')}}" alt="Plan Icon" width="30" class="img-fluid mr-2"></span> Monthly Pass </h4>
                                            </div>
                                        </th>
                                        <th class="bg-light col-plan2">
                                            <div class="plan-title">                                            
                                                <h4><span><img src="{{asset('uploads/home-pages/why_agency_plan/plan-icon.png')}}" alt="Plan Icon" width="30" class="img-fluid mr-2"></span> Yearly Pass <button class="btn">Save $144</button></h4>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Number of Featured Services</td>
                                        <td class="text-center bg-light border-right border-success">2</td>
                                        <td class="text-center bg-light">5</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Number of Skills</td>
                                        <td class="text-center bg-light border-right border-success">10</td>
                                        <td class="text-center bg-light">15</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Package duration</td>
                                        <td class="text-center bg-light border-right border-success">Monthly</td>
                                        <td class="text-center bg-light">Yearly</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Certified Member Badge</td>
                                        <td class="text-center bg-light border-right border-success">Gold</td>
                                        <td class="text-center bg-light">Bronze</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Your own landing page with CMS</td>
                                        <td class="text-center bg-light border-right border-success"><i class="fa fa-check text-theme"></i></td>
                                        <td class="text-center bg-light"><i class="fa fa-check text-theme"></i></td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Dedicated Support</td>
                                        <td class="text-center bg-light border-right border-success"><i class="fa fa-check text-theme"></i></td>
                                        <td class="text-center bg-light"><i class="fa fa-check text-theme"></i></td>
                                    </tr>                               
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td class="bg-light border-right border-success">
                                            <div class="plan-actions">
                                                <div class="d-flex justify-content-between">
                                                    <p><b>$60</b>/Month</p>
                                                    <p class="small text-muted">Cancel anytime</p>
                                                </div>
                                                <a href="javascript:;" class="btn btn-block py-3">Choose</a>
                                            </div>
                                        </td>
                                        <td class="bg-light">
                                            <div class="plan-actions">
                                                <div class="d-flex justify-content-between">
                                                    <p><b>$60</b>/Month</p>
                                                    <p class="small text-muted">Cancel anytime</p>
                                                </div>
                                                <a href="javascript:;" class="btn btn-block py-3">Choose</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="col-md-7">
                <div class="accordion" id="accordionFaq">
                        <div class="card bg-transparent border-0">
                            <div class="card-header" id="headingOne">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the typical budgets of the projects? <i class="bi-plus float-right rotate-icon"></i>                                        
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFaq">
                                <div class="card-body">
                                There is a wide range of budgets depending on the project, the company, the expertise and the expected quality. The average is around $20K. The budget indicated on Sortlist is only an estimation of the client. We always help him define a fair budget if we see he has difficulties. But keep in mind that it is only a estimation and not a definitive budget. You are always free to negociate with the client
                                </div>
                            </div>
                        </div>
                        <div class="card bg-transparent border-0">
                            <div class="card-header" id="headingTwo">
                                <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">                                        
                                What kind of clients usually post a project? <i class="bi-plus float-right rotate-icon"></i>                                        
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaq">
                                <div class="card-body">
                                When Mid-size companies (~1-10M$ turnover, ~50-100 employees) are usually looking for creative boutiques that are able to handle a wide range of expertises to take care of their brand.
                                </div>
                            </div>
                        </div>
                        <div class="card bg-transparent border-0">
                            <div class="card-header" id="headingThree">
                                <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">                                        
                                How Talends is different than many other platform likeGoogle, LinkedIN & Social platform? <i class="bi-plus float-right rotate-icon"></i>                                        
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaq">
                                <div class="card-body">
                                The average cost of generating lead cost you $6-$15 which ultimately becomes an hefty amount like $3,000-$5,000 a month. based on the Global experts analytics, conversion rate is considered 2.4%. For a Small-Mid Size business spending such amounts with a big Doubt of generating leads is quite a challenge. where as Talends market it’s platform in a very targeted way including country, industries and organizations. this maximize the mature leads the chances with a very affordable plans,
                                </div>
                            </div>
                        </div>
                        <div class="card bg-transparent border-0">
                            <div class="card-header" id="headingFour">
                                <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">                                        
                                What kind of clients usually post a project? <i class="bi-plus float-right rotate-icon"></i>                                        
                                </h4>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaq">
                                <div class="card-body">
                                When Mid-size companies (~1-10M$ turnover, ~50-100 employees) are usually looking for creative boutiques that are able to handle a wide range of expertises to take care of their brand.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--<section class="tal-p-plans">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="plans-inner">
                        <div class="plans-wrap">
                            <div class="plan">
                                {!! $why_agency_plan->payment_description ?? '' !!}

                                <a class="plan-btn" href="{{url("company/registration",['plan'=>'monthly' ])}}">Choose</a>

                            </div>
                            <div class="plan">
                                {!! $why_agency_plan->support_description ?? '' !!}
                                <a class="plan-btn" href="{{url("company/registration",['plan'=>'yearly' ])}}">Choose</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="tal-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Frequently asked questions</h3>
                </div>
                <div class="col-md-8">
                    {!! $why_agency_plan->freelancer_benefits ?? '' !!}

                </div>
            </div>
        </div>
    </section> -->
    <div class="banner-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 theme_bg_dark text-center text-white custom-banner">
                    <!-- <h2 class="text-white">Your one-in-all platform to increase your Agency Sales in <span class="text-theme">Dubai & UAE</span></h2> -->
                    {!! $why_agency_plan->internees_benefits ?? '' !!}
                    <a href="#" class="btn btn-theme-white rounded-pill px-4">Register your Agecny</a>
                </div>
            </div>
        </div>
    </div>


@endsection