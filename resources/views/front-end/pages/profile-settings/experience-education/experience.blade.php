<div class="wt-tabscontenttitle wt-addnew">
      <h2>{{ trans('lang.add_your_exp') }}</h2>
     
    </div>
    
    <ul class="wt-experienceaccordion accordion" id="experience-list">


    <span class="experience-inner-list">
        @php
        if(!empty($stored_experiences )){
        foreach($stored_experiences as $index =>$experience)
        {
           
        @endphp
        <li class="experience-element">
            <div class="wt-accordioninnertitle">
                <span data-toggle="collapse" >{{$experience['job_title']}} ({{$experience['start_date']}} - {{$experience['end_date']}})</span>
                <div class="wt-rightarea">
                <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="experienceaccordion-<?php echo $index ?>" data-toggle="collapse" data-target="#experienceaccordioninner-<?php echo $index ?>" aria-expanded="true">
                        <i class="lnr lnr-pencil"></i>
                    </a>
                   
                </div>
            </div>
            <div class="wt-collapseexp collapse hide" id="experienceaccordioninner-<?php echo $index ?>"  aria-labelledby="experienceaccordion-<?php echo $index ?>" data-parent="#accordion">
                <fieldset>
                    <div class="form-group form-group-half">
                    {{$experience['job_title']}}
                                    </div>
                    <div class="form-group form-group-half">
                    {{$experience['start_date']}}
                    </div>
                    <div class="form-group form-group-half">
                    {{$experience['end_date']}}      
                </div>
                    <div class="form-group form-group-half">
                    {{$experience['company_title']}}
                    </div>
                    <div class="form-group">
                    {{$experience['description']}}

                    </div>
                    <div class="form-group">
                        <span>{{ trans('lang.date_note') }}</span>
                    </div>
                </fieldset>
            </div>
        </li>
        @php
        }}
        @endphp
    </span>

    </ul>