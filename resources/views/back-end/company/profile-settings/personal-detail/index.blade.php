@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')

@section('content')

@push('stylesheets')

<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

    </style>
@endpush
    <div class="wt-dbsectionspace wt-haslayout la-ps-freelancer">

        <div class="freelancer-profile" id="user_profile">

            <div class="preloader-section" v-if="loading" v-cloak>

                <div class="preloader-holder">

                    <div class="loader"></div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="wt-dashboardbox wt-dashboardtabsholder">

                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/tabs.blade.php'))) 

                            @include('extend.back-end.company.profile-settings.tabs')

                        @else 

                            @include('back-end.company.profile-settings.tabs')

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

                                {!! Form::open(['url' => '', 'class' =>'wt-userform', 'id' => 'company_profile', '@submit.prevent'=>'submitCompanyProfile']) !!}

                                    <div class="wt-yourdetails wt-tabsinfo">

                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/detail.blade.php'))) 

                                            @include('extend.back-end.company.profile-settings.personal-detail.detail')

                                        @else 

                                            @include('back-end.company.profile-settings.personal-detail.detail')

                                        @endif

                                    </div>
                                    

                                    @if (!empty($options) && $options['banner_option'] === 'true')

                                        <div class="wt-bannerphoto wt-tabsinfo">

                                            @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/personal-detail/profile_banner.blade.php'))) 

                                                @include('extend.back-end.company.profile-settings.personal-detail.profile_banner')

                                            @else 

                                                @include('back-end.company.profile-settings.personal-detail.profile_banner')

                                            @endif    

                                        </div>

                                    @endif



                                    <div class="wt-location wt-tabsinfo mb-2">

                                        @include('back-end.company.profile-settings.personal-detail.category')

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

jQuery('.chosen-select').chosen();

   function select_sub_categories(){


    var category= $('input[name="category[]"]:checked').map(function() {
    return $(this).val();
  }).get()   
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
                $('#freelancerSubCategory').html('');
                $('#freelancerSkills').html('');

               for(var i=0; i<len; i++){
                 var id = response['sub_categories'][i].sub_category_id;
                 var title = response['sub_categories'][i].title;
                 var option = "<label class='check'><input  type='checkbox' name='sub_categories[]' value='"+id+"'  onclick='select_cat_skills()'  >";

                option+="<span> "+title+" </span></label>" ; 
             $("#freelancerSubCategory").append(option); 
                
               }
             }else{
                $("#freelancerSubCategory").html('<p>Not Found</p>'); 

             }

           }
        });
   }

   function select_cat_skills (event){


    var skills= $('input[name="sub_categories[]"]:checked').map(function() {
    return $(this).val();
  }).get()
    if (    Array.isArray(skills) && skills.length >0) {


      //  $('#freelancerSkills').find('option').not(':first').remove();
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
