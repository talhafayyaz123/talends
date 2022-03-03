@extends('front-end.master2')

@section('title')
        @if ($home == false)
            {{ $page['title'] }}
        @else 
            {{ config('app.name') }} 
        @endif
    @stop
@section('description', "$meta_desc")

@section('content')
   
    <div id="pages-list">
        
    <section class="internee_sec theme_bg_dark">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-7 pb-3 align-self-center">
                    <h5 class="text-white opcty_5">talents</h5>
                    <h2 class="text-white">Find a Talent <br><span class="theme_color"> You'll love</span></h2>
                    <p class="text-white opcty_5">We have professional designers in over 90 design skill sets. Sign up to find the perfect designer for whatever you need</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('talends/assets/img/find-talents/banner.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
        <form class="form-inline" method="GET">
            <div class="row row-eq-height">
                <div class="col-md-12">
                    <div class="talent_filters">

                    <input type="hidden" value='filter' name='filter'>

                    <select class="talent_select" id="category_id" name="category_id">
                          <option value="">Category</option>
                          @foreach($categories as $category):

                            @php
                            $category_select='';
                            if(Request::get('category_id') &&  Request::get('category_id') ==$category->id ){
                                $category_select='selected=selected';
                            }
                            @endphp
                            <option value="{{ $category->id }}" {{$category_select}}  >{{ $category->title }}</option>
                            @endforeach
                      </select>


                      <select name="skill_id" class="talent_select" id="skill_id">
                          <option value="">Skills</option>
                          @foreach($skills as $skill):
                            @php
                            $select='';
                            if(Request::get('skill_id') &&  Request::get('skill_id') ==$skill->id ){
                                $select='selected=selected';
                            }
                            @endphp
                            <option value="{{ $skill->id }}" {{ $select}}  >{{ $skill->title }}</option>
                            @endforeach
                      </select>

                      <select name="gender" class="talent_select" id="gender">
                          <option value="">Gender</option>
                          <option value="male"  {{  (Request::get('gender') &&  Request::get('gender') =='male') ? 'selected' :''  }}   >Male</option>
                          <option value="female" {{  (Request::get('gender') &&  Request::get('gender') =='female') ? 'selected' :''  }}>Female</option>
                      </select>
                   

                      <select name="price" class="talent_select" id="price">
                          <option value="">Price</option>
                          @foreach(Helper::getComapnyBudgetList() as $key=>$price  )
                          @php
                            $location_select='';
                             
                            if(Request::get('price') &&  Request::get('price') ==$price['value'] ){
                               
                                $location_select='selected=selected';
                            }
                            @endphp
                          <option value="{{$price['value']}}" <?php  echo $location_select;  ?>>{{$price['title']}}</option>
                          @endforeach
                      </select>
                   
                      <select  class="talent_select" id="location_id" name="location_id">
                          <option value="">Location</option>
                          @foreach($locations as $location):
                            @php
                            $location_select='';
                             
                            if(Request::get('location_id') &&  Request::get('location_id') ==$location->id ){
                               
                                $location_select='selected=selected';
                            }
                            @endphp
                            <option value="{{ $location->id }}"   <?php  echo $location_select;  ?> >{{ $location->title }}</option>
                            @endforeach
                      </select>
                   
                      <select name="availability" class="talent_select" id="availability">
                          <option value="">Availability</option>
                          <option value="remote" {{  (Request::get('availability') &&  Request::get('availability') =='remote') ? 'selected' :''  }}>Remote</option>
                          <option value="on-site" {{  (Request::get('availability') &&  Request::get('availability') =='on-site') ? 'selected' :''  }}>On Site</option>
                      </select>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div>
                <div class="filter-btns">
                   
                <button type='button' class="theme_btn inverse_btn" id='filter_btn'>Filter</button>
                <button type='button' class="theme_btn inverse_btn" id='reset_btn'>Reset</button>

                </div>
              
            </div>
        </form>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
            @if(!empty($users) && $users->count())
                @foreach($users as $key => $value)
                <div class="col-md-6">
                    <div class="talent_list_box">
                        <div class="tlb__img">
                            @php
                            $avatar = Helper::getProfileImage( $value->profile->user_id, 'medium-small-');
                            @endphp
                            <img src="{{{ asset($avatar) }}}" alt="{{ trans('lang.img') }}">
                        </div>
                        <div class="tlb__content">
                            <div class="row" >
                            

                                <a href="{{route("FreelancerDetail",['id'=>$value->profile->user_id ])}}">
                            <h3>{{  $value->FullName }}</h3>
                            <p>{{$value->profile->tagline}}</p>
                                </a>
                            </div>
                            <div class="tlb__reviews">
                                <div class="bh-stars" data-bh-rating="4.5">
                                    <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                    <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z"/><polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7"/><polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2"/></svg>
                                </div>
                                <div class="tlb__reviews_score">
                                    <ul>
                                        <li>5.0/5.0</li>
                                        <li>12 Reviews</li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{ asset('talends/assets/img/find-talents/profile-logos.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
              
                
            </div>
            {!! $users->appends(Request::except('page'))->render() !!}

            <p>
            Displaying {{$users->count()}} of {{ $users->total() }} jobs.
            </p>
        </div>
    </section>
         
    </div>
@endsection



@push('scripts')

<script>

$(document).ready(function() {
    $("#reset_btn").click(function(){
        window.location.href = window.location.origin+'/find-talends';
    });
    $("#filter_btn").click(function(){

        var url = window.location.pathname.split("/");
        
          
         var category_id=$('#category_id').val();
         var price=$('#price').val();
         var skill_id=$('#skill_id').val();
         var location_id=$('#location_id').val();
         var gender=$('#gender').val();
         var availability=$('#availability').val();

         var param_name = getSearchParameters()[0].split("=")[0];
    
         if(param_name && param_name!='search'){
            var url_category_id = getSearchParameters()[0].split("=")[1];
          
            
              if(!category_id){
                  category_id=url_category_id;
              }

               if(getSearchParameters()[2]){
                var url_price = getSearchParameters()[2].split("=")[1];

              if(!price){
               price=url_price 
              }
               }

               if(getSearchParameters()[3]){
                var url_duration = getSearchParameters()[3].split("=")[1];

                if(!skill_id){
                    skill_id=url_duration 
                }
            }
               
               if( getSearchParameters()[4]){
               var url_location = getSearchParameters()[4].split("=")[1];
               
              if(!location_id){
                location_id=url_location 
              }

            }
             

            if( getSearchParameters()[5]){
               var url_gender = getSearchParameters()[5].split("=")[1];
               
              if(!gender){
                gender=url_gender 
              }

            }


            if( getSearchParameters()[6]){
               var url_availability = getSearchParameters()[6].split("=")[1];
               
              if(!availability){
                availability=url_availability 
              }

            }
           
           

            window.location.href = window.location.origin+'/find-talends?category_id='+category_id+'&filter=filter&price='+price+'&skill_id='+skill_id+'&location_id='+location_id+'&gender='+gender+'&availability='+availability+'';           

         }else{
             window.location.href = window.location.origin+'/find-talends?category_id='+category_id+'&filter=filter&price='+price+'&skill_id='+skill_id+'&location_id='+location_id+'&gender='+gender+'&availability='+availability+'';
         }
        
    }); 
});

function getSearchParameters() {
        var prmstr = window.location.search.substr(1);
        var prmarr = prmstr.split("&");
        
        return prmarr;
    }

</script>

@endpush