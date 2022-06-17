@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master')
@section('content')
@php
$employees = Helper::getEmployeesList();
$company_bedget = Helper::getComapnyBudgetList();
$freelancer_bedget = Helper::getFreelancerBudgetList();
$skills_categories = Helper::getSkillsCategories();
$categories = Helper::getCategories();

$skills = Helper::getSkills();

$departments = App\Department::all();
$locations = App\Location::select('title', 'id')->get()->pluck('title', 'id')->toArray();
$roles = Spatie\Permission\Models\Role::all()->toArray();
$register_form = App\SiteManagement::getMetaValue('reg_form_settings');
$reg_one_title = !empty($register_form) && !empty($register_form[0]['step1-title']) ? $register_form[0]['step1-title'] : trans('lang.join_for_good');
$reg_one_subtitle = !empty($register_form) && !empty($register_form[0]['step1-subtitle']) ? $register_form[0]['step1-subtitle'] : trans('lang.join_for_good_reason');
$reg_two_title = !empty($register_form) && !empty($register_form[0]['step2-title']) ? $register_form[0]['step2-title'] : trans('lang.pro_info');
$reg_two_subtitle = !empty($register_form) && !empty($register_form[0]['step2-subtitle']) ? $register_form[0]['step2-subtitle'] : '';
$term_note = !empty($register_form) && !empty($register_form[0]['step2-term-note']) ? $register_form[0]['step2-term-note'] : trans('lang.agree_terms');
$reg_three_title = !empty($register_form) && !empty($register_form[0]['step3-title']) ? $register_form[0]['step3-title'] : trans('lang.almost_there');
$reg_three_subtitle = !empty($register_form) && !empty($register_form[0]['step3-subtitle']) ? $register_form[0]['step3-subtitle'] : trans('lang.acc_almost_created_note');
$register_image = !empty($register_form) && !empty($register_form[0]['register_image']) ? '/uploads/settings/home/'.$register_form[0]['register_image'] : 'images/work.jpg';
$reg_page = !empty($register_form) && !empty($register_form[0]['step3-page']) ? $register_form[0]['step3-page'] : '';
$reg_four_title = !empty($register_form) && !empty($register_form[0]['step4-title']) ? $register_form[0]['step4-title'] : trans('lang.congrats');
$reg_four_subtitle = !empty($register_form) && !empty($register_form[0]['step4-subtitle']) ? $register_form[0]['step4-subtitle'] : trans('lang.acc_creation_note');
$show_emplyr_inn_sec = !empty($register_form) && !empty($register_form[0]['show_emplyr_inn_sec']) ? $register_form[0]['show_emplyr_inn_sec'] : 'true';
$show_reg_form_banner = !empty($register_form) && !empty($register_form[0]['show_reg_form_banner']) ? $register_form[0]['show_reg_form_banner'] : 'true';
$reg_form_banner = !empty($register_form) && !empty($register_form[0]['reg_form_banner']) ? $register_form[0]['reg_form_banner'] : null;
$selected_registration_type = !empty($register_form) && !empty($register_form[0]['registration_type']) ? $register_form[0]['registration_type'] : 'multiple';
$breadcrumbs_settings = \App\SiteManagement::getMetaValue('show_breadcrumb');
$show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
@endphp
@php $breadcrumbs = Breadcrumbs::generate('registerPage'); @endphp
@if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php')))
@include('extend.front-end.includes.inner-banner',
['title' => trans('lang.join_for_free'), 'inner_banner' => $reg_form_banner, 'path' => 'uploads/settings/home/', 'show_banner' => $show_reg_form_banner ]
)
@else
@include('front-end.includes.inner-banner',
['title' => trans('lang.join_for_free'), 'inner_banner' => $reg_form_banner, 'path' => 'uploads/settings/home/', 'show_banner' => $show_reg_form_banner ]
)
@endif
    <style>
        .entity-form,
        #register-text{display: none;}
    </style>
    <section class="auth-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center min-vh-100">
                    <div class="w-100 d-block bg-white shadow-lg rounded my-5 mx-auto py-4">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="auth-content" id="registration">
                                    <!--<div class="preloader-section" v-if="loading" v-cloak>
                                        <div class="preloader-holder">
                                            <div class="loader"></div>
                                        </div>
                                    </div>-->    
                                    <div class="wt-haslayout">
                                        <form method="POST" action="{{{ url('register/form-step1-custom-errors') }}}" class="wt-formtheme wt-formregister tb-registration" @submit.prevent="checkStep1" id="register_form" novalidate>
                                            @csrf
                                            <div class="row pb-5 mb-4" id="entityType">
                                                <div class="col-12 mb-5">
                                                    <h3 class="mb-5">Ready to get customers <br/>from <span class="text-theme">Dubai & UAE</span></h3>
                                                </div>
                                                @if(!empty($roles))
                                                    @foreach ($roles as $key => $role)
                                                        @if (!in_array($role['id'] == 1, $roles))
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio entity-box">
                                                                    @if ($role['role_type'] === 'freelancer')
                                                                        <label class="custom-control-label" for="freelancer">
                                                                            <input type="radio" id="freelancer" name="freelancer" v-on:change="setUserRole('freelancer')"  v-model="user_type" value="freelancer" class="custom-control-input">
                                                                            <img src="{{ asset('talends/assets/img/icons/freelancer.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Freelancer
                                                                        </label>
                                                                    @elseif($role['role_type'] === 'employer')
                                                                        <label class="custom-control-label" for="employer">
                                                                            <img src="{{ asset('talends/assets/img/icons/employer.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Employer
                                                                            <input type="radio" id="employer" name="employer" value="employer" v-on:change="setUserRole('employer')" v-model="user_type" class="custom-control-input">
                                                                        </label>
                                                                    @elseif($role['role_type'] === 'intern')
                                                                        <label class="custom-control-label" for="intern">
                                                                            <input type="radio" id="intern" name="intern" value="intern" class="custom-control-input" v-on:change="setUserRole('intern')" v-model="user_type">
                                                                            <img src="{{ asset('talends/assets/img/icons/intern.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Interne
                                                                        </label>
                                                                    @elseif($role['role_type'] === 'company')
                                                                        <a href="{{ url('company/registration')  }}">
                                                                            <label class="custom-control-label" for="agency">
                                                                                <img src="{{ asset('talends/assets/img/icons/company.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Agency
                                                                            </label>  
                                                                        </a> 
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endif                                         
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="create_account_form"  v-if="step === 1" v-cloak>
                                                <div v-if='user_type'>
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-3">
                                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="{{{ trans('lang.ph_first_name') }}}" v-bind:class="{ 'is-invalid': form_step1.is_first_name_error }" v-model="first_name">
                                                            <span class="help-block" v-if="form_step1.first_name_error">
                                                                <strong v-cloak>@{{form_step1.first_name_error}}</strong>
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="{{{ trans('lang.ph_last_name') }}}" v-bind:class="{ 'is-invalid': form_step1.is_last_name_error }" v-model="last_name">
                                                            <span class="help-block" v-if="form_step1.last_name_error">
                                                                <strong v-cloak>@{{form_step1.last_name_error}}</strong>
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">    
                                                            <input id="user_email" type="email" class="form-control" name="email" placeholder="{{{ trans('lang.ph_email') }}}" value="{{ old('email') }}" v-bind:class="{ 'is-invalid': form_step1.is_email_error }" v-model="user_email">
                                                            <span class="help-block" v-if="form_step1.email_error">
                                                                <strong v-cloak>@{{form_step1.email_error}}</strong>
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <fieldset class="wt-registerformgroup">
                                                                <div class="form-group password-placeholder">
                                                                    <input id="register_password" type="password" class="form-control" name="password" placeholder="{{{ trans('lang.ph_pass') }}}" v-bind:class="{ 'is-invalid': form_step2.is_password_error }">
                                                                    <span class="help-block" v-if="form_step2.password_error">
                                                                        <strong v-cloak>@{{form_step2.password_error}}</strong>
                                                                    </span>
                                                                    <i class="fa fa-eye"  id="togglePassword"  onclick="toggePassword()"></i>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($locations))
                                                                <div class="form-select">
                                                                    <span>
                                                                        {!! Form::select('locations', $locations, null, array('class' => 'form-control','placeholder' => trans('lang.select_locations'), 'v-bind:class' => '{ "is-invalid": form_step2.is_locations_error }')) !!}
                                                                        <span class="help-block" v-if="form_step2.locations_error">
                                                                            <strong v-cloak>@{{form_step2.locations_error}}</strong>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            @endif
                                                        </div>                                                        
                                                        <div class="col-lg-6" v-if='user_type== "freelancer" '>
                                                            <div class="form-group">
                                                                <select name="gender" id='gender' class="form-control" v-bind:class="{ 'is-invalid': form_step2.is_gender_error }">
                                                                    <option value="">Select Gender</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="no_wish_declare">Do Not Wish To Declare</option>
                                                                </select>
                                                                <span class="help-block" v-if="form_step2.gender_error">
                                                                    <strong v-cloak>@{{form_step2.gender_error}}</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3" v-if='user_type== "freelancer" '>
                                                            <div class="form-group">
                                                                <select name="availability" id='availability' class="form-control" v-bind:class="{ 'is-invalid': form_step2.is_availability_error }">
                                                                    <option value="">Select Availability</option>
                                                                    <option value="remote">Remote</option>
                                                                    <option value="on-site">On Site</option>
                                                                    <option value="hybrid">Hybrid</option>
                                                                </select>
                                                                <span class="help-block" v-if="form_step2.availability_error">
                                                                    <strong v-cloak>@{{form_step2.availability_error}}</strong>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6 mb-3" v-if='user_type== "freelancer" '>
                                                            <div class="form-group">
                                                                <select name="budget" id='budget' class="form-control" v-bind:class="{ 'is-invalid': form_step2.is_budget_error }">
                                                                    <option value="">Select Price</option>
                                                                    @foreach ($freelancer_bedget as $key => $budget)
                                                                    <option value="{{{$budget['value']}}}">{{{$budget['title']}}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <span class="help-block" v-if="form_step2.budget_error">
                                                                    <strong v-cloak>@{{form_step2.budget_error}}</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- employerr -->

                                                        <div class="col-lg-6 mb-3" v-if='user_type== "employer" '>
                                                            @if ($departments->count() > 0)
                                                                <select name="department" id='department' class="form-control" v-bind:class="{ 'is-invalid': form_step1.is_department_error }">
                                                                    <option value="">Select {{{ trans('lang.your_department') }}}</option>
                                                                    @foreach ($departments as $key => $department)
                                                                        <option value="{{{$department->id}}}">{{{$department->title}}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <span class="help-block" v-if="form_step1.department_error">
                                                                    <strong v-cloak>@{{form_step1.department_error}}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-6 mb-3" v-if='user_type== "employer" '>
                                                            <select name="employees" id='employees' class="form-control" v-bind:class="{ 'is-invalid': form_step1.is_employee_error }">>
                                                                <option value="">Select {{{ trans('lang.no_of_employees') }}}</option>
                                                                @foreach ($employees as $key => $employee)
                                                                    <option value="{{{$employee['value']}}}">{{{$employee['title']}}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="help-block" v-if="form_step1.employee_error">
                                                                    <strong v-cloak>@{{form_step1.employee_error}}</strong>
                                                                </span>
                                                        </div>
                                                        <!-- internee -->

                                                        <div class="col-lg-6 mb-3" v-if='user_type== "intern" '>
                                                            <select name="budget" id='budget' class="form-control" v-bind:class="{ 'is-invalid': form_step2.is_budget_error }">>
                                                                    <option value="">Select Price</option>
                                                                @foreach ($company_bedget as $key => $budget)
                                                                    <option value="{{{$budget['value']}}}">{{{$budget['title']}}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="help-block" v-if="form_step2.budget_error">
                                                                    <strong v-cloak>@{{form_step2.budget_error}}</strong>
                                                                </span>


                                                        </div>                                                
                                                        <div class="col-lg-12 mb-3" v-if='user_type== "intern" '>
                                                            <input class="form-control" id="university" type="text" name="university" value="" placeholder="University" v-bind:class="{ 'is-invalid': form_step2.is_university_error }">
                                                            <span class="help-block" v-if="form_step2.university_error">
                                                                    <strong v-cloak>@{{form_step2.university_error}}</strong>
                                                                </span>
                                                        </div>
                                                        <div class="col-lg-12 mb-3" v-if='user_type== "intern" '>
                                                            <input class="form-control" id="grade" type="text" name="grade" value=""  placeholder="Degree" v-bind:class="{ 'is-invalid': form_step2.is_grade_error }">
                                                            <span class="help-block" v-if="form_step2.grade_error">
                                                                    <strong v-cloak>@{{form_step2.grade_error}}</strong>
                                                                </span>
                                                        </div>
                                                        <div class="col-lg-12 mb-3" v-if='user_type== "intern" '>
                                                            <input class="form-control" id="specialization" type="text" name="specialization" value="" placeholder="specialization" v-bind:class="{ 'is-invalid': form_step2.is_specialization_error }">
                                                            <span class="help-block" v-if="form_step2.specialization_error">
                                                                    <strong v-cloak>@{{form_step2.specialization_error}}</strong>
                                                                </span>
                                                        </div>
                                                        <div class="col-lg-12 mb-3" v-if='user_type== "intern" '>
                                                            <select name="availability" id='availability' class="form-control" v-bind:class="{ 'is-invalid': form_step2.is_availability_error }">
                                                                <option value="">Select Availability</option>
                                                                <option value="remote">Remote</option>
                                                                <option value="on-site">On Site</option>
                                                            </select>
                                                            <span class="help-block" v-if="form_step2.availability_error">
                                                                <strong v-cloak>@{{form_step2.availability_error}}</strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="entity-form freelancer mytab" id="freelancer">
                                                    <input type="hidden" id='role' name="role" value="freelancer">
                                                </div>
                                                <div class="entity-form employer mytab" id="employer"></div>
                                        
                                                <div class="entity-form intern mytab" id="intern"></div>

                                                <div v-if='user_type'>
                                                    <div class="entity-form row" style="display:block;">
                                                        <div class="col-12 mb-3 text-center">
                                                            <button class="btn btn-theme rounded-pill d-inline-block my-3 py-3" type="submit" style="width: 300px;">Create Account</button>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <div class="or-text">
                                                                <p>or</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3 text-center">
                                                            <button class="btn btn-outline-theme rounded-pill" style="width: 300px;">
                                                                <i class="bi-google mr-2"></i> Signin with google
                                                            </button>
                                                        </div>
                                                        <!-- <div class="col-12 text-center mb-3">
                                                            Already have an account? 
                                                            <a href="{{  url('login') }}" class="ml-2 btn-link text-success">Sign in</a>
                                                        </div> -->
                                                        <div class="col-12 text-center mb-3">
                                                            Not a freelancer?
                                                            <a href="{{  url('register') }}" class="ml-2 btn-link text-success">Create Account</a>
                                                        </div>
                                                        <div class="col-12 text-center mb-3">
                                                            <p class="small">By creating an account, you agree to the Pangea's 
                                                                <a href="javascript:;" class="btn-link text-success">Terms of Service</a> and 
                                                                <a href="javascript:;" class="btn-link text-success">Privacy Policy</a>.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- login/register btns -->
                                        </form>
                                    </div>
                                    <div class="wt-joinformc" v-if="step === 2" v-cloak>
                                        <form method="POST" action="" class="wt-formtheme wt-formregister" id="verification_form">
                                            <div class="wt-registerhead">
                                                <div class="wt-title">
                                                    <h3>{{{ $reg_three_title }}}</h3>

                                                  <!--   <div class="google-signup-wrap">
                                                <div id="my-signin2"></div>
                                            </div> -->
                                                    
                                                </div>
                                                <div class="wt-description">
                                                    <p>{{{ $reg_three_subtitle }}}</p>
                                                </div>
                                            </div>
                                            <fieldset>
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
                                                    <input type="text" name="code" class="form-control" placeholder="{{{ trans('lang.enter_code') }}}">
                                                </div>
                                                <div class="form-group wt-btnarea">
                                                    <a href="#" @click.prevent="verifyCode()" class="wt-btn">{{{ trans('lang.continue') }}}</a>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="wt-gotodashboard" v-if="step === 3" v-cloak>
                                        <div class="wt-registerhead">
                                            <div class="wt-title">
                                                <h3>{{{ $reg_four_title }}}</h3>
                                            </div>
                                            <div class="description">
                                                <p>{{{ $reg_four_subtitle }}}</p>
                                            </div>
                                        </div>
                                        <a href="#" class="wt-btn" @click.prevent="loginRegisterUser()">{{{ trans('lang.goto_dashboard') }}}</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-5 d-none d-lg-block rounded-right ml-auto">
                                <div class="pt-4">
                                    <h3 id="register-text">Ready to get customers from 
                                        <span class="text-success">Dubai & UAE</span>
                                        <a href="{{route('login')}}" class="d-block mb-5">Already a member?</a>
                                        
                                    </h3>
                                    <img src="{{ asset('talends/assets/img/Layer12.png')  }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
    </section>
    @endsection

    @push('scripts')
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script>
            $('input[type="radio"]').click(function(){
                var inputValue = $(this).attr("value");
                console.log(inputValue);
                var targetBox = $("." + inputValue);
                $(".mytab").not(targetBox).hide();
                $(targetBox).show();
                $("#register-text").show();
                $("#entityType").hide();
            });
            
    </script>
    <script>

        function onSuccess(googleUser) {

            if(gapi.auth2){
     
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function () {
                    auth2.disconnect();
                });
            }

            var profile = googleUser.getBasicProfile();
          
          $('#user_email').val(profile.getEmail());

          $('#first_name').val(profile.getGivenName());

          $('#last_name').val(profile.getFamilyName());

        }

        function onFailure(error) {
            console.log(error);
        }

        function renderButton() {
            gapi.signin2.render('my-signin2', {
                'scope': 'profile email',
                'width': 743,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
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