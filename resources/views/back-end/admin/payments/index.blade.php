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
                    <h2>User Payments</h2>
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
                            <br>

                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo del-job-{{ $payment->id }}">
                                <span class="wt-featuredtag"><img src=" {{ config('app.aws_se_path').'/images/featured.png'  }}  " alt="Featured" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                <div class="wt-userlistingcontent">


                                    <div class="wt-contenthead">

                                        <div class="wt-title">
                                            @if (!empty($payment->user->profile->company_name) && isset($payment->user->profile->company_name) )
                                            <a target="_blank" href="{{{ url('company-detail/'.$payment->user->id) }}}">
                                                <i class="fa fa-check-circle"></i>
                                                &nbsp;{{{ $payment->user->profile->company_name ?? ''}}}</a>
                                            @endif

                                            @if (!empty($payment->customer_email))
                                            <h2 style="width: 100% !important;"> {{{ $payment->customer_email }}}</h2>
                                            @endif

                                        </div>


                                        @if (!empty($payment->cart_amount) || !empty($payment->expiry_date) )
                                        <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                            @if (!empty($payment->cart_amount))
                                            <li><span class="wt-dashboraddoller"><i>AED  </i> {{{ $payment->cart_amount }}}</span></li>
                                            @endif


                                            @if (!empty($payment->created_at))
                                            <li><span><i class="far fa-clock"></i>Package Date: {{{ $payment->created_at }}}</span></li>
                                            @endif

                                            @if (($payment->expiry_date!=='0000-00-00'))
                                            <li><span><i class="far fa-clock"></i>Expiry Date: {{{ $payment->expiry_date }}}</span></li>
                                            @endif





                                        </ul>
                                        @endif



                                    </div>

                                    <div class="wt-rightarea la-pending-jobs">


                                        <div class="wt-hireduserstatus">
                                            @if ($payment->is_success == '0' )
                                            <h4>Payment Not Complete</h4>

                                            @else
                                            <h4>Payment Complete</h4>
                                            <a href="{{{ url('admin/user_payment_detail/'.$payment->user_id) }}}" class="wt-btn">{{ trans('lang.view_detail') }}</a>
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