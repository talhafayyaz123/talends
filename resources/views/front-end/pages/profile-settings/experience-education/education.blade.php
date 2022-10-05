<div class="wt-tabscontenttitle wt-addnew">
      <h2>{{ trans('lang.add_your_edu') }}</h2>
    
    </div>

<ul class="wt-experienceaccordion accordion" id="education-list">
      <span class="education-inner-list">
       
      @php
        if(!empty($stored_educations )){
        foreach($stored_educations as $index =>$education)
        {
           
        @endphp
      <li
         
          class="education-element"
        >
          <div class="wt-accordioninnertitle">
            <span
              id="educationaccordion-{{$index}}"
              data-toggle="collapse"
              data-target="#educationaccordioninner-{{$index}}"
            >{{$education['degree_title']}} ({{$education['start_date']}} - {{$education['end_date']}})</span>
            <div class="wt-rightarea">
              <a
                href="javascript:void(0);"
                class="wt-addinfo wt-skillsaddinfo"
                id="educationaccordion-{{$index}}"
                data-toggle="collapse"
                data-target="#educationaccordioninner-{{$index}}"
                aria-expanded="true"
              >
                <i class="lnr lnr-pencil"></i>
              </a>
             
            </div>
          </div>
          <div
            class="wt-collapseexp collapse hide"
            id="educationaccordioninner-{{$index}}"
            aria-labelledby="educationaccordion-{{$index}}"
            data-parent="#accordion"
          >
            <fieldset>
              <div class="form-group form-group-half">
                {{$education['degree_title']}}
              </div>
              <div class="form-group form-group-half">
              {{$education['start_date']}}
             
              </div>
              <div class="form-group form-group-half">
              {{$education['end_date']}}
               
              </div>
              <div class="form-group form-group-half">
              {{$education['institute_title']}}
                
              </div>
              <div class="form-group">
              {{$education['description']}}

               
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