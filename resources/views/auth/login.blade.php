@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master')

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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    

                        @php
                        $roles = Spatie\Permission\Models\Role::all()->toArray();
                        @endphp
                        @if(Session::has('error'))
                        <p class="alert {{ Session::get('alert-class', 'error') }}">{{ Session::get('error') }}</p>
                        @endif
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Account Type</label>
                                <select name="role" id="role" class="form-control">
                                    @if(!empty($roles))
                                        @foreach ($roles as $key => $role)
                                           @if(Request::get('admin') &&  Request::get('admin')==1 )
                                         <option value="{{$role['id']}}">{{$role['role_type']}}</option>                 
                                           @else
                                           @if (!in_array($role['id'] == 1, $roles))
                                           <option value="{{$role['id']}}">{{$role['role_type']}}</option>                 

                                           @endif

                                         @endif
                                            @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Email</label>
                                <input id="email" type="email" placeholder="{{ trans('lang.email_address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="error">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Password</label>
                                <input id="password" type="password" placeholder="{{ trans('lang.pass') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="error">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- <div class="col-md-6 mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ trans('lang.remember') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 pl-md-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terms" id="terms" >
                                    <label class="custom-control-label" for="terms">Agree to Terms of Use</label>
                                </div>
                            </div> -->
                            <div class="col-md-12 mb-3 mb-3 text-center">
                                <button class="btn btn-theme rounded-pill px-5 btn-block">Sign in</button>
                            </div>
                            <div class="col-md-12 mb-3 mb-3">
                                <div class="or-text">
                                    <p>or</p>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 mb-3 text-center">
                                <div id="my-signin3"></div>
                                <span class="error gmail_error" style="display: none;">Google account is not recognized for Google Sign-In on Talends. Please make sure you are using the same account that you have previously linked.</span>
                            </div>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <div id="my-signin3"></div>
                            <span class="error gmail_error" style="display: none;">Google account is not recognized for Google Sign-In on Talends. Please make sure you are using the same account that you have previously linked.</span>

                        </div>
                    </form>
                    <div class="mb-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="btn btn-link text-theme"> {{ trans('lang.forget_pass') }}</a>
                            <a href="{{ route('register')  }}" class="text-theme float-right">Join Now</a>
                        @endif
                    </div>
                </div>
                <div class="text-center">
                    <p class="small">By clicking Sign In, you agree to our <a href="#" class="text-theme">Terms of service</a> & <a href="#" class="text-theme">Privacy policy</a>.</p>
                </div>
            </div>

        </div>
        <!-- End Row -->

    </div>
</section>

@endsection

@push('scripts')

<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

<script>
    $('.gmail_error').css('display', 'none');

    function onSuccess(googleUser) {

        if (gapi.auth2) {

            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function() {
                auth2.disconnect();
            });
        }
        console.log('Logged in as: ' + googleUser.getBasicProfile().getEmail());


        axios.get(APP_URL + '/gamail/login/' + googleUser.getBasicProfile().getEmail())
            .then(function(response) {

                if (response.data.type == 'success') {
                    window.location.href = APP_URL + '/' + response.data.role + '/dashboard';
                } else if (response.data.type == 'error') {
                    //  self.error_message = response.data.message;
                    console.log(response.data.message);
                    $('.gmail_error').css('display', 'block');
                }
            })
            .catch(function(error) {
                console.log(error);
            });


    }



    function onFailure(error) {

        console.log(error);

    }



    function renderButton() {

        gapi.signin2.render('my-signin3', {

            'scope': 'profile email',

            'width': 510,

            'height': 45,

            'longtitle': true,

            'theme': 'dark',

            'onsuccess': onSuccess,

            'onfailure': onFailure

        });

    }
</script>

@endpush