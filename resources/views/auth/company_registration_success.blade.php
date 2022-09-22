@extends('front-end.master2')

@section('title')
Registration Successfull

@stop
@section('description', 'Registration Successfull')

@section('content')

<div id="pages-list">


    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                    <h2 class="">Success</h2>
                    <p class="w-50 mx-auto">We have successfully created your new account. Now start enjoying business growth & maximum mature leads from Talends.com.  You’re done with payment we have send you an activation mail to the email you provided during registration. It should arrive in a couple of minutes
                        <br><br><br>
                        If the email has not arrived then please check inbox/spam/junk folder.
                    </p>

                    <form method="POST" action="" class="wt-formtheme wt-formregister" id="verification_form">


                        <fieldset>
                            <div class="row" style="display: flex;justify-content: center;align-items: center;">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                        
                                            @if (!empty($reg_page))
                                            <a target="_blank" href="{{{url($reg_page)}}}">
                                                {{{ trans('lang.why_need_code') }}}
                                            </a>
                                            @else
                                            <a href="javascript:void(0)">
                                                {{{ trans('lang.why_need_code') }}}
                                            </a>
                                            @endif
                                        </label>
                                        <input type="text" name="code" id='verification_code' class="form-control" placeholder="{{{ trans('lang.enter_code') }}}" required>
                                    </div>

                                    <div class="form-group wt-btnarea">
                                        <a onclick="verifyCode()" class="theme_btn inverse_btn">{{{ trans('lang.continue') }}}</a>
                                    </div>
                                </div>

                            </div>


                        </fieldset>
                    </form>

                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <img src="{{ asset('talends/assets/img/Layer9.png')}}" class="w-100" alt="">

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('talends/assets/img/Group8.png')}}" class="w-100" alt="">

                </div>
            </div>
        </div>
    </section>


</div>
@endsection


@push('scripts')

<script>
    function verifyCode() {

        var verification_code = $('#verification_code').val();
        $.ajax({

            url: "{{ url('/register/verify-user-code') }}" + '/' + verification_code,

            type: 'get',
            dataType: 'json',
            success: function(response) {

                if (response.type == 'success') {


                    window.location.href = response.redirect_url;


                } else if (response.type == 'error') {
                    alert(response.message);
                }

            }
        });


    }
</script>

@endpush