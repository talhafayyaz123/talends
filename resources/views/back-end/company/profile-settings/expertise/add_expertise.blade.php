
@if($no<6)
<div class="wrap-search wt-haslayout">
    
    <div class="form-group">

    <div class="wt-tabscontenttitle">
            <h2>Title</h2>
        </div>

        <div class="">
            {!! Form::text('expertise['.$no.'][title]', null, ['class' => 'form-control',
            'placeholder' => trans('lang.ph_title'),'style'=>'border-radius: 4px;border: 1px solid #ddd;width:100%;'])
            !!}
        </div>

     

        <div class="wt-jobskills wt-tabsinfo">
            <br>
            <div class="wt-tabscontenttitle">
                <h2>Description</h2>
            </div>
            <textarea name="expertise[{{$no}}][description][]" style="height: 115px;" cols="100" placeholder="{{  trans('lang.job_dtl_note') }}"></textarea>

        </div>



        <div class="form-group wt-rightarea">
        <span class="wt-addinfobtn wt-deleteinfo delete-search" >
        <i class="fa fa-trash"></i>
    </span>
        </div>
    </div>
</div>
@endif