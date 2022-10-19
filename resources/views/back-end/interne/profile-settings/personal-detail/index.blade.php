@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')

@section('content')

    <div class="wt-dbsectionspace wt-haslayout la-ps-freelancer">

        <div class="freelancer-profile" id="user_profile">

            <div class="preloader-section" v-if="loading" v-cloak>

                <div class="preloader-holder">

                    <div class="loader"></div>

                </div>

            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="wt-dashboardbox wt-dashboardtabsholder">

                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/tabs.blade.php'))) 

                            @include('extend.back-end.interne.profile-settings.tabs')

                        @else 

                            @include('back-end.interne.profile-settings.tabs')

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

                            <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">

                                {!! Form::open(['url' => '', 'class' =>'wt-userform', 'id' => 'interne_profile', '@submit.prevent'=>'submitInterneProfile']) !!}

                                    <div class="wt-yourdetails wt-tabsinfo">

                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/detail.blade.php'))) 

                                            @include('extend.back-end.interne.profile-settings.personal-detail.detail')

                                        @else 

                                            @include('back-end.interne.profile-settings.personal-detail.detail')

                                        @endif

                                    </div>

                                    <div class="wt-profilephoto wt-tabsinfo">

                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/profile_photo.blade.php'))) 

                                            @include('extend.back-end.interne.profile-settings.personal-detail.profile_photo') 

                                        @else 

                                            @include('back-end.interne.profile-settings.personal-detail.profile_photo') 

                                        @endif

                                    </div>

                                    @if (!empty($options) && $options['banner_option'] === 'true')

                                        <div class="wt-bannerphoto wt-tabsinfo">

                                            @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/profile_banner.blade.php'))) 

                                                @include('extend.back-end.interne.profile-settings.personal-detail.profile_banner')

                                            @else 

                                                @include('back-end.interne.profile-settings.personal-detail.profile_banner')

                                            @endif    

                                        </div>

                                    @endif



                                    <div class="wt-location wt-tabsinfo">

                                        @include('back-end.interne.profile-settings.personal-detail.category')

                                    </div>

                                    <div class="wt-location wt-tabsinfo">

                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/location.blade.php'))) 

                                            @include('extend.back-end.interne.profile-settings.personal-detail.location')

                                        @else 

                                            @include('back-end.interne.profile-settings.personal-detail.location')

                                        @endif

                                    </div>

                                    <div class="wt-skills la-skills-holder wt-tabsinfo">

                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/skill.blade.php'))) 

                                            @include('extend.back-end.interne.profile-settings.personal-detail.skill')   

                                        @else 

                                            @include('back-end.interne.profile-settings.personal-detail.skill')   

                                        @endif 

                                    </div>

                                    <div class="wt-videos-holder wt-tabsinfo la-footer-setting">

                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/videos.blade.php'))) 

                                            @include('extend.back-end.interne.profile-settings.personal-detail.videos')   

                                        @else 

                                            @include('back-end.interne.profile-settings.personal-detail.videos')   

                                        @endif 

                                    </div>

                                    <div>

                                        {!! Form::submit(trans('lang.btn_save_update'), ['class' => 'wt-btn', 'id'=>'submit-profile']) !!}

                                    </div>

                                {!! form::close(); !!}

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script>


   function select_sub_categories(event){
   //  $('#freelancerSubCategory').find('option').not(':first').remove();
     $.ajax({
           url: '/category_sub_categories/'+event.value,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['sub_categories'] != null){
               len = response['sub_categories'].length;
             }
             $("#freelancerSubCategory").html(''); 

             if(len > 0){
               for(var i=0; i<len; i++){
                 var id = response['sub_categories'][i].sub_category_id;
                 var title = response['sub_categories'][i].title;

                 var option = "<label class='check'><input  type='checkbox' name='sub_categories[]' value='"+id+"'  onclick='select_cat_skills()'  >";

                option+="<span> "+title+" </span></label>" ; 
                 $("#freelancerSubCategory").append(option); 
                
               }
             }else{
                $("#freelancerSubCategory").append('<p>Not Found</p>'); 

             }

           }
        });
   }

   function select_cat_skills (event){


    var skills= $('input[name="sub_categories[]"]:checked').map(function() {
    return $(this).val();
  }).get()
    if (    Array.isArray(skills) && skills.length >0) {


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
             $('#freelancerSkills').html('');

             if(len > 0){
               for(var i=0; i<len; i++){
                 var id = response['sub_category_skills'][i].id;
                 var title = response['sub_category_skills'][i].title;

                 var option = "<label class='check'><input  type='checkbox' name='sub_category_skills[]' value='"+id+"'  >";

                 option+="<span> "+title+" </span></label>" ; 
                 $("#freelancerSkills").append(option); 
                
               }
             }else{
                $("#freelancerSkills").append('<p>Not Found</p>'); 

             }

           }
        });



    }
 
   }

    </script>
    @endpush

