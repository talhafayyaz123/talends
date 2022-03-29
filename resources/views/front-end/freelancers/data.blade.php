
@if (!empty($users))
    @foreach ($users as $key => $freelancer)
        @php
            $user_image = !empty($freelancer->profile->avater) ?
                            '/uploads/users/'.$freelancer->id.'/'.$freelancer->profile->avater :
                            'images/user.jpg';
            $flag = !empty($freelancer->location->flag) ? Helper::getLocationFlag($freelancer->location->flag) :
                    '/images/img-01.png';
            $feedbacks = \App\Review::select('feedback')->where('receiver_id', $freelancer->id)->count();
            $avg_rating = App\Review::where('receiver_id', $freelancer->id)->sum('avg_rating');
            $rating  = $avg_rating != 0 ? round($avg_rating/\App\Review::count()) : 0;
            $reviews = \App\Review::where('receiver_id', $freelancer->id)->get();
            $stars  = $reviews->sum('avg_rating') != 0 ? (($reviews->sum('avg_rating')/$feedbacks)/5)*100 : 0;
            $average_rating_count = !empty($feedbacks) ? $reviews->sum('avg_rating')/$feedbacks : 0;
            $verified_user = \App\User::select('user_verified')->where('id', $freelancer->id)->pluck('user_verified')->first();
            $save_freelancer = !empty(auth()->user()->profile->saved_freelancer) ? unserialize(auth()->user()->profile->saved_freelancer) : array();
            $badge = Helper::getUserBadge($freelancer->id);
            if (!empty($enable_package) && $enable_package === 'true') {
                $feature_class = (!empty($badge) && $freelancer->expiry_date >= $current_date) ? 'wt-featured' : 'wt-exp';
                $badge_color = !empty($badge) ? $badge->color : '';
                $badge_img  = !empty($badge) ? $badge->image : '';
            } else {
                $feature_class = 'wt-exp';
                $badge_color = '';
                $badge_img    = '';
            }
        @endphp
        <div class="wt-userlistinghold {{ $feature_class }}">
            @if(!empty($enable_package) && $enable_package === 'true')
                @if ($freelancer->expiry_date >= $current_date && !empty($freelancer->badge_id))
                    <span class="wt-featuredtag" style="border-top: 40px solid {{ $badge_color }};">
                        @if (!empty($badge_img))
                            <img src="{{{ asset(Helper::getBadgeImage($badge_img)) }}}" alt="{{ trans('lang.is_featured') }}" data-tipso="Plus Member" class="template-content tipso_style">
                        @else
                            <i class="wt-expired fas fa-bold"></i>
                        @endif
                    </span>
                @endif
            @endif
            <figure class="wt-userlistingimg">
                <img src="{{{ asset(Helper::getImageWithSize('uploads/users/'.$freelancer->id, $freelancer->profile->avater, 'listing')) }}}" alt="{{ trans('lang.img') }}">
            </figure>
            <div class="wt-userlistingcontent">
                <div class="wt-contenthead">
                    <div class="wt-title">
                        <a href="{{{ url('profile/'.$freelancer->slug) }}}">
                            @if ($verified_user == 1)
                                <i class="fa fa-check-circle"></i>
                            @endif
                            {{{ Helper::getUserName($freelancer->id) }}}
                        </a>
                        @if (!empty($freelancer->profile->tagline))
                            <h2><a href="{{{ url('profile/'.$freelancer->slug) }}}">{{{ $freelancer->profile->tagline }}}</a></h2>
                        @endif
                    </div>
                    <ul class="wt-userlisting-breadcrumb">
                        @if (!empty($freelancer->profile->hourly_rate))
                            <li><span><i class="far fa-money-bill-alt"></i>
                                {{ (!empty($symbol['symbol'])) ? $symbol['symbol'] : '$' }}{{{ $freelancer->profile->hourly_rate }}} {{ trans('lang.per_hour') }}</span>
                            </li>
                        @endif
                        @if (!empty($freelancer->location))
                            <li><span><img src="{{{ asset($flag)}}}" alt="Flag"> {{{ !empty($freelancer->location->title) ? $freelancer->location->title : '' }}}</span></li>
                        @endif
                        @if (in_array($freelancer->id, $save_freelancer))
                            <li class="wt-btndisbaled">
                                <a href="javascrip:void(0);" class="wt-clicksave wt-clicksave">
                                    <i class="fa fa-heart"></i>
                                    {{ trans('lang.saved') }}
                                </a>
                            </li>
                        @else
                            <li v-cloak>
                                <a href="javascrip:void(0);" class="wt-clicklike" id="freelancer-{{$freelancer->id}}" @click.prevent="add_wishlist('freelancer-{{$freelancer->id}}', {{$freelancer->id}}, 'saved_freelancer', '{{trans("lang.saved")}}')">
                                    <i class="fa fa-heart"></i>
                                    <span class="save_text">{{ trans('lang.click_to_save') }}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="wt-rightarea">
                    <span class="wt-stars"><span style="width: {{ $stars }}%;"></span></span>
                    <span class="wt-starcontent">
                        {{{ round($average_rating_count) }}}<sub>{{ trans('lang.5') }}</sub> <em>({{{ $feedbacks }}} {{ trans('lang.feedbacks') }})</em>
                    </span>
                </div>
            </div>
            @if (!empty($freelancer->profile->description))
                <div class="wt-description">
                    <p>{!! html_entity_decode(nl2br(e(str_limit($freelancer->profile->description, 180)))) !!}</p>
                </div>
            @endif
            @if (!empty($freelancer->skills))
                <div class="wt-tag wt-widgettag">
                    @foreach($freelancer->skills as $skill)
                        <a href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
@endif
