<!-- <div class="wt-tabscontenttitle">
        <h2>Category</h2>
    </div> -->
        <label for="">Categories</label>
            <div class="form-group">
                

            <div class="subcategories-checkboxes" id="employercategories">
                  

                  @if(isset($categories) && !empty($categories)  )    
                      @foreach($categories as $key =>$value)
                      
                      <label class="check">
  
                      <input type="checkbox" name="category[]"
                      value="{{  $value->id }}" onclick="select_sub_categories(this)"
                      id="category"
                      {{  !empty($user_categories) && in_array($value->id ,$user_categories) ? 'checked' :''    }}  
                        >
                      <span>{{  $value->title }}</span>
                      </label>
  
                      @endforeach
                      @else
  
                       <p>Not Found</p>
                      @endif
                           
  
                      
                  </div>          
            </div>

    
<!-- 
<div class="wt-tabscontenttitle">
    <h2>Sub Categories</h2>

</div> -->
<label for="">Sub Categories</label>
<div class="my-3">
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


<!-- <div class="wt-tabscontenttitle">
    <h2>Skills</h2>
</div> -->
<label for="">Skills  (Choose Specific Skillsets)</label>
<div class="my-3">
   

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

@push('scripts')
    <script>

jQuery('.chosen-select').chosen();


</script>
    @endpush
