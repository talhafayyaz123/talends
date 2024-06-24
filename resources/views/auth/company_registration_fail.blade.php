@extends('front-end.master2')

@section('title')
        Registration Fail
    
    @stop
@section('description', 'Registration Fail')

@section('content')
   
    <div id="pages-list">
        

    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                    <h2 class="">Fail</h2>
                    <p class="w-50 mx-auto">We have not succsefull to create your new account. Please pay first or enter correct card credentials then start enjoying business growth & maximum mature leads from Talends.com.
                  <br>  Payment Amount : AED {{ $package->cost  }}       
                </p>
                    <a href="{{ route('home') }}" class="theme_btn inverse_btn">Close</a>
                    
                    <a href="{{url("registration/again/payment",['id'=>$id,'package_id'=>$package_id ])}}" class="theme_btn inverse_btn">Again Payment</a>

                </div>
            </div>
        </div>
      
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
               
                <img src="{{ asset('talends/assets/img/Layer9.png')}}"  class="w-100" alt="">

                </div>
                <div class="col-md-6">
              <img src="{{ asset('talends/assets/img/Group8.png')}}"  class="w-100" alt="">
            
                </div>
            </div>
        </div>
    </section>

         
    </div>
@endsection