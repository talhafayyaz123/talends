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
                    <p class="w-50 mx-auto">We're sorry that your payment has not been completed yet, please try again & register your agency.
                       
                </p>
                    <a href="{{ url('company/registration') }}" class="theme_btn inverse_btn">Click for Registration</a>
                    

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