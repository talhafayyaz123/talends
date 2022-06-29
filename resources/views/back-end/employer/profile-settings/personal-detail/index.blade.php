@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="freelancer-profile wt-dbsectionspace" id="user_profile">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <div class="wt-dashboardbox wt-dashboardtabsholder">
                    @if (file_exists(resource_path('views/extend/back-end/employer/profile-settings/tabs.blade.php')))
                        @include('extend.back-end.employer.profile-settings.tabs')
                    @else
                        @include('back-end.employer.profile-settings.tabs')
                    @endif
                    <div class="wt-tabscontent tab-content">
                        @if (Session::has('message'))
                            <div class="flash_msg">
                                <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                            </div>
                        @endif
                        @if ($errors->any())
                            <ul class="wt-jobalerts">
                                @foreach ($errors->all() as $error)
                                    <div class="flash_msg">
                                        <flash_messages :message_class="'danger'" :time ='10' :message="'{{{ $error }}}'" v-cloak></flash_messages>
                                    </div>
                                @endforeach
                            </ul>
                        @endif
                        <div class="wt-personalskillshold lare-employer-profile tab-pane active fade show" id="wt-profile">
                            {!! Form::open(['url' => url('employer/store-profile-settings'), 'class' =>'wt-userform', 'id' => 'employer_data', '@submit.prevent' => 'submitEmployerProfile']) !!}
                                <div class="wt-yourdetails wt-tabsinfo">
                                    @if (file_exists(resource_path('views/extend/back-end/employer/profile-settings/personal-detail/detail.blade.php')))
                                        @include('extend.back-end.employer.profile-settings.personal-detail.detail')
                                    @else
                                        @include('back-end.employer.profile-settings.personal-detail.detail')
                                    @endif
                                </div>
                                <div class="wt-profilephoto wt-tabsinfo">
                                    @if (file_exists(resource_path('views/extend/back-end/employer/profile-settings/personal-detail/profile_photo.blade.php')))
                                        @include('extend.back-end.employer.profile-settings.personal-detail.profile_photo')
                                    @else
                                        @include('back-end.employer.profile-settings.personal-detail.profile_photo')
                                    @endif
                                </div>
                                <div class="wt-bannerphoto wt-tabsinfo">
                                    @if (file_exists(resource_path('views/extend/back-end/employer/profile-settings/personal-detail/profile_banner.blade.php')))
                                        @include('extend.back-end.employer.profile-settings.personal-detail.profile_banner')
                                    @else
                                        @include('back-end.employer.profile-settings.personal-detail.profile_banner')
                                    @endif
                                </div>
                                @if($show_emplyr_inn_sec === 'true')
                                    <div class="wt-skills">
                                        @if (file_exists(resource_path('views/extend/back-end/employer/profile-settings/personal-detail/employer-detail.blade.php')))
                                            @include('extend.back-end.employer.profile-settings.personal-detail.employer-detail')
                                        @else
                                            @include('back-end.employer.profile-settings.personal-detail.employer-detail')
                                        @endif
                                    </div>
                                @endif


                                <div class="wt-location wt-tabsinfo">
      
                                

                                    @include('back-end.employer.profile-settings.personal-detail.category')

                                    </div>

                              



                                <div class="wt-location wt-tabsinfo">
                                    @if (file_exists(resource_path('views/extend/back-end/employer/profile-settings/personal-detail/location.blade.php')))
                                        @include('extend.back-end.employer.profile-settings.personal-detail.location')
                                    @else
                                        @include('back-end.employer.profile-settings.personal-detail.location')
                                    @endif
                                </div>
                                <div class="wt-updatall">
                                    <i class="ti-announcement"></i>
                                    <span>{{{ trans('lang.save_changes_note') }}}</span>
                                    {!! Form::submit(trans('lang.btn_save_update'), ['class' => 'wt-btn', 'id'=>'submit-profile']) !!}
                                </div>

                                
                                
                            {!! form::close(); !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>

jQuery('.chosen-select').chosen();

   function select_sub_categories(){
     let category=$('#category_id').val();
     var comma_category = category.join(","); 
   
      $.ajax({
           url: '/category_sub_categories/multiple/'+comma_category,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['sub_categories'] != null){
               len = response['sub_categories'].length;
             }
             if(len > 0){
                $('#freelancerSubCategory').find('option').not(':first').remove();

               for(var i=0; i<len; i++){
                 var id = response['sub_categories'][i].sub_category_id;
                 var title = response['sub_categories'][i].title;
                 var option = "<option value='"+id+"'>"+title+"</option>"; 
                 $("#freelancerSubCategory").append(option); 
                
               }
             }

           }
        });
   }

   function select_cat_skills (event){

   let skills=$('#freelancerSubCategory').val();

    if (    Array.isArray(skills) && skills.length >0) {


        $('#freelancerSkills').find('option').not(':first').remove();
        var comma_skills = skills.join(","); 
         
        $.ajax({
           url: '/sub_category_skills/'+comma_skills,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['sub_category_skills'] != null){
               len = response['sub_category_skills'].length;
             }
            
             if(len > 0){
               for(var i=0; i<len; i++){
                 var id = response['sub_category_skills'][i].id;
                 var title = response['sub_category_skills'][i].title;
                 var option = "<option value='"+id+"'>"+title+"</option>"; 
                 $("#freelancerSkills").append(option); 
                
               }
             }

           }
        });



    }
 
   }

    </script>
    @endpush
