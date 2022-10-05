@extends('front-end.master2')

@section('title')
       Privacy Policy
    @stop
@section('description', "Privacy Policy")

@section('content')
      
    <section class="internee_sec theme_bg_dark companies_banner_section">

<div class="container">

    <div class="row row-eq-height">

        <div class="col-md-7 pb-3 align-self-center">

            <h5 class="text-white opcty_5">Talents</h5>

            <h2 class="text-white">User Agreement</h2>
        </div>

        <div class="col-md-5">

        </div>

    </div>

</div>

</section>
        
        <section class="w-100 py-3">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="bg-theme rounded-16 mb-4">
        <div class="row">
         
            <div class="col-md-4 border-right pr-0">
                <div class="leads-list-container">
                   
                           @if(isset($user_agreement) && !empty($user_agreement) )
                           @foreach($user_agreement as $key =>$value)

                           
                            <div class="border-bottom mb-4 p-4">
                              
                                <p class="small text-white mb-2">
                                    <a href="javascript:;" onclick="show_detail({{$key}})" id="detailBtn_1" class="btn-link text-white">
                                    {!! $value['title'] ?? '' !!}
                                </a></p>
                               
                            </div>
                            @endforeach

                            @endif

                           
                        
                   
                </div>
                
            </div>
            <div class="col-md-8 pt-4">

            @if(isset($user_agreement) && !empty($user_agreement) )
                           @foreach($user_agreement as $key =>$value)
                <div class="lead-detail" id="leadDetail_{{$key}}" style="display:none ;">
                    <div class="mb-5 px-4 text-white">
                       
                        <p>{!! ($value['description'][0])  ?? '' !!}</p>
                    </div>
                   

                 
                </div>

                @endforeach

@endif

               
            </div>
        </div>
        
    </div>
</div>
</section>

@endsection

@push('scripts')
<script>
  function show_detail(id){
    $(".lead-detail").hide();
    $("#leadDetail_"+id).show();
  }
</script>
@endpush