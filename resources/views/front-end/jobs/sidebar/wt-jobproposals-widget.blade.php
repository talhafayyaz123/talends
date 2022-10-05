@php $proposals_count = !empty($job->proposals) ? $job->proposals->count() : 0; @endphp

        <div class="py-3 mb-3">
            <div class="media">
                <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper"></i></span>
                <div class="media-body">
                    <h3 class="text-theme mb-0">{{{ $proposals_count }}}</h3>
                    <p class="mb-0">{{ trans('lang.proposals_received') }}</p>
                    <p class="mb-0"><em>{{ Carbon\Carbon::now()->format('M d Y') }}</em></p>
                </div>
            </div>
        </div>

