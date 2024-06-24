 @extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
 @section('content')
 <section class="w-100 py-3">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
         <div class="bg-white rounded-16 mb-4">
             <div class="row">
                 <div class="col-md-12">
                     <div class="bg-dark text-white p-3">
                         <div class="media align-items-center pl-md-5">
                             <i class="fa fa-database fa-3x text-theme"></i>
                             <div class="media-body ml-3">
                                 <h4 class="text-white">Welcome,</h4>
                                 <p class="text-white">Contact Your Customers with Quick & Best possible response to Gurantee your Project!</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 border-right pr-0" style="background-color: rgb(252,252,252);">
                     <div class="leads-list-container">

                         @if(!empty($admin_leads) && $admin_leads->count() > 0 )

                         @foreach ($admin_leads as $request)


                         <div class="border-bottom mb-4 p-4">
                             <a><i class="fa fa-check-circle"></i>{{$request->full_name}}</a>
                             <h4>{{$request->company_name}}</h4>
                             <p class="small  mb-2"><i class="fa fa-envelope" aria-hidden="true"></i> {{$request->email}}</p>
                             <p class="small"><i class="fas fa-phone"></i> {{$request->phone_number}}</p>
                             <a href="javascript:;" onclick="show_detail({{$request->id}})" id="detailBtn_{{$request->id}}" class="btn-link">View Details</a>

                         </div>
                         @endforeach
                         @else
                         @if (file_exists(resource_path('views/extend/errors/no-record.blade.php')))
                         @include('extend.errors.no-record')
                         @else
                         @include('errors.no-record')
                         @endif
                         @endif
                     </div>
                     @if ( method_exists($admin_leads,'links') )
                     {{ $admin_leads->links('pagination.custom') }}
                     @endif
                 </div>
                 <div class="col-md-8 pt-4">

                     @if(!empty($admin_leads) && $admin_leads->count() > 0 )

                     @foreach ($admin_leads as $request)
                     @php
                     $class='display:none;';
                     @endphp
                     @if($loop->first)
                     @php
                     $class='display:block;';
                     @endphp
                     @endif
                     <div class="lead-detail" id="leadDetail_{{$request->id}}" style="{{ $class  }}">

                         <div class="px-4 mb-5">
                             <div class="row">

                                 <div class="col-md-6 mb-4">
                                     <h4>Company Name</h4>
                                     <p class="mb-0">{{ $request->company_name }}</p>
                                 </div>

                                 <div class="col-md-6 mb-4">
                                     <h4>Name</h4>
                                     <span> {{ $request->full_name }} </span>
                                 </div>
                                 <div class="col-md-6 mb-4">
                                     <h4>Email</h4>
                                     <span> {{ $request->email }} </span>
                                 </div>
                                 <div class="col-md-6 mb-4">
                                     <h4>Phone</h4>
                                     <span> {{ $request->phone_number }} </span>
                                 </div>

                             </div>
                         </div>

                         <div class="col-md-6 mb-4">
                             <h4>Detail</h4>
                             <div class="skill-tags">
                                 <span> {{ $request->detail }} </span>

                             </div>
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
     function show_detail(id) {
         $(".lead-detail").hide();
         $("#leadDetail_" + id).show();
     }
 </script>
 @endpush