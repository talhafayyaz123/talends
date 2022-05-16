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

                            <h2>{{{ trans('lang.your_details') }}}</h2>

                        </div>

                        <div class="wt-formtheme">

                            <fieldset>

                                {!! Form::open(['url' => ('store/hire/agency/'.$id.''), 'class' =>'wt-userform', 'id' => 'company_profile']) !!}
                                
                                <div class="row">
                                   
                                <div class="col-md-6">

                                <div class="form-group">

                                    {!! Form::text( 'full_name', null, ['class' =>'form-control', 'placeholder' => 'Full Name' ,'required' ] ) !!}

                                </div>      </div>


                                <div class="col-md-6">
                                <div class="form-group">

                                    {!! Form::text( 'company_name', null, ['class' =>'form-control', 'placeholder' => 'Company Name','required'] ) !!}

                                </div> </div>
                                </div>
                                

                                <div class="row">
                                   
                                <div class="col-md-6">
                                <div class="form-group">

                                    {!! Form::text( 'email', null, ['class' =>'form-control', 'placeholder' => 'Email','required'] ) !!}

                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">

                                    {!! Form::text( 'phone_number', null, ['class' =>'form-control', 'placeholder' => 'Mobile phone number','required'] ) !!}

                                </div> </div>

                                </div>


                                <div class="row">
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question1]', null, ['class' =>'form-control', 'placeholder' => 'What type of project is this?','required'] ) !!}
   
                                   </div>
                                   </div>
   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question2]', null, ['class' =>'form-control', 'placeholder' => 'What is your requirement?','required'] ) !!}
   
                                   </div> </div>
   
                                   </div>



                                   <div class="row">
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question3]', null, ['class' =>'form-control', 'placeholder' => 'What type of business is this for?','required'] ) !!}
   
                                   </div>
                                   </div>
   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question4]', null, ['class' =>'form-control', 'placeholder' => 'What industry do you operate in?','required'] ) !!}
   
                                   </div> </div>
   
                                   </div>


                                   

                                   <div class="row">
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question5]', null, ['class' =>'form-control', 'placeholder' => 'Which programming language(s) would you consider using?','required'] ) !!}
   
                                   </div>
                                   </div>
   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question6]', null, ['class' =>'form-control', 'placeholder' => 'How soon would you like the project to begin?','required'] ) !!}
   
                                   </div> </div>
   
                                   </div>


                                   <div class="row">
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question7]', null, ['class' =>'form-control', 'placeholder' => 'How likely are you to make a hiring decision?','required'] ) !!}
   
                                   </div>
                                   </div>
   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question8]', null, ['class' =>'form-control', 'placeholder' => 'What is your estimated budget for this project?','required'] ) !!}
   
                                   </div> </div>
   
                                   </div>



                                   
                                   <div class="row">
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question9]', null, ['class' =>'form-control', 'placeholder' => 'Do you have a budget in mind?','required'] ) !!}
   
                                   </div>
                                   </div>
   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question10]', null, ['class' =>'form-control', 'placeholder' => 'What type of business is this for?','required'] ) !!}
   
                                   </div> </div>
   
                                   </div>

              
                                   <div class="row">
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
   
                                       {!! Form::text( 'question[0][question11]', null, ['class' =>'form-control', 'placeholder' => 'When would you like the website to go live/be updated?','required'] ) !!}
   
                                   </div>
                                   </div>
   
                                  
   
                                   </div>


                                <div class="form-group">

                                    {!! Form::textarea( 'description', null, ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ,'required') !!}

                                </div>


                                <div class="wt-updatall">



                                    {!! Form::submit('Submit', ['class' => 'wt-btn', 'id'=>'submit-profile']) !!}

                                </div>
                                {!! form::close(); !!}

                            </fieldset>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>