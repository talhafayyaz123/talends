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
        <div class="col-xs-12 col-sm-12 col-md-12">
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
                            {!! Form::open(['url' => ('admin/privacy-policy'), 'class' => 'wt-formtheme wt-skillsform', 'id'=>'header_menu2' ,'enctype'=>'multipart/form-data' ]) !!}

                            <div class="wt-tabscontenttitle">
                            <h2>Privacy Policy</h2>
                            </div>
                            <fieldset class="search-content expertise_list">
                                @php $counter = 0; @endphp
                                @if (!empty($privacy_policy) && !empty($privacy_policy))
                               
                                @foreach ($privacy_policy as $unserialize_key => $value)
                                
                                <div class="wrap-search wt-haslayout">
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                            {!! Form::text('privacy['.$counter.'][title]', $value['title'], ['class' => 'form-control']) !!}
                                        </div>

                                        

                                       

                                        <div class="wt-jobskills wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Description</h2>
                                            </div>

                                                {!! Form::textarea('privacy['.$counter.'][description][]', $value['description'][0], ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

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
                                        {!! Form::text('privacy[0][title]', null, ['class' => 'form-control',
                                        'placeholder' => trans('lang.ph_title')])
                                        !!}
                                      

                                        </div>

                                      
                                        <div class="wt-jobskills wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Description</h2>
                                            </div>
                                            
                                            {!! Form::textarea('privacy[0][description][]', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.job_dtl_note')]) !!}

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
        
        $.get("/admin/add_more-privacy_policy/"+length, function (data)
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