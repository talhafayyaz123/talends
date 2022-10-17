<div class="wt-tabscontenttitle">

    <h2>{{{ trans('lang.your_details') }}}</h2>

</div>

<div class="wt-formtheme">

    <fieldset>

        <div class="form-group form-group-half">

            <span class="wt-select">

                {!! Form::select( 'gender', ['male' => 'Male', 'female' => 'Female', 'no_wish_declare' => 'Do Not Wish To Declare'], e($gender), ['placeholder' => trans('lang.ph_select_gender')] ) !!}

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
            <option value="hybrid" {{ (Auth::user()->profile->availability=='hybrid') ? 'selected' :''   }} >Hybrid</option>

        </div>

        <div class="form-group">

            {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}

        </div>

    </fieldset>

</div>