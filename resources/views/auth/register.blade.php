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
    <!-- <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2" id="registration">
                <div class="preloader-section" v-if="loading" v-cloak>
                    <div class="preloader-holder">
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="wt-registerformhold">
                    <div class="wt-registerformmain">
                        <div class="wt-joinforms">
                            jeera
                            @if ($selected_registration_type == 'single')
                            <form method="POST" class="wt-formtheme wt-formregister" @submit.prevent="checkSingleForm" id="register_form">
                                @csrf
                                <fieldset class="wt-registerformgroup">
                                    <div class="wt-haslayout" v-if="step === 1" v-cloak>
                                        <div class="wt-registerhead">
                                            <div class="wt-title">
                                                <h3>{{{ $reg_one_title }}}</h3>
                                            </div>
                                            <div class="wt-description">
                                                <p>{{{ $reg_one_subtitle }}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-half">
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="{{{ trans('lang.ph_first_name') }}}" v-bind:class="{ 'is-invalid': form_step1.is_first_name_error }" v-model="first_name">
                                            <span class="help-block" v-if="form_step1.first_name_error">
                                                <strong v-cloak>@{{form_step1.first_name_error}}</strong>
                                            </span>
                                        </div>
                                        <div class="form-group form-group-half">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="{{{ trans('lang.ph_last_name') }}}" v-bind:class="{ 'is-invalid': form_step1.is_last_name_error }" v-model="last_name">
                                            <span class="help-block" v-if="form_step1.last_name_error">
                                                <strong v-cloak>@{{form_step1.last_name_error}}</strong>
                                            </span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input id="user_email" type="email" class="form-control" name="email" placeholder="{{{ trans('lang.ph_email') }}}" value="{{ old('email') }}" v-bind:class="{ 'is-invalid': form_step1.is_email_error }" v-model="user_email">
                                            <span class="help-block" v-if="form_step1.email_error">
                                                <strong v-cloak>@{{form_step1.email_error}}</strong>
                                            </span>
                                        </div>
                                    </div>
                                </fieldset>
                                {{-- <div class="wt-haslayout"> --}}
                                <fieldset class="wt-registerformgroup">
                                    @if (!empty($locations))
                                    <div class="form-group">
                                        <span class="wt-select">
                                            {!! Form::select('locations', $locations, null, array('placeholder' => trans('lang.select_locations'), 'v-bind:class' => '{ "is-invalid": form_step2.is_locations_error }')) !!}
                                            <span class="help-block" v-if="form_step2.locations_error">
                                                <strong v-cloak>@{{form_step2.locations_error}}</strong>
                                            </span>
                                        </span>
                                    </div>
                                    @endif
                                    <div class="form-group form-group-half">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="{{{ trans('lang.ph_pass') }}}" v-bind:class="{ 'is-invalid': form_step2.is_password_error }">
                                        <span class="help-block" v-if="form_step2.password_error">
                                            <strong v-cloak>@{{form_step2.password_error}}</strong>
                                        </span>
                                    </div>
                                    <div class="form-group form-group-half">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{{ trans('lang.ph_retry_pass') }}}" v-bind:class="{ 'is-invalid': form_step2.is_password_confirm_error }">
                                        <span class="help-block" v-if="form_step2.password_confirm_error">
                                            <strong v-cloak>@{{form_step2.password_confirm_error}}</strong>
                                        </span>
                                    </div>
                                </fieldset>
                                <fieldset class="wt-formregisterstart">
                                    <div class="wt-title wt-formtitle">
                                        <h4>{{{ trans('lang.start_as') }}}</h4>
                                    </div>
                                    @if(!empty($roles))
                                    <ul class="wt-accordionhold wt-formaccordionhold accordion">
                                        @foreach ($roles as $key => $role)
                                        @if (!in_array($role['id'] == 1, $roles))
                                        <li v-bind:class="{ 'role-is-invalid': form_step2.is_role_error }">
                                            <div class="wt-accordiontitle" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                                                <span class="wt-radio">
                                                    <input id="wt-company-{{$key}}" type="radio" name="role" value="{{{ $role['role_type'] }}}" checked="" v-model="user_role" v-on:change="selectedRole(user_role)">
                                                    <label for="wt-company-{{$key}}">
                                                        {{ $role['name'] === 'freelancer' ? trans('lang.freelancer') : trans('lang.employer')}}
                                                        <span>
                                                            ({{ $role['name'] === 'freelancer' ? trans('lang.signup_as_freelancer') : trans('lang.signup_as_country')}})
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                            @if ($role['role_type'] === 'employer')
                                            @if ($show_emplyr_inn_sec === 'true')
                                            <div class="wt-accordiondetails collapse show" id="collapseOne" aria-labelledby="headingOne" v-if="is_show">
                                                <div class="wt-radioboxholder">
                                                    <div class="wt-title">
                                                        <h4>{{{ trans('lang.no_of_employees') }}}</h4>
                                                    </div>
                                                    @foreach ($employees as $key => $employee)
                                                    <span class="wt-radio">
                                                        <input id="wt-just-{{{$key}}}" type="radio" name="employees" value="{{{$employee['value']}}}" checked="">
                                                        <label for="wt-just-{{{$key}}}">{{{$employee['title']}}}</label>
                                                    </span>
                                                    @endforeach
                                                </div>
                                                @if ($departments->count() > 0)
                                                <div class="wt-radioboxholder">
                                                    <div class="wt-title">
                                                        <h4>{{{ trans('lang.your_department') }}}</h4>
                                                    </div>
                                                    @foreach ($departments as $key => $department)
                                                    <span class="wt-radio">
                                                        <input id="wt-department-{{{$department->id}}}" type="radio" name="department" value="{{{$department->id}}}" checked="">
                                                        <label for="wt-department-{{{$department->id}}}">{{{$department->title}}}</label>
                                                    </span>
                                                    @endforeach
                                                </div>
                                                <div class="form-group wt-othersearch d-none">
                                                    <input type="text" name="department_name" class="form-control" placeholder="{{{ trans('lang.enter_department') }}}">
                                                </div>
                                                @endif
                                            </div>
                                            @endif
                                            @endif
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    <span class="help-block" v-if="form_step2.role_error">
                                        <strong v-cloak>@{{form_step2.role_error}}</strong>
                                    </span>
                                    @endif
                                </fieldset>
                                <fieldset class="wt-termsconditions">
                                    <div class="wt-checkboxholder">
                                        <span class="wt-checkbox">
                                            <input id="termsconditions" type="checkbox" name="termsconditions" checked="">
                                            <label for="termsconditions"><span>{{{ $term_note }}}</span></label>
                                            <span class="help-block" v-if="form_step2.termsconditions_error">
                                                <strong style="color: red;" v-cloak>{{trans('lang.register_termsconditions_error')}}</strong>
                                            </span>
                                        </span>
                                        <a href="#" @click.prevent="checkSingleForm('{{ trans('lang.email_not_config') }}')" class="wt-btn">{{{ trans('lang.submit') }}}</a>
                                    </div>
                                </fieldset>
                                {{-- </div> --}}
                            </form>
                            @else

                            <form method="POST" action="{{{ url('register/form-step1-custom-errors') }}}" class="wt-formtheme wt-formregister tb-registration" @submit.prevent="checkStep1" id="register_form" novalidate>
                                @csrf

                                <fieldset class="wt-registerformgroup">
                                    <div class="wt-haslayout" v-if="step === 1" v-cloak>

                                        <div class="form-group">
                                            <div class="google-signup-wrap">
                                                <div id="my-signin2"></div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <p class="form-text tb-center">or</p>
                                        </div>
                                        <div class="form-group">

                                            <select name="user_type" id='user_type' class="form-control" v-bind:class="{ 'is-invalid': form_step1.is_user_type_error }" v-model="user_type" v-on:change="selectedType()">
                                                <option value="">Select User Type</option>
                                                <option value="freelancer">Freelancer</option>
                                                <option value="employer">Employer</option>
                                                <option value="company">Company</option>
                                                <option value="intern">Intern</option>

                                            </select>

                                            <span class="help-block" v-if="form_step1.user_type_error">
                                                <strong v-cloak>@{{form_step1.user_type_error}}</strong>
                                            </span>
                                        </div>

                                        
                                        @if (!empty($locations))
                                            <div class="form-group">
                                                <span class="wt-select">
                                                    {!! Form::select('locations', $locations, null, array('placeholder' => trans('lang.select_locations'), 'v-bind:class' => '{ "is-invalid": form_step2.is_locations_error }')) !!}
                                                    <span class="help-block" v-if="form_step2.locations_error">
                                                        <strong v-cloak>@{{form_step2.locations_error}}</strong>
                                                    </span>
                                                </span>
                                            </div>
                                            @endif

                                        <div class="form-group form-group-half">
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="{{{ trans('lang.ph_first_name') }}}" v-bind:class="{ 'is-invalid': form_step1.is_first_name_error }" v-model="first_name">
                                            <span class="help-block" v-if="form_step1.first_name_error">
                                                <strong v-cloak>@{{form_step1.first_name_error}}</strong>
                                            </span>
                                        </div>
                                        <div class="form-group form-group-half">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="{{{ trans('lang.ph_last_name') }}}" v-bind:class="{ 'is-invalid': form_step1.is_last_name_error }" v-model="last_name">
                                            <span class="help-block" v-if="form_step1.last_name_error">
                                                <strong v-cloak>@{{form_step1.last_name_error}}</strong>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input id="user_email" type="email" class="form-control" name="email" placeholder="{{{ trans('lang.ph_email') }}}" value="{{ old('email') }}" v-bind:class="{ 'is-invalid': form_step1.is_email_error }" v-model="user_email">
                                            <span class="help-block" v-if="form_step1.email_error">
                                                <strong v-cloak>@{{form_step1.email_error}}</strong>
                                            </span>
                                        </div>

                                        <fieldset class="wt-registerformgroup">


                                            <div class="form-group password-placeholder">
                                                <input id="register_password" type="password" class="form-control" name="password" placeholder="{{{ trans('lang.ph_pass') }}}" v-bind:class="{ 'is-invalid': form_step2.is_password_error }">
                                                <span class="help-block" v-if="form_step2.password_error">
                                                    <strong v-cloak>@{{form_step2.password_error}}</strong>
                                                </span>
                                                <i class="fa fa-eye"  id="togglePassword"  onclick="toggePassword()"></i>
                                            </div>
                                        </fieldset>

                                        <fieldset class="wt-formregisterstart" v-if='user_type'>


                                            @if(!empty($roles))
                                            <ul class="wt-accordionhold wt-formaccordionhold accordion">
                                                @foreach ($roles as $key => $role)

                                                @if (!in_array($role['id'] == 1, $roles))

                                                <li v-bind:class="{ 'role-is-invalid': form_step2.is_role_error }">


                                                    <div class="freelancer_properties" v-if='user_type== "freelancer" '>
                                                        @if ($role['role_type'] === 'freelancer')
                                                        
                                                        @if ($show_emplyr_inn_sec === 'true')

                                                        <input type="hidden" name="role" value="{{{ $role['role_type'] }}}">

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


                                                        @endif
                                                        @endif
                                                    </div>



                                                    <div class="employer_properties" v-if='user_type== "employer" '>
                                                        @if ($role['role_type'] === 'employer')
                                                        @if ($show_emplyr_inn_sec === 'true')
                                                        <input type="hidden" name="role" value="{{{ $role['role_type'] }}}">

                                                        <div class="form-group">

                                                    <select name="employees" id='employees' class="form-control">
                                                        <option value="">Select {{{ trans('lang.no_of_employees') }}}</option>
                                                        
                                                        @foreach ($employees as $key => $employee)
                                                        <option value="{{{$employee['value']}}}">{{{$employee['title']}}}</option>
                                                       
                                                        @endforeach

                                                    </select>

                                                    
                                                    </div>

                                                    @if ($departments->count() > 0)

                                                    <div class="form-group">

                                                    <select name="department" id='department' class="form-control">
                                                        <option value="">Select {{{ trans('lang.your_department') }}}</option>
                                                        
                                                        @foreach ($departments as $key => $department)
                                                        <option value="{{{$department->id}}}">{{{$department->title}}}</option>
                                                    
                                                        @endforeach

                                                    </select>


                                                    </div>
                                                    @endif

                                                        @endif
                                                        @endif
                                                    </div>


                                                    <div class="company_properties" v-if='user_type== "company" '>
                                                        @if ($role['role_type'] === 'company')
                                                        @if ($show_emplyr_inn_sec === 'true')
                                                        <input type="hidden" name="role" value="{{{ $role['role_type'] }}}">

                                                        
                                                    <div class="form-group">

                                                    <select name="employees" id='employees' class="form-control">
                                                        <option value="">Select Total Team Strength</option>
                                                        @foreach ($employees as $key => $employee)
                                                        <option value="{{{$employee['value']}}}">{{{$employee['title']}}}</option>
                                                        @endforeach
                                                    </select>

                                                    </div>

                                                    
                                                    <div class="form-group">

                                                    <select name="budget" id='budget' class="form-control">
                                                        <option value="">Select Minimum Budget</option>
                                                        @foreach ($company_bedget as $key => $budget)
                                                        <option value="{{{$budget['value']}}}">{{{$budget['title']}}}</option>
                                                        @endforeach
                                                    </select>

                                                    </div>

                                                        <div class="wt-accordiondetails collapse show" id="collapseOne" aria-labelledby="headingOne">

                                                           
                                                            <div class="row">


                                                                <div class="">
                                                                    <h4>Type</h4>
                                                                    <input id="startup" type="checkbox" name="company_type[]" value="Startup" checked="">&nbsp;&nbsp; Startup
                                                                    &nbsp;&nbsp; &nbsp;&nbsp; <input id="small_medium_enterprises" type="checkbox" name="company_type[]" value="small_medium_enterprises">&nbsp;&nbsp; Small & Mid Enterprises
                                                                    &nbsp;&nbsp; &nbsp;&nbsp; <input id="large_enterprises" type="checkbox" name="company_type[]" value="large_enterprises">&nbsp;&nbsp; Large enterprises

                                                                </div>
                                                            </div>

                                                            @endif
                                                            @endif
                                                        </div>



                                                        <div class="intern_properties" v-if='user_type== "intern" '>
                                                            @if ($role['role_type'] === 'intern')
                                                            @if ($show_emplyr_inn_sec === 'true')
                                                            <input type="hidden" name="role" value="{{{ $role['role_type'] }}}">
                                                            <div class="form-group">

                                                    <select name="budget" id='budget' class="form-control">
                                                        <option value="">Select Price</option>
                                                        @foreach ($company_bedget as $key => $budget)
                                                        <option value="{{{$budget['value']}}}">{{{$budget['title']}}}</option>
                                                        @endforeach
                                                    </select>

                                                    </div>


                                                    <div class="form-group">

                                                    <select name="availability" id='availability' class="form-control">
                                                        <option value="">Select Availability</option>
                                                        <option value="remote">Remote</option>
                                                        <option value="on-site">On Site</option>

                                                    </select>

                                                    </div>


                                                            <div class="wt-accordiondetails collapse show" id="collapseOne" aria-labelledby="headingOne">
                                                          

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="wt-title">
                                                                            <h4>University</h4>
                                                                        </div>
                                                                        <input class="form-control" id="university" type="text" name="university" value="" required>
                                                                        </span>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="wt-title">
                                                                            <h4>Degree</h4>
                                                                        </div>
                                                                        <input class="form-control" id="grade" type="text" name="grade" value="" required>
                                                                        </span>

                                                                    </div>
                                                                </div>



                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <div class="wt-title">
                                                                            <h4>Specialization</h4>
                                                                        </div>
                                                                        <input class="form-control" id="specialization" type="text" name="specialization" value="" required>
                                                                        </span>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endif
                                                            @endif
                                                        </div>


                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                            <span class="help-block" v-if="form_step2.role_error">
                                                <strong v-cloak>@{{form_step2.role_error}}</strong>
                                            </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="wt-termsconditions" v-if='user_type'>
                                            <div class="wt-checkboxholder">
                                                <span class="wt-checkbox">
                                                    <input id="termsconditions" type="checkbox" name="termsconditions" checked="">
                                                    <label for="termsconditions"><span>{{{ $term_note }}}</span></label>
                                                    <span class="help-block" v-if="form_step2.termsconditions_error">
                                                        <strong style="color: red;" v-cloak>{{trans('lang.register_termsconditions_error')}}</strong>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>

                                        <div class="form-group">
                                            <button type="submit" class="wt-btn">{{{ trans('lang.btn_startnow') }}}</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <div class="wt-joinformc" v-if="step === 2" v-cloak>
                                <form method="POST" action="" class="wt-formtheme wt-formregister" id="verification_form">
                                    <div class="wt-registerhead">
                                        <div class="wt-title">
                                            <h3>{{{ $reg_three_title }}}</h3>
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

                            @endif
                        </div>
                    </div>
                    <div class="wt-registerformfooter">
                        <span>{{{ trans('lang.have_account') }}}<a id="wt-lg" href="javascript:void(0);" @click.prevent='scrollTop()'>{{{ trans('lang.btn_login_now') }}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <style>
        .entity-form{display: none;}
    </style>
    <section class="auth-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center min-vh-100">
                    <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="auth-content">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h3>Ready to get customers from <span>Dubai & UAE</span></h3>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>We need you to help us with some basic information for your account creation. Here are our <a href="javascript:;">terms and conditins</a>. Please read them carefully. We are GDRP compliiant</span></p>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px dashed #dedede;">
                                    <form action="" class="mt-4">
                                        <div class="row" id="entityType">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-radio entity-box">
                                                    <input type="radio" id="customRadio1" name="customRadio" value="freelancer" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">
                                                        <img src="{{ asset('talends/assets/img/icons/freelancer.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Freelancer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-radio entity-box">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="employer">
                                                    <label class="custom-control-label" for="customRadio2">
                                                        <img src="{{ asset('talends/assets/img/icons/employer.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Employer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-radio entity-box">
                                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="business">
                                                    <label class="custom-control-label" for="customRadio3">
                                                        <img src="{{ asset('talends/assets/img/icons/company.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Company
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-radio entity-box">
                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="intern">
                                                    <label class="custom-control-label" for="customRadio4">
                                                        <img src="{{ asset('talends/assets/img/icons/intern.png')}}" class="rounded-circle img-fluid mr-3" width="40"/>Intern
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-form freelancer mytab" id="freelancer">
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="password" class="form-control" placeholder="**************">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Availability</option>
                                                        <option>Remote</option>
                                                        <option>On-site</option>
                                                        <option>Hybrid</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Location</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Do not wish to declare</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Price</option>
                                                        <option>$10</option>
                                                        <option>$50</option>
                                                        <option>$100</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">
                                                        Agree to our<a href="javascript:;" class="btn-link text-success"> terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3 text-center">
                                                    <button class="btn btn-theme rounded-pill" style="width: 350px;">Create Account</button>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="or-text">
                                                        <p>or</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3 text-center">
                                                    <button class="btn btn-outline-theme rounded-pill" style="width: 350px;">
                                                        <i class="bi-google mr-2"></i> Signin with google
                                                    </button>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Already have an account? 
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Sign in</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Not a freelancer?
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Create Account</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <p class="small">By creating an account, you agree to the Pangea's 
                                                        <a href="javascript:;" class="btn-link text-success">Terms of Service</a> and 
                                                        <a href="javascript:;" class="btn-link text-success">Privacy Policy</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-form employer mytab" id="employer">
                                            <!-- <h4>It’s time to find the right help you need</h4> -->
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="password" class="form-control" placeholder="***************">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Department</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>No. of Employees</option>
                                                        <option>less than 10</option>
                                                        <option>less than 50</option>
                                                        <option>100+</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <select class="form-control">
                                                        <option>Location</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Do not wish to declare</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="accountCheck">
                                                        <label class="custom-control-label" for="accountCheck">
                                                            Agree to our<a href="javascript:;" class="btn-link text-success"> terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3 text-center">
                                                    <button class="btn btn-theme rounded-pill" style="width: 350px;">Create Account</button>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="or-text">
                                                        <p>or</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3 text-center">
                                                    <button class="btn btn-outline-theme rounded-pill" style="width: 350px;">
                                                        <i class="bi-google mr-2"></i> Signin with google
                                                    </button>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Already have an account? 
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Sign in</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Not an Employer?
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Create Account</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <p class="small">By creating an account, you agree to the Pangea's 
                                                        <a href="javascript:;" class="btn-link text-success">Terms of Service</a> and 
                                                        <a href="javascript:;" class="btn-link text-success">Privacy Policy</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-form business mytab" id="business">
                                            <!-- <h4>It’s time to find the right help you need</h4> -->
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="password" class="form-control" placeholder="*************">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Team Strength</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Minimum Budget</option>
                                                        <option>less than 10</option>
                                                        <option>less than 50</option>
                                                        <option>100+</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <select class="form-control">
                                                        <option>Location</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Do not wish to declare</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 mb-4">                                           
                                                    <div class="custom-control custom-checkbox btn-check">
                                                        <input type="checkbox" class="custom-control-input" id="startupCheck">
                                                        <label class="custom-control-label" for="startupCheck">Startup</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 mb-4">                                               
                                                    <div class="custom-control custom-checkbox btn-check">
                                                        <input type="checkbox" class="custom-control-input" id="mEnterpriseCheck">
                                                        <label class="custom-control-label" for="mEnterpriseCheck">Small & Mid Enterprise</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-4">
                                                    <div class="custom-control custom-checkbox btn-check">
                                                        <input type="checkbox" class="custom-control-input" id="lEnterprise">
                                                        <label class="custom-control-label" for="lEnterprise">Large Enterprise</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3 text-center">
                                                    <button class="btn btn-theme rounded-pill px-5" style="width: 350px;">Create Account</button>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="or-text">
                                                        <p>or</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3 text-center">
                                                    <button class="btn btn-outline-theme px-5 rounded-pill" style=" width: 350px;">
                                                        <i class="bi-google mr-2"></i> Signin with google
                                                    </button>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Already have an account? 
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Sign in</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Not a Business?
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Create Account</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <p class="small">By creating an account, you agree to the Pangea's 
                                                        <a href="javascript:;" class="btn-link text-success">Terms of Service</a> and 
                                                        <a href="javascript:;" class="btn-link text-success">Privacy Policy</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entity-form intern mytab" id="intern">
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="password" class="form-control" placeholder="***********">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Availability</option>
                                                        <option>Remote</option>
                                                        <option>On-site</option>
                                                        <option>Hybrid</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Location</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Do not wish to declare</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Price</option>
                                                        <option>$10</option>
                                                        <option>$50</option>
                                                        <option>$100</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <input type="search" class="form-control" placeholder="University">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <select class="form-control">
                                                        <option>Degree</option>
                                                        <option>$10</option>
                                                        <option>$50</option>
                                                        <option>$100</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input type="search" class="form-control" placeholder="Specialization">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">
                                                        Agree to our<a href="javascript:;" class="btn-link text-success"> terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3 text-center">
                                                    <button class="btn btn-theme rounded-pill px-5" style="width: 350px;">Create Account</button>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="or-text">
                                                        <p>or</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3 text-center">
                                                    <button class="btn btn-outline-theme px-5 rounded-pill" style=" width: 350px;">
                                                        <i class="bi-google mr-2"></i> Signin with google
                                                    </button>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Already have an account? 
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Sign in</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    Not an Intern?
                                                    <a href="javascript:;" class="ml-2 btn-link text-success">Create Account</a>
                                                </div>
                                                <div class="col-12 text-center mb-3">
                                                    <p class="small">By creating an account, you agree to the Pangea's 
                                                        <a href="javascript:;" class="btn-link text-success">Terms of Service</a> and 
                                                        <a href="javascript:;" class="btn-link text-success">Privacy Policy</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6 d-none d-lg-block rounded-right">
                                <div class="bg-login"></div>
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