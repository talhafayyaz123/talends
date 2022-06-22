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
    .custom-control-input {
        position: absolute;
        left: 9px;
        z-index: 1;
    }
    .custom-check .custom-control-label::after {
        content: "\f00c";
        font-family: fontawesome;
        color: white;
        font-size: 8px;
        top: 6px;
        left: -20px;
    }
</style>
@endpush

@section('content')



<div id="pages-list">

    <section class="internee_sec theme_bg_dark companies_banner_section">

        <div class="container">

            <div class="row row-eq-height">

                <div class="col-md-7 pb-3 align-self-center">

                    <h5 class="text-white opcty_5">talents</h5>

                    <h2 class="text-white">Trusted companies <br><span class="theme_color"> best suits your Needs</span></h2>

                    <p class="text-white opcty_5">We have Trusted off-shore companies, making sure they deliver the best of what your dream within a very reasonable amount of money.</p>

                </div>
            </div>
        </div>
    </section>

    <section class="company_talends_filter_wrap">
        <div class="container-lg pb-3 border-bottom"> 
            <div class="row">
                <div class="col-md-12 mb-3">
                    <form class="form-inline_" method="GET">
                        <div class="talent_filters company_talends_filter">
                            <input type="hidden" value='filter' name='filter'>
                            <div class="d-md-flex w-100 px-md-0 px-3">
                                <div class="dropdown position-static filter-dropdown">
                                    <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Category <i class="bi-chevron-down float-right ml-3"></i>
                                    </button>
                                    <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                                        <div class="row">  
                                            @foreach($categories as $category)       
                                                @php
                                                    $select='';

                                                    if( !empty(Request::get('category_id')) && in_array($category->id, explode(',',Request::get('category_id')) ) ){

                                                    $select='checked=checked';
                                                    }
                                                @endphp                           
                                            <div class="col-md-4 mb-3">
                                                <div class="custom-control custom-check">
                                                    <input type="checkbox" class="custom-control-input" name="category[]" value="{{ $category->id }}" id='category_id' onclick="select_sub_categories(this)" {{$select}}> 
                                                    <label class="custom-control-label" for="{{$category['value']}}">{{$category['title']}}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown position-static filter-dropdown">
                                    <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Sub Category <i class="bi-chevron-down float-right ml-3"></i>
                                    </button>
                                    <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                                        <div class="row category_sub_categories">  
                                            @if(isset($sub_categories) && !empty($sub_categories) )
                                                @foreach($sub_categories as $key =>$value)
                                                    @php
                                                        $select='';
                                                        if( !empty(Request::get('sub_category_id')) && in_array( $value->sub_category_id, explode(',',Request::get('sub_category_id')) ) ){
                                                        $select='checked=checked';
                                                        }
                                                    @endphp
                                                    <div class="col-md-4 mb-3">
                                                        <div class="custom-control custom-check">
                                                            <input type="checkbox" class="custom-control-input" name="sub_categories[]"  value="{{  $value->sub_category_id }}" {{ $select }} id="freelancerSubCategory"> 
                                                            <!-- {{ $value->title }} -->
                                                            <label class="custom-control-label" for="{{$value['value']}}">{{$value['title']}}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="dropdown position-static filter-dropdown">
                                    <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Price <i class="bi-chevron-down float-right ml-3"></i>
                                    </button>
                                    <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                                        <div class="row">  
                                            @foreach(Helper::getComapnyBudgetList() as $key=>$price )
                                                @php
                                                    $location_select='';
                                                    if(Request::get('price') && Request::get('price') ==$price['value'] ){
                                                    $location_select='checked=checked';
                                                    }
                                                @endphp
                                                <div class="col-md-4 mb-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="price" name="price" value="{{$price['value']}}" class="custom-control-input" <?php echo $location_select;  ?>>
                                                        <label class="custom-control-label" for="{{$price['value']}}" <?php echo $location_select;  ?>>{{$price['title']}}</label>
                                                    </div>
                                                    <!-- <input type="radio" name="price" id="price" value="{{$price['value']}}" <?php echo $location_select;  ?>>{{$price['title']}} -->
                                                </div>
                                            @endforeach      
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="dropdown position-static filter-dropdown">
                                    <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Location <i class="bi-chevron-down float-right ml-3"></i>
                                    </button>
                                    <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1" style="height: 300px;overflow-y:auto;">
                                        <div class="row">  
                                            @foreach($locations as $location)
                                                @php
                                                    $location_select='';
                                                    if(Request::get('location_id') && Request::get('location_id') ==$location->id ){
                                                        $location_select='checked=checked';
                                                    }
                                                @endphp
                                                <div class="col-md-3 mb-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="location_id" class="custom-control-input" name="location_id" value="{{ $location->id }}" <?php echo $location_select;  ?>>
                                                        <!-- {{ $location->title }} -->
                                                        <label class="custom-control-label" for="{{$location['value']}}">{{$location['title']}}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="dropdown position-static filter-dropdown">
                                    <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Employees <i class="bi-chevron-down float-right ml-3"></i>
                                    </button>
                                    <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                                        <div class="row">  
                                            @foreach (Helper::getEmployeesList() as $key => $employee)
                                                @php
                                                    $location_select='';
                                                    if(Request::get('employees') && Request::get('employees') ==$employee['value'] ){
                                                    $location_select='selected=selected';
                                                    }
                                                @endphp
                                                <div class="col-md-4 mb-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio"id="employees" class="custom-control-input" name="employees" value="{{ $employee['value'] }}" <?php echo $location_select;  ?>>
                                                        <!-- {{ $employee['title'] }} -->
                                                        <label class="custom-control-label" for="{{$employee['value']}}">{{$employee['title']}}</label>
                                                    </div>
                                                </div>
                                            @endforeach                                                
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="filter-btns">
                                    <button type='button' class="theme_btn inverse_btn" id='filter_btn'>{{trans('lang.btn_apply_filters')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-7 col-sm-9 col-12 mb-2 text-center">
                    <div class="custom-control custom-switch rounded-pill p-2" style="background-color:#f7f5f5;">
                        <span>
                            <svg viewBox="0 0 16 16" height="16" width="16" class="text-success small" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.735.07a.533.533 0 0 1 .53 0l7.466 4.267A.533.533 0 0 1 16 4.8v.768c0 4.835-3.205 9.083-7.853 10.412a.534.534 0 0 1-.294 0A10.828 10.828 0 0 1 0 5.567V4.8c0-.191.103-.368.269-.463L7.735.07Zm-.192 11.355 4.607-5.759L11.317 5 7.39 9.91 4.608 7.59l-.683.82 3.618 3.015Z" fill="currentColor"></path></svg>
                            Verified by Talends
                        </span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-5 col-sm-3 col-12 mb-2">
                    <a href="javascript:;" class="btn-link position-relative tooltip-link">
                        <span class="mr-2">
                            <svg viewBox="0 0 24 24" height="24" width="24" class="verified-filter__info-container-icon" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10 10-4.477 10-10ZM3 12a9 9 0 1 1 18 0 9 9 0 0 1-18 0Zm7.982-3.949a.25.25 0 0 1 .25-.25h1.01c.137 0 .249.11.25.248l.006.91a.25.25 0 0 1-.249.251l-1.016.007a.25.25 0 0 1-.251-.25V8.05Zm1.475 7.253h2.038c.165 0 .286.035.365.105.078.07.117.18.117.333 0 .173-.037.293-.111.359-.074.065-.21.098-.41.098H9.532c-.17 0-.296-.038-.381-.114-.085-.076-.127-.19-.127-.343 0-.148.044-.258.133-.33.09-.072.222-.108.4-.108h1.936v-4.069h-1.238c-.173 0-.305-.039-.396-.117-.091-.079-.137-.192-.137-.34 0-.148.043-.259.127-.333.085-.074.212-.111.381-.111h1.86a.46.46 0 0 1 .27.07c.065.046.098.11.098.19v4.71Z" fill="currentColor"></path></svg>
                        </span>What's this?
                        <div class="tooltip-content">
                        <p class="mb-0">Pre-vetted Agencies</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-0">

        <div class="container px-md-0">

            <div class="row">

                @if(!empty($companies) && $companies->count())

                @foreach($companies as $key => $value)

                <div class="col-md-6">

                    <div class="talent_list_box">

                        <div class="tlb__img">

                            @php



                            $avatar = Helper::getProfileImage( $value->profile->user_id, 'medium-small-');

                            @endphp

                            <img src="{{{ asset($avatar) }}}" alt="{{ trans('lang.img') }}">

                        </div>

                        <div class="tlb__content">

                            <a href="{{url("company-detail",['id'=>$value->id ])}}">



                                <h3>{{ $value->profile->company_name }}</h3>

                                <p>{{$value->profile->tagline}}</p>

                            

                            <div class="tlb__reviews row">

                                <div class="bh-stars" data-bh-rating="4.5">

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

                                        <li>{{ $value->reviews->avg('avg_rating') ?  $value->reviews->avg('avg_rating')  : '0' }} Reviews</li>

                                    </ul>

                                </div>

                            </div>

                            <span class="company_description">Minimum Budget</span>

                            <br>$ {{ $value->profile->min_budget ?? "0" }}



                            <br>

                            </a>
                            <span class="company_description">Total Team Strength</span>

                            <br>{{ $value->profile->no_of_employees ?? "0" }}

                        </div>

                    </div>

                </div>

                @endforeach

                @endif

            </div>
            <div class="d-flex justify-content-center flex-column align-items-center">
                {!! $companies->appends(Request::except('page'))->render() !!}
                <p>Displaying {{$companies->count()}} of {{ $companies->total() }} jobs.</p>

            </div>

        </div>

    </section>
    <section class="featured_success_stories_sec pb-0">
        <div class="container px-md-0">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <h2>Successful project delivered by Agencies</h2>
                            <div class="carousel-item active">
                                <div class="row fss_box_row fss_red_bg">
                                    <div class="col-md-4 pr-md-0 d-none d-md-block">
                                        <div class="fss_box">
                                        @if(isset( $featured_success_stories->about_talends_image) )
                                        <img src="{{asset('uploads/home-pages/success_stories/'.$featured_success_stories->about_talends_image)}}"
                                            class="w-100" alt="">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="fss_box_content">
                                           {!! $featured_success_stories->banner_description ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row fss_box_row fss_blue_bg">
                                    <div class="col-md-4 pr-md-0 d-none d-md-block">
                                        <div class="fss_box">
                                        @if(isset( $featured_success_stories->talends_project_image) )
                                        <img src="{{asset('uploads/home-pages/success_stories/'.$featured_success_stories->talends_project_image)}}"
                                            class="w-100" alt="">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="fss_box_content">
                                        {!! $featured_success_stories->project_description ?? '' !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row fss_box_row fss_blue_bg">
                                    <div class="col-md-4 pr-md-0 d-none d-md-block">
                                        <div class="fss_box">
                                        @if(isset( $featured_success_stories->talends_work_image) )
                                        <img src="{{asset('uploads/home-pages/success_stories/'.$featured_success_stories->talends_work_image)}}"
                                            class="w-100" alt="">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="fss_box_content">
                                        {!! $featured_success_stories->work_description ?? '' !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row fss_box_row fss_blue_bg">
                                    <div class="col-md-4 pr-md-0 d-none d-md-block">
                                        <div class="fss_box">
                                        @if(isset( $featured_success_stories->talends_payment_image) )
                                        <img src="{{asset('uploads/home-pages/success_stories/'.$featured_success_stories->talends_payment_image)}}"
                                            class="w-100" alt="">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="fss_box_content">
                                            {!! $featured_success_stories->payment_description ?? '' !!}
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

    <section class="demand_services">
        <div class="container px-md-0">
            <div class="row">
                <div class="col-12">
                    <h2>in-demand services from agencies</h2>
                </div>
                <div class="row">
                @foreach($agency_services as $category)
        
                    <div class="col-lg-3" style="max-width: 20% !important;">
                        <div class="content-box">
                            <img src="{{ asset('uploads/agency_services/'.$category->image)}}" alt="" class="img-fluid mb-3">
                            <p>{{ $category->title }}</p>
                        </div>
                    </div>
                @endforeach  
                </div>      
            </div>           
        </div>
    </section>
    <section class="find_agency pb-0">
        <div class="container px-md-0">
            <div class="row">
                <div class="col-md-7">
                    <div class="content-box">
                        {!! $agency_need_banner->banner_description ?? ''  !!}
                        
                        <a href="{{ route('register')  }}" class="btn m-1">Register as employer </a>
                        <a href="{{ route('companyRegistraton')  }}" class="btn btn2 m-1">Register as Agency </a>
                    </div>
                </div>
                <div class="col-md-5">
                    @if(isset($agency_need_banner->about_talends_image))
                    <img src="{{asset('uploads/home-pages/company_need_banner/'.$agency_need_banner->about_talends_image)}}" class="img-fluid"  alt="Find Agency Image">
                  @endif
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@push('scripts')
<script>
    $(".checkbox-menu").on("change", "input[type='checkbox']", function() {
        $(this).closest("li").toggleClass("active", this.checked);
    });

    $(document).on('click', '.allow-focus', function (e) {
        e.stopPropagation();
    });
    function select_sub_categories(event) {
        var array = []
        var checkboxes = document.querySelectorAll('#category_id:checked')

        for (var i = 0; i < checkboxes.length; i++) {
        array.push(checkboxes[i].value)
        }
        var comma_category = array.join(",");

        $.ajax({

            url: "{{ url('/category_sub_categories/multiple') }}" + '/' + comma_category,

            type: 'get',

            dataType: 'json',

            success: function(response) {

                var len = 0;

                if (response['sub_categories'] != null) {

                    len = response['sub_categories'].length;

                }

                $('.category_sub_categories').html('');

                var optionsArray = [];

                 if (len > 0) {

                     for (var i = 0; i < len; i++) {

                    var id = response['sub_categories'][i].sub_category_id;

                    var title = response['sub_categories'][i].title;

                    var option = "<div class='col-md-4 mb-3'><div class='custom-control custom-check'><input class='custom-control-input' id='freelancerSubCategory' type='checkbox' name='sub_categories[]' value='"+id+"'  >";
                     
                    option+="<label class='custom-control-label' for='{{$value['value']}}'>"+title+" </label></div></div>" ; 
                    $(".category_sub_categories").append(option); 
        
                }

                }
             

            }

        });

    }


    function getSearchParameters() {

        var prmstr = window.location.search.substr(1);

        var prmarr = prmstr.split("&");
        return prmarr;

    }

    $(document).ready(function() {

        $("#filter_btn").click(function() {
            var category_arr=[];
            var sub_category_arr=[];

            var price =  $('input[name="price"]:checked').val();
            price = (typeof price === 'undefined') ? '' : price;

            // category
            var category_checkboxes = document.querySelectorAll('#category_id:checked')
            for (var i = 0; i < category_checkboxes.length; i++) {
                category_arr.push(category_checkboxes[i].value)
            }
            var comma_category = category_arr.join(",");

            // sub category
            var sub_category_checkboxes = document.querySelectorAll('#freelancerSubCategory:checked')
            for (var i = 0; i < sub_category_checkboxes.length; i++) {
                sub_category_arr.push(sub_category_checkboxes[i].value)
            }
            var comma_sub_category = sub_category_arr.join(",");
        
        
            var url = window.location.pathname.split("/");
        
            var category_id =comma_category;
            var location_id = $('input[name="location_id"]:checked').val();
            location_id = (typeof location_id === 'undefined') ? '' : location_id;


            var sub_category_id =comma_sub_category;
            var employees =  $('input[name="employees"]:checked').val();
            employees = (typeof employees === 'undefined') ? '' : employees;

            var param_name = getSearchParameters()[0].split("=")[0];
        
        ///

            if (param_name && param_name != 'search') {

            var url_employees = getSearchParameters()[0].split("=")[1];



                if (!employees) {

                    employees = url_employees;

                }



                if (getSearchParameters()[2]) {

                    var url_price = getSearchParameters()[2].split("=")[1];



                    if (!price) {

                        price = url_price;

                    }

                }



                if (getSearchParameters()[3]) {

                    var url_duration = getSearchParameters()[3].split("=")[1];



                    if (!category_id) {

                        category_id = url_duration;

                    }

                }



            if (getSearchParameters()[4]) {

                var url_location = getSearchParameters()[4].split("=")[1];



                if (!location_id) {

                    location_id = url_location;

                }



            }





                if (getSearchParameters()[5]) {

                    var url_sub_category_id = getSearchParameters()[5].split("=")[1];

                    if (!sub_category_id) {

                        sub_category_id = url_sub_category_id;

                    }



                }


                window.location.href = {!!json_encode(url('/')) !!} + '/companies?employees=' + employees + '&filter=filter&price=' + price + '&category_id=' + category_id + '&location_id=' + location_id + '&sub_category_id=' + sub_category_id + '';

                } else {

                window.location.href = {!!json_encode(url('/')) !!} + '/companies?employees=' + employees + '&filter=filter&price=' + price + '&category_id=' + category_id + '&location_id=' + location_id + '&sub_category_id=' + sub_category_id + '';

                }

            ///
        
                });
            });
    

</script>

@endpush