<div class="wt-dashboardtabs">
    <ul class="wt-tabstitle nav navbar-nav">
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='interneProfile'? 'active': '' }}}" href="{{{ route('interneProfile') }}}">{{{ trans('lang.personal_detail') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='interneExperienceEducation'? 'active': '' }}}" href="{{{ route('interneExperienceEducation') }}}">{{{ trans('lang.experience_education') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='interneProjectAwards'? 'active': '' }}}" href="{{{ route('interneProjectAwards') }}}">{{{ trans('lang.project_awards') }}}</a>
        </li>
    </ul>
</div>
