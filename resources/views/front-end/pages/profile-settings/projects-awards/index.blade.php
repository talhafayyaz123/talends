@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="wt-dbsectionspace wt-haslayout la-aw-freelancer">
        <div class="freelancer-profile" id="user_profile">
            <div class="preloader-section" v-if="loading" v-cloak>
                <div class="preloader-holder">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="wt-dashboardbox wt-dashboardtabsholder">
                    @include('front-end.pages.profile-settings.tabs')

                        <div class="wt-tabscontent tab-content">
                           
                            <div class="wt-awardsholder" id="wt-awards">
                                    <div class="wt-addprojectsholder wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.projects-awards.projects')

                                    </div>
                                    <div class="wt-addprojectsholder wt-tabsinfo la-awards">
                                    @include('front-end.pages.profile-settings.projects-awards.awards') 

                                    </div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bootstrap_script')
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
@stop