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
                    
                    {!! $government->banner_description ?? ''  !!}
                    
                </div>
                <div class="col-md-5 align-self-end">
                    @if( isset($government->government_image) )
                    <img src="{{ asset('uploads/home-pages/government/'.$government->government_image)}}" class="w-100" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6 mb-3">
                @if( isset($government->content_image) )
                    <img src="{{ asset('uploads/home-pages/government/'.$government->content_image)}}"  class="w-100" alt="">
                    @endif
                </div>
                <div class="col-md-6 pb-3 align-self-center">
                    <h5>GOVERNMENTS</h5>
                    {!!  $government->content_description  ?? '' !!}

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
                        {!!  $government->opportunity_providers ?? ''  !!}
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="problem_box">
                        <h3>Opportunity Seekers</h3>
                        <ul class="theme_list">
                        {!!  $government->opportunity_seekers ?? ''  !!}
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
                        {!!  $government->process  ?? '' !!}
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="theme_bg_dark">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6">
                {!!  $government->features_text ?? ''  !!}
                </div>
                <div class="col-md-6">
                    <ul class="theme_list_labels">
                    {!!  $government->services_description  ?? '' !!}
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
                    <a href="{{ route('register') }}" class="theme_btn inverse_btn">Join Talends</a>
                    <a href="#" class="theme_btn ml-3">ask Question</a>
                </div>
            </div>
        </div>
    </section>
           
         
    </div>
@endsection