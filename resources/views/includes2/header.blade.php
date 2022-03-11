<header>
        <div class="container p-0">
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
                <div class="collapse navbar-collapse" id="theme_menu_toggle">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                            <a class="nav-link main_menu_link has_dropdown" href="javascript:void(0)">{!!  $header_menus['title4']  ?? ''  !!} <i
                                    class="fas fa-angle-down"></i></a>
                            <div class="nav_dropdown" aria-hidden="false" id="dropdown3">
                                <ul class="iconList threeColumns">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                        @if(isset( $header_menus['sub_menu_item2'])  &&   !empty($header_menus['sub_menu_item2']) )   
                            @foreach($header_menus['sub_menu_item2'] as $key =>$category)  
                            
                            <div class="col-md-3">
                           
                            <div class="menu_browse_box">
                                @if($category['url']!='#' &&  Route::has($category['url'])  )
                                <a href="{{ route($category['url'])  }}">
                                    {{  $category['title'] }}
                                </a>
                                @else
                                <a href="{{ $category['url'] }}">
                                    {{  $category['title'] }}
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
                            <a class="nav-link main_menu_link has_dropdown" href="javascript:void(0)">{!!  $header_menus['title3']  ?? ''  !!} <i
                                    class="fas fa-angle-down"></i></a>
                            <div class="nav_dropdown" aria-hidden="false" id="dropdown3">
                                <ul class="iconList threeColumns">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                        @if(isset( $header_menus['sub_menu_item1'] )  && !empty($header_menus['sub_menu_item1'])  )  
                            @foreach($header_menus['sub_menu_item1'] as $key =>$category)  
                            
                          
                            <div class="col-md-3">
                                                <div class="menu_browse_box">


                                                @if($category['url']!='#'  &&  Route::has($category['url']) )
                                                    <a href="{{ route($category['url'])  }}">
                                                        {{  $category['title'] }}
                                                    </a>
                                                    @else
                                                    <a href="{{ $category['url'] }}">
                                                        {{  $category['title'] }}
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
                            <a class="nav-link" href="{{ route('whyTalends') }}">{!!  $header_menus['title2']  ?? ''  !!}</a>
                        </li>
                        <li class="nav-item menu_green_cta_box nav_item_right">
                            <a class="nav-link" href="{{ route('government') }}">  {!!  $header_menus['title1']  ?? ''  !!}</a>
                        </li>
                        @guest
                        <li class="nav-item nav_item_right">
                            <a class="nav-link menu_green_cta" href="{{ route('login') }}">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu_green_cta_trans" href="{{ route('register') }}">Join Now</a>
                        </li>
                       @endguest

                       @auth
                    <li class="nav-item">
                    
                            @php
                                $user = !empty(Auth::user()) ? Auth::user() : '';
                                $role = !empty($user) ? $user->getRoleNames()->first() : array();
                                $profile = \App\User::find(Auth::user()->id)->profile;
                                $user_image = !empty($profile) ? $profile->avater : '';
                                $employer_job = \App\Job::select('status')->where('user_id', Auth::user()->id)->first();
                                $profile_image = !empty($user_image) ? '/uploads/users/'.$user->id.'/'.$user_image : 'images/user-login.png';
                                $payment_settings = \App\SiteManagement::getMetaValue('commision');
                                $payment_module = !empty($payment_settings) && !empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
                                $employer_payment_module = !empty($payment_settings) && !empty($payment_settings[0]['employer_package']) ? $payment_settings[0]['employer_package'] : 'true';
                            @endphp
                            
                                <div class="wt-userlogedin">
                                    <figure class="wt-userimg">
                                        <img src="{{{ asset(Helper::getImage('uploads/users/' . Auth::user()->id, $profile->avater, '' , 'user.jpg')) }}}" alt="{{{ trans('lang.user_avatar') }}}">
                                    </figure>
                                    <div class="wt-username">
                                        <h3>{{{ Helper::getUserName(Auth::user()->id) }}}</h3>
                                        <span>{{{ !empty(Auth::user()->profile->tagline) ? str_limit(Auth::user()->profile->tagline, 26, '') : Helper::getAuthRoleName() }}}</span>
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