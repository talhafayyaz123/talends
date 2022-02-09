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

                {!! Form::open(['url' => url('admin/update-government/'.$government['id'].''),
                'enctype'=>'multipart/form-data',
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'categories'] )
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Update Government Record</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Banner</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('banner_description', e($government['banner_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <label for="government_image">

                                                        <span class="wt-btn">{{ trans('lang.select_files') }}</span>
                                                    </label>
                                                    <input type="file" value="" class="" name="government_image" id='government_image'>

                                                </div>
                                            </div>


                                            @if (!empty($government['government_image']))
                                @php $image = '/uploads/home-pages/government/'.$government['government_image']; @endphp
                                <div class="wt-formtheme wt-userform">
                                   
                                    <div class="wt-uploadingbox">
                                        <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>
                                        
                                    </div>
                                    <input type="hidden" name="hidden_government_image" id="hidden_government" value="{{{$government['government_image']}}}">
                                </div>
                            @endif


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Content</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('content_description', e($government['content_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <label for="content_image">

                                                        <span class="wt-btn">{{ trans('lang.select_files') }}</span>
                                                    </label>
                                                    <input type="file" value="" class="" name="content_image" id='content_image'>

                                                </div>
                                            </div>

                                                                @if (!empty($government['content_image']))
                                @php $image = '/uploads/home-pages/government/'.$government['content_image']; @endphp
                                <div class="wt-formtheme wt-userform">
                                  
                                    <div class="wt-uploadingbox">
                                        <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>
                                        
                                    </div>
                                    <input type="hidden" name="hidden_banner_image" id="hidden_banner" value="{{{$government['content_image']}}}">
                                </div>
                            @endif

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Problem</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <div class="lara-attachment-files">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Opportunity Providers</h2>
                                        <fieldset>
                                            <div class="form-group">
                                                {!! Form::textarea('opportunity_providers', e($government['opportunity_providers']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                            </div>

                                        </fieldset>

                                    </div>

                                </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Opportunity Seekers</h2>
                                            <fieldset>
                                                <div class="form-group">
                                                    {!! Form::textarea('opportunity_seekers', e($government['opportunity_seekers']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                                </div>

                                            </fieldset>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Process</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <div class="lara-attachment-files">
                                    <div class="wt-tabscontenttitle">

                                        <fieldset>
                                            <div class="form-group">
                                                {!! Form::textarea('process', e($government['process']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                            </div>

                                        </fieldset>

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

                                        {!! Form::textarea('features_text', e($government['features_text']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Services</h2>
                                            {!! Form::textarea('services_description', e($government['services_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

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