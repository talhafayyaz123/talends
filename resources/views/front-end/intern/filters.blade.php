<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar freelancer_filters  internee_filters_setting">

    {!! Form::open(['url' => url('search-results'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch', 'id' => 'wt-formsearch','style'=>'border-bottom: 1px solid #ddd4d4']) !!}

        <input type="hidden" value="{{$type}}" name="type">

        <!-- <div class="wt-widget wt-effectiveholder wt-startsearch">

            

            <div class="wt-widgetcontent">

                <div class="wt-formtheme wt-formsearch">

                    <fieldset>

                        <div class="form-group">

                            <input type="text" name="s" class="form-control" placeholder="{{ trans('lang.ph_search_freelancer') }}" value="{{$keyword}}">

                        </div>

                    </fieldset>

                </div>

                

            </div>

        </div> -->

        <div class="wt-widget wt-effectiveholder">

          

            <div class="wt-widgetcontent interne_widgetcontent">

                <div class="wt-formtheme wt-formsearch">

                    <fieldset>

                        <div class="form-group">

                            <input type="text" name="university" class="form-control" placeholder="College/University" value="{{$search_university}}">

                        </div>

                    </fieldset>

                </div>

                

            </div>



           

        </div>





        <div class="wt-widget wt-effectiveholder">

          

            <div class="wt-widgetcontent interne_widgetcontent">

                <div class="wt-formtheme wt-formsearch">

                    <fieldset>

                        <div class="form-group">

                            <input type="text" name="grade" class="form-control" placeholder="Grade" value="{{$search_grade}}">

                        </div>

                    </fieldset>

                </div>

                

            </div>



           

        </div>



        <div class="wt-widget wt-effectiveholder">

        <a  onclick="toogle_category()"><div class="wt-widgettitle">

                <span>Category</span>

                <span class="filter_toogle1">  <i class="fa fa-angle-down" aria-hidden="true"></i></span>



            </div></a>

            <div class="wt-widgetcontent category_filter" style="display: none;">

                <div class="wt-formtheme wt-formsearch">

                <fieldset>

                    @if (!empty($categories))

                        <div class="wt-checkboxholder wt-verticalscrollbar">

                            @foreach ($categories as $key => $category)

                            @php 

                            $checked ='';

                            if( !empty($_GET['category'])  && in_array($category->id,$_GET['category'])  ){

                                $checked ='checked';

                            }

                            @endphp



                                <span class="wt-checkbox freelancer_category">

                                    <input  id="category-{{{ $key }}}" type="checkbox"  name="category[]" value="{{{$category->id}}}" {{$checked }} >

                                    <label for="category-{{{ $key }}}">{{{ $category->title }}}</label>

                                </span>

                            @endforeach

                        </div>

                    @endif

                </fieldset>

                </div>

                

            </div>



        </div>





        

        <div class="wt-widget wt-effectiveholder">

        <a  onclick="toogle_sub_category()"> <div class="wt-widgettitle">

                <span>Sub Categories</span>  

             <span class="filter_toogle1">   <i class="fa fa-angle-down" aria-hidden="true"></i></span>

            </div>

          </a>

            <div class="wt-widgetcontent freelancer_sub_cat_filter" style="display: none;">

                <fieldset>

                <div class="wt-checkboxholder wt-verticalscrollbar sub_categories">

                          

                        </div>

                </fieldset>

            </div>

        </div>



        <div class="wt-widget wt-effectiveholder">

        <a  onclick="toogle_location()"><div class="wt-widgettitle">

                <span>{{ trans('lang.location') }}</span>

                <span class="filter_toogle1">  <i class="fa fa-angle-down" aria-hidden="true"></i></span>



            </div></a>

            <div class="wt-widgetcontent location_filter" style="display: none;">

  

                <fieldset>

                    @if (!empty($locations))

                        <div class="wt-checkboxholder wt-verticalscrollbar">

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

                                <span class="wt-checkbox">

                                    <input id="location-{{{ $location->slug }}}" type="checkbox" name="locations[]" value="{{{$location->slug}}}" {{$checked}} >

                                    <label for="location-{{{ $location->slug }}}">  {{{ $location->title }}}</label>

                                </span>

                            @endforeach

                        </div>

                    @endif

                </fieldset>

            </div>

        </div>

        <div class="wt-widget wt-effectiveholder">

        <a  onclick="toogle_price()"> <div class="wt-widgettitle">

                <span>{{{ trans('lang.hourly_rate') }}}</span>

                <span class="filter_toogle1">   <i class="fa fa-angle-down" aria-hidden="true"></i></span>



            </div></a>

            <div class="wt-widgetcontent price_filter" style="display: none;">

                <div class="wt-formtheme wt-formsearch">

                   

                    <fieldset>

                        <div class="wt-checkboxholder wt-verticalscrollbar">

                            @foreach (Helper::getHourlyRate() as $key => $hourly_rate)

                                @php $checked = ( !empty($_GET['hourly_rate']) && in_array($key, $_GET['hourly_rate'])) ? 'checked' : '' @endphp

                                <span class="wt-checkbox">

                                    <input id="rate-{{ $key }}" type="checkbox" name="hourly_rate[]" value="{{ $key }}" {{ $checked }}>

                                    <label for="rate-{{ $key }}">{{ $hourly_rate }}</label>

                                </span>

                            @endforeach

                        </div>

                    </fieldset>

                </div>

            </div>

        </div>

       

        <div class="wt-widget wt-effectiveholder">

        <a  onclick="toogle_language()"><div class="wt-widgettitle">

                <span>{{ trans('lang.langs') }}</span>

                <span class="filter_toogle1">   <i class="fa fa-angle-down" aria-hidden="true"></i></span>



            </div></a>

            <div class="wt-widgetcontent language_filter" style="display: none;">

              

                <fieldset>

                    @if (!empty($languages))

                        <div class="wt-checkboxholder wt-verticalscrollbar">

                            @foreach ($languages as $language)

                                @php $checked = ( !empty($_GET['languages']) && in_array($language->slug, $_GET['languages'])) ? 'checked' : '' @endphp

                                <span class="wt-checkbox">

                                    <input id="language-{{{ $language->slug }}}" type="checkbox" name="languages[]" value="{{{$language->slug}}}" {{$checked}} >

                                    <label for="language-{{{ $language->slug }}}">{{{ $language->title }}}</label>

                                </span>

                            @endforeach

                        </div>

                    @endif

                </fieldset>

            </div>

        </div>

        <div class="wt-widget wt-effectiveholder">

            <div class="wt-widgetcontent">

                <div class="wt-applyfilters">

                    {!! Form::submit(trans('lang.btn_apply_filters'), ['class' => 'wt-btn']) !!}

                </div>

            </div>

        </div>

    {!! form::close(); !!}

</aside>