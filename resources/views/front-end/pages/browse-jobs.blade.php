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
                    <h2 class="text-white">Browse Jobs </h2>
                    <div class="mb-30">
                        <form class="job_search_form form-inline my-2 my-lg-0" method="GET">
                            <div class="input-group">
                                <input class="form-control" id="address-bar" type="search" value="{{$search}}" name="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="my-4">
                        <ul class="search_optinos_list">
                            <li>popular:</li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Copywriting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('talends/assets/img/browse-jobs/banner.png')}}" class="w-100" alt="">
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
                        <select class="talent_select" id="category_id" name="category_id">
                          <option value="">Category</option>
                          @foreach($categories as $category):

                            @php
                            $category_select='';
                            if(Request::get('category_id') &&  Request::get('category_id') ==$category->id ){
                                $category_select='selected=selected';
                            }
                            @endphp
                            <option value="{{ $category->id }}" <?php  echo $category_select ?>  >{{ $category->title }}</option>
                            @endforeach
                      </select>
                         <input type="hidden" value='filter' name='filter'>
                        
                         <select class="talent_select" id="category_id" name="category_id" style="display: none;">
                          <option value="">Category</option>
                          @foreach($categories as $category):
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                      </select>

                     
                      <select  class="talent_select" id="price" name="price">
                          <option value="">Price</option>
                          
                          <option value="10-100" @php if(Request::get('price') &&  Request::get('price') =='10-100' ){  echo  $category_select='selected=selected'; } @endphp>$10-100</option>
                          <option value="100-500" @php if(Request::get('price') &&  Request::get('price') =='100-500' ){  echo  $category_select='selected=selected'; } @endphp>$100-500</option>
                          <option value="500-1500" @php if(Request::get('price') &&  Request::get('price') =='500-1500' ){  echo  $category_select='selected=selected'; } @endphp>$500-1500</option>
                          <option value="1500-2500" @php if(Request::get('price') &&  Request::get('price') =='1500-2500' ){  echo  $category_select='selected=selected'; } @endphp>$1500-2500</option>
                          <option value="2500+"     @php if(Request::get('price') &&  Request::get('price') =='2500' ){  echo  $category_select='selected=selected'; } @endphp  >$2500+</option>
                      </select>

                        <select  class="talent_select" id="project_length" name="project_length">
                          <option value="">Project Length</option>
                          <option value="weekly"  @php if(Request::get('project_length') &&  Request::get('project_length') =='weekly' ){  echo  $category_select='selected=selected'; } @endphp  >Less than a week</option>
                          <option value="monthly"  @php if(Request::get('project_length') &&  Request::get('project_length') =='monthly' ){  echo  $category_select='selected=selected'; } @endphp  >Less than a month</option>
                          <option value="three_month" @php if(Request::get('project_length') &&  Request::get('project_length') =='three_month' ){  echo  $category_select='selected=selected'; } @endphp  >01 to 03 months</option>
                          <option value="six_month" @php if(Request::get('project_length') &&  Request::get('project_length') =='six_month' ){  echo  $category_select='selected=selected'; } @endphp  >03 to 06 months</option>
                          <option value="more_than_six"  @php if(Request::get('project_length') &&  Request::get('project_length') =='more_than_six' ){  echo  $category_select='selected=selected'; } @endphp >More than 06 months</option>
                      </select>


                        <select  class="talent_select" id="location" name="location">
                          <option value="">Location</option>
                          @foreach($locations as $location):
                            @php
                            $location_select='';
                             
                            if(Request::get('location') &&  Request::get('location') ==$location->id ){
                               
                                $location_select='selected=selected';
                            }
                            @endphp
                            <option value="{{ $location->id }}"   <?php  echo $location_select;  ?> >{{ $location->title }}</option>
                            @endforeach
                      </select>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-md-6">
                   
                    <button type='button' class="theme_btn inverse_btn" id='filter_btn'>Filter</button>

                </div>
              
            </div>
            </form>




        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
            @if(!empty($job_details) && $job_details->count())
                @foreach($job_details as $key => $value)
                <div class="col-md-12">
                    <div class="job_list_box">
                        <div class="job_list_head">
                        
                            <ul>
                                <li>
                                    <h4><img src="{{ asset('talends/assets/img/find-talents/user4.png')}}" alt=""> {{  $value->employer->FullName }}</h4>
                                </li>
                                <li>
                                    <h4>{{  $value->created_at->diffForHumans()}}</h4>
                                </li>
                                <li>
                                    <h4><i class="fas fa-map-marker-alt">&nbsp;</i>{{  $value->location->title }}</h4>
                                </li>
                            </ul>
                            <ul class="job_price">
                                <li class="theme_color">${{  $value->price }}</li>
                            </ul>
                        </div>

                        
                        <h4>{{  $value->title }}</h4>
                        
                        {!! $value->description !!}
                        <ul class="job_list_category">
                        @foreach($value->categories as  $category)
                            <li><a href="">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                @endforeach
            @endif
            </div>
            
            {!! $job_details->appends(Request::except('page'))->render() !!}

            <p>
            Displaying {{$job_details->count()}} of {{ $job_details->total() }} jobs.
            </p>

        </div>
    </section>
    <section class="theme_bg_dark">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 pb-5 text-center">
                    <h2 class="text-white">HOW, IT ACTUALLY WORKS!</h2>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                        <h3>A. SHARE A PROJECT</h3>
                        <p>Submit a job to let us know what you need—the more details the better. Whether it’s a single talent or cross-functional team of talents, Talends can do it all.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                        <h3>B. DEDICATED MANAGER</h3>
                        <p>Our dedicated porject manager will be ready to work with you immediately. He will evaluate candidate & notify you upon the completion of the screening process. And if we currently don’t have a matched talent, we will work tirelessly
                            to find one.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                        <h3>C. APPROVALS</h3>
                        <p>They become part of your Team right after we finalise the terms & conditions, financials & timelines.Talends will take complete responsibility of project delivery, quality & milestones.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                        <h3>E. TIME TO GO LIVE</h3>
                        <p>Once, we launch the product, to the moon. That’s what makes us the most happiest company in the Universe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how_its_works_box">
                        <h3>D. PROTOTYPE/ MVP</h3>
                        <p>We 100% make sure the MVP is the exact product what you dream of initially, or we will assist you completely until it’s not up to the mark. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
           
         
    </div>
@endsection

@push('scripts')

<script>

$(document).ready(function() {
    $("#filter_btn").click(function(){

        var url = window.location.pathname.split("/");
         var controller = url[2];
          
         var category_id=$('#category_id').val();
         var price=$('#price').val();
         var project_length=$('#project_length').val();
         var location=$('#location').val();
       
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

               
               if( getSearchParameters()[4]){
               var url_location = getSearchParameters()[4].split("=")[1];
               
              if(!location){
                location=url_location 
              }

            }
             
            if(getSearchParameters()[3]){
                var url_duration = getSearchParameters()[3].split("=")[1];

                if(!project_length){
                project_length=url_duration 
                }
            }
           


          window.location.href = window.location.origin+'/browse-jobs?category_id='+category_id+'&filter=filter&price='+price+'&project_length='+project_length+'&location='+location+'';
           

         }else{
            window.location.href = window.location.origin+'/browse-jobs?category_id='+category_id+'&filter=filter&price='+price+'&project_length='+project_length+'&location='+location+'';

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