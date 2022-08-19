@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-dbsectionspace" id="jobs">
    <div class="preloader-section" v-if="loading" v-cloak>
        <div class="preloader-holder">
            <div class="loader"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="wt-dashboardbox la-alljob-holder">
                <div class="wt-dashboardboxtitle wt-titlewithsearch">
                    <h2>Payments Detail   
                    @if (!empty($user_transections) && isset($user_transections[0]->user)  )
                   ({{ $user_transections[0]->user->profile->company_name  ?? '' }}) 
                    @endif

                    </h2>
                    {!! Form::open(['url' => url('admin/jobs/search'),
                    'method' => 'get', 'class' => 'wt-formtheme wt-formsearch'])
                    !!}
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="keyword" value="{{{ !empty($_GET['keyword']) ? $_GET['keyword'] : '' }}}" class="form-control" placeholder="{{{ trans('lang.ph_search_jobs') }}}">
                            <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                        </div>
                    </fieldset>
                    {!! Form::close() !!}
                </div>
                <div class="wt-dashboardboxcontent wt-jobdetailsholder">
                    <div class="wt-freelancerholder">
                        @if (!empty($user_transections) && $user_transections->count() > 0)
                        <div class="wt-managejobcontent">
                            @foreach ($user_transections as $payment)
                            
                            @php
                            $transection=Helper::transection_query($payment->tran_ref);
                             $customer_details=json_decode($transection,true)['customer_details'];
                             $payment_info=json_decode($transection,true)['payment_info'];
                             
                            @endphp
                            <br>

                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo del-job-{{ $payment->id }}">
                                <span class="wt-featuredtag"><img src=" {{ config('app.aws_se_path').'/images/featured.png'  }}  " alt="Featured" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">

                                <div class="wt-title">
                                             <h4>Customer Detail</h4>
                                            <a> <i class="fa fa-check-circle"></i>&nbsp;{{{ $customer_details['name'] ?? ''}}}</a>
                                            <br>
                                            

                                            @if (!empty($customer_details['email']))
                                            <span style="width: 100% !important;">{{{ $customer_details['email'] ?? ''}}}</span>
                                            @endif
                                            <br>
                                            @if (!empty($customer_details['city']))
                                            <span style="width: 100% !important;">{{{ $customer_details['city'] ?? ''}}}</span>
                                            @endif
                                         <br>
                                            @if (!empty($customer_details['street1']))
                                            <span style="width: 100% !important;">{{{ $customer_details['street1'] ?? ''}}}</span>
                                            @endif

                                        </div>


                                    <div class="wt-contenthead">

                                    <h4>Payment  Detail</h4>


                                        @if (!empty($payment->cart_amount) )
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            @if (!empty($payment->cart_amount))
                                            <li><span class="wt-dashboraddoller"><i>AED  </i> {{{ $payment->cart_amount }}}</span></li>
                                            @endif


                                            @if (!empty($payment->created_at))
                                            <li><span><i class="far fa-clock"></i>Date: {{{ $payment->created_at }}}</span></li>
                                            @endif



                                        </ul>
                                        @endif



                                    </div>

                                    <div class="wt-rightarea la-pending-jobs">


                                        <div class="wt-hireduserstatus">
                                            @if ($payment->transection_type == 'sale' )
                                            <h4>Initial Payment</h4>

                                            @else
                                            <h4>{{ ucfirst($payment->transection_type)  }}</h4>
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
                @if ( method_exists($user_transections,'links') ) {{ $user_transections->links('pagination.custom') }} @endif
            </div>
        </div>
    </div>
</div>
@endsection