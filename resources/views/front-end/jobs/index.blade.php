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
                    <h2 class="text-white">Browse Jobs </h2>
                 
                  
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
                        <div class="filters-container">
                    @include('front-end.jobs.filters')
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-userlistingholder wt-haslayout job_list">
                                @if (!empty($keyword))
                                    <!-- <div class="wt-userlistingtitle">
                                        <span>{{ trans('lang.01') }} {{$jobs->count()}} of {{$Jobs_total_records}} results for <em>"{{{$keyword}}}"</em></span>
                                    </div> -->
                                @endif
                                <br>
                                @include('front-end.jobs.ajax_jobs')

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
     $('.job_categories_filter').hide();
     $('.job_location_filter').hide();
     $('.job_skill_filter').hide();
     $('.job_language_filter').hide();
    }

    function toogle_categories(){
     $('.job_categories_filter').toggle();
     $('.job_price_filter').hide();
     $('.job_location_filter').hide();
     $('.job_skill_filter').hide();
     $('.job_length_filter').hide();
     $('.job_language_filter').hide();


    }
    function toogle_location(){
     $('.job_location_filter').toggle();

     $('.job_price_filter').hide();
     $('.job_categories_filter').hide();
     $('.job_skill_filter').hide();

     $('.job_length_filter').hide();
     $('.job_language_filter').hide();

    }

    function toogle_skill(){
     $('.job_skill_filter').toggle();

     $('.job_price_filter').hide();
     $('.job_categories_filter').hide();
     $('.job_categories_filter').hide();
     $('.job_location_filter').hide();
     $('.job_length_filter').hide();

    }

    function toogle_length(){
     $('.job_length_filter').toggle();
     $('.job_price_filter').hide();
     $('.job_categories_filter').hide();
     $('.job_location_filter').hide();
     $('.job_skill_filter').hide();
     $('.job_language_filter').hide();


    }

    function toogle_language(){
     $('.job_language_filter').toggle();
     $('.job_price_filter').hide();
     $('.job_categories_filter').hide();
     $('.job_location_filter').hide();
     $('.job_skill_filter').hide();
     $('.job_length_filter').hide();

    }
    
</script>


<script type="text/javascript">
	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height()+ $('footer').height() >= $(document).height()) {
	        page++;
             loadMoreData(page);
	    }
	});


	 function loadMoreData(page){

        const queryString = window.location.search;
        const parameters = new URLSearchParams(queryString);
         	  $.ajax(
	        {
	            url: 'search-results?page=' + page+'&'+parameters,
	            type: "get",
	            beforeSend: function()
	            {
	                // $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == " "){
	                // $('.ajax-load').html("No more records found");
	                return;
	            }
	            // $('.ajax-load').hide();
	            $(".job_list").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	} 


    var fixadent = $(".filters-container"),
        pos = fixadent.offset();

    $(document).scroll(function(e) {
        e.preventDefault;
        if ($(this).scrollTop() > (pos.top + 40) && fixadent.css('position') == 'static') {
            fixadent.addClass('fixed');
        } else {
            if ($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')) {
                fixadent.removeClass('fixed');
            }
        };
    });
    
</script>

@endpush

