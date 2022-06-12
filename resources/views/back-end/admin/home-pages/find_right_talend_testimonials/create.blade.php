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
                'url' => url('admin/save-right-talend_testimonial'),
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                'id'=> 'government',
                'enctype'=>'multipart/form-data'
                ])
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Right Talends Testimonials</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                       
                            <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Testimonial 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">

                            <div class="wt-tabscontenttitle">
                                 <h2>Title</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('testimonial_title_1', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                             <div class="wt-tabscontenttitle">
                                 <h2>Description</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('testimonial_description_1', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                     </div>
 
                                 </fieldset>
                             </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Image</h2>
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


                        <!--  -->
                        
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Testimonial 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">

                            <div class="wt-tabscontenttitle">
                                 <h2>Title 2</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                     
                                         {!! Form::text('testimonial_title_2', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                             <div class="wt-tabscontenttitle">
                                 <h2>Description</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('testimonial_description_2', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Image</h2>
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

                        <!--  -->

                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Testimonial 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">

                            <div class="wt-tabscontenttitle">
                                 <h2>Title 3</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                     
                                         {!! Form::text('testimonial_title_3', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                             <div class="wt-tabscontenttitle">
                                 <h2>Description</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('testimonial_description_3', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Image</h2>
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
                                <h2>Testimonial 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">

                            <div class="wt-tabscontenttitle">
                                 <h2>Title 4</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                     
                                         {!! Form::text('testimonial_title_4', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                             <div class="wt-tabscontenttitle">
                                 <h2>Description</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('testimonial_description_4', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Image</h2>
                                           <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                <input type="file" value="" class="" name="talends_payment_image" id='talends_payment_image'>


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