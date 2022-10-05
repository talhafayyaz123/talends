@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="wt-haslayout wt-email-notification-settings wt-dbsectionspace" id="profile_settings">
        @if (Session::has('message'))
            <div class="flash_msg">
                <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="preloader-section" v-if="loading" v-cloak>
                    <div class="preloader-holder">
                        <div class="loader"></div>
                    </div>
                </div>
    
                <div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
                    @if (file_exists(resource_path('views/extend/back-end/settings/tabs.blade.php'))) 
                        @include('extend.back-end.settings.tabs')
                    @else 
                        @include('back-end.settings.tabs')
                    @endif
                    @php
                    $company_payment=App\UserPayments::where('user_id',Auth::user()->id)->first();
                    if(isset($company_payment) && !empty($company_payment) ){
                    $package_id=$company_payment->package_id;
                     $package=App\Package::find($package_id);
                    }
                   @endphp
                    <div class="wt-tabscontent tab-content">
                        <div class="wt-emailnotiholder" id="wt-emailverification">

                        <div class="wt-emailverification">
                                <div class="wt-tabscontenttitle">
                                    <h2>Package Details</h2>
                                </div>
                                <div class="form-group">
                                    Name : <b>{{ $package->title ?? '' }}</b>
                                    <br>
                                    Cost : <b>AED {{ $package->cost ?? '' }}</b>
                                </div>
                                <div class="wt-settingscontent" v-else>
                                    <div class="wt-description">
                                        <p>Send payment Request</p>
                                    </div>
                                </div>
                            </div>


                            <div class="wt-emailverification">
                                <div class="wt-tabscontenttitle">
                                    <h2>Payment Verification</h2>
                                </div>
                                @if(!empty(Session::get('payment_email_send')) && Session::get('payment_email_send') == '1')

                                <div class="wt-settingscontent">
                                    <div class="wt-description">
                                        <b>Payment Request Send.Kindly check your email.</b>
                                    </div>
                                </div> 
                                @else
                                <div class="form-group wt-btnarea">
                                <h4>Payment Not Complete</h4>
                                <a href="{{{ url('admin/fail/registration/email/'.$company_payment->package_id.'/'.$company_payment->user_id) }}}" class="wt-btn">Send Again Payment Email</a>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
