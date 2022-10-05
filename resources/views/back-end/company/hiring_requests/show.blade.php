@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    @php
        $verified_user = \App\User::select('user_verified')
        ->where('id', $hiring_request->agency_id)->pluck('user_verified')->first();
        $user = \App\User::where('id', $hiring_request->agency_id)->first();
    @endphp
    <section class="wt-haslayout wt-dbsectionspace la-dbproposal" id="jobs">
        @if (Session::has('error'))
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2></h2>
                    </div>
                    <div class="wt-dashboardboxcontent wt-jobdetailsholder">
                        <div class="wt-freelancerholder wt-tabsinfo">
                            <div class="wt-jobdetailscontent">
                                <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                        <span class="wt-featuredtag">
                                            <img src="{{{ config('app.aws_se_path'). '/' .'images/featured.png' }}}" alt="{{ trans('lang.is_featured') }}"
                                                data-tipso="Plus Member" class="template-content tipso_style">
                                        </span>
                                
                                    <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                            
                                                <div class="wt-title">
                                                    @if (!empty($hiring_request->full_name))
                                                        <a href="{{{ url('profile/'.$user->slug) }}}">
                                                            @if($verified_user === 1)
                                                                <i class="fa fa-check-circle"></i>&nbsp;
                                                            @endif
                                                            {{{$hiring_request->full_name }}}
                                                        </a>
                                                    
                                                    @if (!empty($hiring_request->company_name))
                                                        <h2>{{{ $hiring_request->company_name }}}</h2>
                                                    @endif
                                                </div>
                                            @endif
                                            <ul class="wt-userlisting-breadcrumb">
                                                @if (!empty($hiring_request->phone_number))
                                                    <li><span><i class="fas fa-phone"></i>{{{ $hiring_request->phone_number }}}</span></li>
                                                @endif
                                                @if (!empty($hiring_request->email))
                                                    <li>
                                                        <span>
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>    {{{ $hiring_request->email }}}
                                                        </span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="wt-rightarea">
                                            <div class="wt-hireduserstatus">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>What type of project is this?</label>
                                {!! $questions[0]['question1'] ?? '' !!}
                            </div>
                           
                        </div>


                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>What is your requirement?</label>
                                {!! $questions[0]['question2'] ?? '' !!}
                            </div>
                           
                        </div>
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>What type of business is this for?</label>
                                {!! $questions[0]['question3'] ?? '' !!}
                            </div>
                        </div>


                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>What industry do you operate in?</label>
                                {!! $questions[0]['question4'] ?? '' !!}
                            </div>
                           
                        </div>


                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>Which programming language(s) would you consider using?</label>
                                {!! $questions[0]['question5'] ?? '' !!}
                            </div>
                           
                        </div>


                        
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>How soon would you like the project to begin?</label>
                                {!! $questions[0]['question6'] ?? '' !!}
                            </div>
                           
                        </div>

                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>How likely are you to make a hiring decision?</label>
                                {!! $questions[0]['question7'] ?? '' !!}
                            </div>
                           
                        </div>

                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>What is your estimated budget for this project?</label>
                                {!! $questions[0]['question8'] ?? '' !!}
                            </div>
                           
                        </div>


                        
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>Do you have a budget in mind?</label>
                                {!! $questions[0]['question9'] ?? '' !!}
                            </div>
                           
                        </div>


                        
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>What type of business is this for?</label>
                                {!! $questions[0]['question10'] ?? '' !!}
                            </div>
                           
                        </div>


                        
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <label>When would you like the website to go live/be updated?</label>
                                {!! $questions[0]['question11'] ?? '' !!}
                            </div>
                           
                        </div>
                        
                        <div class="wt-projecthistory">
                            <div class="wt-tabscontenttitle">
                                <h2>Detail</h2>
                            </div>
                            <div class="wt-historycontent">
                            {!! $hiring_request->detail !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            </div>
        </div>
    </section>
@endsection
