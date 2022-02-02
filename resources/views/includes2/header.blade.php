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
                <div class="collapse navbar-collapse" id="theme_menu_toggle">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link main_menu_link has_dropdown" href="javascript:void(0)">Find Talend <i
                                    class="fas fa-angle-down"></i></a>
                            <div class="nav_dropdown" aria-hidden="false" id="dropdown3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav nav-tabs mega_menu_tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#menutabs_ms_d_365">
                                                        Post a job and hire a pro
                                                        <br>
                                                        <small>Talent Marketplace</small>                                                                                                                                                                
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menutabs_ms_b_solution">
                                                        Browse and buy projects
                                                        <br>
                                                        <small>Project Catalog</small>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menutabs_ms_power_platform">
                                                        Let us find you the right talent
                                                        <br>
                                                        <small>Talent Scout</small>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('findTalents') }}">
                                                        Find Talents
                                                        <br>
                                                        <small>Talent Scout</small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div id="menutabs_ms_d_365" class="tab-pane active">
                                                    <div class="services_list_box_row">
                                                        <div class="services_list_box"><a href="#">Data Entry Specialists</a></div>
                                                        <div class="services_list_box"><a href="#">Video Editors</a></div>
                                                        <div class="services_list_box"><a href="#">Data Analyst</a></div>
                                                        <div class="services_list_box"><a href="#">Shopify Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Ruby on Rails Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Android Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Bookkeeper</a></div>
                                                        <div class="services_list_box"><a href="#">Content Writer</a></div>
                                                        <div class="services_list_box"><a href="#">Copywriter</a></div>
                                                        <div class="services_list_box"><a href="#">Database Administrator</a></div>
                                                        <div class="services_list_box"><a href="#">Data Scientist</a></div>
                                                        <div class="services_list_box"><a href="#">UI Designer</a></div>
                                                        <div class="services_list_box"><a href="#">UX Designer</a></div>
                                                    </div>
                                                </div>
                                                <div id="menutabs_ms_b_solution" class="tab-pane">
                                                    <div class="services_list_box_row">
                                                        <div class="services_list_box"><a href="#">Database Administrator</a></div>
                                                        <div class="services_list_box"><a href="#">Data Scientist</a></div>
                                                        <div class="services_list_box"><a href="#">Front-End Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Game Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Graphic Designer</a></div>
                                                        <div class="services_list_box"><a href="#">iOS Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Java Developer</a></div>
                                                        <div class="services_list_box"><a href="#">JavaScript Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Logo Designer</a></div>
                                                        <div class="services_list_box"><a href="#">Mobile App Developer</a></div>
                                                        <div class="services_list_box"><a href="#">PHP Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Python Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Resume Writer</a></div>
                                                        <div class="services_list_box"><a href="#">SEO Expert</a></div>
                                                        <div class="services_list_box"><a href="#">Social Media Manager</a></div>
                                                        <div class="services_list_box"><a href="#">Web Designer</a></div>
                                                        <div class="services_list_box"><a href="#">Wordpress Developer</a></div>
                                                    </div>
                                                </div>
                                                <div id="menutabs_ms_power_platform" class="tab-pane">
                                                    <div class="services_list_box_row">
                                                        <div class="services_list_box"><a href="#">Database Administrator</a></div>
                                                        <div class="services_list_box"><a href="#">Data Scientist</a></div>
                                                        <div class="services_list_box"><a href="#">Front-End Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Game Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Graphic Designer</a></div>
                                                        <div class="services_list_box"><a href="#">iOS Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Java Developer</a></div>
                                                        <div class="services_list_box"><a href="#">Technical Writer</a></div>
                                                        <div class="services_list_box"><a href="#">UI Designer</a></div>
                                                        <div class="services_list_box"><a href="#">UX Designer</a></div>
                                                        <div class="services_list_box"><a href="#">Virtual Assistant</a></div>
                                                        <div class="services_list_box"><a href="#">Web Designer</a></div>
                                                        <div class="services_list_box"><a href="#">Wordpress Developer</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link main_menu_link has_dropdown" href="javascript:void(0)">Browse Jobs <i
                                    class="fas fa-angle-down"></i></a>
                            <div class="nav_dropdown" aria-hidden="false" id="dropdown3">
                                <ul class="iconList threeColumns">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <div class="menu_browse_box">
                                                    <a href="{{ route('browseJobs') }}">Ways to earn
                                                        <br>
                                                        <small>Learn why Upwork has the right opportunities for you.</small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="menu_browse_box">
                                                    <a href="{{ route('browseJobs') }}">Find work for your skills
                                                        <br>
                                                        <small>Explore the kind of work available in your field.</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('whyTalends') }}">Why Talends</a>
                        </li>
                        <li class="nav-item menu_green_cta_box nav_item_right">
                            <a class="nav-link" href="{{ route('government') }}">GOVERNMENT</a>
                        </li>
                        <li class="nav-item nav_item_right">
                            <a class="nav-link menu_green_cta" href="">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu_green_cta_trans" href="">Join Now</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>