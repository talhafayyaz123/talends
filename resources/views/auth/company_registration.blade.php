@extends('front-end.master2')

@section('title')
Company Registration
@stop
@section('description', "Company Registration")

@section('content')
 

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
                                </ul>
                                <!-- <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->
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
                                                <input type="text" name="company_name" class="form-control"  id="company_name" placeholder="Agency Name" value="{{ old('company_name') }}" />
                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-3 form-group">
                                                <label class="fieldlabels">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" placeholder="Email" class="form-control" id='email' value="{{ old('email') }}"/>
                                                <div class="alert alert-danger" id='email_error' style="display:none"></div>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 mb-3 form-group">
                                                <label class="fieldlabels">Phone Number <span class="text-danger">*</span></label>
                                                <div class="form-group" style="border: 1px solid #349f1a; border-radius:10px;position:relative;">
                                                   <!--  <div class="input-group-prepend">
                                                        <select name="country_code" id="country_code" class="form-control" style="border-radius: 10px 0 0 10px;border: 0;">
                                                            <option value="">+92</option>
                                                            <option value="">+91</option>
                                                            <option value="">+971</option>
                                                            <option value="">+93</option>
                                                        </select>
                                                    </div> -->
                                                   
                                                    <input type="tel" name="phone_number"  class="form-control" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" style="border-radius:0 10px 10px 0 ;border: 0;"/>
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
                                                <input id="register_password" type="password" class="form-control" name="password"  placeholder="{{{ trans('lang.ph_pass') }}}">
                                                 <i class="fa fa-eye"  id="togglePassword"  onclick="toggePassword()"></i>
                                                <p class="text-secondary" style="line-height:14px;font-size:12px;">Use 8 or more characters with a mix of letters, numbers & symbols</p>
                                                <div class="alert alert-danger" id='password_error' style="display:none"></div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="company" />
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
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
                                                <input type="text" class="form-control"  id='agency_website' name="agency_website" placeholder="Agency Website" value="{{ old('agency_website') }}"/>
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
                                                                    <li >
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
                                                                    <li class="text-center" style="padding: 10px 4px;border-bottom: 1px solid #349f1a;color: #9a9797; font-weight: bold;">${{ $package[0]->cost ?? '0' }} Monthly</li>
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
                                                                    <li class="text-center" style="padding: 10px 4px;border-bottom: 1px solid #349f1a;color: #9a9797; font-weight: bold;">${{ $package[1]->cost ?? '0' }} Yearly</li>
                                                                    @foreach ($yearly_options as $key => $option)
                                                                        @if ($key == 'duration')
                                                                            <li class="text-center"><span>  {{ Helper::getPackageDurationList($yearly_options['duration']) }}</span></li>
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
                                    <button id='register_pay_btn' class="btn btn-theme rounded-pill px-4 company_register_pay_now_disable float-right py-3 mt-2" type="submit">
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
    window.categories = [];

   

     var input = document.querySelector("#phone_number");
    window.intlTelInput(input, {
        autoHideDialCode: true,
                dropdownContainer: document.body,
                formatOnDisplay: true,
                initialCountry: "auto",
                separateDialCode: true
    });
 

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

   function plan_select(plan){
      if(plan=='monthly'){
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

        
      }else{
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
    if(response.country=='PK' || response.country=='AE'){
        $('#register_pay_btn').removeClass('company_register_pay_now_disable');
  
    }else{
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