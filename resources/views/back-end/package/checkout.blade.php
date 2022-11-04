@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class=" col-sm-12 col-md-8 push-md-2 col-lg-8 push-lg-2" id="packages">
                <div class="preloader-section" v-if="loading" v-cloak>
                    <div class="preloader-holder">
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="wt-dashboardbox wt-submitorder">
            
                @if (Request::get('package_purchase'))
                    <div class="flash_msg">
                        <flash_messages :message_class="'danger'" :time ='10' :message="'{{ ' Package Purchase Fail due to incorrect credentials.Please try again.' }}'" v-cloak></flash_messages>
                    </div>
                    @php session()->forget('error'); @endphp
                @endif
                @if (Session::has('message'))
                    <div class="flash_msg">
                        <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                    </div>
                    @php session()->forget('message') @endphp;
                @elseif (Session::has('error'))
                    <div class="flash_msg">
                        <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ str_replace("'s", " ", Session::get('error')) }}}'" v-cloak></flash_messages>
                    </div>
                    @php session()->forget('error'); @endphp
                @endif
                <div class="sj-checkoutjournal">
                    <div class="sj-title">
                        <h3>{{{trans('lang.checkout')}}}</h3>
                    </div>
                    @php
                        $options = unserialize($package->options);
                        $banner = $options['banner_option'] = 1 ? 'ti-check' : 'ti-na';
                        $chat = $options['private_chat'] = 1 ? 'ti-check' : 'ti-na';
                        session()->put(['product_id' => e($package->id)]);
                        session()->put(['product_title' => e($package->title)]);
                        session()->put(['product_price' => e($package->cost)]);
                        session()->put(['type' => 'package']);
                    @endphp
                    <table class="sj-checkouttable">
                        <thead>
                            <tr>
                                <th>{{ trans('lang.item_title') }}</th>
                            <th>{{trans('lang.details')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="sj-producttitle">
                                        <div class="sj-checkpaydetails">
                                            <h4>{{{$package->title}}}</h4>
                                            <span>{{{$package->subtitle}}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}{{{$package->cost}}}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('lang.duration') }}</td>
                                <td>{{{Helper::getPackageDurationList($options['duration'])}}}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('lang.total') }}</td>
                                <td>{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}{{{$package->cost}}}</td>
                            </tr>
                            @if ($mode == 'false')
                                <tr>
                                    <td>{{ trans('lang.status') }}</td>
                                    <td>{{ trans('lang.pending') }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                    @if ($mode == 'true' && !empty($payment_gateway))

                    <input type="hidden" value="{{ $id }}" id='package_id'>

                        <div class="sj-checkpaymentmethod">
                            <div class="sj-title">
                                <h3>{{ trans('lang.select_pay_method') }}</h3>
                            </div>
                            <ul class="sj-paymentmethod">
                                @foreach ($payment_gateway as $gatway)
                                    <li>
                                        @if ($gatway == "paypal")
                                            <a href="{{{url('paypal/ec-checkout')}}}">
                                                <i class="fa fa-paypal"></i>
                                                <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                            </a>
                                         @elseif ($gatway == "stripe")
                          
                                         @if( Auth::user()->getRoleNames()->first()=='company')
                                         <a href="{{route('companyCheckoutPackagePurchase',[$package->id])  }}">
                                                <i class="fab fa-stripe-s"></i>
                                                <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                        </a>


                                        @else
                                        <a href="{{route('packagePurchase',[$package->id])  }}">
                                                <i class="fab fa-stripe-s"></i>
                                                <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                        </a>

                                        @endif

                                            @elseif($gatway == "paytab")
                                        <a href="javascrip:void(0);" @click="paytabPackagePayment">
                                                <i class="fa fa-credit-card"></i>
                                                <span><em>Pay via Cedit Card</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                            </a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <div class="sj-checkpaymentmethod">
                            <div class="form-group wt-btnarea">
                                <a class="wt-btn" href="javascript:;" v-on:click.prevent="generateOrder('{{$package->id}}')">
                                    {{ trans('lang.pay_order')}} 
                                </a>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection