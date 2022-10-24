@extends('front-end.master2')

@section('title')
        Registration Link Expired
    
    @stop
@section('description', 'Registration Link Expired')

@section('content')
   
    <div id="pages-list">
        

    <section class="">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-12 text-center pb-3">
                    <h2 class="">Trial Link Expired</h2>
                    <p class="w-50 mx-auto">We're sorry your trial link has been expired, please contact to admin to generate new one.
                       
                </p>
                <a href="tel:+971527684867" class="theme_btn ml-3">Connect +971 52 768 4867</a>                    

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