@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 
'extend.front-end.master':
 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@section('title'){{ $job_list_meta_title }} @stop
@section('description', $job_list_meta_desc)
@section('content')
    @php $breadcrumbs = Breadcrumbs::generate('searchResults'); @endphp
    @if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php')))
        @include('extend.front-end.includes.inner-banner', 
            ['title' => trans('lang.jobs'), 'inner_banner' => $job_inner_banner, 'show_banner' => $show_job_banner]
        )
    @else 
    <section class="internee_sec theme_bg_dark">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-7 pb-3 align-self-center">
                    <h2 class="text-white">Find Government Projects </h2>
                 
                  
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('talends/assets/img/browse-jobs/banner.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    @endif    
    <br><br>    
    <div  id="jobs">
        @if (Session::has('payment_message'))
            @php $response = Session::get('payment_message') @endphp
            <div class="flash_msg">
                <flash_messages :message_class="'{{{$response['code']}}}'" :time ='5' :message="'{{{ $response['message'] }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <div class="wt-haslayout">
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            @if (file_exists(resource_path('views/extend/front-end/jobs/filters.blade.php'))) 
                                @include('extend.front-end.gov_projects.filters')
                            @else 
                                @include('front-end.gov_projects.filters')
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-userlistingholder wt-haslayout">
                                @if (!empty($keyword))
                                    <div class="wt-userlistingtitle">
                                        <span>{{ trans('lang.01') }} {{$jobs->count()}} of {{$Jobs_total_records}} results for <em>"{{{$keyword}}}"</em></span>
                                    </div>
                                @endif
                               
                                        <div class="wt-userlistinghold wt-userlistingholdvtwo">
                                          
                                                <span class="wt-featuredtag"><img src="images/featured.png" alt="{{{ trans('ph.is_featured') }}}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                            
                                            <div class="wt-userlistingcontent">
                                                <div class="wt-contenthead">
                                                    <div class="wt-title">
                                                       
                                                       
                                                            <a href="{{ url('profile/ava-nguyen') }}"><i class="fa fa-check-circle"></i> ava-nguyen</a>
                                                      
                                                        <h2><a href="{{ url('job/internet-developer') }}">Internet Developer</a></h2>
                                                    </div>
                                                    <div class="wt-description">
                                                        <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam</p>
                                                    </div>
                                                 
                                                        <div class="wt-tag wt-widgettag">
                                                          
                                                                <a href="#">Graphic Design</a>
                                                                <a href="#">My SQL</a>
                                                                <a href="#">PHP</a>
                                                           
                                                        </div>
                                                   
                                                </div>
                                                <div class="wt-viewjobholder">
                                                    <ul>
                                                        
                                                            <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Basic Level</span></li>
                                                       
                                                  
                                                            <li><span><img src="{{{asset( 'uploads/locations/aus.png' )}}}" alt="{{{ trans('lang.location') }}}"> Dubai</span></li>
                                                    
                                                        <li><span><i class="far fa-folder wt-viewjobfolder"></i>{{{ trans('lang.type') }}} Fixed</span></li>
                                                        <li><span><i class="far fa-clock wt-viewjobclock"></i>Less than a week</span></li>
                                                        <li><span><i class="fa fa-tag wt-viewjobtag"></i>{{{ trans('lang.job_id') }}} A1UDS262</span></li>
                                                        <li>
                                                                <a href="javascrip:void(0);" class="wt-clicklike">
                                                                    <i class="fa fa-heart"></i>
                                                                    <span class="save_text">{{ trans('lang.click_to_save') }}</span>
                                                                </a>
                                                            </li>
                                                        <li class="wt-btnarea"><a href="#" class="wt-btn">{{{ trans('lang.view_job') }}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                  
                                        <div class="wt-userlistinghold wt-userlistingholdvtwo">
                                          
                                          <span class="wt-featuredtag"><img src="images/featured.png" alt="{{{ trans('ph.is_featured') }}}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                      
                                      <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                              <div class="wt-title">
                                                 
                                                 
                                                      <a href="{{ url('profile/ava-nguyen') }}"><i class="fa fa-check-circle"></i> ava-nguyen</a>
                                                
                                                  <h2><a href="{{ url('job/internet-developer') }}">Internet Developer</a></h2>
                                              </div>
                                              <div class="wt-description">
                                                  <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam</p>
                                              </div>
                                           
                                                  <div class="wt-tag wt-widgettag">
                                                    
                                                          <a href="#">Graphic Design</a>
                                                          <a href="#">My SQL</a>
                                                          <a href="#">PHP</a>
                                                     
                                                  </div>
                                             
                                          </div>
                                          <div class="wt-viewjobholder">
                                              <ul>
                                                  
                                                      <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Basic Level</span></li>
                                                 
                                            
                                                      <li><span><img src="{{{asset( 'uploads/locations/aus.png' )}}}" alt="{{{ trans('lang.location') }}}"> Dubai</span></li>
                                              
                                                  <li><span><i class="far fa-folder wt-viewjobfolder"></i>{{{ trans('lang.type') }}} Fixed</span></li>
                                                  <li><span><i class="far fa-clock wt-viewjobclock"></i>Less than a week</span></li>
                                                  <li><span><i class="fa fa-tag wt-viewjobtag"></i>{{{ trans('lang.job_id') }}} A1UDS262</span></li>
                                                  <li>
                                                          <a href="javascrip:void(0);" class="wt-clicklike">
                                                              <i class="fa fa-heart"></i>
                                                              <span class="save_text">{{ trans('lang.click_to_save') }}</span>
                                                          </a>
                                                      </li>
                                                  <li class="wt-btnarea"><a href="#" class="wt-btn">{{{ trans('lang.view_job') }}}</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                               
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

function toogle_price(){
 $('.job_price_filter').toggle();
}

function toogle_categories(){
 $('.job_categories_filter').toggle();
}
function toogle_location(){
 $('.job_location_filter').toggle();
}

function toogle_skill(){
 $('.job_skill_filter').toggle();
}

function toogle_length(){
 $('.job_length_filter').toggle();
}

function toogle_language(){
 $('.job_language_filter').toggle();
}

</script>
@endpush

