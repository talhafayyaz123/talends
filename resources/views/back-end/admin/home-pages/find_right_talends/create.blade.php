@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 float-left" id="services">
            <div class="preloader-section" v-if="loading" v-cloak>
                <div class="preloader-holder">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="wt-haslayout wt-post-job-wrap">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                {!! Form::open([
                'url' => url('admin/save-find-right-talends'),
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                'id'=> 'government',
                'enctype'=>'multipart/form-data'
                ])
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Let Us Find Right Talends</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Banner</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('banner_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="about_talends_image" id='about_talends_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Features</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">

                                        {!! Form::textarea('features_text', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Services</h2>
                                            {!! Form::textarea('services_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Budget Detail</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('project_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="talends_project_image" id='talends_project_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Work Detail</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('work_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="talends_work_image" id='talends_work_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    
                        
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Support</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('support_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="talends_support_image" id='talends_support_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="wt-jobcategories wt-tabsinfo">
                                <div class="wt-tabscontenttitle">
                                    <h2>Frequently Asked Questions</h2>
                                </div>
                                <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <div class="lara-attachment-files">
                                    <div class="wt-tabscontenttitle">
                                        <fieldset>
                                        <div class="form-group">
                                        {!! Form::textarea('freelancer_benefits', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                        </div>
                                      
                                    </fieldset>
                                    
                                    </div>
                                  
                                </div>
                                    
                             

                                </div>
                            </div>


                            <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Work Scope</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">

                            <div class="wt-tabscontenttitle">
                                 <h2>Title</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Short Term Project</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="short_term_project_image" id='short_term_project_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Recurring engagements</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="recurring_engagements_image" id='recurring_engagements_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Long-term work</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="long_term_work_image" id='long_term_work_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                <div class="wt-updatall">
                    <i class="ti-announcement"></i>
                    <span>{{{ trans('lang.save_changes_note') }}}</span>
                    {!! Form::submit(trans('lang.post_service'), ['class' => 'wt-btn', 'id'=>'submit-service']) !!}
                </div>
                {!! form::close(); !!}
            </div>
        </div>
    </div>
</div>
@endsection