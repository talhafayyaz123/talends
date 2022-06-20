@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ?

'extend.front-end.master':

'front-end.master', ['body_class' => 'wt-innerbgcolor'] )

@push('stylesheets')

<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">

@endpush

@section('title'){{ $f_list_meta_title }} @stop

@section('description', $f_list_meta_desc)

@section('content')

@php $breadcrumbs = Breadcrumbs::generate('searchResults'); @endphp

@if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php')))

@include('extend.front-end.includes.inner-banner',

['title' => trans('lang.freelancers'), 'inner_banner' => $f_inner_banner, 'show_banner' => $show_f_banner ]

)

@else

<section class="internee_sec theme_bg_dark find-freelancer-banner">

    <div class="container">

        <div class="row align-items-end">
            <div class="col-lg-7 pb-3">
                <h5 class="text-white opcty_5">talents</h5>
                <h2 class="text-white">Find a {{ ucfirst( request()->get('type')) }} <br><span class="theme_color"> You'll love</span></h2>
                <p class="text-white opcty_5">We have professional designers in over 90 design skill sets. Sign up to find the perfect designer for whatever you need</p>
            </div>
            <div class="col-lg-5">

                <img src="{{ asset('talends/assets/img/find-talents/banner.png')}}" class="w-100" alt="">

            </div>

        </div>

    </div>



</section>



@endif

<section id="user_profile">
    @if (Session::has('payment_message'))

        @php $response = Session::get('payment_message') @endphp

        <div class="flash_msg">
            <flash_messages :message_class="'{{{$response['code']}}}'" :time='5' :message="'{{{ $response['message'] }}}'" v-cloak></flash_messages>
        </div>

    @endif
    <div class="wt-haslayout">
        <!-- <div class="row"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filters-container">
                        @include('front-end.freelancers.filters')
                    </div>
                </div>
                <!-- <div id="" class="wt-haslayout"> -->
                <div class="col-md-12 col-lg-7 col-xl-8">
                    <div class="wt-userlistingholder wt-userlisting wt-haslayout ">
                       
                        <div class="wt-userlistingholder wt-userlisting wt-haslayout freelancer_list">
                            @include('front-end.freelancers.data')
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-4 px-5">
                    <div class="support-content-box d-flex flex-column align-items-center justify-content-between sticky-top mt-4">
                        <p>
                            {!! $freelancer_side_bar->banner_description  ?? '' !!}
                        </p>
                        <button class="btn btn-success my-5 px-5">Support</button>
                        @if(isset( $freelancer_side_bar->about_talends_image) )
                        <img src="{{asset('uploads/home-pages/freelancer_sidebar/'.$freelancer_side_bar->about_talends_image)}}"
                            class="w-100" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@push('scripts')





<script type="text/javascript">
  

    var page = 1;

    $(window).scroll(function() {

        if ($(window).scrollTop() + $(window).height() + $('footer').height() >= $(document).height()) {

            page++;

            loadMoreData(page);

        }

    });





    function loadMoreData(page) {



        const queryString = window.location.search;

        const parameters = new URLSearchParams(queryString);

        $.ajax({

                url: 'search-results?page=' + page + '&' + parameters,

                type: "get",

                beforeSend: function() {

                    // $('.ajax-load').show();

                }

            })

            .done(function(data) {

                if (data.html == " ") {

                    // $('.ajax-load').html("No more records found");

                    return;

                }

                // $('.ajax-load').hide();

                $(".freelancer_list").append(data.html);

            })

            .fail(function(jqXHR, ajaxOptions, thrownError) {

                alert('server not responding...');

            });

    }

</script>



