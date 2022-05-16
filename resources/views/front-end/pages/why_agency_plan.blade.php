@extends('front-end.master2')

@section('title')
Why Join Agency Plan
@stop
@section('description', " Why Join Agency Plan")

@section('content')

<div id="pages-list">


    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                    {!! $why_agency_plan->banner_description ?? '' !!}
                    <a href="{{ route('register') }}" class="theme_btn inverse_btn">Register Your Agency</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            @if(isset($why_agency_plan->about_talends_image) )
            <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->about_talends_image)}}" alt="" class="w-100">
            @endif
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="theme_list_labels">
                        {!! $why_agency_plan->services_description ?? '' !!}

                    </ul>
                </div>
                <div class="col-md-6">
                    {!! $why_agency_plan->features_text ?? '' !!}
                </div>
            </div>
        </div>
    </section>
    <section>
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
    </section>


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
            <div class="row theme_bg_dark">
                <div class="col-md-8">
                    {!! $why_agency_plan->work_description ?? '' !!}

                    <div class="block-wrap">
                        <a href="{{ route('companyRegistraton') }}" class="theme_btn inverse_btn">join talends</a>
                        <p>Support 24/7 <span>+971 52 768 4867</span></p>
                    </div>

                </div>
                <div class="col-md-4">
                    @if( isset($why_agency_plan->talends_work_image ))
                    <!--  -->
                    <img src="{{asset('uploads/home-pages/why_agency_plan/'.$why_agency_plan->talends_work_image)}}" @endif </div>
                </div>
            </div>
    </section>
<!-- 
    <section class="tal-p-plans">
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
    <section class="tal-faq">
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
    </section>
    <div class="banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 theme_bg_dark text-white custom-banner">
                    {!! $why_agency_plan->internees_benefits ?? '' !!}
                    <a href="#" class="theme_btn">Register your Agecny</a>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection