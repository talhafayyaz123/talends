<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.my_skills') }}}</h2>
</div>
<div class="wt-myskills">

    <ul id="skill_list" class="sortable list">

     
    
             <ul id="skill_list" class="sortable list">
             @php
    if(!empty($freelancer_skills )){
        foreach($freelancer_skills as $skill)
        { 
             @endphp

                <li class="skill-element">
                    <div class="wt-dragdroptool">
                        <a href="javascript:void(0)" class="lnr lnr-menu"></a>
                    </div>
                    <span class="skill-dynamic-html">
                        {{$skill->title}} (<em class="skill-val">{{$skill->pivot->skill_rating}}</em>%)</span>
                    <span class="skill-dynamic-field sss">
                         </span>
                    <div class="wt-rightarea">
                    </div>
                </li>
                  
   @php     
   }}
    @endphp




            </ul>

  
    </ul>

</div>