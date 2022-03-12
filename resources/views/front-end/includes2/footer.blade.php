@php
 $footer_how_work=App\Helper::getfooterHowWork();
@endphp
<section class="theme_bg_dark">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 pb-5 text-center">
                    <h2 class="text-white">HOW, IT ACTUALLY WORKS!</h2>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                      @if( isset($footer_how_work->about_talends_image) )
                        <img src="{{asset('uploads/home-pages/footer/'.$footer_how_work->about_talends_image)}}" alt="">
                        @endif

                       {!!  $footer_how_work->banner_description  ?? ''  !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">

                    @if(isset( $footer_how_work->talends_project_image) )
                        <img src="{{asset('uploads/home-pages/footer/'.$footer_how_work->talends_project_image)}}" alt="">
                        @endif                        
                        {!!  $footer_how_work->features_text ?? '' !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                    @if(  isset($footer_how_work->talends_work_image) )
                        <img src="{{asset('uploads/home-pages/footer/'.$footer_how_work->talends_work_image)}}" alt="">
                        @endif 
                            {!!  $footer_how_work->services_description ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


    @php
        $skills_categories=App\Helper::getSkillsCategories();
        @endphp
        <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 pb-3">
                    <ul class="nav nav-tabs products_tabs" role="tablist">
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
                            <div class="services_list_box"><a href="#">{{ $category['title'] }}</a></div>
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
                            <div class="services_list_box"><a href="#">{{ $category['title'] }}</a></div>
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
                            <div class="services_list_box"><a href="#">{{ $category['title'] }}</a></div>
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
    <section class="join_community pb-0">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-8 pb-3 align-self-center">
                {!!  $join_community->banner_description  ?? ''  !!}
                     <a href="{{route('findTalends')}}" class="theme_btn">Find Freelancer</a>
                    <a href="#" class="theme_btn inverse_btn ml-3">Find Internees</a>
                </div>
                <div class="col-md-4">
                @if(isset( $join_community->about_talends_image) )
                        <img src="{{asset('uploads/home-pages/footer/'.$join_community->about_talends_image)}}" class="w-100" alt="">
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
        @endphp


    <footer>
        <div class="container">
            <div class="row py-30">
                <div class="col-md-3">
                    <h4> {{ $footer_menus_1['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_1['menu_items']))
                        @foreach($footer_menus_1['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>

 
                <div class="col-md-3">
                    <h4> {{ $footer_menus_2['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_2['menu_items']))
                        @foreach($footer_menus_2['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4> {{ $footer_menus_3['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_3['menu_items']))
                        @foreach($footer_menus_3['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4> {{ $footer_menus_4['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_4['menu_items']))
                        @foreach($footer_menus_4['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
            </div>
            <div class="row footer_bottom">
                <div class="col-md-6">
                    <p>© 2021 All Rights Reserved. </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline mb-0">
                        <li class="px-2"> <a href="javascript:;" target="_self">Privacy Policy</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>