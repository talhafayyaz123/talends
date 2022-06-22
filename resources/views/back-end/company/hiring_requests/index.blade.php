@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<section class="w-100 py-3">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="bg-white rounded-16 mb-4">
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
            <div class="col-md-4 border-right pr-0" style="background-color: rgb(252,252,252);">
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
                                <a href="javascript:;" onclick="show_detail({{$request->id}})" id="detailBtn_{{$request->id}}" class="btn-link text-white">View Details</a>

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

            @if(!empty($hiring_requests) && $hiring_requests->count() > 0 )
             
            @foreach ($hiring_requests as $request)

                <div class="lead-detail" id="leadDetail_{{$request->id}}" style="display:none ;">
                    <div class="mb-5 px-4">
                        <h4 class="text-white">Company Name</h4>
                        <p class="text-white">{{ $request->company_name }}</p>
                        <h6 class="text-white">Budget : AED {{ $request->budget }}</h6>
                    </div>
                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-white">Name</h4>
                               <span  class="text-white"> {{ $request->full_name }} </span>
                                </div>
                            <div class="col-md-6">
                                <h4 class="text-white">Email</h4>
                                <span  class="text-white">  {{ $request->email }} </span>                          
                             </div>
                        </div>
                    </div>

                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-white">Phone</h4>
                               <span  class="text-white"> {{ $request->phone_number }} </span>
                                </div>
                          
                        </div>
                    </div>
                    <div class="px-4 mb-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-white">Services</h4>
                                <div class="skill-tags">
                            
                            <ul class="text-white">
                               @if(!empty($request->detail))
                               @php
                                foreach(unserialize($request->detail) as $key=>$value){
                                    $skill = \App\Skill::where('id', $value)->first()->title;  @endphp 
                              
                                    <li>{{ $skill }}</li>
                                    @php  }
                               @endphp
    


                                @endif
                               </ul>
                        </div>
                                <button class="btn btn-theme-white px-4 rounded-pill">Accept & Send Messages</button>
                                <button class="btn btn-theme-white px-4 rounded-pill">Reject and Share response with Client</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif
               
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
  function show_detail(id){
    $(".lead-detail").hide();
    $("#leadDetail_"+id).show();
  }
</script>
@endpush