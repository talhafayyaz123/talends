

<div class="wrap-search wt-haslayout">
    <div class="form-group">
        <div class="form-group-holder">
            {!! Form::text('expertise['.$no.'][title]', null, ['class' => 'form-control',
            'placeholder' => trans('lang.ph_title')])
            !!}
            {!! Form::text('expertise['.$no.'][total_developers]', null, ['class' => 'form-control',
            'placeholder' => 'Total Developers'])
            !!}

        </div>

        <div class="wt-formtheme wt-userform">
            <div class="form-group">
                {!! Form::text('expertise['.$no.'][project_cost]', null, ['class' => 'form-control',
                'placeholder' => 'Project Cost'])
                !!}
            </div>
        </div>

        <div class="wt-jobskills wt-tabsinfo">
            <div class="wt-tabscontenttitle">
                <h2>Categories</h2>
            </div>
            {!! Form::select('expertise['.$no.'][categories][]', $categories, '', array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_job_cats'))) !!}


        </div>

        <div class="form-group wt-rightarea">
        <span class="wt-addinfobtn wt-deleteinfo delete-search" >
        <i class="fa fa-trash"></i>
    </span>
            <!-- <span class="wt-removeinfo" onclick="remove_expertise(this)"><i class="fa fa-trash"></i></span> -->
        </div>
    </div>
</div>