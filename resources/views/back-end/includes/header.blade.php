@if (Schema::hasTable('users'))
@php
$inner_header = '';
@endphp
@if (Schema::hasTable('pages') || Schema::hasTable('site_managements'))
@php
$settings = array();
$page_id='';
$pages = App\Page::all();
$setting = \App\SiteManagement::getMetaValue('settings');
$logo = !empty($setting[0]['logo']) ? Helper::getHeaderLogo($setting[0]['logo']) : config('app.aws_se_path'). '/' .'images/logo.png';
$inner_header = !empty(Route::getCurrentRoute()) && Route::getCurrentRoute()->uri() != '/' ? 'wt-headervtwo' : '';
$type = Helper::getAccessType();
$default_header_styling = \App\SiteManagement::getMetaValue('menu_settings');
$default_menu_color = !empty($default_header_styling) && !empty($default_header_styling['menu_color']) ? $default_header_styling['menu_color'] : '';
$default_menu_hover_color = !empty($default_header_styling) && !empty($default_header_styling['menu_hover_color']) ? $default_header_styling['menu_hover_color'] : '';
$menu_text_color = !empty($default_header_styling) && !empty($default_header_styling['color']) ? $default_header_styling['color'] : '';
$page_order = !empty($default_header_styling) && !empty($default_header_styling['pages']) ? $default_header_styling['pages'] : array();
if (!empty(Route::getCurrentRoute()) && Route::getCurrentRoute()->uri() != '/' && Route::getCurrentRoute()->uri() != 'home') {
if (Request::segment(1) == 'page' && !empty(Request::segment(2))) {
$selected_page_data = APP\Page::getPageData(Request::segment(2));
$selected_page = !empty($selected_page_data) ? APP\Page::find($selected_page_data->id) : '';
$page_id = !empty($selected_page) ? $selected_page->id : '';
}
} else {
$page_id = APP\SiteManagement::getMetaValue('homepage');
}
$slider = Helper::getPageSlider($page_id);


@endphp
@endif

@auth
{{Helper::displayVerificationWarning()}}

{{Helper::displayPaymentWarning()}}
@endauth

