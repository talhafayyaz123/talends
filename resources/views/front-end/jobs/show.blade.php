@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ?

'extend.front-end.master':

 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )

@section('title'){{ $job->title }} @stop

@section('description', strip_tags( html_entity_decode($job->description)))

@section('content')

    @php $breadcrumbs = Breadcrumbs::generate('jobDetail',$job->slug); @endphp

    @if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php')))

        @include('extend.front-end.includes.inner-banner', 

            ['title' => trans('lang.job_detail'), 'inner_banner' => $job_inner_banner, 'show_banner' => 'true' ]

        )

    @else 

        @include('front-end.includes.inner-banner', 

            ['title' =>  trans('lang.job_detail'), 'inner_banner' => $job_inner_banner, 'show_banner' => 'true' ]

        )

    @endif

    <div class="wt-haslayout wt-main-section">
        <div class="container-xl">
            <div class="job-single wt-haslayout">
                <div id="jobs" class="wt-twocolumns wt-haslayout">
                    @if (Session::has('error'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flash_msg">
                                <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (!empty($job))
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 mb-3">
                            <div class="position-relative py-4">
                                @if (!empty($job->is_featured) && $job->is_featured === 'true')
                                    <span class="wt-featuredtag"><img src="{{{ config('app.aws_se_path'). '/' .'images/featured.png' }}}" alt="{{ trans('lang.img') }}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                @endif
                                @if (
                                    !empty($job->professional_level) ||
                                    !empty($job->title) ||
                                    !empty($location['title'])  ||
                                    !empty($job->project_type) ||
                                    !empty($job->duration)
                                    )
                                    <div class="wt-proposalhead">
                                        @if (!empty($job->title))
                                            <h2>{{{ $job->title }}}</h2>
                                        @endif
                                        @if (
                                            !empty($job->professional_level) ||
                                            !empty($location['title'])  ||
                                            !empty($job->price) ||
                                            !empty($job->duration)
                                            )
                                        
                                            <ul class="list-group list-group-horizontal-lg">
                                                @if (!empty($job->project_level))
                                                    <li class="list-group-item p-0 border-0 pr-3">
                                                        <div class="media mb-2 align-items-center">
                                                            <img src="{{ config('app.aws_se_path'). '/' .'images/job-icons/job-level.png'}}" class="img-fluid mr-2"/>
                                                            <div class="media-body">
                                                                {{{Helper::getProjectLevel($job->project_level)}}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if (!empty($job->location->title))
                                                    <li class="list-group-item p-0 border-0 pr-3">
                                                        <div class="media mb-2 align-items-center">
                                                            <img src="{{{asset(Helper::getLocationFlag($job->location->flag))}}}" class="img-fluid mr-2" alt="{{ trans('lang.img') }}"/>
                                                            <div class="media-body">
                                                                {{{ $job->location->title }}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if (!empty($job->project_type))
                                                    <li class="list-group-item p-0 border-0 pr-3">
                                                        <div class="media mb-2 align-items-center">
                                                            <img src="{{ config('app.aws_se_path'). '/' .'images/job-icons/job-type.png'}}" class="img-fluid mr-2"/>
                                                            <div class="media-body">
                                                                {{ trans('lang.type') }} {{{$project_type}}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if (!empty($job->duration))
                                                    <li class="list-group-item p-0 border-0 pr-3">
                                                        <div class="media mb-2 align-items-center">
                                                            <img src="{{ config('app.aws_se_path'). '/' .'images/job-icons/job-duration.png'}}" class="img-fluid mr-2">
                                                            <div class="media-body">
                                                                {{ trans('lang.duration') }} {{{ Helper::getJobDurationList($job->duration) }}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                                {{-- @if (!empty($job->price))
                                                    <li class="list-group-item p-0 border-0">
                                                        <div class="media mb-2 align-items-center">
                                                            <i class="wt-budget">{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}</i>
                                                            <div class="media-body">
                                                            {{{ $job->price }}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif --}}
                                            </ul>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 mb-3">
                            <a href="javascript:void(0);" @click.prevent="check_auth('{{{ url('job/proposal/'.$job->slug) }}}')" class="btn btn-sm btn-theme btn-block">{{{ trans('lang.send_propsal') }}}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-8 col-lg-7">
                            <div class="wt-projectdetail-holder">
                                @if (!empty($job->description))
                                    <div class="wt-projectdetail">
                                        <div class="wt-title">
                                            <h3>{{ trans('lang.project_detail') }}</h3>
                                        </div>
                                        <div class="wt-description">
                                            @php echo htmlspecialchars_decode(stripslashes($job->description)); @endphp
                                        </div>
                                    </div>

                                @endif

                                @if (!empty($job->skills) && $job->skills->count() > 0)

                                    <div class="wt-skillsrequired">

                                        <div class="wt-title">

                                            <h3>{{ trans('lang.skills_req') }}</h3>

                                        </div>

                                        <div class="wt-tag wt-widgettag">

                                            @foreach ($job->skills as $skill)

                                                <a href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>

                                            @endforeach

                                        </div>

                                    </div>

                                @endif

                                @if (!empty($attachments) && $job->show_attachments === 'true' && !empty($job->employer))

                                    <div class="wt-attachments">

                                        <div class="wt-title">

                                            <h3>{{ trans('lang.attachments') }}</h3>

                                        </div>

                                        <ul class="wt-attachfile">                                                

                                            @foreach ($attachments as $attachment)

                                                <li>

                                                    <span>{{{Helper::formateFileName($attachment)}}}</span>

                                                    <em>

                                                        @if (Storage::disk('s3')->exists('uploads/jobs/'.$job->employer->id.'/'.$attachment))

                                                            {{ trans('lang.file_size') }} {{{Helper::bytesToHuman(Storage::disk('s3')->size('uploads/jobs/'.$job->employer->id.'/'.$attachment))}}}

                                                        @endif

                                                        @if (!empty($attachment) && !empty($job->user_id))

                                                            <a href="{{route('getfile', ['type'=>'jobs','attachment'=> $attachment,'id'=> $job->user_id])}}"><i class="lnr lnr-download"></i></a>

                                                        @endif

                                                    </em>

                                                </li>

                                            @endforeach

                                        </ul>

                                    </div>

                                @endif

                            </div>
                        </div>
                    @endif
                        <div class="col-lg-12 col-xl-4 col-lg-5">
                            @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/index.blade.php')))
                                @include('extend.front-end.jobs.sidebar.index')
                            @else
                                @include('front-end.jobs.sidebar.index')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

    <script>

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

        })

    </script>

@endpush

