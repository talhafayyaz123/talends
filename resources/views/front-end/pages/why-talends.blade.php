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
        <section class="">
            <div class="container">
                <div class="row row-eq-height">
                    <div class="col-md-12 text-center pb-3">
                    {!!  $about_talends->banner_description ?? '' !!} 
                    <a href="{{ route('register') }}" class="btn btn-theme rounded-pill px-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
        
                @if( isset($about_talends->about_talends_image))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->about_talends_image)}}"  class="w-100" alt="">
                @endif
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="theme_list_labels">
                        {!!  $about_talends->services_description ?? '' !!} 
                        </ul>
                    </div>
                    <div class="col-md-6">
                    {!!  $about_talends->features_text ?? '' !!}                 </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    {!!  $about_talends->project_description ?? '' !!} 
                        <a href="{{ url('search-results?type=job') }}" class="btn btn-theme rounded-pill px-5">See other projects</a>
                    </div>
                    <div class="col-md-6">
                    @if( isset($about_talends->talends_project_image))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->talends_project_image)}}"  class="w-100" alt="">
                @endif
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    @if( isset($about_talends->talends_work_image))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->talends_work_image)}}"  class="w-100" alt="">
                @endif
                    </div>
                    <div class="col-md-6">
                    {!!  $about_talends->work_description ?? '' !!} 
                        <a href="{{ route('register') }}" class="btn btn-theme rounded-pill px-5">Apply to Join</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    {!!  $about_talends->payment_description ?? '' !!} 

                        <a href="{{ url('search-results?type=freelancer') }}" class="btn btn-theme rounded-pill px-5">Find a freelancer</a>
                    </div>
                    <div class="col-md-6">
                    @if( isset($about_talends->talends_payment_image))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->talends_payment_image)}}"  class="w-100" alt="">
                @endif
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    @if( isset($about_talends->talends_support_image	))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->talends_support_image	)}}"  class="w-100" alt="">
                @endif
                    </div>
                    <div class="col-md-6">
                    {!!  $about_talends->support_description ?? '' !!} 
                        <a href="{{ route('register') }}" class="btn btn-theme rounded-pill px-5">join talends</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="theme_bg_dark p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 mx-auto text-center pb-4 mt-5 pt-4">
                        <h2 class="text-white"> Telends <br> <span class="theme_color">for every one</span> </h2>
                        <p class="text-white opcty_5">Telends is one of its kind, where we share equal opportunities to every talented individual & every organization that quick resource that fits into their needs</p>
                    </div>
                    <div class="col-md-12">
                        <div class="talend-tabs-container">
                            <ul class="nav nav-tabs nav-fill mb-3 mt-3" id="simpletab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="exam-tab" data-toggle="tab" href="#talendtab" role="tab" aria-controls="talendtab" aria-selected="true">Freelancers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="exam2-tab" data-toggle="tab" href="#talendtab2" role="tab" aria-controls="talendtab2" aria-selected="false">Internees</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="exam-tab" data-toggle="tab" href="#talendtab3" role="tab" aria-controls="talendtab3" aria-selected="true">Agency</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="exam2-tab" data-toggle="tab" href="#talendtab4" role="tab" aria-controls="talendtab" aria-selected="false">Goverment</a>
                                </li>
                            </ul>
                            <div class="tab-content py-4" id="simpletabContent">
                                <div class="tab-pane fade show active" id="talendtab" role="tabpanel" aria-labelledby="tablend-tab">
                                    
                                            <div class="services_list_box_row">
                                                {!!  $about_talends->freelancer_benefits ?? '' !!} 
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="talendtab2" role="tabpanel" aria-labelledby="tablend-tab2">
                                    
                                            <div class="services_list_box_row">
                                               {!!  $about_talends->internees_benefits ?? '' !!} 
                                            </div>
                                        
                                </div>
                                <div class="tab-pane fade" id="talendtab3" role="tabpanel" aria-labelledby="tablend-tab3">
                                    
                                            <div class="services_list_box_row">
                                                {!!  $about_talends->agencies_benefits ?? '' !!} 
                                            </div>    
                                </div>
                                <div class="tab-pane fade" id="talendtab4" role="tabpanel" aria-labelledby="tablend-tab4">
                                            <div class="services_list_box_row">
                                                {!!  $about_talends->government_benefits ?? '' !!} 
                                            </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                      
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center py-5">
                        <h2>Hire for any scope of work</h2>
                    </div>
                    <style>
                        .bi-check2{
                            font-size: 30px;
                        }
                        .bi-check2::before {
                            width: 60px;
                            height: 60px;
                            background: #349f1a;
                            border-radius: 50%;
                            line-height: 60px;
                        }
                    </style>
                    <div class="col-md-4 text-center">
                    
                <!-- @if( isset($about_talends->short_term_project_image	))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->short_term_project_image	)}}" class="pb-4" alt="">
                        @endif -->
                        <i class="bi-check2 text-white"></i>
                        <h4 class="mb-2">Short-term projects</h4>
                        <p>Find go-to talent who get your needs</p>
                    </div>
                    <div class="col-md-4 text-center">
                    <!-- @if( isset($about_talends->recurring_engagements_image	))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->recurring_engagements_image	)}}" class="pb-4" alt="">
                        @endif -->
                        <i class="bi-check2 text-white"></i>
                    <h4 class="mb-2">Recurring engagements</h4>
                        <p>Build trusted relationships with skilled professionals</p>
                    </div>
                    <div class="col-md-4 text-center">
                
                        <!-- @if( isset($about_talends->long_term_work_image	))
                <img src="{{ asset('uploads/home-pages/about_talends/'.$about_talends->long_term_work_image	)}}" class="pb-4" alt="">
                        @endif -->
                        <i class="bi-check2 text-white"></i>
                    <h4 class="mb-2">Long-term work</h4>
                        <p>Expand your organization’s capabilitie</p>
                    </div>
                </div>
            </div>
        </section>
@endsection