<header id="wt-header" class="wt-haslayout {{$inner_header}} fixed-top border-bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('talends/assets/img/logo.svg')}}" alt="Dynamics">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theme_menu_toggle" aria-expanded="false" aria-controls="theme_menu_toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            @php
            $header_menus=App\Helper::headerMenus();

            @endphp
            <div class="collapse navbar-collapse admin_header_after_login" id="theme_menu_toggle">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link main_menu_link has_dropdown" href="javascript:void(0)">{!! ($header_menus['title4'])  ?? '' !!} <i class="fas fa-angle-down"></i></a>
                        <div class="nav_dropdown" aria-hidden="false" id="dropdown3">
                            <ul class="iconList threeColumns">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        @if(isset( $header_menus['sub_menu_item2']) && !empty($header_menus['sub_menu_item2']) )
                                        @foreach($header_menus['sub_menu_item2'] as $key =>$category)

                                        <div class="col-md-3">
                                            <div class="menu_browse_box">
                                            @if($category['url']!='#'  &&  Route::has($category['url']) )
                                                    <a href="{{ route($category['url'])  }}">
                                                        {{  ($category['title'])  }}
                                                    </a>
                                                    @elseif($category['url'] !='#')
                                                <a href="{{ url($category['url'])  }}">
                                                    {{ $category['title'] }}
                                                </a>
                                                @else
                                                    <a href="{{ $category['url'] }}">
                                                        {{ ($category['title'])  }}
                                                    </a>
                                                    @endif
                                            </div>
                                        </div>

                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main_menu_link has_dropdown" href="javascript:void(0)">{!! ($header_menus['title3'])  ?? '' !!} <i class="fas fa-angle-down"></i></a>
                        <div class="nav_dropdown" aria-hidden="false" id="dropdown3">
                            <ul class="iconList threeColumns">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        @if(isset( $header_menus['sub_menu_item1'] ) && !empty($header_menus['sub_menu_item1']) )
                                        @foreach($header_menus['sub_menu_item1'] as $key =>$category)

                                        <div class="col-md-3">
                                            <div class="menu_browse_box">
                                            @if($category['url']!='#' &&  Route::has($category['url']) )
                                                    <a href="{{ route($category['url'])  }}">
                                                        {{ ($category['title'])  }}
                                                    </a>
                                                    @elseif($category['url'] !='#')
                                                <a href="{{ url($category['url'])  }}">
                                                    {{ $category['title'] }}
                                                </a>
                                                    @else
                                                    <a href="{{ $category['url'] }}">
                                                        {{  ($category['title'])  }}
                                                    </a>
                                                    @endif
                                            </div>
                                        </div>

                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('whyTalends') }}">{!! ($header_menus['title2'])  ?? '' !!}</a>
                    </li>
                    <li class="nav-item  nav_item_right menu_green_cta_box">
                        <a class="nav-link" href="{{ route('government') }}"> {!! ($header_menus['title1'] ) ?? '' !!}</a>
                    </li> -->
                    @guest
                    <!-- <li class="nav-item nav_item_right">


                        <div class="wt-loginarea">
                            <div class="wt-loginoption">
                                <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn signin-btn nav-link menu_green_cta">{{{trans('lang.login') }}}</a>
                                <div class="wt-loginformhold" @if ($errors->has('email') || $errors->has('password')) style="display: block;" @endif>
                                    <div class="wt-loginheader">
                                        <span>{{{ trans('lang.login') }}}</span>
                                        <a href="javascript:;"><i class="fa fa-times"></i></a>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" class="wt-formtheme wt-loginform do-login-form">
                                        @csrf
                                        <fieldset>
                                            <div class="form-group">
                                                <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required autofocus>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="wt-logininfo">
                                                <button type="submit" class="wt-btn do-login-button">{{{ trans('lang.login') }}}</button>
                                                <span class="wt-checkbox">
                                                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="remember">{{{ trans('lang.remember') }}}</label>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <div class="wt-loginfooterinfo">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="wt-forgot-password">{{{ trans('lang.forget_pass') }}}</a>
                                            @endif
                                            <a href="{{{ route('register') }}}">{{{ trans('lang.create_account') }}}</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <a href="{{{ route('register') }}}" class="wt-btn">JON NOW</a>
                        </div>

                    </li>
                    <li class="nav-item">

                        <a class="nav-link joinin-btn" href="{{ route('register') }}">Join Now</a>

                    </li> -->
                    @endguest

                    @auth
                    

                        @php
                            $user = !empty(Auth::user()) ? Auth::user() : '';
                            $role = !empty($user) ? $user->getRoleNames()->first() : array();
                            $profile = \App\User::find(Auth::user()->id)->profile;
                            $user_image = !empty($profile) ? $profile->avater : '';
                            $employer_job = \App\Job::select('status')->where('user_id', Auth::user()->id)->first();
                            $profile_image = !empty($user_image) ? config('app.aws_se_path').'/uploads/users/'.$user->id.'/'.$user_image : config('app.aws_se_path'). '/' .'images/user-login.png';
                            $payment_settings = \App\SiteManagement::getMetaValue('commision');
                            $payment_module = !empty($payment_settings) && !empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
                            $employer_payment_module = !empty($payment_settings) && !empty($payment_settings[0]['employer_package']) ? $payment_settings[0]['employer_package'] : 'true';
                            $total_hire_agencies = \App\HireAgency::select('is_seen')->where('agency_id', Auth::user()->id)->where('is_seen', 0)->count();

                        @endphp
                        @if( $role === 'admin' || $role === 'company' )
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="{{ route('companyHiringRequests') }}">
                                    <i class="fa fa-bell fa-2x"></i>
                                    <span class="badge badge-warning" style="position: absolute; right: -5px; top: 0px;">{{$total_hire_agencies }}</span>
                                </a>
                            </li>
                           
                        @endif
                    <li  class="nav-item">
                        <div class="wt-userlogedin back-end-header">
                            <div class="d-flex align-items-center">
                                <img src="{{{ (Helper::gets3Image('uploads/users/' . Auth::user()->id, $profile->avater, '' , 'user.jpg')) }}}" alt="{{{ trans('lang.user_avatar') }}}" width="40px" class="img-fluid rounded-circle"/> 
                                <div class="ml-2">
                                    <h5 class="mb-0">{{{ Helper::getUserName(Auth::user()->id) }}} <i class="bi-chevron-down float-right ml-3" style="font-size:22px;"></i></h5>
                                </div>
                            </div>
                            @include('back-end.includes.profile-menu')
                        </div>
                    </li>
                   
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>

@endif