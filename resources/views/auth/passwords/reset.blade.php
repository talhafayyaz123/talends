@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master')

@if(isset($meta_title))
@section('title') @stop
@endif

@if(isset($meta_desc))
@section('description', $meta_desc)
@endif

@if(isset($meta_keywords))
@section('keywords', $meta_keywords)
@endif

@section('content')
@php
            $footer_social_content=App\Helper::getFooterSocialContent();
        @endphp

<section class="login-auth">
    <!-- Page -->
    <div class="container-fluid h-100">
        <!-- Row -->
        <div class="row h-100">
            <div class="col-md-4 col-lg-6 col-xl-7 d-none d-lg-block auth-left d-lg-flex flex-column justify-content-between vh-100">
                
                    <div class="pl-5 pt-5">
                    <a href="{{ route('home') }}"><img src="{{asset('talends/assets/img/fav/apple-touch-icon-114x114.png')}}" class="img-fluid d-inline-block mb-4" alt="logo" width="110"></a>
                        <h2 class="mt-4" style="font-size: 54px; line-height:42px"><i>Let's make everything Possible,</i></h2>
                        <h2 class="mb-0 text-theme" style="font-size: 54px; line-height:48px"><b><i>Together!</i></b></h2>
                    </div>
                    <div class="pl-5 d-flex align-items-center mb-3">
                        <p class="mb-0 mr-4 text-theme">Become part of Talends social community</p>
                        <ul class="list-inline">
                            <li class="px-1"> <a href="{{ $footer_social_content->banner_description ?? ''}}" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                            <!-- <li class="px-1"> <a href="javascript:;" target="_blank"><i class="fa fa-twitter"></i></a> </li> -->
                            <li class="px-1"> <a href="{{ $footer_social_content->features_text ?? ''}}" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                            <li class="px-1"> <a href="{{ $footer_social_content->work_description ?? ''}}" target="_blank"><i class="fa fa-instagram"></i></a> </li>
                            <li class="px-1"> <a href="{{ $footer_social_content->services_description ?? ''}}" target="_blank"><i class="fa fa-youtube"></i></a> </li>
                            <li class="px-1"> <a href="{{ $footer_social_content->payment_description ?? ''}}" target="_blank"><i class="bi-tiktok"></i></a> </li>
                        </ul>
                    </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 ml-auto bg-white d-flex justify-content-between flex-column">
                <div class="login-auth-content my-md-5 my-4">
                    <div class="text-center">
                        <img src="{{asset('talends/assets/img/logo.png')}}" class=" d-lg-none d-inline-block img-fluid my-4" width="130" alt="logo">
                    </div>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>{{ trans('lang.reset_pass') }}</label>
                               
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>{{ trans('lang.email_address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                
                                @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="error">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>


                            <div class="col-md-12 mb-3">
                                <label>{{ trans('lang.pass') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="error">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>


                            <div class="col-md-12 mb-3">
                                <label>{{ trans('lang.confirm_pass') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            </div>
                          
                            <div class="col-md-12 mb-3 mb-3 text-center">
                                <button class="btn btn-theme rounded-pill px-5 btn-block">{{ trans('lang.reset_pass') }}</button>
                            </div>
                        
                        </div>
                       
                    </form>
                    <div class="mb-3">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-link text-theme"> Login</a>  
                        @endif
                    </div>
                </div>
                <div class="text-center">
                    <p class="small">By clicking Sign In, you agree to our 
                        <a href="{{ route('Agreement') }}" target="_blank"  class="text-theme">Terms of service</a> & <a href="{{ route('privacyPolicy') }}" target="_blank" class="text-theme">Privacy policy</a>.</p>
                </div>
            </div>

        </div>
        <!-- End Row -->

    </div>
</section>

@endsection