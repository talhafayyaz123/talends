@extends('front-end.master2')

@section('content')
    <section class="career-header-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                        <h2>Careers</h2>
                        <p>Make Something Awesome.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="mb-5">WE ARE ALWAYS LOOKING FOR SOME AWESOME TALENT</h2>
                    <p class="mb-5">If you are a true believer of making this world a better place by contributing what you do best then we do share the same values. You are always welcome to join us @theFutureDYNAMICS.</p>
                    <a href="javascript:;" class="btn btn-theme px-5 rounded-pill">Submit Your CV</a>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center mb-3">
                    <hr class="w-25 mx-auto border-success"/>
                    <h2 class="font-weight-bold"><i>Why us?</i></h2>
                </div>
                <div class="col-md-8 ml-auto">
                    <h2 class="mb-5">WHAT WOULD THE WORLD BE LIKE IF COMPANIES PUT USER NEEDS FIRST?</h2>
                    <p>theFuture DYNAMICS was founded in an attempt to answer this question. Two decades later we've demonstrated that industries change and lives are improved when design, technology, and communications come together to solve problems for people. To do this, we've built a company of experts with diverse backgrounds who believe technology should be used to deliver better services and experiences for people. We give them the freedom to make things that matter, working alongside colleagues they respect.</p>
                    <p class="mb-5">We're a company that prizes entrepreneurialism and embraces constant change. Over the years, five perspectives have come to define the way we work:</p>
                </div>
                
            </div>
        </div>
    </section>
    <section class="bg-theme text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center mb-3">
                    <h2 class="font-weight-bold text-white"><i>5 WAYS</i></h2>
                </div>
                <div class="col-md-8 ml-auto">
                    <div class="mb-5">
                        <h3 class="mb-3 mt-0">Be honest</h3>
                        <p>Don’t be afraid to say what you think. Strong teams are built on different perspectives.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-3">Embrace the unknown</h3>
                        <p>The future is uncertain, but you can be ready for it.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-3">Take chances</h3>
                        <p>You can’t be right until you know what’s wrong.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-3">Ideas over egos</h3>
                        <p>Listen to others and save your energy for what matters.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-3">Give a shit</h3>
                        <p>If you don’t care, why should anyone else?</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="form-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3 bg-theme rounded-16 mb-3">
                    <div class="p-4 d-flex justify-content-between flex-column h-100">
                        <div class="d-flex">
                            <img src="{{asset('talends/assets/img/find-talents/user1.png')}}" class="img-fluid mb-4 rounded-circle" alt="" width="60">
                            <div class="ml-3">
                                <p class="text-white mb-0">Head of Sales</p>
                                <h5 class="text-white mb-0">Amna Ali </h5>
                                <p class="text-white opcty_5 small">amna@talends.com </p>
                            </div>
                        </div>
                        <h5 class="text-white font-weight-normal">"I’ve helped numerous companies, scale their teams and hire best remote talent. Happy to  make things possible for you too."</h5>
                    </div>
                </div>
                <div class="col-md-9 mb-3">
                    <div class="content-box">
                        <h2>YOU'RE IN GOOD HANDS</h2>
                        <form id="adminContactForm" method="post" action="">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="full_name"  value="" class="form-control form-control-lg"  placeholder="Name" id="full_name">
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="company_name" class="form-control form-control-lg" placeholder="Company Name (If any)" id="company_name">
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" id="email">
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text"  name='phone_number' class="form-control form-control-lg" placeholder="Phone Number" id="phone_number">
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">UI/UX</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Web Development</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Mobile App Development</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Enterprise Solutions</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">SEO</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Digital Content</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Performance Marketing</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Business consulting</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Training with virtual reality</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Ecommerce</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-theme px-5 rounded-pill">Let us help you</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection