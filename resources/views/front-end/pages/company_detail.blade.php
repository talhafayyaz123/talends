@extends('front-end.master2')

@push('stylesheets')
<style>
    #readMore {
        display: none;
    }
</style>

@endpush


@section('content')

<div id="pages-list">
    <section class="agency_banner"></section>
    <section class="agency_intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="d-md-flex mt-3 mt-md-n2  mb-4">
                        @if(isset($profile->avater) && !empty($profile->avater) )
                        <img src=" {{ asset('uploads/users/'.$id.'/'.$profile->avater.'') }}" class="img-fluid" alt="Company Image" />
                        @endif
                        <div class="ml-md-4 pt-4 px-3">
                            <p class="text-justify">


                                {!! $company_detail->detail ?? '' !!}

                            </p>
                            <p><span class="mr-3"><i class="bi-geo-alt-fill mr-2"></i> {{$profile->user->location->title ?? '' }}</span>
                                <span class="mr-3"><i class="bi-share-fill mr-2"></i> Share</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="company-detail">
        <div class="container px-md-0">
            <div class="row">
                <div class="col-lg-10 col-md-8 border-right">
                    <div class="company-detail-content px-4">
                        <h3>Overview</h3>
                        {!! $company_detail->team_detail ?? '' !!}
                        <!-- <button class="btn btn-link text-success pl-0" onclick="readMoreFunction()" id="myBtn">Read more <i class="bi-caret-down-fill"></i></button>  -->
                        <h3>Expertise</h3>
                        <div class="accordion" id="accordionExpertise">


                            @if (!empty($company_expertise) && !empty($company_expertise))


                            @foreach ($company_expertise as $unserialize_key => $value)


                            <div class="card bg-transparent border-0">
                                <div class="card-header" id="heading{{$unserialize_key}}">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse{{$unserialize_key}}" aria-expanded="false" aria-controls="collapseTwo">
                                        {{ $value['title'] ?? '' }} <i class="bi-plus float-right rotate-icon"></i>
                                    </h4>
                                </div>
                                <div id="collapse{{$unserialize_key}}" class="collapse" aria-labelledby="heading{{$unserialize_key}}" data-parent="#accordionExpertise">
                                    <div class="card-body">
                                        {!! $value['description'][0] ?? '' !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else

                            <p>Not Found</p>
                            @endif





                        </div>
                        <h3>Skills</h3>
                        <div class="skill-tags">
                            <ul>
                                @if(isset($skills))
                                @foreach($skills as $skill)
                                <li>{{$skill->skill->title}}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <!-- <h3>Latest Portfolio</h3> -->
                        @if (!empty($expertise) && !empty($expertise) )

                        <section class="featured_success_stories_sec p-md-0">
                            <div class="container px-md-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                                            <div class="carousel-inner">
                                                <h2 class="mb-0">Latest Portfolio</h2>
                                                @if(!empty($expertise->portfolio_detail ) || !empty($expertise->portfolio_image) )

                                                <div class="carousel-item active">
                                                    <div class="row mt-4">
                                                        <div class="col-md-6">
                                                            @if( isset($expertise->portfolio_image) )
                                                            <img src="{{ asset('uploads/company/'.$expertise->portfolio_image)}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                {!! $expertise->portfolio_detail ?? '' !!} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if(!empty($expertise->portfolio_detail_2 ) || !empty($expertise->portfolio_image_2) )
                                                <div class="carousel-item">
                                                    <div class="row mt-4">
                                                        <div class="col-md-6">
                                                            @if( isset($expertise->portfolio_image_2) )
                                                            <img src="{{ asset('uploads/company/'.$expertise->portfolio_image_2)}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                {!! $expertise->portfolio_detail_2 ?? '' !!} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if(!empty($expertise->portfolio_detail_3 ) || !empty($expertise->portfolio_image_3) )
                                                <div class="carousel-item">
                                                    <div class="row mt-4">
                                                        <div class="col-md-6">
                                                            @if( isset($expertise->portfolio_image_3) )
                                                            <img src="{{ asset('uploads/company/'.$expertise->portfolio_image_3)}}" class="img-fluid w-100" alt="Carousel Image" width="300">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="carousel-content px-4">
                                                                {!! $expertise->portfolio_detail_3 ?? '' !!} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 pr-md-0 mt-md-0 mt-4">
                    <div class="company-detail-stats">
                        <h5>Talends Activity</h5>
                        <p class="mb-0 mt-4">Hourly Rate</p>
                        <p><b>${{ $profile->hourly_rate ?? '' }}</b></p>
                        <p class="mb-0 mt-4">Total Jobs</p>
                        <p><b>{{ $company_detail->total_jobs ?? '' }}</b></p>
                        <p class="mb-0 mt-4">Joined Since</p>
                        @if(isset($company_detail->last_work_date))
                        <p><b> {{ \Carbon\Carbon::parse($company_detail->last_work_date)->format('Y') ?? '' }}</b></p>
                        @endif
                    </div>
                    <hr />
                    <div class="company-detail-stats">
                        <p class="mb-4 mt-5">Company Information</p>
                        <p class="mb-0 mt-4">Agency Talent Size</p>
                        <p><b>{{ $profile->no_of_employees ?? '' }}</b></p>
                        <p class="mb-0 mt-4">Year Founded</p>
                        @if(isset($company_detail->membership_date))
                        <p><b>{{ \Carbon\Carbon::parse($company_detail->membership_date)->format('Y') ?? '' }}</b></p>
                        @endif
                        <p class="mb-0 mt-4">Client Focus</p>
                        @if(isset($profile->company_type) && !empty($profile->company_type) )
                        @foreach(explode(',',$profile->company_type ) as $value)
                        @if($value=='large_enterprises')
                        <p><b>Large Enterprises</b></p>
                        @elseif($value=='small_medium_enterprises')
                        <p><b>Small & Mid</b></p>
                        @else
                        <p><b>Startup</b></p>
                        @endif

                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stepper-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="stepper-container">
                        <h2>Hire this Agency</h2>
                        <p class="mb-5">Please fill the brief below to get in touch the agency with much better and faster response. Feel free to add as much detail as needed.</p>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="error">{{$error}}</div>
                        @endforeach
                        @endif
                        {!! Form::open(['url' => ('store/hire/agency/'.$id.''), 'class' =>'wt-userform', 'id' => 'agencyform']) !!}

                        <ul id="progressbaragency">
                            <li class="active" id="account"><span>1</span></li>
                            <li id="personal"><span>2</span></li>
                            <li id="payment"><span>3</span></li>
                            <li id="confirm"><span>4</span></li>
                        </ul>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="fs-title">Contact Details:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="">Name</label>
                                        <div class="input-container">
                                            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name" value="{{ old('full_name') }}" />

                                            <i class="bi-person"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="">Email</label>
                                        <div class="input-container">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" />

                                            <i class="bi-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="">Phone Number</label>
                                        <div class="input-container">
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Mobile phone number" value="{{ old('phone_number') }}" />

                                            <i class="bi-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="">Company</label>
                                        <div class="input-container">
                                            <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company" value="{{ old('company_name') }}" />

                                            <i class="bi-building"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button float-right" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="fs-title mb-0">Our Services:</h3>
                                        <p class="mb-5">Please select which service you are interested in.</p>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach($categories as $category)

                                    <div class="col-md-4 mb-4">
                                        <div class="image-checkboxes">
                                            <input type="checkbox" name="services[]" value="{{ $category->id }}" id="myCheckbox{{ $category->id }}" />
                                            <label for="myCheckbox{{ $category->id }}"><img src="{{ asset('uploads/categories/'.$category->image)}}" class="rounded-circle" width="40" />{{ $category->title ?? '' }}</label>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="fs-title mb-0">What’s your project budget?</h3>
                                        <p class="mb-5">Please select the project budget range you have in mind.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($company_bedget as $key => $budget)
                                    <div class="col-md-6 mb-4">
                                        <div class="custom-control custom-radio radio-control">
                                            <input type="radio" id="customRadioInline{{{$budget['value']}}}" value="{{{$budget['value']}}}" name="budget" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadioInline{{{$budget['value']}}}">{{{$budget['title']}}}</label>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Next" />

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                @auth
                                @php
                                $class='display:none;';
                                $class2='display:none;';
                                if(Auth::user()->getRoleNames()[0]!='employer' ){
                                $class='display:block;';
                                }

                                if(Auth::user()->getRoleNames()[0]=='employer'){
                                $class2='display:block;';
                                }


                                @endphp

                                @endauth

                                @guest
                                @php
                                $class='display:block;';
                                $class2='display:none;';
                                @endphp
                                @endguest



                                @php
                                $register_form = App\SiteManagement::getMetaValue('reg_form_settings');
                                $reg_three_title = !empty($register_form) && !empty($register_form[0]['step3-title']) ? $register_form[0]['step3-title'] : trans('lang.almost_there');
                                $reg_three_subtitle = !empty($register_form) && !empty($register_form[0]['step3-subtitle']) ? $register_form[0]['step3-subtitle'] : trans('lang.acc_almost_created_note');

                                @endphp

                               
                                <div id="verify_otp" class="row" style="display: none;">
                               
                                <div class="col-md-12">
                                <div class="alert alert-danger" style="display:none"></div>
                                <div class="wt-registerhead">
                                                <div class="wt-title">
                                                    <h3>{{{ $reg_three_title }}}</h3>                                                    
                                                </div>
                                                <div class="wt-description">
                                                    <p>{{{ $reg_three_subtitle }}}</p>
                                                </div>
                                            </div>
                                            <fieldset>
                                            <div class="row">
                                                        <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>
                                                        {{{ trans('lang.verify_code_note') }}}
                                                        @if (!empty($reg_page))
                                                        <a target="_blank" href="{{{url($reg_page)}}}">
                                                            {{{ trans('lang.why_need_code') }}}
                                                        </a>
                                                        @else
                                                        <a href="javascript:void(0)">
                                                            {{{ trans('lang.why_need_code') }}}
                                                        </a>
                                                        @endif
                                                    </label>
                                                    
                                                    <input type="text" name="code" id='code' class="form-control" placeholder="{{{ trans('lang.enter_code') }}}">
                                                </div></div></div>
                                                <div class="form-group wt-btnarea">

                                                <div class="row">
                                                        <div class="col-md-5">
                                                        <a onclick="verifyCode()" class="text-white btn btn-theme rounded-pill px-5 btn-block">{{{ trans('lang.continue') }}}</a>
                                                        </div>
                                                      
                                                    </div>



                                                </div>
                                            </fieldset>
                                </div>
                            </div>

                                <div class="row register_login" style="{{$class }}">
                                    <div class="col-md-12">
                                        <div class="credential-tabs">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Log In As Employer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sign Up As Employer</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content py-4" id="myTabContent">
                                                <div class="alert alert-danger" style="display:none"></div>

                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <label>Email</label>
                                                            <input id="login_email" type="email" placeholder="Business Email" class="form-control" name="login_email" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <label>Password</label>
                                                            <input id="login_password" type="password" placeholder="********" class="form-control" name="login_password" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <a onclick="login()" class="text-white btn btn-theme rounded-pill px-5 btn-block">Log In</a>
                                                        </div>
                                                       <!--  <div class="col-md-2 pt-2 text-center">
                                                            <p>OR</p>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <button class="btn btn-outline-theme px-5 rounded-pill btn-block">Log In With Google</button>
                                                        </div> -->
                                                    </div>
                                                    {{-- <div class="row">                                                            
                                                <div class="col-md-6 mb-4">
                                                    <a href="{{ route('password.request') }}" class="btn btn-link text-theme"> Forgot Password?</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="tab-pane fade employer_register_form" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label for="">First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name" id='first_name' name='first_name' value="">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" id='last_name' name='last_name' value="">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Email</label>
                                                    <input type="employer_email" class="form-control" placeholder="Email" id='employer_email' name='employer_email' value="">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Password</label>
                                                    <input type="employer_password" class="form-control" placeholder="Password" id='employer_password' name='employer_password' value="">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Select Location</label>
                                                    @if (!empty($locations))
                                                    {!! Form::select('locations', $locations, null, array('class' => 'form-control locations','placeholder' => trans('lang.select_locations'))) !!}

                                                    @endif
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Select Department</label>
                                                    @if ($departments->count() > 0)
                                                    <select name="department" id='department' class="form-control">
                                                        <option value="">Select {{{ trans('lang.your_department') }}}</option>
                                                        @foreach ($departments as $key => $department)
                                                        <option value="{{{$department->id}}}">{{{$department->title}}}</option>
                                                        @endforeach
                                                    </select>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Select No. of Employees</label>
                                                    <select name="employees" id='employees' class="form-control">
                                                        <option value="">Select {{{ trans('lang.no_of_employees') }}}</option>
                                                        @foreach ($employees as $key => $employee)
                                                        <option value="{{{$employee['value']}}}">{{{$employee['title']}}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <a onclick="register()" class="text-white btn btn-theme rounded-pill px-5 btn-block">Sign Up</a>
                                                    

                                                </div>

                                            </div>
                                        </div>

                                   
                                    </div>
                                </div>
                            </div>
                    </div>


                    {{-- <span class="alert alert-success" style="display:none"></span> --}}
                    <div class="row form_submission" style="{{$class2 }}">

                        <div class="col-md-8 mx-auto text-center">
                        
                            <img src="{{ asset('talends/assets/img/icons/success-icon.png')}}" class="img-fluid mb-4" />

                            <p>Please submit your enquiry as employer, or if required review all the information you previously provided. Agencies typically respond within 24 Hours. </p>
                        </div>
                    </div>




                </div>
                <div class="form_submission" style="{{$class2 }}">
                {!! htmlFormSnippet() !!}
                <span class="help-block" style="display: none;">
                    <strong class="error"></strong>
                </span>
                    <input type="button" class="action-button" value="Submit Your Enquiry" onclick="checkCaptcha()"/>
                </div>


                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                </fieldset>
                {!! form::close(); !!}

            </div>

        </div>
</div>
</div>
</section>

</div>
<script>
        function checkCaptcha(){
      
      var form_data=$('#agencyform').serialize();
      $.ajax({
          type: "POST",
          url: '/hire/agency/captcha-validation',
          data: form_data,
          success: function(response) {
            
              if(response.errors){
                  $('.help-block').show();
                  $('.help-block strong').html('recaptcha field is required.');
                 
              }else{
                  $('.help-block').hide();
                  $('#agencyform').submit();

              }
         
          }
      }); 
      }
    function register() {
  
        if ('<?php echo Auth::check(); ?>' != 1) {
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var employer_email = $('#employer_email').val();
            var employer_password = $('#employer_password').val();
            var locations = $('.locations').val();
            var department = $('#department').val();
            var employees = $('#employees').val();

            var is_error = 0;

            if (first_name == '') {
                $('#first_name').addClass('field_error');
                is_error = 1;
            } else {
                $('#first_name').removeClass('field_error');

            }


            if (last_name == '') {
                $('#last_name').addClass('field_error');
                is_error = 1;
            } else {
                $('#last_name').removeClass('field_error');

            }

            if (employer_email == '') {
                $('#employer_email').addClass('field_error');
                is_error = 1;
            } else {
                $('#employer_email').removeClass('field_error');

            }


            if (employer_password == '') {
                $('#employer_password').addClass('field_error');
                is_error = 1;
            } else {
                $('#employer_password').removeClass('field_error');

            }



            if (locations == '') {
                $('.locations').addClass('field_error');
                is_error = 1;
            } else {
                $('.locations').removeClass('field_error');

            }


            if (department == '') {
                $('#department').addClass('field_error');
                is_error = 1;
            } else {
                $('#department').removeClass('field_error');

            }

            if (employees == '') {
                $('#employees').addClass('field_error');
                is_error = 1;
            } else {
                $('#employees').removeClass('field_error');

            }

            if (is_error == 0) {
                let _token = $('meta[name="csrf-token"]').attr('content');
                var obj = $(this);
                jQuery.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({

                    url: "{{ url('/hire/agency/register-validation') }}",
                    method: 'post',
                    data: {
                        email: employer_email,
                        _token: _token
                    },
                    success: function(data) {

                        if (data.errors) {
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append(data.errors);
                        } else {
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').hide();
                          
                            jQuery.ajax({

                                url: "{{ url('/register') }}",
                                method: 'post',
                                data: {
                                    first_name: first_name,
                                    last_name: last_name,
                                    email: employer_email,
                                    password: employer_password,
                                    role: 'employer',
                                    locations: locations,
                                    department: department,
                                    employees: employees,
                                    _token: _token
                                },
                                success: function(data) {

                                    if (data.type == 'success') {
                                        jQuery('.alert-danger').html('');
                                        jQuery('.alert-danger').hide();
                                        
                                       $('#verify_otp').show();
                                       $('.register_login').hide();
                                    } else {
                                        jQuery('.alert-danger').html('');
                                        jQuery('.alert-danger').show();
                                        jQuery('.alert-danger').append('Something went wrong with registration.');

                                    }
                                }

                            });


                        }

                    }

                });


            }

        } else {
            jQuery('.alert-danger').html('');
            jQuery('.alert-danger').show();
            jQuery('.alert-danger').append('To hire agency please login/register as an Employer.');

        }
    }

    function login() {

        if ('<?php echo Auth::check(); ?>' != 1) {
            var email = $('#login_email').val();
            var password = $('#login_password').val();
            var is_error = 0;

            if (email == '') {
                $('#login_email').addClass('field_error');
                is_error = 1;
            } else {
                $('#login_email').removeClass('field_error');

            }

            if (password == '') {
                $('#login_password').addClass('field_error');
                is_error = 1;
            } else {
                $('#login_password').removeClass('field_error');

            }

            if (is_error == 0) {
                let _token = $('meta[name="csrf-token"]').attr('content');
                var obj = $(this);
                jQuery.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({

                    url: "{{ url('/hire/agency/login-check') }}",
                    method: 'post',
                    data: {
                        email: email,
                        password: password,
                        _token: _token
                    },
                    success: function(data) {

                        if (data.errors) {
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append(data.errors);
                        } else {
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').hide();

                            /*  jQuery('.alert-success').html('You Are login successfully.');
                             jQuery('.alert-success').show(); */

                            $('.register_login').hide();
                            $('.form_submission').show();


                        }

                    }

                });



            }
        } else {
            jQuery('.alert-danger').html('');
            jQuery('.alert-danger').show();
            jQuery('.alert-danger').append('To hire agency please login/register as an Employer.');
        }


    }

    function verifyCode()
    {
        var code=$('#code').val();
         if(code){
            let _token = $('meta[name="csrf-token"]').attr('content');
            jQuery.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({

                    url: "{{ url('/registration/verify-user-code') }}",
                    method: 'post',
                    data: {
                        code: code,
                        otp_verify:1,
                        _token: _token
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').hide();

                            $('#verify_otp').hide();
                            $('.form_submission').show();
        
                           $('.register_login').hide();

                         } else if (data.type == 'error') {
                             
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append(data.message);
     
                         }
                      

                    }

                });       
         }
    }

    function renderButton() {

        gapi.signin2.render('my-signin3', {

            'scope': 'profile email',

            'width': 510,

            'height': 45,

            'longtitle': true,

            'theme': 'dark',

            'onsuccess': onSuccess,

            'onfailure': onFailure

        });

    }

    function readMoreFunction() {

        var dots = document.getElementById("dots");
        var moreText = document.getElementById("readMore");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = `Read More <i class="bi-caret-down-fill"></i>`;
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = `Read Less <i class="bi-caret-up-fill"></i>`;
            moreText.style.display = "inline";
        }
    }
</script>
<script>
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function() {

        ////////
        var is_error = 0;
        var company_name = $('#company_name').val();
        var email = $('#email').val();
        var phone_number = $('#phone_number').val();
        var full_name = $('#full_name').val();


        if (company_name == '') {
            $('#company_name').addClass('field_error');
            is_error = 1;
        } else {
            $('#company_name').removeClass('field_error');

        }


        if (email == '') {
            $('#email').addClass('field_error');
            is_error = 1;
        } else {
            $('#email').removeClass('field_error');

        }

        if (phone_number == '') {
            $('#phone_number').addClass('field_error');
            is_error = 1;
        } else {
            $('#phone_number').removeClass('field_error');

        }


        if (full_name == '') {
            $('#full_name').addClass('field_error');
            is_error = 1;
        } else {
            $('#full_name').removeClass('field_error');

        }


        if (is_error == 0) {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbaragency li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        }
    });

    $(".previous").click(function() {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
       
        //Remove class active
        $("#progressbaragency li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function() {
        return false;
    });
</script>
@endsection