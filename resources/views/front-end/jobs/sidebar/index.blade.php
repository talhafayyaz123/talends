<aside id="wt-sidebar" class="wt-sidebar">
    <div class="row">
        <div class="col-xl-12 col-md-6">
            <div class="py-3 mb-3">
                <div class="media">
                    <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-money"></i></span>
                    <div class="media-body">
                        <h3 class="text-theme mb-0">{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}</i> {{{ $job->price }}}</h3>
                        <span>{{ trans('lang.client_budget') }}</span>
                    </div>
                </div>
            </div>
        </div>

        @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/wt-jobproposals-widget.blade.php')))
        <div class="col-xl-12 col-md-6">
            @include('extend.front-end.jobs.sidebar.wt-jobproposals-widget')
        </div>
        @else
        <div class="col-xl-12 col-md-6">
            @include('front-end.jobs.sidebar.wt-jobproposals-widget')
        </div>
        @endif

        @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/wt-qrcode-widget.blade.php')))
        <div class="col-xl-12 col-md-6">
            @include('extend.front-end.jobs.sidebar.wt-qrcode-widget')
        </div>
        @else
        <div class="col-xl-12 col-md-6">
            @include('front-end.jobs.sidebar.wt-qrcode-widget')
        </div>
        @endif

        @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/wt-addtofavourite-widget.blade.php')))
        <div class="col-xl-12 col-md-6">
            @include('extend.front-end.jobs.sidebar.wt-addtofavourite-widget')
        </div>
        @else
        <div class="col-xl-12 col-md-6">
            @include('front-end.jobs.sidebar.wt-addtofavourite-widget')
        </div>
        @endif



    </div>

    @if (!empty($job->employer))

        @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/wt-employerinfo-widget.blade.php')))

            @include('extend.front-end.jobs.sidebar.wt-employerinfo-widget')

        @else

            @include('front-end.jobs.sidebar.wt-employerinfo-widget')

        @endif

    @endif

    @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/wt-sharejob-widget.blade.php')))

        @include('extend.front-end.jobs.sidebar.wt-sharejob-widget')

    @else

        @include('front-end.jobs.sidebar.wt-sharejob-widget')

    @endif

    @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/wt-reportjob-widget.blade.php')))

        @include('extend.front-end.jobs.sidebar.wt-reportjob-widget')

    @else

        @include('front-end.jobs.sidebar.wt-reportjob-widget')

    @endif

</aside>

