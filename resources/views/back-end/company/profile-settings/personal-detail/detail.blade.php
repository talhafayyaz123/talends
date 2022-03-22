<div class="wt-tabscontenttitle">

    <h2>{{{ trans('lang.your_details') }}}</h2>

</div>

<div class="wt-formtheme">

    <fieldset>

        <div class="form-group form-group-half">

            <span class="wt-select">

                {!! Form::select( 'gender', ['male' => 'Male', 'female' => 'Female'], e($gender), ['placeholder' => trans('lang.ph_select_gender')] ) !!}

            </span>

        </div>

        <div class="form-group form-group-half">

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
        
    
        <div class="form-group" >
        <select name="availability" class='form-control' name="availability">    
            <option value="remote" {{ (Auth::user()->profile->availability=='remote') ? 'selected' :''     }}  >Remote</option>
            <option value="on-site" {{ (Auth::user()->profile->availability=='on-site') ? 'selected' :''   }} >On Site</option>
        </div>

      
        <br>
          <div class="form-group" >
            <input id="startup" type="checkbox" name="company_type[]" value="Startup"  {{  !empty(Auth::user()->profile->company_type) &&  (in_array('Startup',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''     }}>&nbsp;&nbsp; Startup
          &nbsp;&nbsp; &nbsp;&nbsp; <input id="small_medium_enterprises" type="checkbox" name="company_type[]" value="small_medium_enterprises"    {{  !empty(Auth::user()->profile->company_type)  && (in_array('small_medium_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''     }}>&nbsp;&nbsp; Small & Mid Enterprises
            &nbsp;&nbsp; &nbsp;&nbsp; <input id="large_enterprises" type="checkbox" name="company_type[]" value="large_enterprises" {{  !empty(Auth::user()->profile->company_type)   &&  (in_array('large_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''     }}>&nbsp;&nbsp; Large enterprises

          </div>


          @php
          $employees = Helper::getEmployeesList();
          $company_bedget      = Helper::getComapnyBudgetList();
         @endphp
        
          <div class="wt-radioboxholder">
            <br>
            <h4>Total Team Strength  </h4>
              <div class="form-group team_strength">
              @foreach ($employees as $key => $employee)
                  <span class="wt-radio">
                      <input id="wt-just-{{{$key}}}" type="radio" name="employees" value="{{{$employee['value']}}}" 
                      {{  !empty(Auth::user()->profile->no_of_employees) &&  (Auth::user()->profile->no_of_employees ==$employee['value']) ? 'checked' :''     }}>
                      <label for="wt-just-{{{$key}}}">{{{$employee['title']}}}</label>
                  </span>
              @endforeach
          </div></div>

          
          <div class="wt-radioboxholder">
            <br>
                <h4>Minimum Budget</h4>
          
         
        @foreach ($company_bedget as $key => $budget)
            <span class="wt-radio">
                <input id="wt-budget-{{{$key}}}" type="radio" name="budget" value="{{{$budget['value']}}}"  {{  !empty(Auth::user()->profile->min_budget) &&  (Auth::user()->profile->min_budget ==$budget['value']) ? 'checked' :''     }}>
                <label for="wt-budget-{{{$key}}}">{{{$budget['title']}}}</label>
            </span>
        @endforeach
    
    
</div>

        <div class="form-group">

            {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}

        </div>

    </fieldset>

</div>