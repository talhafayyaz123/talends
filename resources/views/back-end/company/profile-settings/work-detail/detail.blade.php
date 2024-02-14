<div class="wt-tabscontenttitle">

    <h2>Work Detail</h2>

</div>

<div class="wt-formtheme">

    <fieldset>

        <div class="form-group form-group-half">

            {!! Form::text( 'company_name', $company_work_detail->company_name ?? null, ['class' =>'form-control', 'placeholder' => 'Company Name'  ]  )  !!}

        </div>

        <div class="form-group form-group-half">

            {!! Form::number( 'total_earned', $company_work_detail->total_earned ?? null, ['class' =>'form-control', 'placeholder' => 'Total Earned'   ] ) !!}

        </div>

        <div class="form-group form-group-half">

            {!! Form::number( 'total_hours', $company_work_detail->total_hours ?? null, ['class' =>'form-control', 'placeholder' => 'Total Hours'  ] ) !!}

        </div>

        <div class="form-group form-group-half">

            {!! Form::number( 'total_jobs', $company_work_detail->total_jobs ?? null, ['class' =>'form-control', 'placeholder' => 'Total Jobs'  ] ) !!}

        </div>


        <div class="form-group form-group-half">

        {!! Form::date( 'last_work_date', $company_work_detail->last_work_date ?? null, ['class' =>'form-control', 'placeholder' => 'Lat Worked'  ] ) !!}

        </div>

        <div class="form-group form-group-half">

        {!! Form::date( 'membership_date', $company_work_detail->membership_date ?? null, ['class' =>'form-control', 'placeholder' => 'Membership Date'  ] ) !!}

        </div>

        <div class="form-group form-group-half">

            {!! Form::text( 'office_location', $company_work_detail->office_location ?? null, ['class' =>'form-control', 'placeholder' => 'Office Location'  ] ) !!}

            </div>

            <div class="wt-tabscontenttitle">
                <h2>OverView</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('detail', $company_work_detail->detail ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => 'Detail'  ]  ) !!}

            </fieldset>
        </div>


        <div class="wt-tabscontenttitle">
                <h2>Portfolio</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('portfolio', $company_work_detail->portfolio ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => 'Portfolio'  ]  ) !!}

            </fieldset>
        </div>


        <div class="wt-tabscontenttitle">
                <h2>Team Detail</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('team_detail', $company_work_detail->team_detail ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => 'Team Detail'  ]  ) !!}

            </fieldset>
        </div>


        
        <div class="wt-tabscontenttitle">
                <h2>Experience</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('experience', $company_work_detail->experience ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => 'Experience'  ]  ) !!}

            </fieldset>
        </div>


        <div class="wt-tabscontenttitle">
                <h2>Technology Experience</h2>
            </div>
            <div class="wrap-search wt-haslayout">
            <fieldset>
            {!! Form::textarea('technology_experience', $company_work_detail->technology_experience ?? null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => 'Technology Experience'  ]  ) !!}

            </fieldset>
        </div>

       
    </fieldset>

</div>