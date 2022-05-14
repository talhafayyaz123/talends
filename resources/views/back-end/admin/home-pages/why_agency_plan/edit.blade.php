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
                {!! Form::open(['url' => url('admin/update-why-agency-plan/'.$why_agency_plan['id'].''),
                'enctype'=>'multipart/form-data',
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'categories'] )
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Why Chose Agency Plan</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Banner</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('banner_description', e($why_agency_plan['banner_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
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


                                            @if (!empty($why_agency_plan['about_talends_image']))
                                            @php $image = '/uploads/home-pages/why_agency_plan/'.$why_agency_plan['about_talends_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_about_talends_image" id="hidden_about_talends_image" value="{{{$why_agency_plan['about_talends_image']}}}">
                                            </div>
                                            @endif


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

                                        {!! Form::textarea('features_text', e($why_agency_plan['features_text']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Services</h2>
                                            {!! Form::textarea('services_description', e($why_agency_plan['services_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Why Need Agency</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('project_description', e($why_agency_plan['project_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 1</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="talends_project_image" id='talends_project_image'>


                                                </div>
                                            </div>


                                            @if (!empty($why_agency_plan['talends_project_image']))
                                            @php $image = '/uploads/home-pages/why_agency_plan/'.$why_agency_plan['talends_project_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_talends_project_image" id="hidden_talends_project_image" value="{{{$why_agency_plan['talends_project_image']}}}">
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>



                                
                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 2</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="short_term_project_image" id='short_term_project_image'>


                                                </div>
                                            </div>


                                            @if (!empty($why_agency_plan['short_term_project_image']))
                                            @php $image = '/uploads/home-pages/why_agency_plan/'.$why_agency_plan['short_term_project_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_short_term_project_image" id="hidden_short_term_project_image" value="{{{$why_agency_plan['short_term_project_image']}}}">
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>


                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 3</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="recurring_engagements_image" id='recurring_engagements_image'>


                                                </div>
                                            </div>


                                            @if (!empty($why_agency_plan['recurring_engagements_image']))
                                            @php $image = '/uploads/home-pages/why_agency_plan/'.$why_agency_plan['recurring_engagements_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_recurring_engagements_image" id="hidden_recurring_engagements_image" value="{{{$why_agency_plan['recurring_engagements_image']}}}">
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>


                                <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Trusted By:</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="long_term_work_image" id='long_term_work_image'>


                                                </div>
                                            </div>


                                            @if (!empty($why_agency_plan['long_term_work_image']))
                                            @php $image = '/uploads/home-pages/why_agency_plan/'.$why_agency_plan['long_term_work_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_long_term_work_image" id="hidden_long_term_work_image" value="{{{$why_agency_plan['long_term_work_image']}}}">
                                            </div>
                                            @endif

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
                                        {!! Form::textarea('work_description', e($why_agency_plan['work_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
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


                                            @if (!empty($why_agency_plan['talends_work_image']))
                                            @php $image = '/uploads/home-pages/why_agency_plan/'.$why_agency_plan['talends_work_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_talends_work_image" id="hidden_talends_work_image" value="{{{$why_agency_plan['talends_work_image']}}}">
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Monthly Plan</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('payment_description', e($why_agency_plan['payment_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>


                            </div>
                        </div>


                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Yearly Plan</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('support_description', e($why_agency_plan['support_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                    </div>

                                </fieldset>


                            </div>
                        </div>




                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Frequently asked questions</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <div class="lara-attachment-files">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Questions</h2>
                                        <fieldset>
                                            <div class="form-group">
                                                {!! Form::textarea('freelancer_benefits',  e($why_agency_plan['freelancer_benefits']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                            </div>

                                        </fieldset>

                                    </div>

                                </div>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Agency Detail</h2>
                                            <fieldset>
                                                <div class="form-group">
                                                    {!! Form::textarea('internees_benefits', e($why_agency_plan['internees_benefits']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                                </div>

                                            </fieldset>

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