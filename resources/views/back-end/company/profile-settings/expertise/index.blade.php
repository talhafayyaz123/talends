@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-manage-account wt-dbsectionspace la-admin-setting" id="settings">
    @if (Session::has('message'))
    <div class="flash_msg">
        <flash_messages :message_class="'success'" :time='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
    </div>
    @elseif (Session::has('error'))
    <div class="flash_msg">
        <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 float-left">
            <div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">

                <div class="wt-tabscontent tab-content">

                    <div class="wt-securityhold la-footer-setting" id="wt-footer">

                        <div class="wt-settingscontent">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('message'))
                            <div class="flash_msg">
                                <flash_messages :message_class="'success'" :time='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                            </div>
                            @elseif (Session::has('error'))
                            <div class="flash_msg">
                                <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
                            </div>
                            @endif


                            <!-- start of footer menu 2 -->
                            {!! Form::open(['url' => ('company/store-expertise'), 'class' => 'wt-formtheme wt-skillsform', 'id'=>'header_menu2' ,'enctype'=>'multipart/form-data' ]) !!}


                            <div class="wt-tabscontenttitle">
                                <h2>Portfilio</h2>
                            </div>
                            <div class="wt-tabscontenttitle">
                                <h2>Portfolio Detail</h2>
                            </div>
                            @if(!isset($company_expertise->portfolio_detail) && empty($company_expertise->portfolio_detail))

                        
                            
                             <div class="wrap-search wt-haslayout">
                                <fieldset>
                                {!! Form::textarea('portfolio_detail', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>

                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="portfolio_image" id='portfolio_image'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="wt-tabscontenttitle">
                                <h2>Portfolio Detail 2</h2>
                            </div>

                            <div class="wrap-search wt-haslayout">
                                <fieldset>
                                {!! Form::textarea('portfolio_detail_2', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 2</h2>

                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="portfolio_image_2" id='portfolio_image_2'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="wt-tabscontenttitle">
                                <h2>Portfolio Detail 3</h2>
                            </div>

                            <div class="wrap-search wt-haslayout">
                                <fieldset>
                                {!! Form::textarea('portfolio_detail_3', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 3</h2>

                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="portfolio_image_3" id='portfolio_image_3'>


                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>

                        
                            @else

                          
                            <div class="wrap-search wt-haslayout">
                                <fieldset>
                                {!! Form::textarea('portfolio_detail', e($company_expertise['portfolio_detail']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment</h2>

                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="portfolio_image" id='portfolio_image'>


                                                </div>
                                            </div>


                                            @if (!empty($company_expertise['portfolio_image']))
                                            @php $image = '/uploads/company/'.$company_expertise['portfolio_image']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_portfolio_image" id="hidden_portfolio_image" value="{{{$company_expertise['portfolio_image']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="wt-tabscontenttitle">
                                <h2>Portfolio Detail 2</h2>
                            </div>
                          
                            <div class="wrap-search wt-haslayout">
                                <fieldset>
                                {!! Form::textarea('portfolio_detail_2', e($company_expertise['portfolio_detail_2']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 2</h2>

                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="portfolio_image_2" id='portfolio_image_2'>


                                                </div>
                                            </div>


                                            @if (!empty($company_expertise['portfolio_image_2']))
                                            @php $image = '/uploads/company/'.$company_expertise['portfolio_image_2']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_portfolio_image_2" id="hidden_portfolio_image_2" value="{{{$company_expertise['portfolio_image_2']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="wt-tabscontenttitle">
                                <h2>Portfolio Detail 3</h2>
                            </div>
                          
                            <div class="wrap-search wt-haslayout">
                                <fieldset>
                                {!! Form::textarea('portfolio_detail_3', e($company_expertise['portfolio_detail_3']), ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                </fieldset>

                                <div class="wt-attachmentsholder">
                                    <div class="lara-attachment-files">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Attachment 3</h2>

                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup">
                                                    <input type="file" value="" class="" name="portfolio_image_3" id='portfolio_image_3'>


                                                </div>
                                            </div>


                                            @if (!empty($company_expertise['portfolio_image_3']))
                                            @php $image = '/uploads/company/'.$company_expertise['portfolio_image_3']; @endphp
                                            <div class="wt-formtheme wt-userform">

                                                <div class="wt-uploadingbox">
                                                    <figure><img src="{{{  asset($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>

                                                </div>
                                                <input type="hidden" name="hidden_portfolio_image_3" id="hidden_portfolio_image_3" value="{{{$company_expertise['portfolio_image_3']}}}">
                                            </div>
                                            @endif


                                        </div>

                                    </div>
                                </div>

                            </div>

                            @endif


                            <div class="wt-tabscontenttitle">
                                <h2>Expertise</h2>
                            </div>
                            <fieldset class="search-content expertise_list">
                                @php $counter = 0; @endphp
                                @if (!empty($company_expertise_array) && !empty($company_expertise_array))
                               
                                @foreach ($company_expertise_array as $unserialize_key => $value)
                                
                                <div class="wrap-search wt-haslayout">
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                            {!! Form::text('expertise['.$counter.'][title]', $value['title'], ['class' => 'form-control']) !!}
                                            {!! Form::text('expertise['.$counter.'][total_developers]', $value['total_developers'], ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="wt-formtheme wt-userform">
                                            <div class="form-group">
                                                {!! Form::text('expertise['.$counter.'][project_cost]',  $value['project_cost'], ['class' => 'form-control',
                                                'placeholder' => 'Project Cost'])
                                                !!}
                                            </div>
                                        </div>

                                        <div class="wt-jobskills wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Categories</h2>
                                            </div>
                                                {!! Form::select('expertise['.$counter.'][categories][]', $categories, $value['categories'], array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_job_cats'))) !!}

                                        </div>


                                        <div class="wt-jobskills wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Description</h2>
                                            </div>

                                                {!! Form::textarea('expertise['.$counter.'][description][]', $value['description'][0], ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                        </div>




                                        <div class="form-group wt-rightarea">
                                            @if ($unserialize_key == 0 )
                                            <span class="wt-addinfobtn" onclick="add_expertise()"><i class="fa fa-plus"></i></span>
                                            @else
                                            <span class="wt-addinfobtn wt-deleteinfo delete-search" data-check="{{{$counter}}}">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @php $counter++; @endphp

                                @endforeach


                                @else

                                <div class="wrap-search wt-haslayout">
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                        {!! Form::text('expertise[0][title]', null, ['class' => 'form-control',
                                        'placeholder' => trans('lang.ph_title')])
                                        !!}
                                        {!! Form::text('expertise[0][total_developers]', null, ['class' => 'form-control',
                                        'placeholder' => 'Total Developers'])
                                        !!}

                                        </div>

                                        <div class="wt-formtheme wt-userform">
                                            <div class="form-group">
                                                {!! Form::text('expertise[0][project_cost]', null, ['class' => 'form-control',
                                                'placeholder' => 'Project Cost'])
                                                !!}
                                            </div>
                                        </div>

                                        <div class="wt-jobskills wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Categories</h2>
                                            </div>
                                                {!! Form::select('expertise[0][categories][]', $categories, '', array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_job_cats'))) !!}

                                        </div>


                                        <div class="wt-jobskills wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Description</h2>
                                            </div>
                                            
                                            {!! Form::textarea('expertise[0][description][]', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

                                        </div>

                                        <div class="form-group wt-rightarea">
                                            
                                        <span class="wt-addinfobtn" onclick="add_expertise()"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </fieldset>
                            <div class="wt-updatall la-updateall-holder">
                                <i class="ti-announcement"></i>
                                <span>{{{ trans('lang.save_changes_note') }}}</span>
                                {!! Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']) !!}
                            </div>

                            {!! Form::close() !!}




                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')
    <script>
        function add_expertise(){
         var length=parseInt($('.expertise_list>div').length);
        
        $.get("/company/add_more-expertise/"+length, function (data)
        {
            
         $(".expertise_list").append(data);
         jQuery('.chosen-select').chosen();

        });

       }


   function remove_expertise(event){
    $(event).parent().parent().remove();

   
}
    </script>
@endpush