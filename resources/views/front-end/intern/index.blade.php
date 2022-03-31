@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 
'extend.front-end.master':
 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@push('stylesheets')
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@section('title'){{ $f_list_meta_title }} @stop
@section('description', $f_list_meta_desc)
@section('content')
    @php $breadcrumbs = Breadcrumbs::generate('searchResults'); @endphp
    @if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php')))
        @include('extend.front-end.includes.inner-banner', 
            ['title' => trans('lang.freelancers'), 'inner_banner' => $f_inner_banner, 'show_banner' => $show_f_banner ]
        )
    @else 
      
    <section class="internee_sec theme_bg_dark find-freelancer-banner">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-7 pb-3 align-self-center">
                    <h5 class="text-white opcty_5">talents</h5>
                    <h2 class="text-white">Find a {{  ucfirst( request()->get('type')) }} <br><span class="theme_color"> You'll love</span></h2>
                    <p class="text-white opcty_5">We have professional designers in over 90 design skill sets. Sign up to find the perfect designer for whatever you need</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('talends/assets/img/find-talents/banner.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>

    </section>  

         
   

    @endif
    <br><br>
    <div id="user_profile">
        @if (Session::has('payment_message'))
            @php $response = Session::get('payment_message') @endphp
            <div class="flash_msg">
                <flash_messages :message_class="'{{{$response['code']}}}'" :time ='5' :message="'{{{ $response['message'] }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <div class="wt-haslayout">
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            @if (file_exists(resource_path('views/extend/front-end/freelancers/filters.blade.php'))) 
                                @include('extend.front-end.freelancers.filters')
                            @else 
                                @include('front-end.intern.filters')
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-userlistingholder wt-userlisting wt-haslayout">
                                <div class="wt-userlistingtitle">
                                    @if (!empty($users))
                                        <span>{{ trans('lang.01') }} {{$users->count()}} of {{\App\User::role('freelancer')->count()}} results @if (!empty($keyword)) for <em>"{{{$keyword}}}"</em> @endif</span>
                                    @endif
                                </div>
                               
                                @if (!empty($users))
                                    @foreach ($users as $key => $freelancer)
                                        @php
                                            $user_image = !empty($freelancer->profile->avater) ?
                                                            '/uploads/users/'.$freelancer->id.'/'.$freelancer->profile->avater :
                                                            'images/user.jpg';
                                            $flag = !empty($freelancer->location->flag) ? Helper::getLocationFlag($freelancer->location->flag) :
                                                    '/images/img-01.png';
                                            $feedbacks = \App\Review::select('feedback')->where('receiver_id', $freelancer->id)->count();
                                            $avg_rating = App\Review::where('receiver_id', $freelancer->id)->sum('avg_rating');
                                            $rating  = $avg_rating != 0 ? round($avg_rating/\App\Review::count()) : 0;
                                            $reviews = \App\Review::where('receiver_id', $freelancer->id)->get();
                                            $stars  = $reviews->sum('avg_rating') != 0 ? (($reviews->sum('avg_rating')/$feedbacks)/5)*100 : 0;
                                            $average_rating_count = !empty($feedbacks) ? $reviews->sum('avg_rating')/$feedbacks : 0;
                                            $verified_user = \App\User::select('user_verified')->where('id', $freelancer->id)->pluck('user_verified')->first();
                                            $save_freelancer = !empty(auth()->user()->profile->saved_freelancer) ? unserialize(auth()->user()->profile->saved_freelancer) : array();
                                            $badge = Helper::getUserBadge($freelancer->id);
                                            if (!empty($enable_package) && $enable_package === 'true') {
                                                $feature_class = (!empty($badge) && $freelancer->expiry_date >= $current_date) ? 'wt-featured' : 'wt-exp';
                                                $badge_color = !empty($badge) ? $badge->color : '';
                                                $badge_img  = !empty($badge) ? $badge->image : '';
                                            } else {
                                                $feature_class = 'wt-exp';
                                                $badge_color = '';
                                                $badge_img    = '';
                                            }
                                        @endphp
                                        <div class="wt-userlistinghold {{ $feature_class }}">
                                            @if(!empty($enable_package) && $enable_package === 'true')
                                                @if ($freelancer->expiry_date >= $current_date && !empty($freelancer->badge_id))
                                                    <span class="wt-featuredtag" style="border-top: 40px solid {{ $badge_color }};">
                                                        @if (!empty($badge_img))
                                                            <img src="{{{ asset(Helper::getBadgeImage($badge_img)) }}}" alt="{{ trans('lang.is_featured') }}" data-tipso="Plus Member" class="template-content tipso_style">
                                                        @else
                                                            <i class="wt-expired fas fa-bold"></i>
                                                        @endif
                                                    </span>
                                                @endif
                                            @endif
                                            <figure class="wt-userlistingimg">
                                                <img src="{{{ asset(Helper::getImageWithSize('uploads/users/'.$freelancer->id, $freelancer->profile->avater, 'listing')) }}}" alt="{{ trans('lang.img') }}">
                                            </figure>
                                            <div class="wt-userlistingcontent">
                                                <div class="wt-contenthead">
                                                    <div class="wt-title">
                                                        <a href="{{{ url('profile/'.$freelancer->slug) }}}">
                                                            @if ($verified_user == 1)
                                                                <i class="fa fa-check-circle"></i>
                                                            @endif
                                                            {{{ Helper::getUserName($freelancer->id) }}}
                                                        </a>
                                                        @if (!empty($freelancer->profile->tagline))
                                                            <h2><a href="{{{ url('profile/'.$freelancer->slug) }}}">{{{ $freelancer->profile->tagline }}}</a></h2>
                                                        @endif
                                                    </div>
                                                    <ul class="wt-userlisting-breadcrumb">
                                                        @if (!empty($freelancer->profile->hourly_rate))
                                                            <li><span><i class="far fa-money-bill-alt"></i>
                                                                {{ (!empty($symbol['symbol'])) ? $symbol['symbol'] : '$' }}{{{ $freelancer->profile->hourly_rate }}} {{ trans('lang.per_hour') }}</span>
                                                            </li>
                                                        @endif
                                                        @if (!empty($freelancer->location))
                                                            <li><span><img src="{{{ asset($flag)}}}" alt="Flag"> {{{ !empty($freelancer->location->title) ? $freelancer->location->title : '' }}}</span></li>
                                                        @endif
                                                        @if (in_array($freelancer->id, $save_freelancer))
                                                            <li class="wt-btndisbaled">
                                                                <a href="javascrip:void(0);" class="wt-clicksave wt-clicksave">
                                                                    <i class="fa fa-heart"></i>
                                                                    {{ trans('lang.saved') }}
                                                                </a>
                                                            </li>
                                                        @else
                                                            <li v-cloak>
                                                                <a href="javascrip:void(0);" class="wt-clicklike" id="freelancer-{{$freelancer->id}}" @click.prevent="add_wishlist('freelancer-{{$freelancer->id}}', {{$freelancer->id}}, 'saved_freelancer', '{{trans("lang.saved")}}')">
                                                                    <i class="fa fa-heart"></i>
                                                                    <span class="save_text">{{ trans('lang.click_to_save') }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="wt-rightarea">
                                                    <span class="wt-stars"><span style="width: {{ $stars }}%;"></span></span>
                                                    <span class="wt-starcontent">
                                                        {{{ round($average_rating_count) }}}<sub>{{ trans('lang.5') }}</sub> <em>({{{ $feedbacks }}} {{ trans('lang.feedbacks') }})</em>
                                                    </span>
                                                </div>
                                            </div>
                                            @if (!empty($freelancer->profile->description))
                                                <div class="wt-description">
                                                    <p>{!! html_entity_decode(nl2br(e(str_limit($freelancer->profile->description, 180)))) !!}</p>
                                                </div>
                                            @endif
                                            @if (!empty($freelancer->skills))
                                                <div class="wt-tag wt-widgettag">
                                                    @foreach($freelancer->skills as $skill)
                                                        <a href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                    @if ( method_exists($users,'links') )
                                        {{ $users->links('pagination.custom') }}
                                    @endif
                                @else
                                    @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                        @include('extend.errors.no-record')
                                    @else 
                                        @include('errors.no-record')
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

    </div>

    <div class="wt-haslayout" style="background-color: #F6F6F6;">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center py-5">
                    <h2  style="color: #959595;">Associated University</h2>
                </div>
                <div class="col-md-2">
                @if(isset( $interne_university_collaboration->about_talends_image) )
                    <img src="{{asset('uploads/home-pages/interne_uni_collaboration/'.$interne_university_collaboration->about_talends_image)}}" class="w-100" alt="">
                    @endif
                </div>
                <div class="col-md-2">
                    <div class="talend_img_card why_organization_choose_box why_organization_choose_box_gap">
                    
                    @if(isset( $interne_university_collaboration->talends_project_image) )
                    <img src="{{asset('uploads/home-pages/interne_uni_collaboration/'.$interne_university_collaboration->talends_project_image)}}" class="w-100" alt="">
                    @endif
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="talend_img_card why_organization_choose_box">
                                          
                    @if(isset( $interne_university_collaboration->talends_work_image) )
                    <img src="{{asset('uploads/home-pages/interne_uni_collaboration/'.$interne_university_collaboration->talends_work_image)}}" class="w-100" alt="">
                    @endif
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="talend_img_card why_organization_choose_box">
                                          
                    @if(isset( $interne_university_collaboration->talends_payment_image) )
                    <img src="{{asset('uploads/home-pages/interne_uni_collaboration/'.$interne_university_collaboration->talends_payment_image)}}" class="w-100" alt="">
                    @endif
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="talend_img_card why_organization_choose_box">
                                          
                    @if(isset( $interne_university_collaboration->talends_support_image) )
                    <img src="{{asset('uploads/home-pages/interne_uni_collaboration/'.$interne_university_collaboration->talends_support_image)}}" class="w-100" alt="">
                    @endif
                    </div>
                </div>

            </div>
                
           
            </div>
        </div>

    @push('scripts')
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script>

           function toogle_location(){
             $('.location_filter').toggle();
            }
            function toogle_price(){
             $('.price_filter').toggle();
            }
            function toogle_language(){
             $('.language_filter').toggle();
            }
            if (APP_DIRECTION == 'rtl') {
                var direction = true;
            } else {
                var direction = false;
            }
            
            jQuery("#wt-categoriesslider").owlCarousel({
                item: 6,
                rtl:direction,
                loop:true,
                nav:false,
                margin: 0,
                autoplay:true,
                center: true,
                responsiveClass:true,
                responsive:{
                    0:{items:1,},
                    481:{items:2,},
                    768:{items:3,},
                    1440:{items:4,},
                    1760:{items:6,}
                }
            });

            var fixadent = $(".filters-container"),
        pos = fixadent.offset();

    $(document).scroll(function(e) {
        e.preventDefault;
        if ($(this).scrollTop() > (pos.top + 40) && fixadent.css('position') == 'static') {
            fixadent.addClass('fixed');
        } else {
            if ($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')) {
                fixadent.removeClass('fixed');
            }
        };
    });
    
        </script>
    @endpush
@endsection
