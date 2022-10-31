@php

$aws_s3_path='https://talends-bucket.s3.amazonaws.com';

$footer_how_work=App\Helper::getfooterHowWork();
@endphp
<section class="how_it_works_sec pt-0">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 pb-4 text-center">
                <h2 class="text-white opcty_5"> {!! $footer_how_work->project_description ?? '' !!}</h2>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="how_its_works_box_steps">
                    <h2>{!! $footer_how_work->banner_description ?? '' !!}</h2>
                    <h3>{!! $footer_how_work->features_text ?? '' !!}</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="how_its_works_box_steps">
                    <h2>{!! $footer_how_work->services_description ?? '' !!}</h2>
                    <h3>{!! $footer_how_work->work_description ?? '' !!}</h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="how_its_works_box_steps">
                    <h2>{!! $footer_how_work->payment_description ?? '' !!}</h2>
                    <h3>{!! $footer_how_work->support_description ?? '' !!}</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="how_its_works_box_steps">
                    <h2>{!! $footer_how_work->freelancer_benefits ?? '' !!}</h2>
                    <h3>{!! $footer_how_work->internees_benefits ?? '' !!}</h3>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="theme_bg_dark d-none">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h2 class="text-white"> {!! $footer_how_work->project_description ?? '' !!}</h2>
            </div>
            <div class="col-md-4">
                <div class="how_its_works_box">
                    @if( isset($footer_how_work->about_talends_image) )
                    <img src="{{asset('uploads/home-pages/footer/'.$footer_how_work->about_talends_image)}}" alt="">
                    @endif

                    {!! $footer_how_work->banner_description ?? '' !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="how_its_works_box">

                    @if(isset( $footer_how_work->talends_project_image) )
                    <img src="{{asset('uploads/home-pages/footer/'.$footer_how_work->talends_project_image)}}" alt="">
                    @endif
                    {!! $footer_how_work->features_text ?? '' !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="how_its_works_box">
                    @if( isset($footer_how_work->talends_work_image) )
                    <img src="{{asset('uploads/home-pages/footer/'.$footer_how_work->talends_work_image)}}" alt="">
                    @endif
                    {!! $footer_how_work->services_description ?? '' !!}
                </div>
            </div>
        </div>
    </div>
</section>


@php
$skills_categories=App\Helper::getSkillsCategories();
@endphp
<section>
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-12 pb-3">
                <ul class="nav nav-tabs products_tabs" role="tablist"  id="product_tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#ptabs_ms_d_365">Skills in Demand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ptabs_ms_b_solution">Local Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ptabs_ms_power_platform">Government
                            Initiatives</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 pt-3">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="ptabs_ms_d_365" class="tab-pane active">
                        <div class="services_list_box_row">
                            @if(isset( $skills_categories))
                            @foreach($skills_categories as $key =>$category)
                            @if($category['parent_category']=='skills in demand')
                            <div class="services_list_box">{{ $category['title'] }}</div>
                            @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div id="ptabs_ms_b_solution" class="tab-pane">
                        <div class="services_list_box_row">
                            @if(isset( $skills_categories))
                            @foreach($skills_categories as $key =>$category)
                            @if($category['parent_category']=='local projects')
                            <div class="services_list_box">{{ $category['title'] }}</div>
                            @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div id="ptabs_ms_power_platform" class="tab-pane">
                        <div class="services_list_box_row">
                            @if(isset( $skills_categories))
                            @foreach($skills_categories as $key =>$category)
                            @if($category['parent_category']=='government initiatives')
                            <div class="services_list_box">{{ $category['title'] }}</div>
                            @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@php
$join_community=App\Helper::getJoinCommunity();
@endphp
<section class="join_community pb-md-0 pt-4">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-8 col-sm-6 col-9 pb-3 align-self-center">
                {!! $join_community->banner_description ?? '' !!}
                <a href="{{url('search-results?type=job')}}" class="btn btn-theme px-4 rounded-pill">Find A Job</a>
                <a href="{{ route('login') }}" class="btn btn-theme-white px-4 rounded-pill ml-md-3">Submit A Job</a>
            </div>
            <div class="col-md-4 col-sm-6 col-3 text-center">
                @if(isset( $join_community->about_talends_image) )
                    <picture>
                        <source media="(min-width:992px)" srcset="{{$aws_s3_path.'/uploads/home-pages/footer/'.$join_community->about_talends_image}}" class="img-fluic" width="250">
                        <source media="(min-width:480px)" srcset="{{$aws_s3_path.'/uploads/home-pages/footer/'.$join_community->about_talends_image}}" class="img-fluic" width="200">
                        <img src="{{$aws_s3_path.'/uploads/home-pages/footer/'.$join_community->about_talends_image}}" alt="Footer Image" class="img-fluic" width="100" style='max-height: 212px;'>
                    </picture>

                @endif
            </div>
        </div>
    </div>
</section>

@php
$footer_menus_1=App\Helper::footerMenu1();
$footer_menus_2=App\Helper::footerMenu2();
$footer_menus_3=App\Helper::footerMenu3();
$footer_menus_4=App\Helper::footerMenu4();
$footer_social_content=App\Helper::getFooterSocialContent();
@endphp


<footer>
    <div class="container pb-5">
        <div class="row">
            <div class="col-20 col-sm-6 text-md-left mb-3">
                <img src="{{asset('talends/assets/img/fav/apple-touch-icon-114x114.png')}}" alt="Talends Icon" class="img-fluid" style="width:60px;"/>
            </div>
            <div class="col-20 col-sm-6">
                <h4> {{ $footer_menus_1['title']}} </h4>
                <ul class="quick-links">
                    @if(!empty($footer_menus_1['menu_items']))
                    @foreach($footer_menus_1['menu_items'] as $key=>$value)
                    <li> 

                
                    @if($value['url']!='#' && Route::has($value['url']))
                        <a href="{{ route($value['url'])  }}">
                            {{ ($value['title'])  }}
                        </a>
                        @elseif($value['url'] !='#')
                        <a href="{{ url($value['url'])  }}">
                            {{ $value['title'] }}
                        </a>
                        @else
                        <a href="{{ $value['url'] }}">
                            {{ ($value['title'])  }}
                        </a>
                        @endif
                    
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>


            <div class="col-20 col-sm-6">
                <h4> {{ $footer_menus_2['title']}} </h4>
                <ul class="quick-links">
                    @if(!empty($footer_menus_2['menu_items']))
                    @foreach($footer_menus_2['menu_items'] as $key=>$value)
                    <li> 
                    @if($value['url']!='#' && Route::has($value['url']))
                        <a href="{{ route($value['url'])  }}">
                            {{ ($value['title'])  }}
                        </a>
                        @elseif($value['url'] !='#')
                        <a href="{{ url($value['url'])  }}">
                            {{ $value['title'] }}
                        </a>
                        @else
                        <a href="{{ $value['url'] }}">
                            {{ ($value['title'])  }}
                        </a>
                        @endif
                    
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-20 col-sm-6">
                <h4> {{ $footer_menus_3['title']}} </h4>
                <ul class="quick-links">
                    @if(!empty($footer_menus_3['menu_items']))
                    @foreach($footer_menus_3['menu_items'] as $key=>$value)
                    <li> 
                    @if($value['url']!='#' && Route::has($value['url']))
                        <a href="{{ route($value['url'])  }}">
                            {{ ($value['title'])  }}
                        </a>
                        @elseif($value['url'] !='#')
                        <a href="{{ url($value['url'])  }}">
                            {{ $value['title'] }}
                        </a>
                        @else
                        <a href="{{ $value['url'] }}">
                            {{ ($value['title'])  }}
                        </a>
                        @endif
                    
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-20 col-sm-6">
                <h4> {{ $footer_menus_4['title']}} </h4>
                <ul class="quick-links">
                    @if(!empty($footer_menus_4['menu_items']))
                    @foreach($footer_menus_4['menu_items'] as $key=>$value)
                    <li> 
                    @if($value['url']!='#' && Route::has($value['url']))
                        <a href="{{ route($value['url'])  }}">
                            {{ ($value['title'])  }}
                        </a>
                        @elseif($value['url'] !='#')
                        <a href="{{ url($value['url'])  }}">
                            {{ $value['title'] }}
                        </a>
                        @else
                        <a href="{{ $value['url'] }}">
                            {{ ($value['title'])  }}
                        </a>
                        @endif
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="row footer_bottom align-items-end">
            <div class="col-md-7">
                <div class="secondary-footer">
                    <ul class="list-inline mb-2">
                        <li class="px-1"> <a href="{{ $footer_social_content->banner_description ?? ''}}" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                        <!-- <li class="px-1"> <a href="javascript:;" target="_blank"><i class="fa fa-twitter"></i></a> </li> -->
                        <li class="px-1"> <a href="{{ $footer_social_content->features_text ?? ''}}" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                        <li class="px-1"> <a href="{{ $footer_social_content->work_description ?? ''}}" target="_blank"><i class="fa fa-instagram"></i></a> </li>
                        <li class="px-1"> <a href="{{ $footer_social_content->services_description ?? ''}}" target="_blank"><i class="fa fa-youtube"></i></a> </li>
                        <li class="px-1"> <a href="{{ $footer_social_content->payment_description ?? ''}}" target="_blank"><i class="bi-tiktok" style="padding: 6px 7px;"></i></a> </li>    
                    </ul>
                    <p class="mb-0">Talends.com ©2022 All Rights Reserved.</p>
                    <p class="small">Dubai, United Arab Emirates</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="secondary-footer d-md-flex pl-md-4">
                    <a href="https://aws.amazon.com/what-is-cloud-computing"><img src="https://d0.awsstatic.com/logos/powered-by-aws-white.png" alt="Powered by AWS Cloud Computing" width="70"></a>
                    <ul class="list-inline mb-0 ml-auto">
                    <!-- <li class="px-2"> <a href="{{ route('sitemap.index') }}" target="_blank">Site Map</a> </li>-->
                        <li class="px-2"> <a href="{{ route('Agreement') }}" target="_self">Term & Conditions</a> </li> 
                        <li class="px-2"> <a href="{{ route('privacyPolicy') }}" target="_self">Privacy Policy</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid border-top position-absolute bg-white" id='taelnds_into_model' style="bottom:0;">
        <button class="position-absolute talends_intro_close bg-white border-0" style="top: 10px;font-size:24px;"><i class="bi-x-circle"></i></button>
        <div class="row">
            <div class="col-md-9 mx-auto py-3 text-center col-10">
                <p class="mb-0">Talends.com purpose is to make a difference in Remote Space and provide a fair opportunities to all Freelancers, Agencies & Business Owners & Interns. Unlike other platforms our fee structure is far better and we charge just 5% straight fee on successful transactions rather 12%-18% like many existing platforms. On the other hand, Agencies are set to Enter & Grow their businesses in Dubai, UAE & MENA Region with a very minimum $16 a Month. Once onboard, complete your profile, showcase your services or SaaS products, taends.com marketing ecosystem will make sure to generate amazing leads and opportunities for your business.</p>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.talends_intro_close').click(function(e){
            $("#taelnds_into_model").fadeOut(250);
        });
    });

</script>
@endpush