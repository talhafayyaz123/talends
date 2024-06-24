@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')


@section('content')
    <div class="wt-dbsectionspace wt-haslayout la-ps-freelancer">
        <div class="freelancer-profile" id="user_profile">
            <div class="preloader-section" v-if="loading" v-cloak>
                <div class="preloader-holder">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="wt-dashboardbox wt-dashboardtabsholder">
                    @include('front-end.pages.profile-settings.tabs')
                        <div class="wt-tabscontent tab-content">
                          
                            <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                                    <div class="wt-yourdetails wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.personal-detail.detail')
                                    
                                    </div>
                                    <div class="wt-profilephoto wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.personal-detail.profile_photo') 

                                    </div>
                                    @if (!empty($options) && $options['banner_option'] === 'true')
                                        <div class="wt-bannerphoto wt-tabsinfo">
                                 @include('front-end.pages.profile-settings.personal-detail.profile_banner')
                                              
                                   
                                        </div>
                                    @endif
                                    <div class="wt-location wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.personal-detail.location')
                                    
                                    </div>
                                    <div class="wt-skills la-skills-holder wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.personal-detail.skill')
                                    
                                    
                                    </div>
                                    <div class="wt-videos-holder wt-tabsinfo la-footer-setting">
                                    @include('front-end.pages.profile-settings.personal-detail.videos') 
                                    </div>
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