<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script>

    function toogle_category() {

        $('.freelancer_skills_filter').toggle();

        $('.freelancer_location_filter').hide();

        $('.freelancer_price_filter').hide();

        $('.freelancer_language_filter').hide();

        $('.freelancer_sub_cat_filter').hide();

    }



    function toogle_sub_category(){

        $('.freelancer_sub_cat_filter').toggle();

        $('.freelancer_skills_filter').hide();

        $('.freelancer_location_filter').hide();

        $('.freelancer_price_filter').hide();

        $('.freelancer_language_filter').hide();

    }



    function toogle_location() {

        $('.freelancer_location_filter').toggle();

        $('.freelancer_skills_filter').hide();

        $('.freelancer_price_filter').hide();

        $('.freelancer_language_filter').hide();

        $('.freelancer_sub_cat_filter').hide();

    }



    function toogle_price() {

        $('.freelancer_price_filter').toggle();

        $('.freelancer_skills_filter').hide();

        $('.freelancer_location_filter').hide();

        $('.freelancer_language_filter').hide();

        $('.freelancer_sub_cat_filter').hide();

    }



    function toogle_language() {

        $('.freelancer_language_filter').toggle();

        $('.freelancer_skills_filter').hide();

        $('.freelancer_location_filter').hide();

        $('.freelancer_price_filter').hide();

        $('.freelancer_sub_cat_filter').hide();

    }

    if (APP_DIRECTION == 'rtl') {

        var direction = true;

    } else {

        var direction = false;

    }



    jQuery("#wt-categoriesslider").owlCarousel({

        item: 6,

        rtl: direction,

        loop: true,

        nav: false,

        margin: 0,

        autoplay: true,

        center: true,

        responsiveClass: true,

        responsive: {

            0: {

                items: 1,

            },

            481: {

                items: 2,

            },

            768: {

                items: 3,

            },

            1440: {

                items: 4,

            },

            1760: {

                items: 6,

            }

        }

    });

    // var fixadent = $(".support-content-box"),

    //     pos = fixadent.offset();



    // $(document).scroll(function(e) {

    //     e.preventDefault;

    //     if ($(this).scrollTop() > (pos.top + 40) && fixadent.css('position') == 'static') {

    //         fixadent.addClass('fixed');

    //     } else {

    //         if ($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')) {

    //             fixadent.removeClass('fixed');

    //         }

    //     };

    // });



    var values = [];

    $('input[name="category[]"]:checked').each(function() {

        values[values.length] = (this.checked ? $(this).val() : "");

    });

    var comma_category = values.join(","); 





   if(comma_category.length!=0){

    $.ajax({
        url:  "{{ url('/category_sub_categories/multiple') }}"+ '/' + comma_category,

       type: 'get',

       dataType: 'json',

       success: function(response){

         var len = 0;

         if(response['sub_categories'] != null){

           len = response['sub_categories'].length;

         }

         $(".sub_categories").html('');  



         if(len > 0){



           for(var i=0; i<len; i++){

             var id = response['sub_categories'][i].sub_category_id;

             var title = response['sub_categories'][i].title;

             var option = "<span class='wt-checkbox'><input id='sub_category-"+id+"' type='checkbox' name='sub_categories[]' value='"+id+"'  >";

               option+="<label for='sub_category-"+id+"'> "+title+" </label></span>" ; 

               

             $(".sub_categories").append(option); 

            

           }

         } 



       }

    });

   }



    
   $('.freelancer_category :checkbox').change(function() {

var values = [];

$('input[name="category[]"]:checked').each(function() {

    values[values.length] = (this.checked ? $(this).val() : "");

});

var comma_category = values.join(","); 





$.ajax({
    url:  "{{ url('/category_sub_categories/multiple') }}"+ '/' + comma_category,

   type: 'get',

   dataType: 'json',

   success: function(response){

     var len = 0;

     if(response['sub_categories'] != null){

       len = response['sub_categories'].length;

     }

     $(".sub_categories").html('');  



     if(len > 0){



       for(var i=0; i<len; i++){

         var id = response['sub_categories'][i].sub_category_id;

         var title = response['sub_categories'][i].title;

         var option = "<span class='wt-checkbox'><input id='sub_category-"+id+"' type='checkbox' name='sub_categories[]' value='"+id+"'  >";

           option+="<label for='sub_category-"+id+"'> "+title+" </label></span>" ; 

           

         $(".sub_categories").append(option); 

        

       }

     } 



   }

});        

});



</script>

@endpush

@endsection