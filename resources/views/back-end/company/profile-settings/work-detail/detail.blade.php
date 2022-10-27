<div class="wt-tabscontenttitle">

    <h2>Work Detail</h2>

</div>

<div class="wt-formtheme">

    <fieldset>

        <div class="form-group form-group-half">
        <label for="">Company Name</label>

            {!! Form::text( 'company_name', $company_work_detail->company_name ?? null, ['class' =>'form-control', 'placeholder' => 'Company Name'  ]  )  !!}

        </div>

        <div class="form-group form-group-half">
        <label for="">Total Earned (AED)</label>

            {!! Form::number( 'total_earned', $company_work_detail->total_earned ?? null, ['class' =>'form-control', 'placeholder' => 'Total Earned'   ] ) !!}

        </div>

        <div class="form-group form-group-half">
        <label for="">Total Hours</label>

            {!! Form::number( 'total_hours', $company_work_detail->total_hours ?? null, ['class' =>'form-control', 'placeholder' => 'Total Hours'  ] ) !!}

        </div>

        <div class="form-group form-group-half">
        <label for="">Total Jobs</label>

            {!! Form::number( 'total_jobs', $company_work_detail->total_jobs ?? null, ['class' =>'form-control', 'placeholder' => 'Total Jobs'  ] ) !!}

        </div>


        <div class="form-group form-group-half">
        <label for="">Last Work Date</label>

        {!! Form::date( 'last_work_date', $company_work_detail->last_work_date ?? null, ['class' =>'form-control', 'placeholder' => 'Lat Worked'  ] ) !!}

        </div>

        <div class="form-group form-group-half">
        <label for="">Membership Date</label>

        {!! Form::date( 'membership_date', $company_work_detail->membership_date ?? null, ['class' =>'form-control', 'placeholder' => 'Membership Date'  ] ) !!}

        </div>

        <div class="form-group form-group-half" style="display: none;">

            {!! Form::text( 'office_location', $company_work_detail->office_location ?? null, ['class' =>'form-control', 'placeholder' => 'Office Location'  ] ) !!}

            </div>

            <div class="wt-tabscontenttitle">
                <h2>Bio</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('detail', $company_work_detail->detail ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor_detail', 'placeholder' => 'Detail'  ]  ) !!}

            </fieldset>
        </div>


        <div class="wt-tabscontenttitle">
                <h2>Portfolio</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('portfolio', $company_work_detail->portfolio ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor_portfolio', 'placeholder' => 'Portfolio'  ]  ) !!}

            </fieldset>
        </div>


        <div class="wt-tabscontenttitle">
                <h2>Overview</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('team_detail', $company_work_detail->team_detail ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor_team_detail', 'placeholder' => 'Team Detail'  ]  ) !!}

            </fieldset>
        </div>


        
        <div class="wt-tabscontenttitle">
                <h2>Experience</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('experience', $company_work_detail->experience ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor_experience', 'placeholder' => 'Experience'  ]  ) !!}

            </fieldset>
        </div>


        <div class="wt-tabscontenttitle">
                <h2>Technology Experience</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('technology_experience', $company_work_detail->technology_experience ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor_technology_experience', 'placeholder' => 'Technology Experience'  ]  ) !!}

            </fieldset>
        </div>

       
    </fieldset>

</div>