@extends('front-end.master2')

@section('title')
Company Registration
@stop
@section('description', $meta_desc)
@section('keywords', $meta_keywords)


@section('content')

<style>

.stripe{
    text-align: right;
    color: black;
    background-color: white;
    border: 1px solid black;
    border-radius: 1.7rem !important;
}
    
</style>

<div id="pages-list">
    <div class="container">
        <div class="d-flex align-items-center min-vh-100">
            <div class="w-100 d-block bg-white shadow-lg rounded my-5 mx-auto">
                <div class="row">
                    <div class="col-lg-4 ml-auto order-lg-2">
                        <div class="content_box pt-4 d-flex flex-column justify-content-between h-100 px-lg-0 px-4">
                            <div>
                                <h3 class="font-weight-bold">Ready to get customers from <span class="theme_color"> Dubai & UAE</span></h3>
                                <a href="{{route('login')}}" class="d-block mb-4">Already a member?</a>
                            </div>
                            <img src="{{ asset('talends/assets/img/Layer12.png')  }}" class="img-fluid d-none d-lg-block " alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-1">
                        <div class="stepper-container">
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            @if($error=='The password format is invalid.')
                            <div class="error">Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.</div>
                            @else
                            <div class="error">{{$error}}</div>
                            @endif
                            @endforeach
                            @endif
                            <div class="alert alert-danger" style="display:none"></div>

                            <form id="msform" class="company_registration_form" method="post" action="{{ route('userRegister')  }}">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active"><span>1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li><span>4</span></li>
                                    <li><span>5</span></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="fs-title">Lets Get Start:</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 mb-3 form-group">
                                                <label class="fieldlabels">Agency Name <sup class="text-danger">*</sup> </label>
                                                <input type="text" autocomplete="off" name="company_name" class="form-control" id="company_name" placeholder="Agency Name" value="{{ old('company_name') }}" />
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-3 form-group">
                                                <label class="fieldlabels">Email <span class="text-danger">*</span></label>
                                                <input type="email" autocomplete="off" name="email" placeholder="Email" class="form-control" id='email' value="{{ old('email') }}" />
                                                <div class="alert alert-danger position-absolute" id='email_error' style="display:none; z-index:9"></div>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-3">
                                                <label class="fieldlabels">Phone Number <span class="text-danger">*</span></label>
                                                <div class="" style="border: 1px solid #349f1a; border-radius:10px;position:relative;padding-left:7px;">
                                                    <input type="tel" name="phone_number"  id="phone_number" value="{{ old('phone_number') }}" style="border-radius:0 10px 10px 0 ;border: 0;height:40px;" data-intl-tel-input-id="0" />
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-3 form-group">
                                                <label class="fieldlabels">Number of Talends <span class="text-danger">*</span></label>
                                                <select name="employees" id='employees' class="form-control">
                                                    <option value="">Select Total Team Strength</option>
                                                    @foreach ($employees as $key => $employee)
                                                    <option value="{{{$employee['value']}}}">{{{$employee['title']}}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-3 form-group">
                                                <label class="fieldlabels">Password <span class="text-danger">*</span></label>
                                                <input autocomplete="off" id="register_password" type="password" class="pr-password form-control" name="password" placeholder="{{{ trans('lang.ph_pass') }}}">
                                                <i class="fa fa-eye" id="togglePassword" onclick="toggePassword()"></i>
                                                <p class="text-secondary" style="line-height:14px;font-size:12px;">Use 8 or more characters with a mix of letters, numbers & symbols</p>
                                                <div class="alert alert-danger position-absolute" id='password_error' style="display:none; z-index:9"></div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="company" />
                                    </div>
                                    @guest
                                    <input type="button" name="next" class="next action-button step_1_btn"  value="Next" />
                                    @endguest
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="fs-title">Lets Start:</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 mb-4 form-group">
                                                <label class="fieldlabels">Location <span class="text-danger">*</span></label>
                                                {!! Form::select('locations', $locations, null, array('class'=>'form-control locations','placeholder' => trans('lang.select_locations'))) !!}
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-4 form-group">
                                                <label class="fieldlabels">Agency Language <span class="text-danger">*</span></label>
                                                <select name="agency_language" id='agency_language' class="form-control" style="display: inline !important;">
                                                    <option value="">Select Native Language</option>
                                                    @foreach ($languages as $key => $language)
                                                    <option value="{{{$language['id']}}}">{{{$language['title']}}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-4 form-group">
                                                <label class="fieldlabels">Agency Website <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id='agency_website' name="agency_website" placeholder="Agency Website" value="{{ old('agency_website') }}" />
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-4 form-group">
                                                <label class="fieldlabels">Select Budget Range <span class="text-danger">*</span></label>
                                                <select name="budget" id='budget' class="form-control">
                                                    <option value="">Your Average Project Budget</option>
                                                    @foreach ($company_bedget as $key => $budget)
                                                    <option value="{{{$budget['value']}}}">{{{$budget['title']}}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="fs-title mb-0">Our Services:</h2>
                                                <p class="mb-5">Please select one or multiple services your agency provides</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="categories[]" id='categories' value="[]"></input>
                                        <div class="row">
                                            @foreach($categories as $category)
                                            <div class="col-md-4 pb-sm-3">
                                                <a onclick="select_service({{ $category->id }})">
                                                    <div class="t-f company_services" id='company_service_{{ $category->id }}'>
                                                        <div class="ficon-wrap">
                                                        </div>
                                                        <div class="ftitle-wrap">
                                                            <strong>{{ $category->title }}</strong>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="fs-title mb-0">Almost There!</h2>
                                                <p>Select suitable plan & grow your business</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="plans-inner">
                                                    <div class="plans-wrap">
                                                        <div class="plan plan-list">
                                                            <div class="plan-c">
                                                                <ul class="price-feature">
                                                                    <li style="padding: 10px 0px; border-bottom:1px solid #349f1a;font-weight:bold;color: #9a9797;">Choos Your Plan</li>
                                                                    @foreach($package_options as $options)
                                                                    @if ($options != 'Price')
                                                                    <li>
                                                                        <i class="fa fa-check-circle mr-2"></i>
                                                                        <span>{{{$options}}}</span>
                                                                    </li>
                                                                    @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="plan">
                                                            <div class="plan-c">
                                                                <ul class="price-feature">
                                                                    <li class="text-center" style="padding: 1px 0px;border-bottom: 1px solid #349f1a;color: #9a9797;font-weight: bold;font-size: 14px;"><?php echo $currency; ?> {{ $package[0]->cost ?? '0' }} Monthly</li>
                                                                    @foreach ($monthly_options as $key => $option)

                                                                    @if ($key == 'duration')
                                                                    <li class="text-center"><span>{{ Helper::getPackageDurationList($monthly_options['duration']) }}</span></li>
                                                                    @elseif ($key == 'badge')
                                                                    <li class="text-center"><span>{{ Helper::getBadgeTitle($package[0]->badge_id) }}</span></li>
                                                                    @else

                                                                    @if($option=='true')
                                                                    <li class="text-center"><i class="fa fa-check"></i></li>

                                                                    @elseif($option=='false')
                                                                    <li class="text-center"><i class="fa fa-times" aria-hidden="true"></i></li>

                                                                    @else
                                                                    <li class="text-center"><span> {{ $option }}</span></li>


                                                                    @endif



                                                                    @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <a class="plan-btn t-f company_services choose_plan_background_transparent" id='monthly_plan' onclick="plan_select('monthly')"><strong class="green">Select</strong></a>
                                                        </div>
                                                        <div class="plan">
                                                            <div class="plan-c">
                                                                <ul class="price-feature">
                                                                    <li class="text-center" style="padding: 1px 0px;border-bottom: 1px solid #349f1a;color: #9a9797;font-weight: bold;font-size: 14px;"><?php echo $currency; ?> {{ $package[1]->cost ?? '0' }} Yearly</li>
                                                                    @foreach ($yearly_options as $key => $option)
                                                                    @if ($key == 'duration')
                                                                    <li class="text-center"><span> {{ Helper::getPackageDurationList($yearly_options['duration']) }}</span></li>
                                                                    @elseif ($key == 'badge')
                                                                    <li class="text-center"><span> {{ Helper::getBadgeTitle($package[1]->badge_id) }}</span></li>
                                                                    @else
                                                                    @if($option=='true')
                                                                    <li class="text-center"><i class="fa fa-check"></i></li>

                                                                    @elseif($option=='false')
                                                                    <li class="text-center"><i class="fa fa-times" aria-hidden="true"></i></li>

                                                                    @else
                                                                    <li class="text-center"><span> {{ $option }}</span></li>


                                                                    @endif
                                                                    @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <a class="plan-btn t-f company_services choose_plan_background_transparent ml-2" id='yearly_plan' onclick="plan_select('yearly')"><strong class="green">Select</strong></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <input type="hidden" name="monthly_amount" id="monthly_amount" value="{{ $package[0]->cost ?? '0' }}">
                                                <input type="hidden" name="yearly_amount" id="yearly_amount" value="{{ $package[1]->cost ?? '0' }}">
                                                <input type="hidden" name="monthly_package" id="monthly_package" value="{{ $package[0]->id ?? '0' }}">
                                                <input type="hidden" name="yearly_package" id="yearly_package" value="{{ $package[1]->id ?? '0' }}">
                                                <input type="hidden" name="payment_amount" id="payment_amount" value="">
                                                <input type="hidden" name="package_id" id="package_id" value="">
                                                @php
                                                $amount=$why_agency_plan->agencies_benefits;
                                                @endphp
                                            </div>
                                        </div>
                                    </div>



                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <!-- <div class="col-8">
                                                <h2 class="fs-title mb-0">Pay with card:</h2>
                                            </div> -->
                                            <div class="col-4 stripe" style="text-align: right;color: black;    position: relative;left: 65%;">
                                               Powered By  <a class="SiteHeader__logoLink" data-js-controller="AnalyticsButton" data-analytics-category="Navigation" data-analytics-action="Clicked" data-analytics-label="Stripe Logo" data-testid="header-stripe-logo">
                                                            <svg viewBox="0 0 60 25" xmlns="http://www.w3.org/2000/svg" width="60" height="25" class="UserLogo variant-- ">
                                                                <title>Stripe logo</title>
                                                                <path fill="var(--userLogoColor, #0A2540)" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path>
                                                            </svg>
                                                        </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-4 text-center">
                                
                                                    <input type="hidden" value="stripe" id='payment_method' name="payment_method">
                                                        
                                                
                                                    <!--  <div class="sj-title">
              <h3>{{ trans('lang.select_pay_method') }}</h3>
          </div> -->
                                                    <!-- <ul class="sj-paymentmethod">
              @foreach ($payment_gateway as $gatway)
                  <li>
                      @if ($gatway == "paypal")
                          
                          <input type="radio" value="paypal" id='payment_method' name="payment_method">
                              <i class="fa fa-paypal"></i>
                              <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                      
                      @elseif ($gatway == "stripe")
                      <input checked type="radio" value="stripe" id='payment_method' name="payment_method">
                              <i class="fab fa-stripe-s"></i>
                              <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                      
                          @elseif($gatway == "paytab")
                          <input type="radio" value="paytab" id='payment_method' name="payment_method">
                                  <i class="fa fa-credit-card"></i>
                              <span><em>Pay via Cedit Card</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                      
                      @endif
                  </li>
              @endforeach
          </ul>
      </div> -->

                                                <b-modal size="lg" id='stripe_register_form' class="la-pay-stripe hide">
                                                    <template v-slot:modal-title>
                                                        {{ trans('lang.stripe_payment')}}
                                                        <span>{{ trans('lang.stripe_form_note')}} </span>
                                                    </template>
                                                    <div class="d-block text-center">

                                                     <br>
                                                    <p style="color:black;" class="text-left">Card Information</p>
                                                    <div class="form-row">

                                        <div class="col-lg-8 form-group wt-inputwithicon {{ $errors->has('card_no') ? ' has-error' : '' }}">
                                            <label class="float-left">{{ trans('lang.card_no') }} *</label>
                                            <img src="{{!empty($stripe_img) ? asset('uploads/settings/payment/'.$stripe_img) : ''}}">
                                            <input id="card_no" type="text" class="form-control" name="card_no" value="{{ old('card_no') }}" autofocus>
                                            @if ($errors->has('card_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('card_no') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-lg-4 form-group {{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }}">
                                        <label class="float-left">{{ trans('lang.expiry_month') }} *</label>
                                        <input id="ccExpiryMonth" type="number" class="form-control" name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}" min="1" max="12" autofocus>
                                        @if ($errors->has('ccExpiryMonth'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                        </div>


                                        <div class="form-row">

                                        <div class="col-lg-5 form-group {{ $errors->has('ccExpiryYear') ? ' has-error' : '' }}">
                                        <label class="float-left">{{ trans('lang.expiry_year') }} * (Formate: 2024)</label>
                                        <input id="ccExpiryYear" type="text" class="form-control" name="ccExpiryYear" value="{{ old('ccExpiryYear') }}" autofocus>
                                        @if ($errors->has('ccExpiryYear'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                                        </span>
                                        @endif
                                        </div>


                                        <div class="col-lg-3 form-group wt-inputwithicon {{ $errors->has('cvvNumber') ? ' has-error' : '' }}">
                                        <label class="float-left">{{ trans('lang.cvc_no') }} *</label>
                                        <img src="{{config('app.aws_se_path'). '/' .'images/pay-img.png'}}">
                                        <input id="cvvNumber" type="number" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>
                                        @if ($errors->has('cvvNumber'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cvvNumber') }}</strong>
                                        </span>
                                        @endif
                                        </div>

                                        </div>


                                    <p style="color:black;" class="text-left">Country/Area Information</p>
                                        <div class="form-row">

                                <div class="form-group col-lg-6">
                                    <label class="float-left" for="inputAddress2">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" placeholder="">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="inputCity" class="float-left">{{ trans('lang.city') }}</label>
                                    <input type="text" class="form-control" name="city" id="inputCity">
                                </div>

                                </div>


                                <div class="form-row">

                                <div class="form-group col-lg-4">
                                    <label for="inputState" class="float-left">{{ trans('lang.state') }}</label>
                                    <input type="text" class="form-control" name="state" id="inputState">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="inputPostal" class="float-left">{{ trans('lang.postal_code') }}</label>
                                    <input type="text" class="form-control" name="postal_code" id="inputPostal">
                                </div>


                                </div>

                                <p style="color:black;" class="text-left">Contact Information</p>
                                                        <div class="form-row">
                                                            <div class="form-group col-lg-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                                                                <label class="float-left">{{ trans('lang.name') }}</label>
                                                                <input id="stripe_user_name" type="text" class="form-control" name="stripe_user_name" value="{{ old('stripe_user_name') }}" autofocus>
                                                                @if ($errors->has('stripe_user_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('stripe_user_name') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group col-lg-4 {{ $errors->has('stripe_user_email') ? ' has-error' : '' }}">
                                                                <label class="float-left">{{ trans('lang.email') }}</label>
                                                                <input id="email" type="stripe_user_email" class="form-control" name="stripe_user_email" value="{{ old('stripe_user_email') }}" autofocus>
                                                                @if ($errors->has('stripe_user_email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('stripe_user_email') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group col-lg-4 {{ $errors->has('stripe_user_phone') ? ' has-error' : '' }}">
                                                                <label class="float-left">{{ trans('lang.phone') }}</label>
                                                                <input id="stripe_user_phone" type="number" class="form-control" name="stripe_user_phone" value="{{ old('stripe_user_phone') }}" autofocus>
                                                                @if ($errors->has('phone'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('stripe_user_phone') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="float-left">{{ trans('lang.address1') }}</label>
                                                            <input type="text" class="form-control" name="line1" id="inputAddress" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2" class="float-left">{{ trans('lang.address2') }}</label>
                                                            <input type="text" class="form-control" name="line2" id="inputAddress2" placeholder="">
                                                        </div>

                                                    </div>
                                                </b-modal>
                                                <div class="alert alert-danger" id="alert-danger_stripe" style="display:none"></div>
                                                <div class="col-12 pt-4 text-center" style="padding-left: 0%;">
                                                {!! htmlFormSnippet() !!}
                                                <span class="help-block" style="display: none;">
                                                    <strong class="error"></strong>
                                                </span>
                                            </div>
                                            </div>

                                        </div>
                                    </div>



                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                    <button onclick="checkCaptcha()" id='register_pay_btn' class="btn btn-theme rounded-pill px-4 company_register_pay_now_disable float-right py-3 mt-2" type="button" onclick="checkCaptcha()">
                                        Proceed To Payment
                                    </button>
                                </fieldset>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('talends/assets/js/register.js') }}"></script>

<script>
    /*  $(document).ready(function () {
   

        $('input[type=radio][name=payment_method]').change(function() {
            var payment_method=this.value;
       if(payment_method=='paytab'){
        $('#stripe_register_form').hide();

       }else if(payment_method=='stripe'){
        $('#stripe_register_form').show();

       }else if(payment_method=='paypal'){
        $('#stripe_register_form').hide();
       }
      });

}); */
    window.categories = [];

    function checkCaptcha() {
       
        var form_data = $('#msform').serialize();
        var payment_method = $('#payment_method').val();

        if (payment_method == undefined) {

            $('.help-block').show();
            $('.help-block strong').html('Select payment method.');
            return false;
        }
        $('.help-block').hide();
        $('.help-block strong').html('');

         if($('#g-recaptcha-response').val()==''){
            $.ajax({
            type: "POST",
            url: '/hire/agency/captcha-validation',
            data: form_data,
            success: function(response) {

                if (response.errors) {
                    $('.help-block').show();
                    $('.help-block strong').html('recaptcha field is required.');

                }

            }
        });
         }else{
            $('.help-block').hide();
                    if (payment_method == 'paytab') {
                        $('#msform').submit();
                    } else if (payment_method == 'stripe') {
                        var is_error = 0;
                        var card_no = $('#card_no').val();
                        var ccExpiryMonth = $('#ccExpiryMonth').val();
                        var ccExpiryYear = $('#ccExpiryYear').val();
                        var cvvNumber = $('#cvvNumber').val();

                        if (card_no == '') {
                            $('#card_no').addClass('field_error');
                            is_error = 1;
                        } else {
                            $('#card_no').removeClass('field_error');

                        }



                        if (ccExpiryMonth == '') {
                            $('#ccExpiryMonth').addClass('field_error');
                            is_error = 1;
                        } else {
                            $('#ccExpiryMonth').removeClass('field_error');

                        }





                        if (cvvNumber == '') {
                            $('#cvvNumber').addClass('field_error');
                            is_error = 1;
                        } else {
                            $('#cvvNumber').removeClass('field_error');

                        }

                        var currentYear = new Date().getFullYear();


                        if (ccExpiryYear == '' || ccExpiryYear < currentYear) {

                            $('#ccExpiryYear').addClass('field_error');
                            is_error = 1;
                        } else {
                            $('#ccExpiryYear').removeClass('field_error');

                        }

                        if (is_error == 0) {
                            let _token = $('meta[name="csrf-token"]').attr('content');
                            jQuery.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            });

                            jQuery.ajax({
                                url: "/addmoney/stripe/company/register",
                                method: 'post',
                                dataType: 'json',
                                data: {
                                    data: form_data,
                                    _token: _token
                                },
                                success: function(response) {
                                    if (response.type == 'success') {
                                        jQuery('#alert-danger_stripe').html('');
                                        jQuery('#alert-danger_stripe').hide();

                                        setTimeout(function() {
                                            window.location.replace(response.url);
                                        }, 3000);
                                    } else if (response.type == 'error') {
                                        jQuery('#alert-danger_stripe').html('');
                                        jQuery('#alert-danger_stripe').show();
                                        jQuery('#alert-danger_stripe').append(response.message);

                                    }


                                }

                            });

                        }


                    }
         }
        
    }

    function select_service(id) {

        if ($('#company_service_' + id).css("background-color") == "rgb(22, 103, 2)") {
            $('#company_service_' + id).css('background-color', 'transparent');
            $('div#company_service_' + id + '.t-f .ftitle-wrap strong').css('color', 'rgb(52, 159, 26)');
            var categoryIndex = categories.indexOf(id);
            categories.splice(categoryIndex, 1);

        } else {
            $('#company_service_' + id).css('background-color', '#166702');
            $('div#company_service_' + id + '.t-f .ftitle-wrap strong').css('color', 'white');
            categories.push(id);
        }

        $("#categories").val((categories));

    }

    function plan_select(plan) {
        if (plan == 'monthly') {
            $('#payment_amount').val($('#monthly_amount').val());

            $('#package_id').val($('#monthly_package').val());

            $('#monthly_plan').removeClass('choose_plan_background_transparent');
            $('#monthly_plan').addClass('choose_plan_background_green');
            $('#monthly_plan strong').removeClass('green');
            $('#monthly_plan strong').addClass('white');

            //remove yearly plan
            $('#yearly_plan').addClass('choose_plan_background_transparent');
            $('#yearly_plan').removeClass('choose_plan_background_green');
            $('#yearly_plan strong').addClass('green');
            $('#yearly_plan strong').removeClass('white');


        } else {
            $('#payment_amount').val($('#yearly_amount').val());
            $('#package_id').val($('#yearly_package').val());
            // remove monthly plan 
            $('#monthly_plan').addClass('choose_plan_background_transparent');
            $('#monthly_plan').removeClass('choose_plan_background_green');
            $('#monthly_plan strong').addClass('green');
            $('#monthly_plan strong').removeClass('white');


            $('#yearly_plan').removeClass('choose_plan_background_transparent');
            $('#yearly_plan').addClass('choose_plan_background_green');
            $('#yearly_plan strong').removeClass('green');
            $('#yearly_plan strong').addClass('white');



        }

        //      $('#register_pay_btn').addClass('company_register_pay_now_enabled');


        $.get("https://ipinfo.io/json?token=20e8fc0c5775d3", function(response) {
            if (response.country == 'PK' || response.country == 'AE') {

                $('#register_pay_btn').removeClass('company_register_pay_now_disable');

            } else {
                alert('Only Pakistan And UAE Candidates are allowed to register.');

            }

        }, "jsonp");


    }


    function toggePassword() {
        var upass = document.getElementById('register_password');
        var toggleBtn = document.getElementById('togglePassword');
        if (upass.type == "password") {
            upass.type = "text";
            toggleBtn.value = "Hide password";
        } else {
            upass.type = "Password";
            toggleBtn.value = "Show the password";
        }
    }
</script>
@endpush