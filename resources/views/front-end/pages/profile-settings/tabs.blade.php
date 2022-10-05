<div class="wt-dashboardtabs">
    <ul class="wt-tabstitle nav navbar-nav">
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='FreelancerDetail'? 'active': '' }}}" href="{{route("FreelancerDetail",['id'=>$user_id ])}}">{{{ trans('lang.personal_detail') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='freelancerExperience'? 'active': '' }}}"href="{{route("freelancerExperience",['id'=>$user_id ])}}">{{{ trans('lang.experience_education') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='freelancerProjectAwards'? 'active': '' }}}" href="{{route("freelancerProjectAwards",['id'=>$user_id ])}}">{{{ trans('lang.project_awards') }}}</a>
        </li>
    </ul>
</div>
