@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ?
'extend.front-end.master':
'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@push('stylesheets')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@section('content')



<section class="internee_sec theme_bg_dark find-freelancer-banner">

    <div class="container">

        <div class="row">
            <div class="col-md-7 pb-3 align-self-center">
                <h5 class="text-white opcty_5">Talents</h5>
                <h2 class="text-white">Admin Leads <br><span class="theme_color"></span></h2>
                <p class="text-white opcty_5"></p>
            </div>
           

        </div>

    </div>



</section>


<div class="wt-haslayout">
    <div class="container">
        <div class="row">
            <div class="job-single wt-haslayout">
                <div id="jobs" class="wt-twocolumns wt-haslayout">


                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">

                        <div class="wt-tabscontenttitle">
                            <h2>Response has been saved.<br>Admin will contact with you soon.<br>Thank You.</h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>