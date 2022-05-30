@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 
'extend.front-end.master':
 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@push('stylesheets')
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@section('title'){{ $user_name }} | {{ $tagline }} @stop
@section('description', "$desc")
@section('content')
@php 
if($user_role=='freelancer'){
    $breadcrumbs = Breadcrumbs::generate('showFreelancerProfile', $user->slug);

}elseif($user_role=='intern'){
    $breadcrumbs = Breadcrumbs::generate('showInternProfile', $user->slug);

}
@endphp

    <div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo theme_bg_dark ">
        <div class="container">
            <div class="row justify-content-md-center" style="margin-bottom: 200px;">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">

                    <div class="wt-innerbannercontent">
                        <div class="wt-title"><h2>{{ Helper::getUserName($user->id) }}</h2></div>
                       
                            <ol class="wt-breadcrumb">
                                @foreach ($breadcrumbs as $breadcrumb)
                                    @if ($breadcrumb->url && !$loop->last)
                                        <li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
                                    @else
                                        <li class="active">{{{ $breadcrumb->title }}}</li>
                                    @endif
                                @endforeach
                            </ol>
                      
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="wt-main-section wt-paddingtopnull wt-haslayout la-profile-holder" id="user_profile">
        <div class="preloader-section" v-if="loading" v-cloak>
            <div class="preloader-holder">
                <div class="loader"></div>
            </div>
        </div>
        @if ($display_chat == 'true')
            @if (Auth::user())
                @if ($profile->user_id != Auth::user()->id)
                    <chat :trans_image_alt="'{{trans('lang.img')}}'" :ph_new_msg="'{{ trans('lang.ph_new_msg') }}'" :trans_placeholder="'{{ trans('lang.ph_type_msg') }}'" :receiver_id="'{{$profile->user_id}}'" :receiver_profile_image="'{{{ asset($avatar) }}}'"></chat>
                @endif
            @endif
        @endif
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                    <div class="wt-userprofileholder">
                        @if (!empty($badge) && !empty($enable_package) && $enable_package === 'true')
                            <span class="wt-featuredtag" style="border-top: 40px solid {{ $badge_color }};">
                                <img src="{{{ asset(Helper::getBadgeImage($badge_img)) }}}" alt="{{ trans('lang.is_featured') }}" data-tipso="Plus Member" class="template-content tipso_style">
                            </span>
                        @endif
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
                            <div class="row">
                                <div class="wt-userprofile">
                                    @if (!empty($avatar))
                                        {{-- <figure><img src="{{{ asset($avatar) }}}" alt="{{{ trans('lang.user_avatar') }}}"></figure> --}}
                                        <figure><img src="{{{ asset(Helper::getImage('uploads/users/' . $profile->user_id,$profile->avater, '' , 'user.jpg')) }}}" alt="{{{ trans('lang.user_avatar') }}}"></figure>
                                    @endif
                                    <div class="wt-title">
                                        @if (!empty($user_name))
                                            <h3>@if ($user->user_verified === 1)<i class="fa fa-check-circle"></i> @endif {{{ $user_name }}}</h3>
                                        @endif
                                        <span>
                                            <div class="wt-proposalfeedback"><span class="wt-starcontent"> {{{ round($average_rating_count) }}}/<i>5</i>&nbsp;<em>({{{ $reviews->count() }}} {{ trans('lang.feedbacks') }})</em></span></div>
                                            @if (!empty($joining_date))
                                                {{{ trans('lang.member_since') }}}&nbsp;{{{ $joining_date }}}
                                            @endif
                                            <br>
                                            <a href="{{url('profile/'.$user->slug)}}">{{ '@' }}{{{ $user->slug }}}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
                            <div class="row">
                                <div class="wt-proposalhead wt-userdetails">
                                    @if (!empty($profile->tagline))
                                        <h2>{{{ $profile->tagline }}}</h2>
                                    @endif
                                    <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                        @if (!empty($profile->hourly_rate))
                                            <li><span><i class="far fa-money-bill-alt"></i> {{ $symbol }}{{{ $profile->hourly_rate }}} {{{ trans('lang.per_hour') }}}</span></li>
                                        @endif
                                        @if (!empty($user->location->title))
                                            <li>
                                                <span>
                                                    <img src="{{{asset(Helper::getLocationFlag($user->location->flag))}}}" alt="{{{ trans('lang.flag_img') }}}"> {{{ $user->location->title }}}
                                                </span>
                                            </li>
                                        @endif
                                        @if (in_array($profile->id, $save_freelancer))
                                            <li class="wt-btndisbaled">
                                                <a href="javascrip:void(0);" class="wt-clicksave wt-clicksave">
                                                    <i class="fa fa-heart"></i>
                                                    {{ trans('lang.saved') }}
                                                </a>
                                            </li>
                                        @else
                                            <li v-bind:class="disable_btn" v-cloak>
                                                <a href="javascrip:void(0);" v-bind:class="click_to_save" id="freelancer-{{$profile->id}}" @click.prevent="add_wishlist('freelancer'-{{$profile->id}}, {{$profile->id}}, 'saved_freelancer', '{{trans("lang.saved")}}')" v-cloak>
                                                    <i v-bind:class="saved_class"></i>
                                                    @{{ text }}
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                    @if (!empty($profile->description))
                                        <div class="wt-description">
                                            {{-- <p>{{{ $profile->description }}}</p> --}}
                                            <p>{!! html_entity_decode(nl2br(e($profile->description))) !!}</p>
                                        </div>
                                    @endif
                                </div>
                                <div id="wt-statistics" class="wt-statistics wt-profilecounter">
                                    <div class="wt-statisticcontent wt-countercolor1">
                                        <h3 data-from="0" data-to="{{{ Helper::getProposals($user->id, 'hired')->count() }}}" data-speed="800" data-refresh-interval="03">{{{ Helper::getProposals($user->id, 'hired')->count() }}}</h3>
                                        <h4>{{ trans('lang.ongoing_project') }}</h4>
                                    </div>
                                    <div class="wt-statisticcontent wt-countercolor2">
                                        <h3 data-from="0" data-to="{{{ Helper::getProposals($user->id, 'completed')->count() }}}" data-speed="8000" data-refresh-interval="100">{{{ Helper::getProposals($user->id, 'completed')->count() }}}</h3>
                                        <h4>{{ trans('lang.completed_projects') }}</h4>
                                    </div>
                                    <div class="wt-statisticcontent wt-countercolor4" {{ !empty($show_earnings) && ($show_earnings !== true && $show_earnings !== 'true') ? 'style=width:100%' : '' }}>
                                        <h3 data-from="0" data-to="{{{ Helper::getProposals($user->id, 'cancelled')->count() }}}" data-speed="800" data-refresh-interval="02">{{{ Helper::getProposals($user->id, 'cancelled')->count() }}}</h3>
                                        <h4>{{ trans('lang.cancelled_projects') }}</h4>
                                    </div>
                                    @if (!empty($show_earnings) && ($show_earnings === true || $show_earnings === 'true'))
                                        <div class="wt-statisticcontent wt-countercolor3">
                                            <h3 data-from="0" data-to="{{ $amount }}" data-speed="8000" data-refresh-interval="100">{{ empty($amount) ? $symbol.'0.00' : $symbol."".$amount }}</h3>
                                            <h4>{{ trans('lang.total_earnings') }}</h4>
                                        </div>
                                    @endif
                                    <div class="wt-description">
                                        <p>{{ trans('lang.send_offer_note') }}</p>
                                        <a href="javascript:void(0);" @click.prevent='sendOffer("{{$auth_user}}")' class="wt-btn">{{{ trans('lang.btn_send_offer') }}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'services')
            @if (!empty($services) && $services->count() > 0)
                <div class="container">
                    <div class="row">	
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                            <div class="wt-services-holder">
                                <div class="wt-title">
                                    <h2>{{ trans('lang.services') }}</h2>
                                </div>
                                <div class="wt-services-content">
                                    <div class="row">
                                        @foreach ($services as $service)
                                            @php 
                                                $service_reviews = Helper::getServiceReviews($user->id, $service->id); 
                                                $service_rating  = $service_reviews->sum('avg_rating') != 0 ? round($service_reviews->sum('avg_rating') / $service_reviews->count()) : 0;
                                                $attachments = Helper::getUnserializeData($service->attachments);
                                                $no_attachments = empty($attachments) ? 'la-service-info' : '';
                                                $total_orders = Helper::getServiceCount($service->id, 'hired');
                                            @endphp
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
                                                <div class="wt-freelancers-info {{$no_attachments}}">
                                                    @if (!empty($attachments))
                                                        @php $enable_slider = count($attachments) > 1 ? 'wt-freelancerslider owl-carousel' : ' '; @endphp
                                                        <div class="wt-freelancers {{{$enable_slider}}}">
                                                            @foreach ($attachments as $attachment)
                                                                <figure class="item">
                                                                    <a href="{{{ url('profile/'.$user->slug) }}}"><img src="{{{ asset(Helper::getImage('uploads/services/'.$user->id, $attachment, 'medium-', 'medium-service.jpg')) }}}" alt="img description" class="item"></a>
                                                                </figure>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    @if ($service->is_featured == 'true')
                                                        <span class="wt-featuredtagvtwo">{{ trans('lang.featured') }}</span>
                                                    @endif
                                                    <div class="wt-freelancers-details">
                                                        <figure class="wt-freelancers-img">
                                                            <img src="{{ asset(Helper::getProfileImage($user->id)) }}" alt="img description">
                                                        </figure>
                                                        <div class="wt-freelancers-content">
                                                            <div class="dc-title">
                                                                <a href="{{{ url('profile/'.$user->slug) }}}"><i class="fa fa-check-circle"></i> {{{Helper::getUserName($user->id)}}}</a>
                                                                <a href="{{{url('service/'.$service->slug)}}}"><h3>{{{$service->title}}}</h3></a>
                                                                <span><strong>{{ $symbol }}{{{$service->price}}}</strong> {{trans('lang.starting_from')}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="wt-freelancers-rating">
                                                            <ul>
                                                                <li><span><i class="fa fa-star"></i>{{{ $service_rating }}}/<i>5</i> ({{{$service_reviews->count()}}})</span></li>
                                                                <li>
                                                                    @if ($total_orders > 0)
                                                                        <i class="fa fa-spinner fa-spin"></i>
                                                                    @endif
                                                                    {{{$total_orders}}} {{ trans('lang.in_queue') }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        <div class="container">
            <div class="row">
                <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 float-left">
                        <div class="wt-usersingle">
                            <div class="wt-clientfeedback la-no-record">
                                <div class="wt-usertitle wt-titlewithselect">
                                    <h2>{{ trans('lang.client_feedback') }}</h2>
                                </div>
                                
                                @if (!empty($reviews) && $reviews->count() > 0)
                                    @foreach ($reviews as $key => $review)
                                        @php
                                            $user = App\User::find($review->user_id);
                                            $stars  = $review->avg_rating != 0 ? $review->avg_rating/5*100 : 0;
                                        @endphp
                                        @if ($review->project_type == 'job')
                                            @php $job = \App\Job::where('id', $review->job_id)->first(); @endphp
                                            @if (!empty($job->employer) && $job->employer->count() > 0)
                                                <div class="wt-userlistinghold wt-userlistingsingle">
                                                    <figure class="wt-userlistingimg">
                                                        <img src="{{ asset(Helper::getProfileImage($review->user_id)) }}" alt="{{{ trans('Employer') }}}">
                                                    </figure>
                                                    <div class="wt-userlistingcontent">
                                                        <div class="wt-contenthead">
                                                            <div class="wt-title">
                                                                <a href="{{{ url('profile/'.$job->employer->slug) }}}">@if ($user->user_verified === 1)<i class="fa fa-check-circle"></i>@endif {{{ Helper::getUserName($review->user_id) }}}</a>
                                                                <h3>{{{ $job->title }}}</h3>
                                                            </div>
                                                            <ul class="wt-userlisting-breadcrumb">
                                                                <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> {{{ \App\Helper::getProjectLevel($job->project_level) }}}</span></li>
                                                                @if (!empty($job->location) && $job->location->count() > 0)
                                                                    <li>
                                                                        <span>
                                                                            <img src="{{{asset(App\Helper::getLocationFlag($job->location->flag))}}}" alt="{{{ trans('lang.flag_img') }}}"> {{{ $job->location->title }}}
                                                                        </span>
                                                                    </li>
                                                                @endif
                                                                <li><span><i class="far fa-calendar"></i> {{ Carbon\Carbon::parse($job->created_at)->format('M Y') }} - {{ Carbon\Carbon::parse($job->updated_at)->format('M Y') }}</span></li>
                                                                <li>
                                                                    <span class="wt-stars"><span style="width: {{ $stars }}%;"></span></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="wt-description">
                                                        @if (!empty($review->feedback))
                                                            <p>“ {{{ $review->feedback }}} ”</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            @if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'services')
                                                @php $service = \App\Service::where('id', $review->service_id)->first(); @endphp    
                                                @if (!empty($service))
                                                    <div class="wt-userlistinghold wt-userlistingsingle">
                                                        <figure class="wt-userlistingimg">
                                                            <img src="{{ asset(Helper::getProfileImage($review->user_id)) }}" alt="{{{ trans('Employer') }}}">
                                                        </figure>
                                                        <div class="wt-userlistingcontent">
                                                            <div class="wt-contenthead">
                                                                <div class="wt-title">
                                                                    <a href="{{{ url('profile/'.$user->slug) }}}">@if ($user->user_verified == 1)<i class="fa fa-check-circle"></i>@endif {{{ Helper::getUserName($review->user_id) }}}</a>
                                                                    <h3>{{{ $service->title }}}</h3>
                                                                </div>
                                                                <ul class="wt-userlisting-breadcrumb">
                                                                    @if (!empty($service->location))
                                                                        <li>
                                                                            <span>
                                                                                <img src="{{{asset(Helper::getLocationFlag($service->location->flag))}}}" alt="{{{ trans('lang.flag_img') }}}"> {{{ $service->location->title }}}
                                                                            </span>
                                                                        </li>
                                                                    @endif
                                                                    <li><span><i class="far fa-calendar"></i> {{ Carbon\Carbon::parse($service->created_at)->format('M Y') }} - {{ Carbon\Carbon::parse($service->updated_at)->format('M Y') }}</span></li>
                                                                    <li>
                                                                        <span class="wt-stars"><span style="width: {{ $stars }}%;"></span></span>
                                                                    </li> 
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="wt-description">
                                                            @if (!empty($review->feedback))
                                                                <p>“ {{{ $review->feedback }}} ”</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                    <div class="wt-userprofile">
                                        @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                            @include('extend.errors.no-record')
                                        @else 
                                            @include('errors.no-record')
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="wt-craftedprojects">
                                <div class="wt-usertitle">
                                    <h2>{{{ trans('lang.crafted_projects') }}}</h2>
                                </div>
                                @if (!empty($projects))
                                    <crafted_project :no_of_post="3" :project="'{{  json_encode($projects) }}'" :freelancer_id="'{{$profile->user_id}}'" :img="'{{ trans('lang.img') }}'"></crafted_project>
                                @else
                                    <div class="wt-userprofile">
                                        @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                            @include('extend.errors.no-record')
                                        @else 
                                            @include('errors.no-record')
                                        @endif
                                    </div>
                                @endif
                            </div>
                            @if (!empty($videos))
                                <div class="wt-videos">
                                    <div class="wt-usertitle">
                                        <h2>{{{ trans('lang.videos') }}}</h2>
                                    </div>
                                    <div class="wt-user-videos">
                                        @foreach ($videos as $video)
                                            @php 
                                                $width 	= 367;
                                                $height = 206;
                                                $url = parse_url($video['url']);
                                            @endphp
                                            @if (!empty($url) && !empty($url['query']))
                                                <figure>
                                                    @php
                                                        if ( isset( $url['host'] ) && ( $url['host'] == 'vimeo.com' || $url['host'] == 'player.vimeo.com' ) ) {
                                                            $content_exp = explode("/", $media);
                                                            $content_vimo = array_pop($content_exp);
                                                            echo '<iframe width="' . intval($width) . '" height="' . intval($height) . '" src="https://player.vimeo.com/video/' . $content_vimo . '" 
                                                    ></iframe>';
                                                        } elseif ( isset( $url['host'] ) && $url['host'] == 'soundcloud.com') {
                                                            $video = wp_oembed_get($media, array('height' => intval($height)));
                                                            $search = array('webkitallowfullscreen', 'mozallowfullscreen', 'frameborder="no"', 'scrolling="no"');
                                                            $video = str_replace($search, '', $video);
                                                            echo str_replace('&', '&amp;', $video);
                                                        } else {
                                                            echo '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.str_replace("v=", '', $url['query']).'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                                        }
                                                    @endphp
                                                
                                                </figure>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="wt-experience">
                                <div class="wt-usertitle">
                                    <h2>{{{ trans('lang.experience') }}}</h2>
                                </div>
                                @if (!empty($experiences))
                                    <div class="wt-experiencelisting-hold">
                                        <experience :freelancer_id="'{{$profile->user_id}}'" :no_of_post="2"></experience>
                                    </div>
                                @else
                                    <div class="wt-userprofile">
                                        @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                            @include('extend.errors.no-record')
                                        @else 
                                            @include('errors.no-record')
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="wt-experience wt-education">
                                <div class="wt-usertitle">
                                    <h2>{{{ trans('lang.education') }}}</h2>
                                </div>
                                @if (!empty($education))
                                    <education :freelancer_id="'{{$profile->user_id}}'" :no_of_post="1"></education>
                                @else
                                    <div class="wt-userprofile">
                                        @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                            @include('extend.errors.no-record')
                                        @else 
                                            @include('errors.no-record')
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 float-left">
                        <aside id="wt-sidebar" class="wt-sidebar">
                            <div id="wt-ourskill" class="wt-widget">
                                <div class="wt-widgettitle">
                                    <h2>{{ trans('lang.my_skills') }}</h2>
                                </div>
                                @if (!empty($skills) && $skills->count() > 0)
                                    <div class="wt-widgetcontent wt-skillscontent">
                                        @foreach ($skills as $skill)
                                            <div class="wt-skillholder" data-percent="{{{ $skill->pivot->skill_rating }}}%">
                                                <span>{{{ $skill->title }}} <em>{{{ $skill->pivot->skill_rating }}}%</em></span>
                                                <div class="wt-skillbarholder"><div class="wt-skillbar"></div></div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p>{{ trans('lang.no_skills') }}</p>
                                @endif
                            </div>
                            @if (!empty($awards))
                                <div class="wt-widget wt-widgetarticlesholder wt-articlesuser">
                                    <div class="wt-widgettitle">
                                        <h2>{{{ trans('lang.awards_certifications') }}}</h2>
                                    </div>
                                    <div class="wt-widgetcontent wt-verticalscrollbar">
                                        @foreach ($awards as $award)
                                            <div class="wt-particlehold">
                                                @if (!empty($award['award_hidden_image']))
                                                    <figure>
                                                        <img src="{{{ asset('uploads/users/'.$profile->user_id.'/awards/'.$award['award_hidden_image']) }}}" alt="{{ trans('lang.img') }}">
                                                    </figure>
                                                @endif
                                                @if (!empty($award['award_title']))
                                                    <div class="wt-particlecontent">
                                                        <h3><a href="javascrip:void(0);">{{{ $award['award_title'] }}}</a></h3>
                                                        <span><i class="lnr lnr-calendar"></i> {{{ $joining_date }}}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="wt-proposalsr">
                                <div class="tg-authorcodescan tg-authorcodescanvtwo">
                                    <figure class="tg-qrcodeimg">
                                        {!! QrCode::size(100)->generate(Request::url('profile/'.$user->slug)); !!}
                                    </figure>
                                    <div class="tg-qrcodedetail">
                                        <span class="lnr lnr-laptop-phone"></span>
                                        <div class="tg-qrcodefeat">
                                            <h3>{{ trans('lang.scan_with_smartphone') }} <span>{{ trans('lang.smartphone') }} </span> {{ trans('lang.get_handy') }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-widget wt-sharejob">
                                <div class="wt-widgettitle">
                                    <h2>{{ trans('lang.share_freelancer') }}</h2>
                                </div>
                                <div class="wt-widgetcontent">
                                    <ul class="wt-socialiconssimple">
                                        <li class="wt-facebook">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" class="social-share">
                                            <i class="fa fa fa-facebook-f"></i>{{ trans('lang.share_fb') }}</a>
                                        </li>
                                        <li class="wt-twitter">
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" class="social-share">
                                            <i class="fa fab fa-twitter"></i>{{ trans('lang.share_twitter') }}</a>
                                        </li>
                                        <li class="wt-pinterest">
                                            <a href="//pinterest.com/pin/create/button/?url={{ urlencode(Request::fullUrl()) }}"
                                            onclick="window.open(this.href, \'post-share\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">
                                            <i class="fa fab fa-pinterest-p"></i>{{ trans('lang.share_pinterest') }}</a>
                                        </li>
                                        <li class="wt-googleplus">
                                            <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}" class="social-share">
                                            <i class="fa fab fa-google-plus-g"></i>{{ trans('lang.share_google') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wt-widget wt-reportjob">
                                <div class="wt-widgettitle">
                                    <h2>{{ trans('lang.report_user') }}</h2>
                                </div>
                                <div class="wt-widgetcontent">
                                    {!! Form::open(['url' => '', 'class' =>'wt-formtheme wt-formreport', 'id' => 'submit-report',  '@submit.prevent'=>'submitReport("'.$profile->user_id.'","freelancer-report")']) !!}
                                        <fieldset>
                                            <div class="form-group">
                                                <span class="wt-select">
                                                    {!! Form::select('reason', \Illuminate\Support\Arr::pluck($reasons, 'title'), null ,array('class' => '', 'placeholder' => trans('lang.select_reason'), 'v-model' => 'report.reason')) !!}
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::textarea( 'description', null, ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc'), 'v-model' => 'report.description'] ) !!}
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                {!! Form::submit(trans('lang.btn_submit'), ['class' => 'wt-btn']) !!}
                                            </div>
                                        </fieldset>
                                    {!! form::close(); !!}
                                </div>
                            </div>
                        </aside>
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
                                        How i can hire?what happens after i hire you? <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFaq">
                                    <div class="card-body">
                                    i hire you? to hire a Talent first you have to join talends,com as employer. Once you create an account you can hire any talent you see on talends.com.
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">                                        
                                    what happens after i hire you? <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaq">
                                    <div class="card-body">
                                    once the order is placed, we will discuss everything in details over messages, integrated in your admin panel provided by talends.com.
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="headingThree">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">                                        
                                    What kind of questions are usually asked before start a project? <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaq">
                                    <div class="card-body">
                                    A detailed discussion is done related project brief, requirements and questions related to your niche. Having collected this information, our talent do further research and start working
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="headingFour">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">                                        
                                    how the project timelines are set? <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaq">
                                    <div class="card-body">
                                    project timelines are set by both parties based on their agreed terms & conditions, and we talends.com make sure that our talent respect the timelines and deliver the excellent quality of work. saying that it’s a client responsibility to be fair in timelines and make sure all the required material is properly provided to talent, to avoid any inconvenience.
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="headingFive">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">                                        
                                    how talends.com supports in overall process? <i class="bi-plus float-right rotate-icon"></i>                                        
                                    </h4>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFaq">
                                    <div class="card-body">
                                    talends.com support & quality assurance team is always available to make sure the process is smooth and fair for both parties. our team verify all talend.com approved talent put all their passion & experties into your project. for 100% satisfaction our team respond your support enquiry within 1 hr time.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="suggested-freelancer">
            <div class="container-fluid px-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">People Who Viewed This Service Also Viewed</h4>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-md-flex text-center text-md-left">
                            <img src="http://127.0.0.1:8000/uploads/users/14/a.jpg" alt="image" class="img-fluid mb-3" width="100">
                            <div class="mx-3">
                                <a href="javascript:;"><i class="fa fa-check-circle"></i> <span class="text-secondary">Alara Tekin</span></a> 
                                <h4 class="mt-0 mb-3"><a href="javascript:;" class="font-weight-bold">SEO Expert & Consultant</a></h4>
                                <span class="mr-2"><i class="far fa-money-bill-alt mr-2"></i> $12 / hr</span> |
                                <span><img src="http://127.0.0.1:8000/uploads/locations/tu.png" alt="Flag"> Fujairah , United Arab Emirates</span>
                                <a href="javascrip:void(0);" class="d-block"><i class="fa fa-heart"></i> Click to Save</a>
                            </div>
                            <div class="text-center">
                                <span class="text-warning d-block mb-2">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </span>
                                <span class="d-block">
                                    2/5
                                </span>
                                <span class="wt-starcontent"><em>(0 Feedbacks)</em></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-md-flex text-center text-md-left">
                            <img src="http://127.0.0.1:8000/uploads/users/14/a.jpg" alt="image" class="img-fluid mb-3" width="100">
                            <div class="mx-3">
                                <a href="javascript:;"><i class="fa fa-check-circle"></i> <span class="text-secondary">Alara Tekin</span></a> 
                                <h4 class="mt-0 mb-3"><a href="javascript:;" class="font-weight-bold">SEO Expert & Consultant</a></h4>
                                <span class="mr-2"><i class="far fa-money-bill-alt mr-2"></i> $12 / hr</span> |
                                <span><img src="http://127.0.0.1:8000/uploads/locations/tu.png" alt="Flag"> Fujairah , United Arab Emirates</span>
                                <a href="javascrip:void(0);" class="d-block"><i class="fa fa-heart"></i> Click to Save</a>
                            </div>
                            <div class="text-center">
                                <span class="text-warning d-block mb-2">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </span>
                                <span class="d-block">
                                    4/5
                                </span>
                                <span class="wt-starcontent"><em>(0 Feedbacks)</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="how-it-works">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box">
                            <h4>How it Works</h4>
                            <h6>Here are the steps to complete your projects:</h6>
                            <ol>
                                <li>
                                    <h5>Requirements</h5>
                                    <p>We make sure we have everything we need to complete your project successfully.</p>
                                    <span>This step includes:</span>
                                    <span>Video Meetup</span>
                                </li>
                                <li>
                                    <h5>Brief</h5>
                                    <p>You'll fill out a brief document we created so we can learn more about your company and brand. This has a set of questions that the client needs to fill out. </p>
                                    <span>This step includes:</span>
                                    <span class="ml-4">Video Meetup</span>
                                    <span class="ml-4">Your Feedback</span>
                                </li>
                                <li>
                                    <h5>Research - competitive landscape</h5>
                                    <p>You'll fill out a brief document we created so we can learn more about your company and brand. This has a set of questions that the client needs to fill out. </p>
                                    <span>This step includes:</span>
                                    <span class="ml-4">Video Meetup</span>
                                    <span class="ml-4">Your Feedback</span>
                                </li>
                                <li>
                                    <h5>Concept</h5>
                                    <p>You'll fill out a brief document we created so we can learn more about your company and brand. This has a set of questions that the client needs to fill out. </p>
                                    <span>This step includes:</span>
                                    <span class="ml-4">Video Meetup</span>
                                    <span class="ml-4">Your Feedback</span>
                                </li>
                                <li>
                                    <h5>Finalization & Delivery</h5>
                                    <p>You'll fill out a brief document we created so we can learn more about your company and brand. This has a set of questions that the client needs to fill out. </p>
                                    <span>This step includes:</span>
                                    <span class="ml-4">Video Meetup</span>
                                    <span class="ml-4">Your Feedback</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<b-modal ref="myModalRef" hide-footer title="Project Status">
            <div class="d-block text-center">
                {!! Form::open(['url' => '', 'class' =>'wt-formtheme wt-userform', 'id' =>'send-offer-form', '@submit.prevent'=>'submitProjectOffer("'.$profile->user_id.'")'])!!}
                    <div class="wt-projectdropdown-hold">
                        <div class="wt-projectdropdown">
                            <span class="wt-select">
                                {{{ Form::select('projects', $employer_projects, null, array('class' => 'form-control', 'placeholder' => trans('lang.ph_select_projects'))) }}}
                            </span>
                        </div>
                    </div>
                    <div class="wt-formtheme wt-formpopup">
                        <fieldset>
                            <div class="form-group">
                                {{{ Form::textarea('desc', null, array('placeholder' => trans('lang.ph_add_desc'))) }}}
                            </div>
                            <div class="form-group wt-btnarea">
                                {!! Form::submit(trans('lang.btn_send_offer'), ['class' => 'wt-btn']) !!}
                            </div>
                        </fieldset>
                    </div>
                {!! Form::close() !!}
            </div>
        </b-modal>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/readmore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        /* FREELANCERS SLIDER */
        var _wt_freelancerslider = jQuery('.wt-freelancerslider')
        _wt_freelancerslider.owlCarousel({
            items: 1,
            loop:true,
            rtl:true,
            nav:true,
            margin: 0,
            autoplay:false,
            navClass: ['wt-prev', 'wt-next'],
            navContainerClass: 'wt-search-slider-nav',
            navText: ['<span class="lnr lnr-chevron-left"></span>', '<span class="lnr lnr-chevron-right"></span>'],
        });

        var _readmore = jQuery('.wt-userdetails .wt-description');
        _readmore.readmore({
            speed: 500,
            collapsedHeight: 230,
            moreLink: '<a class="wt-btntext" href="#">'+readmore_trans+'</a>',
            lessLink: '<a class="wt-btntext" href="#">'+less_trans+'</a>',
        });
        $('#wt-ourskill').appear(function () {
            jQuery('.wt-skillholder').each(function () {
                jQuery(this).find('.wt-skillbar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 2500);
            });
        });
        var popupMeta = {
            width: 400,
            height: 400
        }
        $(document).on('click', '.social-share', function(event){
            event.preventDefault();

            var vPosition = Math.floor(($(window).width() - popupMeta.width) / 2),
                hPosition = Math.floor(($(window).height() - popupMeta.height) / 2);

            var url = $(this).attr('href');
            var popup = window.open(url, 'Social Share',
                'width='+popupMeta.width+',height='+popupMeta.height+
                ',left='+vPosition+',top='+hPosition+
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                return false;
            }
        });
    </script>
@endpush

