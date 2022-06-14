@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<section class="w-100 py-3">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="bg-theme rounded-16 mb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-dark text-white p-3">
                    <div class="media align-items-center pl-md-5">
                        <i class="fa fa-database fa-3x text-theme"></i>
                        <div class="media-body ml-3">
                            <h4 class="text-white">Welcome,</h4>
                            <p class="text-white">Contact Your Customers with Quick & Best possible response to Gurantee your Project!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border-right pr-0">
                <div class="leads-list-container">
                    @if(!empty($hiring_requests) && $hiring_requests->count() > 0 )
                        @foreach ($hiring_requests as $request)
                            @php
                                $user = \App\User::where('id', $request->agency_id)->first();
                            @endphp
                            <div class="border-bottom mb-4 p-4">
                                <a href="{{{ url('profile/'.$user->slug) }}}" class="text-white"><i class="fa fa-check-circle"></i>&nbsp;{{$request->full_name}}</a>
                                <h4 class="text-white">{{$request->company_name}}</h4>
                                <p class="small text-white mb-2"><i class="fa fa-envelope" aria-hidden="true"></i> {{$request->email}}</p>
                                <p class="small text-white"><i class="fas fa-phone"></i> {{$request->phone_number}}</p>
                                @if($role=='admin')
                                    <!-- <a href="{{{ url('admin/hiring_request_detail/'.$request->id) }}}" class="btn-link text-white">View Details</a> -->
                                    <a href="javascript:;" id="detailBtn" class="btn-link text-white">View Details</a>
                                    <a href="javascript:;" id="detailBtn2" class="btn-link text-white">View Details2</a>
                                @else
                                    <a href="{{{ url('company/hiring_request_detail/'.$request->id) }}}" class="btn-link text-white">View Details</a>
                                @endif
                            </div>
                        @endforeach
                    @else
                    @if (file_exists(resource_path('views/extend/errors/no-record.blade.php')))
                        @include('extend.errors.no-record')
                    @else
                        @include('errors.no-record')
                    @endif
                    @endif
                </div>
                @if ( method_exists($hiring_requests,'links') )
                    {{ $hiring_requests->links('pagination.custom') }}
                @endif
            </div>
            <div class="col-md-8 pt-4">
                <div class="lead-detail" id="leadDetail" style="display:none ;">
                    <div class="mb-5 px-4">
                        <h4 class="text-white">Majid Al Futtaim</h4>
                        <p class="text-white">Mobile Application Development Additional Details/ Applications - business/ Required: Changes to that App that can do ecommerce</p>
                        <h6 class="text-white">Dubai <i class="bi-geo-alt-fill"></i></h6>
                    </div>
                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="text-white">Phone</label>
                                <input type="text" class="form-control rounded-pill" placeholder="Phone Number"/>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="text-white">Email</label>
                                <input type="email" class="form-control rounded-pill" placeholder="Email"/>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-white">Project Details</h4>
                                <p class="text-white mb-4">We would like to develope an app We would like to develope an app We would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an app We would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an app We would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an app</p>
                                <button class="btn btn-theme-white px-4 rounded-pill">Accept & Send Messages</button>
                                <button class="btn btn-theme-white px-4 rounded-pill">Reject and Share response with Client</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lead-detail" id="leadDetail2" style="display:none ;">
                    <div class="mb-5 px-4">
                        <h4 class="text-white">Majid Jeera</h4>
                        <p class="text-white">Mobile Application Development Additional Details/ Applications - business/ Required: Changes to that App that can do ecommerce</p>
                        <h6 class="text-white">Dubai <i class="bi-geo-alt-fill"></i></h6>
                    </div>
                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="text-white">Phone</label>
                                <input type="text" class="form-control rounded-pill" placeholder="Phone Number"/>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="text-white">Email</label>
                                <input type="email" class="form-control rounded-pill" placeholder="Email"/>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-white">Project Details</h4>
                                <p class="text-white mb-4">We would like to develope an app We would like to develope an app We would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an app We would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an app We would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an appWe would like to develope an app</p>
                                <button class="btn btn-theme-white px-4 rounded-pill">Accept & Send Messages</button>
                                <button class="btn btn-theme-white px-4 rounded-pill">Reject and Share response with Client</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="wt-freelancerholder">
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
        
        @if ( method_exists($hiring_requests,'links') )
        {{ $hiring_requests->links('pagination.custom') }}
        @endif -->
    </div>
</div>
</section>
@endsection

@push('scripts')
<script>
    $("#detailBtn").click(function(){
        $("#leadDetail").show();
    });
    $("#detailBtn2").click(function(){
        $("#leadDetail2").show();
        $("#leadDetail").hide();
    });
</script>
@endpush