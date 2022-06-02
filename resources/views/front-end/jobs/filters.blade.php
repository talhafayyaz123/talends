<aside id="wt-sidebar" class="wt-sidebar freelancer_filters pb-3 border-bottom">

    {!! Form::open(['url' => url('search-results'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch']) !!}

        <input type="hidden" value="{{$type}}" name="type">

        <div class="wt-widget wt-effectiveholder wt-startsearch" style="display: none;">
            <div class="wt-widgetcontent">
                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="form-group">
                            <input id="pac-input" type="text" name="addr" class="form-control" placeholder="{{ trans('lang.geo_loc') }}" value="{{$address}}">
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="wt-widget wt-effectiveholder wt-startsearch" style="display: none;">
            <div class="wt-widgetcontent">
                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="{{ trans('lang.ph_search_jobs') }}" value="{{$keyword}}">
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="wt-widget wt-widgetrange">

            <a  onclick="toogle_price()">    
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.price_range') }}</span>
                    <span class="filter_toogle1">  <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>

            <div class="wt-widgetcontent job_price_filter p-4 shadow rounded dropdown-40" style="display: none;">
                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="wt-amountbox">
                            <input type="text" :value="'{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}'+start+'-{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}'+end" id="wt-consultationfeeamount" readonly="">
                        </div>
                        <a-slider 
                            id="wt-pricerange"
                            class="wt-productrangeslider wt-themerangeslider"
                            range
                            :min="0" 
                            :max="max_value"
                            :reverse="reverse"
                            @change="onChange" 
                            :default-value="[start, end]"
                            ref="priceRange"
                            v-if="show_price_slider"
                        />
                    </fieldset>
                    <input type="hidden" name="minprice" :value="start">
                    <input type="hidden" name="maxprice" :value="end">
                </div>

            </div>

        </div>

        <div class="wt-widget wt-effectiveholder">

            <a  onclick="toogle_categories()">  
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.cats') }}</span>
                    <span class="filter_toogle1">  <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>

            <div class="wt-widgetcontent job_categories_filter" style="display: none;">
                <fieldset>

                    @if (!empty($categories))

                        <div class="wt-checkboxholder wt-verticalscrollbar dropdown-50">
                            <div class="row">
                            @foreach ($categories as $category)

                                @php $checked = ( !empty($_GET['category']) && in_array($category->slug, $_GET['category'] )) ? 'checked' : ''; @endphp
                                <div class="col-md-6 col-lg-4">
                                    <span class="wt-checkbox">
                                        <input id="cat-{{{ $category->slug }}}" type="checkbox" name="category[]" value="{{{ $category->slug }}}" {{$checked}} >
                                        <label for="cat-{{{ $category->slug }}}"> {{{ $category->title }}}</label>
                                    </span>
                                </div>
                            @endforeach
                            </div>
                        </div>

                    @endif

                </fieldset>

            </div>

        </div>

        <div class="wt-widget wt-effectiveholder">

            <a  onclick="toogle_location()">   
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.locations') }}</span>
                    <span class="filter_toogle1">   <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>

            <div class="wt-widgetcontent job_location_filter" style="display: none;">

              

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
                                    <div class="col-md-6 col-lg-4">
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

        </div>

        <!-- <div class="wt-widget wt-effectiveholder">

        <a  onclick="toogle_skill()"> <div class="wt-widgettitle">

                <span>{{ trans('lang.skills') }}</span>

                <span class="filter_toogle">  <i class="fa fa-angle-down" aria-hidden="true"></i></span>



            </div></a>

            <div class="wt-widgetcontent job_skill_filter" style="display: none;">

                <fieldset>

                    @if (!empty($skills))

                        <div class="wt-checkboxholder wt-verticalscrollbar">

                            @foreach ($skills as $key => $skill)

                                @php $checked = (!empty($_GET['skills']) && in_array($skill->slug, $_GET['skills'])) ? 'checked' : '' @endphp

                                <span class="wt-checkbox">

                                    <input id="skill-{{{ $key }}}" type="checkbox" name="skills[]" value="{{{$skill->slug}}}" {{$checked}} >

                                    <label for="skill-{{{ $key }}}">{{{ $skill->title }}}</label>

                                </span>

                            @endforeach

                        </div>

                    @endif

                </fieldset>

            </div>

        </div> -->

        <div class="wt-widget wt-effectiveholder">

            <a  onclick="toogle_length()">
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.project_length') }}</span>
                    <span class="filter_toogle1">   <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>

            <div class="wt-widgetcontent job_length_filter" style="display: none;">

                <fieldset>

                    @if (!empty($project_length))

                        <div class="wt-checkboxholder dropdown-50">
                            <div class="row">
                            @foreach ($project_length as $key => $length)

                                @php $checked = ( !empty($_GET['project_lengths']) && in_array($length, $_GET['project_lengths'])) ? 'checked' : '' @endphp
                                <div class="col-md-6 col-lg-4">
                                    <span class="wt-checkbox">

                                        <input id="{{{ $key }}}" type="checkbox" name="project_lengths[]" value="{{{$key}}}" {{$checked}}>

                                        <label for="{{{ $key }}}">{{{ $length }}}</label>

                                    </span>
                                </div>
                            @endforeach
                            </div>
                        </div>

                    @endif

                </fieldset>

            </div>

        </div>

        <div class="wt-widget wt-effectiveholder">

            <a  onclick="toogle_language()"> 
                <div class="wt-widgettitle">
                    <span>{{ trans('lang.langs') }}</span>
                    <span class="filter_toogle1">  <i class="fa fa-angle-down ml-3" aria-hidden="true"></i></span>
                </div>
            </a>
            <div class="wt-widgetcontent job_language_filter" style="display: none;">
                <fieldset>
                    @if (!empty($languages))

                        <div class="wt-checkboxholder wt-verticalscrollbar dropdown-40">
                            <div class="row">
                            @foreach ($languages as $language)

                                @php $checked = ( !empty($_GET['languages']) && in_array($language->slug, $_GET['languages'])) ? 'checked' : '' @endphp
                                <div class="col-md-6 col-lg-4">
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

        </div>

        <div class="wt-widget wt-effectiveholder freelancer_job_find_btn">

            <div class="wt-widgetcontent">

                <div class="wt-applyfilters">

                    {!! Form::submit(trans('lang.btn_apply_filters'), ['class' => 'wt-btn']) !!}

                </div>

            </div>

        </div>

    {!! Form::close() !!}

</aside>

@push('scripts')

    <script id="apiScript" async defer></script>

    <script>

        var url='https://maps.googleapis.com/maps/api/js?key=' + Map_key + '&libraries=places&callback=initMap'

        document.getElementById('apiScript').src = url;

    </script>

    <script>

        function initMap() {

            var input = document.getElementById('pac-input');

            var autocomplete = new google.maps.places.Autocomplete(input);

    

            // Set the data fields to return when the user selects a place.

            autocomplete.setFields(

                ['address_components', 'geometry', 'icon', 'name']

            );

        }

    </script>

@endpush