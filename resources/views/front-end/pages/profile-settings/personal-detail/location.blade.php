<div class="wt-tabscontenttitle">
    <h2>{{trans('lang.your_loc')}}</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group form-group-half">
            <span class="wt-select">
           <b>Location</b> : {{e($user_location->title)}}
            </span>
        </div>
        <div class="form-group form-group-half">
            <b>Address</b> : {{e($address)}}
        </div>
        
        <div class="form-group form-group-half">
            <b>Longitude</b> : {{ e($longitude)}} 
        </div>
        <div class="form-group form-group-half">
          <b>Latitude</b> :{{e($latitude)}} 
         </div>
    </fieldset>
</div>