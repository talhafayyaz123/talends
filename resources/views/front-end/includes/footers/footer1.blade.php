@php
 $footer_how_work=App\Helper::getfooterHowWork();
 
@endphp


    @php
    
        $footer_menus_1=App\Helper::footerMenu1();
        $footer_menus_2=App\Helper::footerMenu2();
        $footer_menus_3=App\Helper::footerMenu3();
        $footer_menus_4=App\Helper::footerMenu4();
        @endphp


    <footer>
        <div class="container">
            <div class="row py-30">
                <div class="col-md-3">
                    <h4> {{ $footer_menus_1['title']}} </h4>
                    <ul class="quick-links" id="ftr-links">
                        @if(!empty($footer_menus_1['menu_items']))
                        @foreach($footer_menus_1['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>

 
                <div class="col-md-3">
                    <h4> {{ $footer_menus_2['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_2['menu_items']))
                        @foreach($footer_menus_2['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4> {{ $footer_menus_3['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_3['menu_items']))
                        @foreach($footer_menus_3['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4> {{ $footer_menus_4['title']}} </h4>
                    <ul class="quick-links">
                        @if(!empty($footer_menus_4['menu_items']))
                        @foreach($footer_menus_4['menu_items'] as $key=>$value)
                        <li> <a href="javascript:;" target="_self">{{ $value['title']}}</a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
            </div>
            <div class="row footer_bottom">
                <div class="col-md-6">
                <p>© 2022 All Rights Reserved. &nbsp;&nbsp;&nbsp; <a href="{{ route('privacyPolicy') }}"> Privacy Policy </a>  </p>
                </div>
               <!--  <div class="col-md-6">
                    <ul class="list-inline mb-0">
                        <li class="px-2"> <a href="javascript:;" target="_self">Privacy Policy</a> </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>