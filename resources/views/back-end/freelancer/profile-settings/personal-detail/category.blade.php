<div class="wt-tabscontenttitle">
    <h2>Category</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group">
            <span class="">
                {!! Form::select('category_id', $categories, $user_categories[0]->id ?? null ,array('id' => 'category_id','class' => 'form-control', 'onchange' => 'select_sub_categories(this)','placeholder' => 'Category')) !!}
            </span>
        </div>

    </fieldset>
</div>

<div class="wt-tabscontenttitle">
    <h2>Select Sub Categories</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="row">
            <div class="col-12">
                <div class="subcategories-checkboxes" id="freelancerSubCategory">
                
                @if(isset($sub_categories) && !empty($sub_categories)  )    
                    @foreach($sub_categories as $key =>$value)
                    
                    <label class="check">

                        <input type="checkbox" name="sub_categories[]"
                        value="{{  $value->sub_category_id }}" id="sub_category" onclick="select_cat_skills()"
                        {{ in_array($value->sub_category_id,$selced_sub_categories) ? 'checked' :''    }}  
                          >
                        <span>{{  $value->title }}</span>
                        </label>

                        @endforeach
                        @else

                         <p>Not Found</p>
                        @endif
                         

                    
                </div>
            </div>
        </div>

    </fieldset>
</div>


<div class="wt-tabscontenttitle">
    <h2>Skills</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="row">
            <div class="col-12">
                <div class="subcategories-checkboxes" id="freelancerSkills">
                    @if(isset($sub_cat_skills)  && !empty($sub_cat_skills)  )    
                    @foreach($sub_cat_skills as $key =>$value)
                         
                          <label class="check">
                        <input type="checkbox"  value="{{  $value->id }}" name="sub_category_skills[]" {{ ( in_array($value->id,$seleced_cat_skills)) ? 'checked' :''     }}  >
                        <span>{{  $value->title }}</span>
                        </label>

                          @endforeach
                          @else

                         <p>Not Found</p>
                        @endif
                </div>
            </div>
        </div>
 
    </fieldset>
</div>