@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<section class="wt-haslayout wt-dbsectionspace wt-insightuser" id="dashboard">
    @if (Session::has('message'))
    <div class="flash_msg">
        <flash_messages :message_class="'success'" :time='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
    </div>
    @php session()->forget('message'); @endphp
    @endif


    @if (Session::has('error'))
    <div class="flash_msg">
        <flash_messages :message_class="'error'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
    </div>
    @php session()->forget('error'); @endphp
    @endif



    @if( Request::get('paytab_error')==1)
    <div class="flash_msg">
        <div class="alert alert-info">Payment Credentials not correct.</div>

    </div>
    @endif



    <div class="bg-theme p-4 rounded-16">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white mb-0">Welcome {{ Auth::user()->profile->company_name }}</h1>
                <p class="text-white">{{ date('d-M-Y',time()) }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="dwidget-card">
                    <div class="d-flex mb-4 align-items-center">
                        {{ Helper::getImages('uploads/settings/icon',$latest_proposals_icon, 'layers') }}
                        <h4 class="ml-3">{{ Auth::user()->profile->company_name }}</h4>
                    </div>
                    <p class="mb-0">Your Profile is {{Helper::getProfileCompleteRatio()}}% complete.</p>
                    <div class="progress mb-5" style="height: 2px;">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Completing your profile is a great way to attract more customer</p>
                    <a href="{{  route('companyProfile') }}" class="btn btn-link font-weight-bold text-secondary">EDIT PROFILE</a>
                </div>
                <div class="dwidget-card" style="min-height:362px;">
                    <div class="d-flex mb-4 align-items-center">
                        {{ Helper::getImages('uploads/settings/icon',$latest_proposals_icon, 'layers') }}
                        <h4 class="ml-3">Help and Advice</h4>
                    </div>
                    <p>We response within within very short time</p>
                    <p class="mb-5">Email : Agencyhelp@talends.com <br />Call : +971 52 768 4867</p>
                    <p class="font-weight-bold text-secondary pt-5 mb-0">Open 24 hours a day, 7 days a week</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dwidget-card">
                    <div style="max-height:252px;overflow-y:auto ;">
                        <div class="d-flex mb-4 align-items-center">
                            {{ Helper::getImages('uploads/settings/icon',$latest_proposals_icon, 'layers') }}
                            <h4 class="ml-3">Leads Preferences</h4>
                        </div>
                        <p>Services & Skills</p>
                        <ul>
                            @if(isset($skills))
                            @foreach($skills as $skill)
                            <li>{{$skill->skill->title}}</li>
                            @endforeach
                            @endif

                        </ul>
                        <p>You’re receiving customers within </p>
                        <small class="font-weight-bold text-secondary mb-4 d-block"><i class="bi-geo-alt-fill"></i> {{ Auth::user()->location->title ?? '' }}</small>
                        <a href="{{  route('companyProfile') }}" class="btn btn-link font-weight-bold text-secondary">Edit Settings</a>
                    </div>
                </div>
                <div class="dwidget-card">
                    <div style="height:312px ;overflow-y:auto">
                        <div class="d-flex mb-4 align-items-center">
                            {{ Helper::getImages('uploads/settings/icon',$latest_proposals_icon, 'layers') }}
                            <h4 class="ml-3">Message</h4>
                        </div>
                        <p class="mb-5">You’ve 100 Unreaad Messages Please Respond</p>
                        <!-- <a href="javascript:;" class="btn btn-link font-weight-bold text-secondary">EDIT PREFERENCES</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dwidget-card" style="min-height:688px;">
                    <div class="d-flex mb-4 align-items-center">
                        {{ Helper::getImages('uploads/settings/icon',$latest_proposals_icon, 'layers') }}
                        <h4 class="ml-3">Leads</h4>
                    </div>
                    <div class="mb-4">
                        <h3>{{$total_leads}}</h3>
                        <p>Total Leads</p>
                    </div>
                    <div class="mb-4">
                        <h3> {{$unread_leads}}</h3>
                        <p>Unread Leads</p>
                    </div>

                    <p class="mb-0">We’re sending all new leads to your preferred email address</p>
                    <a href="javascript:;" class="btn-link font-weight-bold text-secondary d-inline-block mb-5">{{ Auth::user()->email }}</a>
                    <a href="{{  route('companyHiringRequests') }}" class="btn-link font-weight-bold text-secondary d-inline-block">EDIT PREFERENCES</a>
                       <br><br><br>
                    @if (!empty($enable_package) && $enable_package === 'true')
                    @if (!empty($package))
                    <div class="wt-insightsitem wt-dashboardbox user_current_package">
                        <countdown date="{{$expiry_date}}" :image_url="'{{{ Helper::getDashExpiryImages('uploads/settings/icon',$latest_package_expiry_icon, 'img-21.png') }}}'" :title=trans('lang.check_pkg_expiry') :package_url="'{{url('dashboard/packages/company')}}'" :trail="'{{$trail}}'" :current_package="'{{$package->title}}'">
                        </countdown>
                    </div>

                    @endif
                    @endif

                </div>
            </div>
        </div>


    </div>

</section>
@endsection