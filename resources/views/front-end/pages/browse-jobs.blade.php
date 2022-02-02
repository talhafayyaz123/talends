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
                        <form class="job_search_form form-inline my-2 my-lg-0">
                            <div class="input-group">
                                <input class="form-control" id="address-bar" type="search" placeholder="Search" aria-label="Search">
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
            <div class="row row-eq-height">
                <div class="col-md-12">
                    <div class="talent_filters">
                        <select name="" class="talent_select" id="">
                          <option value="">Category</option>
                          <option value="Video Editors">Video Editors</option>
                          <option value="Data Analyst">Data Analyst</option>
                      </select>
                        <select name="" class="talent_select" id="">
                          <option value="">Project Attributes</option>
                          <option value="Video Editors">Video Editors</option>
                          <option value="Data Analyst">Data Analyst</option>
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
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="job_list_box">
                        <div class="job_list_head">
                            <ul>
                                <li>
                                    <h4><img src="{{ asset('talends/assets/img/find-talents/user1.png')}}" alt=""> Mohammed Ismail</h4>
                                </li>
                                <li>
                                    <h4>Posted 2 hours ago</h4>
                                </li>
                                <li>
                                    <h4><i class="fas fa-map-marker-alt">&nbsp;</i>Remote</h4>
                                </li>
                            </ul>
                            <ul class="job_price">
                                <li class="theme_color">$1000-1500</li>
                            </ul>
                        </div>
                        <h4>Wireframing websites, content strategy, Virtual Assistant</h4>
                        <p>I am a freelance wordpress developer. i have clients that have ideas they need brought to life on their websites but i dont have the time to wireframe and build their ideas for them...</p>
                        <ul class="job_list_category">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Copywriting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="job_list_box">
                        <div class="job_list_head">
                            <ul>
                                <li>
                                    <h4><img src="{{ asset('talends/assets/img/find-talents/user2.png')}}" alt=""> Mohammed Ismail</h4>
                                </li>
                                <li>
                                    <h4>Posted 2 hours ago</h4>
                                </li>
                                <li>
                                    <h4><i class="fas fa-map-marker-alt">&nbsp;</i>Remote</h4>
                                </li>
                            </ul>
                            <ul class="job_price">
                                <li class="theme_color">$1500</li>
                            </ul>
                        </div>
                        <h4>Simple Mobile Responsive Sales Pages in Wordpress</h4>
                        <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                        <ul class="job_list_category">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Copywriting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="job_list_box">
                        <div class="job_list_head">
                            <ul>
                                <li>
                                    <h4><img src="{{ asset('talends/assets/img/find-talents/user3.png')}}" alt=""> Mohammed Ismail</h4>
                                </li>
                                <li>
                                    <h4>Posted 2 hours ago</h4>
                                </li>
                                <li>
                                    <h4><i class="fas fa-map-marker-alt">&nbsp;</i>Remote</h4>
                                </li>
                            </ul>
                            <ul class="job_price">
                                <li class="theme_color">$3000-4500</li>
                            </ul>
                        </div>
                        <h4>Recurrent work: Create Sales Pages in Wordpress</h4>
                        <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                        <ul class="job_list_category">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Copywriting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="job_list_box">
                        <div class="job_list_head">
                            <ul>
                                <li>
                                    <h4><img src="{{ asset('talends/assets/img/find-talents/user4.png')}}" alt=""> Mohammed Ismail</h4>
                                </li>
                                <li>
                                    <h4>Posted 2 hours ago</h4>
                                </li>
                                <li>
                                    <h4><i class="fas fa-map-marker-alt">&nbsp;</i>Remote</h4>
                                </li>
                            </ul>
                            <ul class="job_price">
                                <li class="theme_color">$1000-1500</li>
                            </ul>
                        </div>
                        <h4>Website Designer with PSD to HTML/CSS skills required</h4>
                        <p>Are you a website designer? Would you say you have a GREAT eye for design? And consider yourself more of a designer than a developer?</p>
                        <ul class="job_list_category">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Copywriting</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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