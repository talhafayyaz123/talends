<div class="wt-tabscontenttitle">

    <h2>{{{ trans('lang.your_details') }}}</h2>

</div>

<div class="wt-formtheme">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="">First Name</label>
            {!! Form::text( 'first_name', e(Auth::user()->first_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_first_name')] ) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Last Name</label>
            {!! Form::text( 'last_name', e(Auth::user()->last_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_last_name')] ) !!}
        </div>
        <div class="col-md-4 mb-3">
            <label for="">Gender</label>
            {!! Form::select( 'gender', ['male' => 'Male', 'female' => 'Female', 'no_wish_declare' => 'Do Not Wish To Declare'], e($gender), ['class' =>'form-control', 'placeholder' => trans('lang.ph_select_gender')] ) !!}
        </div>
        <div class="col-md-4 mb-3">
            <label for="">Hourly Rate (AED)</label>
            {!! Form::number( 'hourly_rate', e($hourly_rate), ['class' =>'form-control', 'placeholder' => trans('lang.ph_service_hoyrly_rate')] ) !!}
        </div>
        <div class="col-md-4 mb-3">
            <label for="">Job Type</label>
            <select name="availability" class='form-control' name="availability">    
                <option value="remote" {{ (Auth::user()->profile->availability=='remote') ? 'selected' :''     }}  >Remote</option>
                <option value="on-site" {{ (Auth::user()->profile->availability=='on-site') ? 'selected' :''   }} >On Site</option>
                <option value="hybrid" {{ (Auth::user()->profile->availability=='hybrid') ? 'selected' :''   }} >Hybrid</option>
            </select>
        </div>
        <div class="col-md-12 mb-3">
            <label for="">Communication</label>
            {!! Form::text( 'tagline', e($tagline), ['class' =>'form-control', 'placeholder' => trans('lang.ph_add_tagline')] ) !!}
        </div>
        <div class="col-md-12 mb-3">
            <label for="">Bio</label>
            {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}
        </div>
    </div>
</div>