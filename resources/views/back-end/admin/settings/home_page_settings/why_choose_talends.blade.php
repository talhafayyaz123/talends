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
                'url' => url('admin/store-why_choose_talends'),
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                'id'=> 'government',
                'enctype'=>'multipart/form-data'
                ])
                !!}

                @if(!isset($why_choose_talends) && empty($why_choose_talends))

               <input type="hidden" value="add" name="form_type" >
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Why Organizations Choose Talends</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title1', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title1_image" id='title1_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                        </div>

                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title2', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title2_image" id='title2_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                        </div>


                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title3', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title3_image" id='title3_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                        </div>



                        
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title4', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title4_image" id='title4_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                        </div>



                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 5</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title5', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title5_image" id='title5_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                        </div>


                    </div>


                 

                </div>

                 @else
                 <input type="hidden" value="update" name="form_type" >
               
                 <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Why Organizations Choose Talends</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title1', $why_choose_talends['banner_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title1_image" id='title1_image'>


                                                </div>
                                            </div>


                                            @if (!empty($why_choose_talends['about_talends_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$why_choose_talends['about_talends_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_title1_image" id="hidden_title1_image" value="{{{$why_choose_talends['about_talends_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                        </div>

                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title2', $why_choose_talends['features_text'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title2_image" id='title2_image'>


                                                </div>
                                            </div>

                                            

                                            @if (!empty($why_choose_talends['talends_project_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$why_choose_talends['talends_project_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_title2_image" id="hidden_title2_image" value="{{{$why_choose_talends['talends_project_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                        </div>


                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title3',  $why_choose_talends['services_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title3_image" id='title3_image'>


                                                </div>
                                            </div>

                                            @if (!empty($why_choose_talends['talends_work_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$why_choose_talends['talends_work_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_title3_image" id="hidden_title3_image" value="{{{$why_choose_talends['talends_work_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                        </div>



                        
                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title4', $why_choose_talends['project_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title4_image" id='title4_image'>


                                                </div>
                                            </div>

                                            @if (!empty($why_choose_talends['talends_payment_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$why_choose_talends['talends_payment_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_title4_image" id="hidden_title4_image" value="{{{$why_choose_talends['talends_payment_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                        </div>



                        <div class="wt-jobdescription wt-tabsinfo">
                            <div class="wt-tabscontenttitle">
                                <h2>Title 5</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('title5', $why_choose_talends['work_description'], array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}

                                    </div>

                                </fieldset>


                            </div>
                        </div>

                        <div class="wt-jobcategories wt-tabsinfo">
                          
                            <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>


                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="title5_image" id='title5_image'>


                                                </div>
                                            </div>

                                            @if (!empty($why_choose_talends['talends_support_image']))
                                            @php $image = '/uploads/home-pages/banners/'.$why_choose_talends['talends_support_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_title5_image" id="hidden_title5_image" value="{{{$why_choose_talends['talends_support_image']}}}">
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