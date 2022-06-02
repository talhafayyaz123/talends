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

                @if(!isset($banner_settings) && empty($banner_settings))

                {!! Form::open([
                'url' => url('admin/store-banner_settings'),
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                'id'=> 'government',
                'enctype'=>'multipart/form-data'
                ])
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Banner Settings</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Banner Description</h2>
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
                                                    <input type="file" value="" class="" name="banner_image" id='banner_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Internship Description</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('internship_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="internship_image" id='internship_image'>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Internship Detail</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('internship_detail', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="internship_detail_image" id='internship_image'>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                 @else
                 {!! Form::open(['url' => url('admin/update-homepage-banner-settings/'.$banner_settings['id'].''),
                'enctype'=>'multipart/form-data',
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'categories'] )
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                    <h2>Banner Settings</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Banner Description</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('banner_description', e($banner_settings['banner_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="banner_image" id='banner_image'>


                                                </div>
                                            </div>


                                            @if (!empty($banner_settings['about_talends_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$banner_settings['about_talends_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_about_talends_image" id="hidden_about_talends_image" value="{{{$banner_settings['about_talends_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Internship Description</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('internship_description', e($banner_settings['features_text']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="internship_image" id='internship_image'>


                                                </div>
                                            </div>

                                            
                                            @if (!empty($banner_settings['talends_project_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$banner_settings['talends_project_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_talends_project_image" id="hidden_talends_project_image" value="{{{$banner_settings['talends_project_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="wt-jobcategories wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                            <h2>Internship Detail</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::textarea('internship_detail', e($banner_settings['services_description']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                    </div>

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="internship_detail_image" id='internship_detail_image'>


                                                </div>
                                            </div>

                                            @if (!empty($banner_settings['talends_work_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$banner_settings['talends_work_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_internship_detail_image" id="hidden_internship_detail_image" value="{{{$banner_settings['talends_work_image']}}}">
                                            </div>
                                            @endif
                                        </div>

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


                {!! Form::open([
                 'url' => url('admin/store_home_page-right_opportunity'),
                 'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                 'id'=> 'find_opportunity',
                 'enctype'=>'multipart/form-data'
                 ])
                 !!}
                @if(!isset($find_right_opportunity) && empty($find_right_opportunity))
                 
                
 
                 <div class="wt-dashboardbox">
                     <div class="wt-dashboardboxtitle">
                         <h2>Find Right Opportunity</h2>
                     </div>
                     <div class="wt-dashboardboxcontent">
                         <div class="wt-jobdescription wt-tabsinfo">


                         <div class="wt-tabscontenttitle">
                                 <h2>Main Heading</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('main_heading', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>


                             <div class="wt-tabscontenttitle">
                                 <h2>Sub Heading 1</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('opportunity_heading1', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
 
 
 
                             <div class="wt-tabscontenttitle">
                                 <h2>Sub Heading 2</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('opportunity_heading2', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
 
 
                             <div class="wt-tabscontenttitle">
                                 <h2>Sub Heading 3</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('opportunity_heading3', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
 
                             
 
                             
                         </div>
 
 
                     </div>
                 </div>
 
                  @else
               
                 <div class="wt-dashboardbox">
                     <div class="wt-dashboardboxtitle">
                         <h2>Find Right Opportunity</h2>
                     </div>
                     <div class="wt-dashboardboxcontent">
                         
                     <div class="wt-jobdescription wt-tabsinfo">
                             <div class="wt-tabscontenttitle">
                                 <h2>Main Heading</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('main_heading', $find_right_opportunity['project_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
                     
                     <div class="wt-jobdescription wt-tabsinfo">
                             <div class="wt-tabscontenttitle">
                                 <h2>Sub Heading 1</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('opportunity_heading1', $find_right_opportunity['banner_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
 
 
 
                             <div class="wt-tabscontenttitle">
                                 <h2>Sub Heading 2</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('opportunity_heading2',  $find_right_opportunity['features_text'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
 
 
                             <div class="wt-tabscontenttitle">
                                 <h2>Sub Heading 3</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('opportunity_heading3', $find_right_opportunity['services_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
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
 


                {!! Form::open([
                 'url' => url('admin/store_trusted_by_banner'),
                 'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                 'id'=> 'find_opportunity',
                 'enctype'=>'multipart/form-data'
                 ])
                 !!}
                @if(!isset($trusted_by) && empty($trusted_by))
                 
                
                  <input type="hidden" value="add" name="form_type">
                 <div class="wt-dashboardbox">
                     <div class="wt-dashboardboxtitle">
                         <h2>Trusted By</h2>
                     </div>
                     <div class="wt-dashboardboxcontent">
                         <div class="wt-jobdescription wt-tabsinfo">
                             <div class="wt-tabscontenttitle">
                                 <h2>Image</h2>
                             </div>
                             <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="trusted_by_image" id='trusted_by_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
 

                             
                         </div>
 
 
                     </div>
                 </div>
 
                  @else
                  <input type="hidden" value="update" name="form_type">

                  <div class="wt-dashboardbox">
                     <div class="wt-dashboardboxtitle">
                         <h2>Trusted By</h2>
                     </div>
                     <div class="wt-dashboardboxcontent">
                         <div class="wt-jobdescription wt-tabsinfo">
                             <div class="wt-tabscontenttitle">
                                 <h2>Image</h2>
                             </div>
                             <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="trusted_by_image" id='trusted_by_image'>


                                                </div>
                                            </div>


                                                       
                                        @if (!empty($trusted_by['about_talends_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$trusted_by['about_talends_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_about_talends_image" id="hidden_about_talends_image" value="{{{$trusted_by['about_talends_image']}}}">
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

              <!--  -->
              {!! Form::open([
                 'url' => url('admin/store_freelancer_sidebar'),
                 'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                 'id'=> 'find_opportunity',
                 'enctype'=>'multipart/form-data'
                 ])
                 !!}
                @if(!isset($freelancer_side_bar) && empty($freelancer_side_bar))
                 
                
                  <input type="hidden" value="add" name="form_type">
                 <div class="wt-dashboardbox">
                     <div class="wt-dashboardboxtitle">
                         <h2>Freelancer Sidebar/Profile</h2>
                     </div>
                     <div class="wt-dashboardboxcontent">
                         <div class="wt-jobdescription wt-tabsinfo">
                             <div class="wt-tabscontenttitle">
                                 <h2>Image</h2>
                             </div>
                             <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="sidebar_image" id='sidebar_image'>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="wt-tabscontenttitle">
                                 <h2>Description</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('sidebar_description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                     </div>
 
                                 </fieldset>
                             </div>


                             <div class="wt-tabscontenttitle">
                                 <h2>For Hiring Frequently Asked Questions</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('freelancer_profile_faq', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                     </div>
 
                                 </fieldset>
                             </div>



                             <div class="wt-tabscontenttitle">
                                 <h2>How It Works</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('how_it_works', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                     </div>
 
                                 </fieldset>
                             </div>
 
 

                             
                         </div>
 
 
                     </div>
                 </div>
 
                  @else
                  <input type="hidden" value="update" name="form_type">

                  <div class="wt-dashboardbox">
                     <div class="wt-dashboardboxtitle">
                     <h2>Freelancer Sidebar/Profile</h2>
                                         </div>
                     <div class="wt-dashboardboxcontent">
                         <div class="wt-jobdescription wt-tabsinfo">
                             <div class="wt-tabscontenttitle">
                                 <h2>Image</h2>
                             </div>
                             <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="sidebar_image" id='sidebar_image'>


                                                </div>
                                            </div>


                                                       
                                        @if (!empty($freelancer_side_bar['about_talends_image']))
                                            @php $image = '/uploads/home-pages/freelancer_sidebar/'.$freelancer_side_bar['about_talends_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_about_talends_image" id="hidden_about_talends_image" value="{{{$freelancer_side_bar['about_talends_image']}}}">
                                            </div>
                                            @endif

                                        </div>



                             

                                    </div>
                                </div>


                                <div class="wt-tabscontenttitle">
                                 <h2>Description</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('sidebar_description', $freelancer_side_bar['banner_description'], ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}
                                     </div>
 
                                 </fieldset>
                             </div>
 

                             <div class="wt-tabscontenttitle">
                                 <h2>For Hiring Frequently Asked Questions</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('freelancer_profile_faq', $freelancer_side_bar['features_text'], ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                     </div>
 
                                 </fieldset>
                             </div>


                             <div class="wt-tabscontenttitle">
                                 <h2>How It Works</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                 {!! Form::textarea('how_it_works', $freelancer_side_bar['project_description'], ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                     </div>
 
                                 </fieldset>
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