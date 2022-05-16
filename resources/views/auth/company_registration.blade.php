@extends('front-end.master2')

@section('title')
Company Registration
@stop
@section('description', "Company Registration")

@section('content')

<div id="pages-list">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-7 align-self-center">

                <div class="row row-eq-height">
                    <div class="col-md-12 text-center pb-3">
                        <h2 class=""><span class="theme_color already_member"> <a href="{{route('login')}}">Already a member?</a> </span></h2>

                    </div>
                </div>


                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 style="font-size: 36px;">Ready to get <br>customers from <span class="theme_color"> Dubai & UAE</span></h2>
                            </div>
                            <div class="col-md-5">
                                <p>We need you to help us with some basic <br>information for your account creation. Here<br> are our terms and conditins. Please read them <br>carefully. We are GDRP compliiant.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="company_registration_separator">
                <section>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="card">
                                @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="error">{{$error}}</div>
                                @endforeach
                            @endif
                                    <form id="msform" class="company_registration_form" method="post" action="{{ route('userRegister')  }}">
                                    @csrf  
                                    <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active"><strong>1</strong></li>
                                            <li><strong>2</strong></li>
                                            <li><strong>3</strong></li>
                                            <li><strong>4</strong></li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>
                                        <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Lets Start:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                    </div>
                                                </div>
                                                <label class="fieldlabels">Agency Name: *</label>
                                                <input type="text" name="company_name"  id="company_name" placeholder="Agency Name" value="{{ old('company_name') }}" />
                                                <label class="fieldlabels">Email: *</label>
                                                <input type="email" name="email" placeholder="Email" id='email' value="{{ old('email') }}"/>
                                                <label class="fieldlabels">Phone Number: *</label>
                                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" />
                                                <label class="fieldlabels">Number of Talends: *</label>
                                                <select name="employees" id='employees' class="form-control">
                                                    <option value="">Select Total Team Strength</option>
                                                    @foreach ($employees as $key => $employee)
                                                    <option value="{{{$employee['value']}}}">{{{$employee['title']}}}</option>
                                                    @endforeach
                                                </select>

                                                <label class="fieldlabels">Password: *</label>

                                                <input id="register_password" type="password" class="form-control" name="password" id="password" placeholder="{{{ trans('lang.ph_pass') }}}">
                                                
                                                <i class="fa fa-eye"  id="togglePassword"  onclick="toggePassword()"></i>


                                                <input type="hidden" name="role" value="company" />

                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next Step" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Lets Start:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                    </div>
                                                </div>


                                                <label class="fieldlabels">Location: *</label>
                                                {!! Form::select('locations', $locations, null, array('class'=>'form-control locations','placeholder' => trans('lang.select_locations'))) !!}
                                                <br>


                                                <label class="fieldlabels">Agency Language: *</label>
                                                <select name="agency_language" id='agency_language' class="form-control" style="display: inline !important;">
                                                    <option value="">Select Language</option>
                                                    @foreach ($languages as $key => $language)
                                                    <option value="{{{$language['id']}}}">{{{$language['title']}}}</option>
                                                    @endforeach
                                                </select>



                                                <label class="fieldlabels">Agency Website.: *</label>
                                                <input type="text" name="agency_website" placeholder="Agency Website" value="{{ old('agency_website') }}"/>


                                                <br>
                                                <label class="fieldlabels">Budget Range.: *</label>
                                                <select name="budget" id='budget' class="form-control">
                                                    <option value="">Select Price</option>
                                                    @foreach ($company_bedget as $key => $budget)
                                                    <option value="{{{$budget['value']}}}">{{{$budget['title']}}}</option>
                                                    @endforeach
                                                </select>


                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next Step" />
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h2 class="fs-title">Our Services:</h2>
                                                        <h2 class="steps">Please select one or multiple services your agency provides</h2>

                                                    </div>
                                                    <div class="col-8">
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
                                            <input type="button" name="next" class="next action-button" value="Next Step" />
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        </fieldset>
                                        <fieldset>

                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h2 class="fs-title">Lets Pay:</h2>
                                                        <h2 class="steps">Almost there! Pay an affordable amount to Grow your Business</h2>

                                                    </div>
                                                    <div class="col-8">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <section class="tal-p-plans">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="plans-inner">
                                                                        <div class="plans-wrap">
                                                                            <div class="plan">
                                                                                {!! $why_agency_plan->payment_description ?? '' !!}

                                                                                <a class="plan-btn t-f company_services choose_plan_background_transparent" id='monthly_plan' onclick="plan_select('monthly')"><strong class="green">Choose</strong></a>



                                                                            </div>
                                                                            <div class="plan">
                                                                                {!! $why_agency_plan->support_description ?? '' !!}

                                                                                <a class="plan-btn t-f company_services choose_plan_background_transparent" id='yearly_plan' onclick="plan_select('yearly')"><strong class="green">Choose</strong></a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <div class="col-md-10">
                                                    <input type="hidden" name="monthly_amount" id="monthly_amount" value="{{ $why_agency_plan->agencies_benefits ?? '' }}">
                                                    <input type="hidden" name="yearly_amount" id="yearly_amount" value="{{ $why_agency_plan->government_benefits ?? '' }}">

                                                    <input type="hidden" name="payment_amount" id="payment_amount" value="">
                                                        <br>
                                                        @php
                                                        $amount=$why_agency_plan->agencies_benefits;
                                                        @endphp

                                                        <button id='register_pay_btn' class="nav-link menu_green_cta  company_register_pay_now_disable" type="submit">
                                                        Register and Pay Now
                                                        </button>
                                                    

                                                    </div>
                                                </div>


                                            </div>


                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />


                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <div class="col-md-5 align-self-center">
                <div class="content_box_wrapper">
                    <div class="content_box">
                        <img src="{{ asset('talends/assets/img/Layer12.png')  }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    window.categories = [];

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