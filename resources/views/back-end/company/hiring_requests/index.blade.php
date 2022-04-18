@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="wt-dashboardbox">
        <div class="wt-dashboardboxtitle">
            <h2>Hiring Requests</h2>
        </div>
        <div class="wt-dashboardboxcontent wt-jobdetailsholder">
            <div class="wt-freelancerholder">
                @if(!empty($hiring_requests) && $hiring_requests->count() > 0 )
                <div class="wt-managejobcontent wt-verticalscrollbar mCustomScrollbar _mCS_1">
                @foreach ($hiring_requests as $request)

                @php
                $user = \App\User::where('id', $request->agency_id)->first();
                @endphp
                     <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                        <span class="wt-featuredtag"><img src="{{{ asset('images/featured.png') }}}" alt="Featured" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
                        <div class="wt-userlistingcontent wt-userlistingcontentvtwo">
                            <div class="wt-contenthead">
                                <div class="wt-title">
                                    <a href="{{{ url('profile/'.$user->slug) }}}"><i class="fa fa-check-circle"></i>&nbsp;{{$request->full_name}}</a>
                                    <h2>{{$request->company_name}}</h2>
                                </div>
                                <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                    <li><span class="wt-dashboraddoller"><i class="fa fa-envelope" aria-hidden="true"></i> {{$request->email}}</span></li>
                                    <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="fas fa-phone"></i> {{$request->phone_number}}</a></li>
                                </ul>
                            </div>
                            <div class="wt-rightarea">
                                <div class="wt-btnarea">
                                @if($role=='admin')
                                    <a href="{{{ url('admin/hiring_request_detail/'.$request->id) }}}" class="wt-btn">View Details</a>
                                @else
                                <a href="{{{ url('company/hiring_request_detail/'.$request->id) }}}" class="wt-btn">View Details</a>

                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                @if (file_exists(resource_path('views/extend/errors/no-record.blade.php')))
                @include('extend.errors.no-record')
                @else
                @include('errors.no-record')
                @endif
                @endif
            </div>
        </div>
        @if ( method_exists($hiring_requests,'links') )
        {{ $hiring_requests->links('pagination.custom') }}
        @endif
    </div>
</div>
@endsection