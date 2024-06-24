@extends('front-end.master2')
@push('owlstyle')
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section class="connect-slider-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="connect-slides" class="owl-carousel owl-theme">
                        <h2>Salut</h2>
                        <h2>Hola</h2>
                        <h2>مرحبا</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="theme_bg_dark">
        <div class="container">
            <div class="row">
               <!--  <div class="col-md-6 order-md-2 mb-4">
                    <img src="{{ asset('talends/assets/img/connect.webp')}}" class="img-fluid" alt="">
                </div> -->
                <div class="col-md-12 order-md-1 mb-4">
                    <h5 class="text-white opcty_5">CONTACT OUR SUPPORT TEAM</h5>
                    <h1 class="text-white">We’re here 24/7</h1>
                    <p class="text-white opcty_5">Reach out with your questions, concerns and challenges. Or just to say hi. We’ll be happy to chat and help.</p>
                    <!-- <a href="javascript:;" class="btn btn-theme px-4 rounded-pill">Chat Now</a> -->
                    <h4 class="text-white">Call <a href="tel:+971527684867" class="text-decoration text-white">+971 52 768 4867</a></h4>
                    <p class="text-white opcty_5">International calling fees may apply</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center mb-3">
                    <hr class="w-25 mx-auto border-success"/>
                    <h2 class="font-weight-bold"><i>HELLO</i></h2>
                </div>
                <div class="col-md-9">
                    <h2 class="mb-5">We're here for you Say hi to Talends</h2>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 class="font-weight-bold">Become a Client</h3>
                            <a href="mailto:enquiry@talends.com" class="text-dark">project@talends.com</a>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h3 class="font-weight-bold">Become Agency Partner</h3>
                            <a href="mailto:enquiry@talends.com" class="text-dark">partner@talends.com</a>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h3 class="font-weight-bold">Join Talends</h3>
                            <a href="mailto:enquiry@talends.com" class="text-dark">work@talends.com</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="theme_bg_dark text-white">
        <div class="container py-md-3">
            <div class="row my-md-5">
                <div class="col-md-12">
                    <div class="d-flex" style="justify-content:center;justify-items:center;">
                        <i class="bi-geo-alt text-theme fa-2x mr-3"></i>
                        <div>
                            <h4 class="mt-0 font-weight-bold">Dubai</h4>
                            <p><i class="bi-phone"></i> +971 52 768 4867</p>
                            <p><i class="bi-phone"></i> +971 4 437 3103</p>
                            <p><i class="bi-globe"></i> 1803 The Metropolis Tower DUBAI</p>
                        </div>
                    </div>
                </div>
              <!--   <div class="col-md-4">
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
                </div> -->
            </div>
        </div>
    </section>
    <section style="background-color:#f5f5f5;">
      @php
      $footer_social_content=App\Helper::getFooterSocialContent();
    @endphp
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('talends/assets/img/connect-us.webp')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 ml-auto mb-4 pl-md-5">
                    <h5>SOCIAL MEDIA</h5>
                    <h1 class="font-weight-bold">Connect with us</h1>
                    <ul class="list-inline">
                        <li class="px-2"> <a href="{{ $footer_social_content['banner_description'] ?? '' }}" target="_blank"><i class="fa fa-facebook fa-2x"></i></a> </li>
                        <!-- <li class="px-2"> <a href="{{ $footer_social_content['project_description'] ?? '' }}" target="_blank"><i class="fa fa-twitter fa-2x"></i></a> </li> -->
                        <li class="px-2"> <a href="{{ $footer_social_content['features_text'] ?? '' }}" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a> </li>
                        <li class="px-2"> <a href="{{ $footer_social_content['work_description'] ?? '' }}" target="_blank"><i class="fa fa-instagram fa-2x"></i></a> </li>
                        <li class="px-2"> <a href="{{ $footer_social_content['services_description'] ?? '' }}" target="_blank"><i class="fa fa-youtube fa-2x"></i></a> </li>
                        <li class="px-2"> <a href="{{ $footer_social_content['payment_description'] ?? '' }}" target="_blank"><i class="bi-tiktok fa-2x"></i></a> </li>
                    </ul>
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
                        @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="error">{{$error}}</div>
                                @endforeach
                            @endif
                            <form id="adminContactForm" method="post" action="{{ route('storeAdminLead') }}">
                            @csrf
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
                                <div class="form-group col-md-12 mb-4">
                                    <textarea rows="4" name="detail" id='detail' class="form-control form-control-lg">Describe your project</textarea>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                {!! htmlFormSnippet() !!}
                                        <span class="help-block" style="display: none;">
                                            <strong class="error"></strong>
                                        </span>
                            </div>
                                <div class="col-md-12">
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
@push('scripts')
<script>
    $(document).ready(function () {
        $('#adminContactForm').validate({ 
            rules: {
                full_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                company_name: {
                    required: true,
                    
                },  phone_number: {
                    required: true,
                    
                },

                detail: {
                    required: true,
        
                    
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script> 
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
        $('#connect-slides').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            autoplay: true,
            smartSpeed: 700,
            responsiveClass:true,
            nav:false,
            dots:false,
            animateOut: 'slideOutDown',
            animateIn: 'slideInDown'
        })
    </script>
    
@endpush