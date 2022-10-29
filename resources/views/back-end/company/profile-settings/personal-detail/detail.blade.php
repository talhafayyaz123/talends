<!-- <div class="wt-tabscontenttitle">
    <p class="mb-0">{{{ trans('lang.your_details') }}}</p>
</div> -->
<div class="wt-formtheme">
    <fieldset>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Company Name</label>
                {!! Form::text( 'company_name', e(Auth::user()->profile->company_name), ['class' =>'form-control', 'placeholder' => 'Write Your Agency Name'] ) !!}
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="">Availability</label>
                <select name="availability" class='form-control' name="availability">
                    <option value="remote" {{ (Auth::user()->profile->availability=='remote') ? 'selected' :''     }}>Remote</option>
                    <option value="on-site" {{ (Auth::user()->profile->availability=='on-site') ? 'selected' :''   }}>On Site</option>
                    <option value="hybrid" {{ (Auth::user()->profile->availability=='hybrid') ? 'selected' :''   }}>Hybrid</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Tagline</label>
                {!! Form::text( 'tagline', e($tagline), ['maxlength'=>'100','class' =>'form-control', 'placeholder' => 'Please write up to 100 Words only'] ) !!}
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="">Hourly Rate ({{$currency}})</label>
                {!! Form::number( 'hourly_rate', e($hourly_rate), ['class' =>'form-control', 'placeholder' => trans('lang.ph_service_hoyrly_rate')] ) !!}
            </div>

            <div class="col-md-4 mb-3">
                <label for="">Total Number of jobs Delivered</label>
                {!! Form::number( 'total_jobs', $company_work_detail->total_jobs ?? null, ['class' =>'form-control', 'placeholder' => 'Total Jobs'  ] ) !!}
            </div>

            
            <div class="col-md-4 mb-3">
                <label for="">Joined Talends Since (Year)</label>
                {!! Form::number( 'last_work_date', $company_work_detail->last_work_date ?? null, ['class' =>'form-control', 'placeholder' => '2022'  ] ) !!}
              </div>


              
            <div class="col-md-4 mb-3">
            <label for="">Total Team Members</label>
            @php
                $employees = Helper::getEmployeesList();
                $company_bedget = Helper::getComapnyBudgetList();
            @endphp
                <select name="employees" class='form-control' name="employees">
                @foreach ($employees as $key => $employee)
                      
                <option value="{{{$employee['value']}}}" {{  !empty(Auth::user()->profile->no_of_employees) &&  (Auth::user()->profile->no_of_employees ==$employee['value']) ? 'selected' :''     }}>{{{$employee['title']}}}</option>
                    @endforeach
             
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <label for="">Agency Founded (Year)</label>
                {!! Form::number( 'membership_date', $company_work_detail->membership_date ?? null, ['class' =>'form-control', 'placeholder' => '2022'  ] ) !!}
              </div>

              

              <div class="col-md-4 mb-3">
            <label for="">Budget</label>
          
                <select name="budget" class='form-control' name="budget">
                @foreach ($company_bedget as $key => $budget)
                <option value="{{{$budget['value']}}}" {{  !empty(Auth::user()->profile->min_budget) &&  (Auth::user()->profile->min_budget ==$budget['value']) ? 'selected' :''     }}>{{{$budget['title']}}}</option>
                @endforeach

                </select>
              </div>

              <div class="row" style="padding-left: 2rem !important;">
            <label for="">Client Focus</label>

            <div class="form-group">
                
            <div class="subcategories-checkboxes" id="employercategories">
                  
                      <label class="check">
  
                      <input type="checkbox" name="company_type[]"
                      value="Startup"
                      {{  !empty(Auth::user()->profile->company_type) &&  (in_array('Startup',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}>
                      <span>Startup</span>
                      </label>


                      <label class="check">
  
                      <input type="checkbox" name="company_type[]"
                      value="small_medium_enterprises"
                      {{  !empty(Auth::user()->profile->company_type) &&  (in_array('small_medium_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}  >
                      <span>Small & Mid Enterprises</span>
                      </label>


                      <label class="check">
                    
                    <input type="checkbox" name="company_type[]"
                    value="large_enterprises"
                    {{  !empty(Auth::user()->profile->company_type) &&  (in_array('large_enterprises',explode(',', Auth::user()->profile->company_type))) ? 'checked' :''}}  >
                    <span>Large enterprises</span>
                    </label>
  
                  </div>           
              
              </div></div>


             
              <div class="col-md-12 mb-3">
              @include('back-end.company.profile-settings.personal-detail.profile_photo') 
               </div>

               <div class="col-md-12 mb-3">
               @include('back-end.company.profile-settings.personal-detail.location')
               </div>

            <div class="col-md-12 mb-3">
                <label for="">Overview (Please Write about your Agency)</label>
                <textarea name="detail" style="height: 119px;" cols="100" placeholder="Please Write about your Agency">{{$company_work_detail->detail ?? null}}</textarea>
            </div>
        </div>

    </fieldset>
</div>


@push('scripts')
    <script>

jQuery('.chosen-select').chosen();


</script>
    @endpush