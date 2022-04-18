@if (!empty($jobs) && $jobs->count() > 0)
@foreach ($jobs as $job)
    @php
        $job = \App\Job::find($job->id);
        //$description = strip_tags(stripslashes($job->description));
        $description = strip_tags(stripslashes($job->description));
        $featured_class = $job->is_featured == 'true' ? 'wt-featured' : '';
        $user = Auth::user() ? \App\User::find(Auth::user()->id) : '';
        $project_type  = Helper::getProjectTypeList($job->project_type);
    @endphp
    <div class="wt-userlistinghold wt-userlistingholdvtwo {{$featured_class}}">
        @if ($job->is_featured == 'true')
            <span class="wt-featuredtag"><img src="images/featured.png" alt="{{{ trans('ph.is_featured') }}}" data-tipso="Plus Member" class="template-content tipso_style"></span>
        @endif
        <div class="wt-userlistingcontent">
            <div class="wt-contenthead">
                <div class="wt-title">
                    @if (!empty($job->employer->slug))
                        <a href="{{ url('profile/'.$job->employer->slug) }}"><i class="fa fa-check-circle"></i> {{{ Helper::getUserName($job->employer->id) }}}</a>
                    @endif
                    <h2><a href="{{ url('job/'.$job->slug) }}">{{{$job->title}}}</a></h2>
                </div>
                <div class="wt-description">
                    <p>{{ str_limit(html_entity_decode($description), 200) }}</p>
                </div>
                @if (!empty($job->skills))
                    <div class="wt-tag wt-widgettag">
                        @foreach ($job->skills as $skill )
                            <a href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{$skill->title}}</a>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="wt-viewjobholder">
                <ul>
                    @if (!empty($job->project_level))
                        <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>{{{Helper::getProjectLevel($job->project_level)}}}</span></li>
                    @endif
                    @if (!empty($job->location->title))
                        <li><span><img src="{{{asset(Helper::getLocationFlag($job->location->flag))}}}" alt="{{{ trans('lang.location') }}}"> {{{ $job->location->title }}}</span></li>
                    @endif
                    <li><span><i class="far fa-folder wt-viewjobfolder"></i>{{{ trans('lang.type') }}} {{{$project_type}}}</span></li>
                    <li><span><i class="far fa-clock wt-viewjobclock"></i>{{{ Helper::getJobDurationList($job->duration)}}}</span></li>
                    <li><span><i class="fa fa-tag wt-viewjobtag"></i>{{{ trans('lang.job_id') }}} {{{$job->code}}}</span></li>
                    @if (!empty($user->profile->saved_jobs) && in_array($job->id, unserialize($user->profile->saved_jobs)))
                        <li style=pointer-events:none;><a href="javascript:void(0);" class="wt-clicklike wt-clicksave"><i class="fa fa-heart"></i> {{trans("lang.saved")}}</a></li>
                    @else
                        <li>
                            <a href="javascrip:void(0);" class="wt-clicklike" id="job-{{$job->id}}" @click.prevent="add_wishlist('job-{{$job->id}}', {{$job->id}}, 'saved_jobs', '{{trans("lang.saved")}}')" v-cloak>
                                <i class="fa fa-heart"></i>
                                <span class="save_text">{{ trans('lang.click_to_save') }}</span>
                            </a>
                        </li>
                    @endif
                    <li class="wt-btnarea"><a href="{{url('job/'.$job->slug)}}" class="wt-btn">{{{ trans('lang.view_job') }}}</a></li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
@endif