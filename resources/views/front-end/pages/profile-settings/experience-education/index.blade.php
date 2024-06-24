@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="wt-dbsectionspace wt-haslayout la-ed-freelancer">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                <div class="freelancer-profile" id="user_profile">
                    <div class="preloader-section" v-if="loading" v-cloak>
                        <div class="preloader-holder">
                            <div class="loader"></div>
                        </div>
                    </div>
                   
                    <div class="wt-dashboardbox wt-dashboardtabsholder">
                            @include('front-end.pages.profile-settings.tabs')
                        <div class="wt-tabscontent tab-content">
                            <div class="wt-educationholder" id="wt-education">
                                    <div class="wt-userexperience wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.experience-education.experience')

                                    </div>
                                    <div class="wt-userexperience wt-tabsinfo">
                                    @include('front-end.pages.profile-settings.experience-education.education')

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
