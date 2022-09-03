@extends('front-end.master2')

@section('title')
{{$meta_title }}
@stop
@section('description', $meta_desc)
@section('keywords', $meta_keywords)

@section('content')


    <section class="plan-banner pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center pb-5">
                     {!! $why_agency_plan->banner_description ?? '' !!}
                    <a href="{{ route('companyRegistraton') }}" class="btn btn-theme px-4 rounded-pill">Register Your Agency</a>
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
                         {!! $why_agency_plan->features_text ?? '' !!}
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
                        {!! $why_agency_plan->project_description ?? '' !!}
                    </div>
                </div>
                <div class="col-md-4 ml-auto">
                    <div class="text-box">
                        <h5>Strengthen Your Online Reputation</h5>
                    </div>
                    <div class="text-box">
                        <h5>Boost your online visibility</h5>
                    </div>
                    <div class="text-box">
                        <h5>Leads generation on auto pilot</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trustedby_sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    Agencies trusted us increased their revenue’s
                </div>
                <div class="col-md-7">
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
                    <div class="content-box">
                        {!! $why_agency_plan->work_description ?? '' !!}
                        <div class="mt-5 mb-3">
                            <a href="{{ route('FindRightTalends') }}" class="rounded-pill px-4 btn mb-2">Talk to an Advisor</a>
                            <span class="ml-md-4 mb-2">Support 24/7 <a href="tel:+971 52 768 4867" class="phone-number ml-2">+971 52 768 4867</a></span>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-5 text-md-right text-center">
                    @if( isset($why_agency_plan->talends_work_image ))
                        <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->talends_work_image)}}" >
                    @endif 
                </div>
            </div>
        </div>
    </section>
    <div class="talends-plan">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto px-md-0">
                    <div class="plan-content">
                        <div class="table-responsive-lg">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="col-desc">What You’ll Get PRICE($)</th>
                                        <th class="col-plan1">
                                            <div class="plan-title">                                            
                                                <h5><b>AED {{ $package[0]->cost ?? '0' }}</b> Monthly </h5>
                                            </div>
                                        </th>
                                        <th class="col-plan2">
                                            <div class="plan-title d-flex align-items-center justify-content-center">                                            
                                                <h5><b>AED {{ $package[1]->cost ?? '0' }}</b> Yearly</h5>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Number of Featured Services</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">5</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Number of Skills</td>
                                        <td class="text-center">10</td>
                                        <td class="text-center  ">15</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Package duration</td>
                                        <td class="text-center">Monthly</td>
                                        <td class="text-center">Yearly</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Certified Member Badge</td>
                                        <td class="text-center">Gold</td>
                                        <td class="text-center  ">Bronze</td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Your own landing page with CMS</td>
                                        <td class="text-center"><i class="fa fa-check text-theme"></i></td>
                                        <td class="text-center  "><i class="fa fa-check text-theme"></i></td>
                                    </tr>
                                    <tr>
                                        <td><i class="bi-check-circle-fill mr-2"></i> Dedicated Support</td>
                                        <td class="text-center"><i class="fa fa-check text-theme"></i></td>
                                        <td class="text-center  "><i class="fa fa-check text-theme"></i></td>
                                    </tr>                               
                                </tbody>
                                
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
   
    <div class="banner-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 theme_bg_dark text-center text-white custom-banner">
                    {!! $why_agency_plan->internees_benefits ?? '' !!}
                    <a href="{{ route('companyRegistraton') }}" class="btn btn-theme-white rounded-pill px-4 mt-4">Register your Agency</a>
                </div>
            </div>
        </div>
    </div>


@endsection