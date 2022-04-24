@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ?
'extend.front-end.master':
'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@push('stylesheets')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@section('content')
@php
$breadcrumbs = Breadcrumbs::generate('hireAgencyForm', $id);
@endphp


<div class="wt-haslayout wt-innerbannerholder theme_bg_dark">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title">
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $company_work_detail->company_name ?? 'Agency' }}</font>
                            </font>
                        </h2>
                    </div>
                    <ol class="wt-breadcrumb">
                        @foreach ($breadcrumbs as $breadcrumb)
                        @if ($breadcrumb->url && !$loop->last)
                        <li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
                        @else
                        <li class="active">{{{ $breadcrumb->title }}}</li>
                        @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wt-haslayout">
    <div class="container">
        <div class="row">
            <div class="job-single wt-haslayout">
                <div id="jobs" class="wt-twocolumns wt-haslayout">
                    @if (Session::has('message'))

                    <div class="flash_msg">

                        <flash_messages :message_class="'success'" :time='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>

                    </div>

                    @endif

                    @if ($errors->any())

                    <ul class="wt-jobalerts">

                        @foreach ($errors->all() as $error)

                        <div class="flash_msg">

                            <flash_messages :message_class="'danger'" :time='10' :message="'{{{ $error }}}'" v-cloak></flash_messages>

                        </div>

                        @endforeach

                    </ul>

                    @endif

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">

                        <div class="wt-tabscontenttitle">
                            <h2>Response has been saved.<br>Agency will contact with you soon.<br>Thank You.</h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>