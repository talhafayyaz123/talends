<!-- <div class="wt-tabscontenttitle">
    <p class="mb-0">{{{ trans('lang.your_details') }}}</p>
</div> -->
<div class="wt-formtheme">
    <fieldset>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Company Name</label>
                {!! Form::text( 'company_name', e(Auth::user()->profile->company_name), ['class' =>'form-control', 'placeholder' => 'Company Name'] ) !!}
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Service Hourly Rate (AED)</label>
                {!! Form::number( 'hourly_rate', e($hourly_rate), ['class' =>'form-control', 'placeholder' => trans('lang.ph_service_hoyrly_rate')] ) !!}
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Tagline</label>
                {!! Form::text( 'tagline', e($tagline), ['class' =>'form-control', 'placeholder' => trans('lang.ph_add_tagline')] ) !!}
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Job Type</label>
                <select name="availability" class='form-control' name="availability">
                    <option value="remote" {{ (Auth::user()->profile->availability=='remote') ? 'selected' :''     }}>Remote</option>
                    <option value="on-site" {{ (Auth::user()->profile->availability=='on-site') ? 'selected' :''   }}>On Site</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <div>
                    <label for="">Company Type</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" id="startup" type="checkbox" name="company_type[]" value="Startup" {{  !empty(Auth::user()->profile->company_type) &&  (in_array('Startup',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                    <label class="custom-control-label" for="startup">Startup</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" id="small_medium_enterprises" type="checkbox" name="company_type[]" value="small_medium_enterprises" {{  !empty(Auth::user()->profile->company_type)  && (in_array('small_medium_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                    <label class="custom-control-label" for="small_medium_enterprises">Small & Mid Enterprises</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" id="large_enterprises" type="checkbox" name="company_type[]" value="large_enterprises" {{  !empty(Auth::user()->profile->company_type)   &&  (in_array('large_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                    <label class="custom-control-label" for="large_enterprises">Large enterprises</label>
                </div>
            </div>
            @php
                $employees = Helper::getEmployeesList();
                $company_bedget = Helper::getComapnyBudgetList();
            @endphp
            <div class="col-md-6 mb-3">
                <div class="wt-radioboxholder w-100">
                    <h4>Total Team Strength </h4>
                    <div class="form-group team_strength">
                        @foreach ($employees as $key => $employee)
                        <span class="wt-radio">
                            <input id="wt-just-{{{$key}}}" type="radio" name="employees" value="{{{$employee['value']}}}" {{  !empty(Auth::user()->profile->no_of_employees) &&  (Auth::user()->profile->no_of_employees ==$employee['value']) ? 'checked' :''     }}>
                            <label for="wt-just-{{{$key}}}">{{{$employee['title']}}}</label>
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="wt-radioboxholder w-100">
                    <h4>Minimum Budget</h4>
                    @foreach ($company_bedget as $key => $budget)
                    <span class="wt-radio">
                        <input id="wt-budget-{{{$key}}}" type="radio" name="budget" value="{{{$budget['value']}}}" {{  !empty(Auth::user()->profile->min_budget) &&  (Auth::user()->profile->min_budget ==$budget['value']) ? 'checked' :''     }}>
                        <label for="wt-budget-{{{$key}}}">{{{$budget['title']}}}</label>
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 mb-3">
                    <label for="">About Company</label>
                    {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}
            </div>
        </div>
        <!-- <div class="form-group form-group-half">
            <span class="wt-select">
                
                {!! Form::select( 'gender', ['male' => 'Male', 'female' => 'Female'], e($gender), ['placeholder' => trans('lang.ph_select_gender')] ) !!}
            </span>
        </div> -->
        <!-- <div class="form-group form-group-half">
            {!! Form::text( 'first_name', e(Auth::user()->first_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_first_name')] ) !!}
        </div>
        <div class="form-group form-group-half">
            {!! Form::text( 'last_name', e(Auth::user()->last_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_last_name')] ) !!}
        </div>
        <div class="form-group form-group-half">
            {!! Form::number( 'hourly_rate', e($hourly_rate), ['class' =>'form-control', 'placeholder' => trans('lang.ph_service_hoyrly_rate')] ) !!}
        </div>
        <div class="form-group">
            {!! Form::text( 'tagline', e($tagline), ['class' =>'form-control', 'placeholder' => trans('lang.ph_add_tagline')] ) !!}
        </div>
        <div class="form-group">
            <select name="availability" class='form-control' name="availability">
                <option value="remote" {{ (Auth::user()->profile->availability=='remote') ? 'selected' :''     }}>Remote</option>
                <option value="on-site" {{ (Auth::user()->profile->availability=='on-site') ? 'selected' :''   }}>On Site</option>
            </select>
        </div> -->
        <!-- <div class="form-group my-3">
            <div>
                <label for="">Company Type</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input class="custom-control-input" id="startup" type="checkbox" name="company_type[]" value="Startup" {{  !empty(Auth::user()->profile->company_type) &&  (in_array('Startup',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                <label class="custom-control-label" for="startup">Startup</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input class="custom-control-input" id="small_medium_enterprises" type="checkbox" name="company_type[]" value="small_medium_enterprises" {{  !empty(Auth::user()->profile->company_type)  && (in_array('small_medium_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                <label class="custom-control-label" for="small_medium_enterprises">Small & Mid Enterprises</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input class="custom-control-input" id="large_enterprises" type="checkbox" name="company_type[]" value="large_enterprises" {{  !empty(Auth::user()->profile->company_type)   &&  (in_array('large_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                <label class="custom-control-label" for="large_enterprises">Large enterprises</label>
            </div>
        </div> -->
        <!-- @php
            $employees = Helper::getEmployeesList();
            $company_bedget = Helper::getComapnyBudgetList();
        @endphp -->

        <!-- <div class="wt-radioboxholder">
            <h4>Total Team Strength </h4>
            <div class="form-group team_strength">
                @foreach ($employees as $key => $employee)
                <span class="wt-radio">
                    <input id="wt-just-{{{$key}}}" type="radio" name="employees" value="{{{$employee['value']}}}" {{  !empty(Auth::user()->profile->no_of_employees) &&  (Auth::user()->profile->no_of_employees ==$employee['value']) ? 'checked' :''     }}>
                    <label for="wt-just-{{{$key}}}">{{{$employee['title']}}}</label>
                </span>
                @endforeach
            </div>
        </div>
        <div class="wt-radioboxholder">
            <h4>Minimum Budget</h4>
            @foreach ($company_bedget as $key => $budget)
            <span class="wt-radio">
                <input id="wt-budget-{{{$key}}}" type="radio" name="budget" value="{{{$budget['value']}}}" {{  !empty(Auth::user()->profile->min_budget) &&  (Auth::user()->profile->min_budget ==$budget['value']) ? 'checked' :''     }}>
                <label for="wt-budget-{{{$key}}}">{{{$budget['title']}}}</label>
            </span>
            @endforeach
        </div> -->
        <!-- <div class="form-group">
            {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}
        </div> -->
    </fieldset>
</div>