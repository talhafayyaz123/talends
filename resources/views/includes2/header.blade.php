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
                                                    <a href="{{ route('findTalends') }}">
                                                        {{  $category['title'] }}
                                                    </a>
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
                                                    <a href="{{ route('browseJobs') }}">
                                                        {{  $category['title'] }}
                                                    </a>
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
                        <li class="nav-item nav_item_right">
                            <a class="nav-link menu_green_cta" href="">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu_green_cta_trans" href="{{ route('register') }}">Join Now</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>