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
                'url' => url('admin/store-team_on_demand'),
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                'id'=> 'government',
                'enctype'=>'multipart/form-data'
                ])
                !!}

                @if(!isset($team_on_demand) && empty($team_on_demand))

               <input type="hidden" value="add" name="team_type" >
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Talend On Demand</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">

                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                  

                                    <div class="form-group">
                                    {!! Form::textarea('title', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                     </div>

                                </fieldset>


                            </div>
                        </div>


                            <div class="wt-tabscontenttitle">
                                <h2>Quality 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description1', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>


                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Quality 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description2', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                             

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Quality 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description3', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>


                        
                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Quality 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description4', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>


                        
                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Banner</h2>
                            </div>
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="banner_image" id='banner_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                        </div>

                    </div>
                </div>

                 @else
                 <input type="hidden" value="update" name="team_type" >
               
                  <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Talend On Demand</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">

                    <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                  

                                    <div class="form-group">                                   
                                         {!! Form::textarea('title', e($team_on_demand['work_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                        </div>

                                </fieldset>


                            </div>
                        </div>


                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Quality 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description1', e($team_on_demand['banner_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>


                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Quality 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description2', e($team_on_demand['features_text']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                             

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Quality 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description3', e($team_on_demand['services_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Quality 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('quality_description4', e($team_on_demand['project_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        


                        
                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Banner</h2>
                            </div>
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="banner_image" id='banner_image'>


                                                </div>
                                            </div>


                                            @if (!empty($team_on_demand['about_talends_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$team_on_demand['about_talends_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_about_talends_image" id="hidden_about_talends_image" value="{{{$team_on_demand['about_talends_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                        </div>

                    </div>
                </div>

                 @endif

                <div class="wt-updatall">
                    <i class="ti-announcement"></i>
                    <span>{{{ trans('lang.save_changes_note') }}}</span>
                    {!! Form::submit('Save', ['class' => 'wt-btn', 'id'=>'submit-service']) !!}
                </div>
                {!! form::close(); !!}

 


            </div>
        </div>
    </div>
</div>
@endsection