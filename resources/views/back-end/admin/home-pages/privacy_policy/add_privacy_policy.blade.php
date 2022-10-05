
<div class="wrap-search wt-haslayout">
    
    <div class="form-group">
        <div class="form-group-holder">
            {!! Form::text('privacy['.$no.'][title]', null, ['class' => 'form-control',
            'placeholder' => trans('lang.ph_title')])
            !!}
        
        </div>

        <div class="wt-jobskills wt-tabsinfo">
            <div class="wt-tabscontenttitle">
                <h2>Description</h2>
            </div>
            {!! Form::textarea('privacy['.$no.'][description][]', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
        </div>



        <div class="form-group wt-rightarea">
        <span class="wt-addinfobtn wt-deleteinfo delete-search" >
        <i class="fa fa-trash"></i>
    </span>
            <!-- <span class="wt-removeinfo" onclick="remove_expertise(this)"><i class="fa fa-trash"></i></span> -->
        </div>
    </div>
</div>
