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


                        <select name="skills" class="talent_select" id="skills">
                          <option value="">Skills</option>
                          @foreach($skills as $skill):
                            <option value="{{ $skill->id }}">{{ $skill->title }}</option>
                            @endforeach
                      </select>
                        <select name="gender" class="talent_select" id="gender">
                          <option value="">Gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                      </select>
                        <select name="" class="talent_select" id="">
                          <option value="">Price</option>
                          <option value="Video Editors">Video Editors</option>
                          <option value="Data Analyst">Data Analyst</option>
                      </select>
                        <select name="" class="talent_select" id="">
                          <option value="">Delivery Time</option>
                          <option value="Video Editors">Video Editors</option>
                          <option value="Data Analyst">Data Analyst</option>
                      </select>
                        <select name="" class="talent_select" id="">
                          <option value="">Talent Details</option>
                          <option value="Video Editors">Video Editors</option>
                          <option value="Data Analyst">Data Analyst</option>
                      </select>
                    </div>
                </div>
            </div>
            <br><br>
            <div>
                <div class="col-md-6">
                   
                    <!-- <button type='submit' class="theme_btn inverse_btn" id='filter_btn'>Filter</button> -->

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