@extends('front-end.master2')

@section('title')
{{ $page['title'] }}
@stop
@section('description', "$meta_desc")

@section('content')

<div id="pages-list">


    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">

                    {!!  $find_right_talends->banner_description  ?? '' !!}

                           <a href="{{ route('register') }}" class="theme_btn inverse_btn">Get Started</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        @if(isset( $find_right_talends->about_talends_image) )
            <img src="{{asset('uploads/home-pages/find-right-talends/'.$find_right_talends->about_talends_image)}}" class="w-100" alt="">
            @endif

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="theme_list_labels">
                    {!!  $find_right_talends->services_description  ?? '' !!}

                    </ul>
                </div>
                <div class="col-md-6">

                {!!  $find_right_talends->features_text  ?? '' !!}
                </div>
            </div>
        </div>
    </section>
    <section>
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
    </section>
    <section>
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
    </section>

    <section>
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
    </section>
    <section class="theme_bg_dark">
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
    </section>
    <section>
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
    </section>


</div>
@endsection