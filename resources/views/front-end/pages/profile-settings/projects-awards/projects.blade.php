<div class="wt-tabscontenttitle wt-addnew">
            <h2>{{trans('lang.add_your_project')}}</h2>
         </div>

         <ul class="wt-experienceaccordion accordion" id="project-list">
            <span  class="project-inner-list">
            @php
        if(!empty($profile_projects )){
        foreach($profile_projects as $index =>$project)
        {
           
        @endphp     
            
        <div class="wt-accordioninnertitle">
               
        
         @if(!empty($project['project_hidden_image'] ))
        <div  class="wt-projecttitle collapsed" data-toggle="collapse">
                    <figure>
                        <img src="{{$project['project_hidden_image']}}">
                       
                    </figure>
                   
                    <h3> {{$project['project_title']}}<span>{{$project['project_url']}}</span></h3>
                </div>
               

               @endif
               
            </div>
       

            @php
        }}
        @endphp
        </ul>