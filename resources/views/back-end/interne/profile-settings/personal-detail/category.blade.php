<div class="wt-tabscontenttitle">
    <h2>Category</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group form-group-half">
            <span class="wt-select">
                {!! Form::select('category', $categories, Auth::user()->profile->category_id ,array('class' => '', 'placeholder' => trans('lang.select_location'))) !!}
            </span>
        </div>
        
    </fieldset>
</div>