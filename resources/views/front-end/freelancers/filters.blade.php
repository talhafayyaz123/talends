<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar freelancer_filters border-bottom pb-3">
    {!! Form::open(['url' => url('search-results'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch', 'id' => 'wt-formsearch']) !!}
    <input type="hidden" value="{{$type}}" name="type">
    <div class="d-md-flex w-100 px-md-0 px-3 mb-3 flex-row">
        <div class="dropdown position-static filter-dropdown">
            <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Category <i class="bi-chevron-down float-right ml-3"></i>
            </button>
            <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                @if (!empty($categories))
                <div class="row">  
                    @foreach ($categories as $key => $category)
                        @php 
                            $checked ='';
                            if( !empty($_GET['category'])  && in_array($category->id,$_GET['category']) ){
                                $checked ='checked';
                            }
                        @endphp
                        
                            <div class="col-md-4 mb-3">
                                <div class="custom-control custom-check freelancer_category">
                                    <input class="custom-control-input" id="category-{{{ $key }}}" type="checkbox" id="category" name="category[]" value="{{{$category->id}}}" {{$checked }} >
                                    <label class="custom-control-label" for="category-{{{ $key }}}">{{{ $category->title }}}</label>
                                </div>
                            </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="dropdown position-static filter-dropdown">
            <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Sub Categories <i class="bi-chevron-down float-right ml-3"></i>
            </button>
            <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                
                <div class="row sub_categories">

                </div>
            </div>
        </div>
        <!-- <div class="wt-widget wt-effectiveholder">
            <a  onclick="toogle_sub_category()"> 
                <div class="wt-widgettitle">
                    <span>Sub Categories</span>
                    <span class="filter_toogle1 float-right">   <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>
            <div class="wt-widgetcontent freelancer_sub_cat_filter" style="display: none;">
                <fieldset>

                    <div class="wt-checkboxholder wt-verticalscrollbar sub_categories">
                        
                    </div>

                </fieldset>

            </div>
        </div> -->
        <div class="dropdown position-static filter-dropdown">
            <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                {{ trans('lang.location') }} <i class="bi-chevron-down float-right ml-3"></i>
            </button>
            <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1" style="height: 300px;overflow-y:auto;">
            @if (!empty($locations))
                <div class="row">  
                    @foreach ($locations as $location)
                        @php 
                            $checked = '';
                            if (!empty($_GET['locations'])) {
                                if (is_array($_GET['locations']) && in_array($location->slug, $_GET['locations'])) {
                                    $checked = 'checked';
                                } elseif ( $location->slug == $_GET['locations']) {
                                    $checked = 'checked';     
                                }
                            } 
                        @endphp
                        <div class="col-md-4 mb-3">
                            <div class="custom-control custom-check">
                                <input class="custom-control-input" id="location-{{{ $location->slug }}}" type="checkbox" name="locations[]" value="{{{$location->slug}}}" {{$checked}} >
                                <label class="custom-control-label" for="location-{{{ $location->slug }}}"> {{{ $location->title }}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <!-- <div class="wt-widget wt-effectiveholder">
            <a  onclick="toogle_location()">  
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.location') }}</span>
                    <span class="filter_toogle1 float-right">   <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>
            <div class="wt-widgetcontent freelancer_location_filter" style="display: none;">
                <fieldset>
                    @if (!empty($locations))
                        <div class="wt-checkboxholder wt-verticalscrollbar dropdown-50">
                            <div class="row">
                            @foreach ($locations as $location)

                                @php 

                                    $checked = '';

                                    if (!empty($_GET['locations'])) {

                                        if (is_array($_GET['locations']) && in_array($location->slug, $_GET['locations'])) {

                                            $checked = 'checked';

                                        } elseif ( $location->slug == $_GET['locations']) {

                                            $checked = 'checked';     

                                        }

                                    } 

                                @endphp
                                <div class="col-md-4">
                                    <span class="wt-checkbox">

                                        <input id="location-{{{ $location->slug }}}" type="checkbox" name="locations[]" value="{{{$location->slug}}}" {{$checked}} >

                                        <label for="location-{{{ $location->slug }}}"> {{{ $location->title }}}</label>

                                    </span>
                                </div>
                            @endforeach
                            </div>
                        </div>

                    @endif

                </fieldset>

            </div>
        </div> -->
        <div class="dropdown position-static filter-dropdown">
            <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                {{{ trans('lang.hourly_rate') }}} <i class="bi-chevron-down float-right ml-3"></i>
            </button>
            <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1">
                <div class="row">  
                    @foreach (Helper::getHourlyRate() as $key => $hourly_rate)
                        @php $checked = ( !empty($_GET['hourly_rate']) && in_array($key, $_GET['hourly_rate'])) ? 'checked' : '' @endphp
                            <div class="col-md-3 mb-3">
                                <div class="custom-control custom-check">
                                    <input class="custom-control-input" id="rate-{{ $key }}" type="checkbox" name="hourly_rate[]" value="{{ $key }}" {{ $checked }}>
                                    <label class="custom-control-label" for="rate-{{ $key }}">{{ $hourly_rate }}</label>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- <div class="wt-widget wt-effectiveholder">
            <a  onclick="toogle_price()"> 
                <div class="wt-widgettitle">
                    <span>{{{ trans('lang.hourly_rate') }}}</span>
                    <span class="filter_toogle1 float-right">  <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>
            <div class="wt-widgetcontent freelancer_price_filter" style="display: none;">

                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="wt-checkboxholder wt-verticalscrollbar dropdown-40" id="hourly-dropdown">
                            <div class="row">
                                @foreach (Helper::getHourlyRate() as $key => $hourly_rate)

                                    @php $checked = ( !empty($_GET['hourly_rate']) && in_array($key, $_GET['hourly_rate'])) ? 'checked' : '' @endphp
                                    <div class="col-md-4">
                                        <span class="wt-checkbox">
                                            <input id="rate-{{ $key }}" type="checkbox" name="hourly_rate[]" value="{{ $key }}" {{ $checked }}>
                                            <label for="rate-{{ $key }}">{{ $hourly_rate }}</label>
                                        </span>
                                    </div>

                                @endforeach
                            </div>
                        </div>

                    </fieldset>

                </div>

            </div>
        </div> -->
        <div class="dropdown position-static filter-dropdown">
            <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                {{ trans('lang.langs') }} <i class="bi-chevron-down float-right ml-3"></i>
            </button>
            <div class="dropdown-menu checkbox-menu allow-focus w-100 top-auto p-3" aria-labelledby="dropdownMenu1" style="height: 300px;overflow-y:auto;">
                @if (!empty($languages))
                    <div class="row">  
                        @foreach ($languages as $language)
                            @php $checked = ( !empty($_GET['languages']) && in_array($language->slug, $_GET['languages'])) ? 'checked' : '' @endphp
                            <div class="col-md-3 mb-3">
                                <div class="custom-control custom-check">
                                    <input class="custom-control-input" id="language-{{{ $language->slug }}}" type="checkbox" name="languages[]" value="{{{$language->slug}}}" {{$checked}} >
                                    <label class="custom-control-label" for="language-{{{ $language->slug }}}">{{{ $language->title }}}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <!-- <div class="wt-widget wt-effectiveholder">
            <a  onclick="toogle_language()"> 
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.langs') }}</span>
                    <span class="filter_toogle1 float-right">  <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>
            <div class="wt-widgetcontent freelancer_language_filter" style="display: none;">              
                <fieldset>

                    @if (!empty($languages))

                        <div class="wt-checkboxholder wt-verticalscrollbar dropdown-40">
                            <div class="row">
                            @foreach ($languages as $language)

                                @php $checked = ( !empty($_GET['languages']) && in_array($language->slug, $_GET['languages'])) ? 'checked' : '' @endphp
                                <div class="col-md-3">
                                <span class="wt-checkbox">

                                    <input id="language-{{{ $language->slug }}}" type="checkbox" name="languages[]" value="{{{$language->slug}}}" {{$checked}} >

                                    <label for="language-{{{ $language->slug }}}">{{{ $language->title }}}</label>

                                </span>
                                </div>
                            @endforeach
                            </div>
                        </div>

                    @endif

                </fieldset>

            </div>
        </div> -->
        <div class="filter-btns">
            {!! Form::submit(trans('lang.btn_apply_filters'), ['class' => 'wt-btn ml-2']) !!}
        </div>
    </div>
    {!! form::close(); !!}
    <div class="row align-items-center">
        <div class="col-xl-3 col-md-4 col-sm-9 col-12 mb-2 text-center">
            <div class="custom-control custom-switch rounded-pill p-2" style="background-color:#f7f5f5;">
                <span>
                    <svg viewBox="0 0 16 16" height="16" width="16" class="text-success small" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.735.07a.533.533 0 0 1 .53 0l7.466 4.267A.533.533 0 0 1 16 4.8v.768c0 4.835-3.205 9.083-7.853 10.412a.534.534 0 0 1-.294 0A10.828 10.828 0 0 1 0 5.567V4.8c0-.191.103-.368.269-.463L7.735.07Zm-.192 11.355 4.607-5.759L11.317 5 7.39 9.91 4.608 7.59l-.683.82 3.618 3.015Z" fill="currentColor"></path></svg>
                    Verified by Talends
                </span>
               
            </div>
        </div>
        <div class="col-xl-3 col-md-5 col-sm-3 col-12 mb-2">
            <a href="javascript:;" class="btn-link position-relative tooltip-link">
                <span class="mr-2">
                    <svg viewBox="0 0 24 24" height="24" width="24" class="verified-filter__info-container-icon" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10 10-4.477 10-10ZM3 12a9 9 0 1 1 18 0 9 9 0 0 1-18 0Zm7.982-3.949a.25.25 0 0 1 .25-.25h1.01c.137 0 .249.11.25.248l.006.91a.25.25 0 0 1-.249.251l-1.016.007a.25.25 0 0 1-.251-.25V8.05Zm1.475 7.253h2.038c.165 0 .286.035.365.105.078.07.117.18.117.333 0 .173-.037.293-.111.359-.074.065-.21.098-.41.098H9.532c-.17 0-.296-.038-.381-.114-.085-.076-.127-.19-.127-.343 0-.148.044-.258.133-.33.09-.072.222-.108.4-.108h1.936v-4.069h-1.238c-.173 0-.305-.039-.396-.117-.091-.079-.137-.192-.137-.34 0-.148.043-.259.127-.333.085-.074.212-.111.381-.111h1.86a.46.46 0 0 1 .27.07c.065.046.098.11.098.19v4.71Z" fill="currentColor"></path></svg>
                </span>What's this?
                <div class="tooltip-content">
                    <p class="mb-0">Pre-vetted talent</p>
                </div>
            </a>
        </div>
    </div>
</aside>


