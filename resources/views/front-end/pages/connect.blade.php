@extends('front-end.master2')

@section('content')

    <section class="pb-0">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                <h2>Let's Get Connected</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde accusamus libero, modi animi minus placeat.</p>
                <a href="{{ route('register') }}" class="btn btn-theme rounded-pill px-5">Get Started</a>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <img src="{{ asset('talends/assets/img/connect.jpg')}}"  class="w-100" alt=""/>
        </div>
    </section>
    <section style="background-color:#efefef ;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-3">
                    <h2 class="font-weight-bold"><i>HELLO</i></h2>
                    <h4>We're here for you Say hi to theFuture DYNAMICS</h4>
                    <hr class="w-25 mx-auto border-success"/>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="font-weight-bold text-theme">Become a Client</h3>
                    <a href="mailto:project@thefuturedynamics.com" class="text-dark">project@thefuturedynamics.com</a>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="font-weight-bold text-theme">Become Agency Partner</h3>
                    <a href="mailto:partner@thefuturedynamics.com" class="text-dark">partner@thefuturedynamics.com</a>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="font-weight-bold text-theme">Join theFuture DYNAMICS</h3>
                    <a href="mailto:work@thefuturedynamics.com" class="text-dark">work@thefuturedynamics.com</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h2 class="font-weight-bold"><i>Locations</i></h2>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <i class="bi-geo-alt text-theme fa-2x mr-3"></i>
                        <div>
                            <h4 class="mt-0 font-weight-bold">Dubai</h4>
                            <p><i class="bi-phone"></i> +971 52 768 4867</p>
                            <p><i class="bi-phone"></i> +971 4 332 4444</p>
                            <p><i class="bi-globe"></i> 1803 The Metropolis Tower DUBAI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <i class="bi-geo-alt text-theme fa-2x mr-3"></i>
                        <div>
                            <h4 class="mt-0 font-weight-bold">USA</h4>
                            <p><i class="bi-globe"></i> 2002 S Mason Rd Katy, TX 77450, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <i class="bi-geo-alt text-theme fa-2x mr-3"></i>
                        <div>
                            <h4 class="mt-0 font-weight-bold">Pakistan</h4>
                            <p><i class="bi-globe"></i> 100-104 PCSIR Community Building, LAHORE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-sec pb-0">
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
    <section class="trustedby_sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="trustedby_box">
                        <p>Trusted by:</p>
                        <img src="{{asset('talends/assets/img/1646339614.trustedby.svg')}}" class="img-fluid" alt="Talend Partner's Image"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection