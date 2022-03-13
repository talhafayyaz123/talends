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


    @php
    $banner_settings=App\Helper::getBannerSettings();
    @endphp

    <section class="home-banner p-0">
        <div id="theme_slider" class="theme_slider carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#theme_slider" data-slide-to="0" class="active"></li>
                <li data-target="#theme_slider" data-slide-to="1"></li>
                <li data-target="#theme_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row row-eq-height">
                                <div class="col-md-6 align-self-center">
                                    <div class="content_box_wrapper">
                                        <div class="content_box">
                                            {!! $banner_settings->banner_description ?? '' !!}
                                            <a href="{{ route('browseJobs') }}" class="theme_btn inverse_btn">Find a
                                                Job</a>
                                            <a href="#" class="theme_btn">Submit a Project</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="content_box_wrapper">
                                        <div class="content_box">
                                            @if(isset( $banner_settings->about_talends_image) )
                                            <img src="{{asset('uploads/home-pages/banners/'.$banner_settings->about_talends_image)}}" class="w-100" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trustedby_sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="trustedby_box">
                        <p>Trusted by:</p>
                        @if(isset( $trusted_by->about_talends_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$trusted_by->about_talends_image)}}" class="w-100" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-3">
                    <h5>FOR CLIENTS</h5>
                    <h2>Find the right opportunity</h2>
                </div>
                
                <div class="col-md-4">
                    <div class="talend_img_card opportunity_card">
                        <a href="{{ route('findTalends') }}">
                        
                        <h3> {!! $find_right_opportunity->banner_description ?? '' !!}   </h3>
                            <span class="tal-readmore">Read More</span>
                            <img src="{{ asset('talends/assets/img/right-arrows.png')}}" alt=""> 
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card opportunity_card">
                        <a href="{{ route('Companies') }}">
                            
                        <h3> {{$find_right_opportunity->features_text ?? '' }}   </h3>
                            <span class="tal-readmore">Read More</span>
                            <img src="{{ asset('talends/assets/img/right-arrows.png')}}" alt=""> 
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card opportunity_card">
                        <a href="{{ route('whyTalends') }}">
                        <h3> {{$find_right_opportunity->services_description ?? '' }}   </h3>
                            <span class="tal-readmore">Read More</span>
                            <img src="{{ asset('talends/assets/img/right-arrows.png')}}" alt=""> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="internee_sec theme_bg_dark">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-7 pb-3 align-self-center">

                    {!! $banner_settings->features_text ?? '' !!}

                    <a href="#" class="theme_btn inverse_btn">I’m an Intern</a>
                    <a href="#" class="theme_btn ml-3">I’m Hiring an Intern</a>
                </div>
                <div class="col-md-5">
                    @if(isset( $banner_settings->talends_project_image) )
                    <img src="{{asset('uploads/home-pages/banners/'.$banner_settings->talends_project_image)}}" class="w-100" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6">
                    @if(isset( $banner_settings->talends_work_image) )
                    <img src="{{asset('uploads/home-pages/banners/'.$banner_settings->talends_work_image)}}" class="w-100" alt="">
                    @endif
                </div>
                <div class="col-md-6 pb-3 align-self-center">

                    {!! $banner_settings->services_description ?? '' !!}

                    <div class="d-flex align-contents-center"><a class="theme_btn m-0">Join the community</a>
<p class="d-flex align-items-center mb-0 ml-4">Support 24/7<a class="pl-2" href="tel:052-768-4867">052-768-4867</a></p>
</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-30">
            <div class="row row-eq-height">
                <div class="col-12">
                    <h2>Build Amazing <span class="theme_color">Teams, <br> On Demand</span></h2>
                    <p>Quickly assemble the teams you need, exactly when you need them.</p>
                </div>
                
                <div class="col-md-7">
                    <div class="row row-eq-height pt-5">
                        <div class="col-md-6">
                        {!!$team_on_demand->banner_description  ??  '' !!}
                           
                        </div>
                        <div class="col-md-6">
                        {!!$team_on_demand->features_text  ??  '' !!}

                               </div>
                    </div>
                    <div class="row row-eq-height pt-5">
                        <div class="col-md-6">
                        {!!$team_on_demand->services_description  ??  '' !!}

                        </div>
                        <div class="col-md-6">
                        {!!$team_on_demand->project_description  ??  '' !!}

                              </div>
                    </div>
                </div>
                <div class="col-md-5 align-self-end">
                    <div class="teams_stack">
                        <div class="talent_list_box talent_box_sm">
                            @if(isset($team_on_demand->about_talends_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$team_on_demand->about_talends_image)}}" class="w-100" alt="">
                            @endif
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 pb-3">
                    <h2>Meet Talent in our Network</h2>
                    <ul class="nav nav-tabs products_tabs meet_talent_network" role="tablist">
                       
                        @foreach($categories as $key=>$category)
                        <li class="nav-item">
                            <a class="nav-link {{ ($loop->first) ? 'active' :''  }} " data-toggle="tab" href="#cat_{{$category->id}}">{{$category->title}}</a>
                        </li>
                     @endforeach
                        
                    </ul>
                </div>
                <div class="col-md-12 pt-3">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        @foreach($categories as $key=>$category)
                       
                        <div id="cat_{{$category->id}}" class="tab-pane {{ ($loop->first) ? 'active' :''  }}">
                            <div class="row">
                            @foreach($category->categoryFreelancers->take(2) as $index=>$profile) 
                             
                                <div class="col-md-6">
                                    <div class="talent_list_box">
                                        <div class="tlb__img">
                                            @php
                                            $avatar = Helper::getProfileImage( $profile->user_id, 'medium-small-');
                                            @endphp
                                            <img src="{{{ asset($avatar) }}}" alt="{{ trans('lang.img') }}"> 
                                        
                                        </div>
                                        <div class="tlb__content">
                                            <a href="{{ route('findTalends') }} ">
                                            <h3>{{ $profile->user->fullname }}</h3>
                                        
                                            <div class="tlb__reviews row">
                                                <div class="bh-stars" data-bh-rating="3">
                                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                                        <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                                        <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                                        <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
                                                    </svg>
                                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                                        <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                                        <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                                        <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
                                                    </svg>
                                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                                        <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                                        <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                                        <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
                                                    </svg>
                                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                                        <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                                        <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                                        <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
                                                    </svg>
                                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                                        <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                                        <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                                        <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
                                                    </svg>
                                                </div>
                                                <div class="tlb__reviews_score">
                                                    <ul>
                                                        <li>5.0/5.0</li>
                                                        
                                                        <li>  {{  $profile->user->reviews->avg('avg_rating') ?  $profile->user->reviews->avg('avg_rating')  : '0' }}  Reviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                               
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <h3>Why Organizations <br>Choose Talends</h3>
                    <p>Discover the many ways in which our clients have embraced the benefits of the Talends network.</p>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                        
                    @if(isset($why_choose_talends->about_talends_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$why_choose_talends->about_talends_image)}}" class="w-100" alt="">
                            @endif
                        <h3>{!! $why_choose_talends->banner_description ?? ''  !!} </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                    @if(isset($why_choose_talends->talends_project_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$why_choose_talends->talends_project_image)}}" class="w-100" alt="">
                            @endif                        
                            <h3>{!! $why_choose_talends->features_text ?? ''  !!} </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                    @if(isset($why_choose_talends->talends_work_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$why_choose_talends->talends_work_image)}}" class="w-100" alt="">
                            @endif                        
                            <h3>{!! $why_choose_talends->services_description ?? ''  !!} </h3>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="talend_img_card">
                      @if(isset($why_choose_talends->talends_payment_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$why_choose_talends->talends_payment_image)}}" class="w-100" alt="">
                            @endif                        
                            <h3>{!! $why_choose_talends->project_description ?? ''  !!} </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talend_img_card">
                    @if(isset($why_choose_talends->talends_support_image) )
                        <img src="{{asset('uploads/home-pages/banners/'.$why_choose_talends->talends_support_image)}}" class="w-100" alt="">
                            @endif                        
                            <h3>{!! $why_choose_talends->work_description ?? '' !!} </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection