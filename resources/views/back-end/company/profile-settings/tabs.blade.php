<div class="wt-dashboardtabs">
    <ul class="wt-tabstitle nav navbar-nav">
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='companyProfile'? 'active': '' }}}" href="{{{ route('companyProfile') }}}">{{{ trans('lang.personal_detail') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='companyExperienceEducation'? 'active': '' }}}" href="{{{ route('companyExperienceEducation') }}}">{{{ trans('lang.experience_education') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='companyProjectAwards'? 'active': '' }}}" href="{{{ route('companyProjectAwards') }}}">{{{ trans('lang.project_awards') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='companyWorkDetail'? 'active': '' }}}" href="{{{ route('companyWorkDetail') }}}">Work Detail</a>
        </li>
    </ul>
</div>
