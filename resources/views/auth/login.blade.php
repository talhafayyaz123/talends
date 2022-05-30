@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master')

@section('content')

<section class="login-auth">
    <!-- Page -->
    <div class="container-fluid h-100">
        <!-- Row -->
        <div class="row h-100">
            <div class="col-md-4 col-lg-5 col-xl-5 d-none d-lg-block text-center auth-left d-lg-flex align-items-center justify-content-center">
                <div class="mt-5 pt-4 p-2">
                    <img src="{{asset('talends/assets/img/logo.png')}}" class="img-fluid d-inline-block" alt="logo" width="220">
                </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-7 col-xl-7 ml-auto bg-white">
                <div class="login-auth-content my-md-5">
                    <div class="text-center">
                        <img src="{{asset('talends/assets/img/logo.png')}}" class=" d-lg-none d-inline-block img-fluid my-4" width="130" alt="logo">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @php
                        $roles = Spatie\Permission\Models\Role::all()->toArray();
                        @endphp
                        <p>Welcome back!</p>
                        <h2>Login to your account</h2>
                        @if(Session::has('error'))
                        <p class="alert {{ Session::get('alert-class', 'error') }}">{{ Session::get('error') }}</p>
                        @endif
                        <div class="form-group">
                            <label>Account Type</label>
                            <select name="role" id="role" class="form-control">
                            @if(!empty($roles))
                            @foreach ($roles as $key => $role)
                            
                                    <option value="{{$role['id']}}">{{$role['role_type']}}</option>
                                
                            @endforeach
                            @endif
                             
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" type="email" placeholder="{{ trans('lang.email_address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))

                            <span class="invalid-feedback" role="alert">

                                <strong class="error">{{ $errors->first('email') }}</strong>

                            </span>

                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" placeholder="{{ trans('lang.pass') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))

                            <span class="invalid-feedback" role="alert">

                                <strong class="error">{{ $errors->first('password') }}</strong>

                            </span>

                            @endif
                        </div>


                        <!--   <div class="form-group">
                          
                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                               <label class="form-check-label" for="remember">

                                {{ trans('lang.remember') }}

                                </label>                   
                               </div> -->

                        <div class="form-group mb-3 text-center">
                            <button class="btn btn-theme rounded-pill px-5 btn-block">Sign in</button>
                        </div>
                        <div class="mb-3">
                            @if (Route::has('password.request'))

                            <a href="{{ route('password.request') }}" class="btn btn-link"> {{ trans('lang.forget_pass') }}</a>


                            </a>

                            @endif

                        </div>

                        <div class="form-group mb-3">
                            <div class="or-text">
                                <p>or</p>
                            </div>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <div id="my-signin3"></div>
                            <span class="error gmail_error" style="display: none;">Google account is not recognized for Google Sign-In on Talends. Please make sure you are using the same account that you have previously linked.</span>

                        </div>
                    </form>
                    <div class="text-center mt-5 ml-0">
                        <div>Don't have an account? <a href="{{ route('register')  }}" class="text-theme">Register Here</a></div>
                    </div>
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