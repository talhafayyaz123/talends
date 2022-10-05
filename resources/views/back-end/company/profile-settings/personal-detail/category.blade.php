<div class="wt-tabscontenttitle">
        <h2>Category</h2>
    </div>
    
            <div class="form-group">
                
                    {!! Form::select('category[]', $categories, $user_categories ?? null ,array('id' => 'category_id','class' => 'chosen-select form-control', 'multiple', 'onchange' => 'select_sub_categories(this)')) !!}
        
            </div>

    

<div class="wt-tabscontenttitle">
    <h2>Sub Categories</h2>

</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group">
            <span class="wt-select" style="z-index: 1;">
                <select name="sub_categories[]" multiple id="freelancerSubCategory" class="form-control" onchange='select_cat_skills(this)'>
                    <option value="">Select Sub Categories</option>
                     @if(isset($sub_categories) && !empty($sub_categories)  )    
                    @foreach($sub_categories as $key =>$value)
                          <option value="{{  $value->sub_category_id }}"  {{ ( in_array($value->sub_category_id,$selced_sub_categories)) ? 'selected' :''     }}   >{{  $value->title }}</option>

                          @endforeach
                          @endif
                </select>

            </span>
        </div>

    </fieldset>
</div>


<div class="wt-tabscontenttitle">
    <h2>Skills</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group">
            <span class="wt-select">
            <select name="sub_category_skills[]"  multiple id="freelancerSkills" class="form-control">
                    <option value="">Select Skills</option>
                    @if(isset($sub_cat_skills)  && !empty($sub_cat_skills)  )    
                    @foreach($sub_cat_skills as $key =>$value)
                          <option value="{{  $value->id }}" {{ ( in_array($value->id,$seleced_cat_skills)) ? 'selected' :''     }}   >{{  $value->title }}</option>

                          @endforeach
                          @endif
                </select>

            </span>
        </div>

    </fieldset>
</div>

@push('scripts')
    <script>

jQuery('.chosen-select').chosen();


</script>
    @endpush
