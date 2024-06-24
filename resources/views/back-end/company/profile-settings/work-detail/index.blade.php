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

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="wt-dashboardbox wt-dashboardtabsholder">

                    @include('back-end.company.profile-settings.tabs')

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

                                {!! Form::open(['url' => '', 'class' =>'wt-userform', 'id' => 'company_work_detail', '@submit.prevent'=>'submitWorkDetails']) !!}

                                    <div class="wt-yourdetails wt-tabsinfo">
                                    @include('back-end.company.profile-settings.work-detail.detail')
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
