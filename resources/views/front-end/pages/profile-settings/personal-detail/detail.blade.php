<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.your_details') }}}</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group form-group-half">
            <span class="wt-select">
           <b>Gender</b>:  {{ ucfirst($gender) }}
        </span>
        </div>
        <div class="form-group form-group-half">
       <b>First Name</b>: {{ e($user->first_name) }} 
            </div>
        <div class="form-group form-group-half">
        <b>Last Name</b>:  {{  e($user->last_name) }}   
        </div>
        <div class="form-group form-group-half">
      <b>Hourly Rate</b>:   {{ e($hourly_rate) }}   
        </div>
        <div class="form-group">
      <b>Tag Line</b>:  {{  e($tagline) }}   
          </div>
        <div class="form-group">
         <b>Description</b>:  {{e($description)}}
        </div>
    </fieldset>
</div>