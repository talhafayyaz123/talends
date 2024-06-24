<div class="wt-tabscontenttitle wt-addnew">
            <h2>{{ trans('lang.add_your_awards')}}</h2>
        </div>

        <ul class="wt-experienceaccordion accordion" id="award-list">
        @php
        if(!empty($profile_awards )){
        foreach($profile_awards as $index =>$award)
        {
           
        @endphp
        
        <div class="wt-accordioninnertitle">
           

        
        @if(!empty($award['award_hidden_image'] ))
        <div  data-toggle="collapse"  class="wt-projecttitle collapsed">
            <figure>
                <img  src="{{ $award['award_hidden_image'] }} ">
                 <a  href="javascript:;" class="dz-remove"><span  class="lnr lnr-cross"></span></a></figure>
                  <h3 >{{ $award['award_title'] }}<span >{{ $award['award_date'] }}</span></h3>
                </div> 
                
                </div>

            @endif

        @php
        }}
        @endphp
           
        </ul>