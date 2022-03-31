<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar freelancer_filters">
    {!! Form::open(['url' => url('search-results'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch', 'id' => 'wt-formsearch']) !!}
        <input type="hidden" value="{{$type}}" name="type">
        <div class="wt-widget wt-effectiveholder wt-startsearch">
           
            <div class="wt-widgetcontent">
                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="{{ trans('lang.ph_search_freelancer') }}" value="{{$keyword}}">
                        </div>
                    </fieldset>
                </div>
                
            </div>
        </div>
        <div class="wt-widget wt-effectiveholder">
        <a  onclick="toogle_skill()"> <div class="wt-widgettitle">
                <span>{{ trans('lang.skills') }}</span>
             <span class="filter_toogle">   <i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </div>
          </a>
            <div class="wt-widgetcontent freelancer_skills_filter" style="display: none;">
                <fieldset>
                    @if (!empty($skills))
                        <div class="wt-checkboxholder wt-verticalscrollbar">
                            @foreach ($skills as $key => $skill)
                                @php $checked = ( !empty($_GET['skills']) && in_array($skill->slug, $_GET['skills'])) ? 'checked' : '' @endphp
                                <span class="wt-checkbox">
                                    <input id="skill-{{{ $key }}}" type="checkbox" name="skills[]" value="{{{$skill->slug}}}" {{$checked}} >
                                    <label for="skill-{{{ $key }}}">{{{ $skill->title }}}</label>
                                </span>
                            @endforeach
                        </div>
                    @endif
                </fieldset>
            </div>
        </div>
        <div class="wt-widget wt-effectiveholder">
        <a  onclick="toogle_location()">  <div class="wt-widgettitle">
                <span>{{ trans('lang.location') }}</span>
                <span class="filter_toogle">   <i class="fa fa-angle-down" aria-hidden="true"></i></span>

            </div>
            </a>
            <div class="wt-widgetcontent freelancer_location_filter" style="display: none;">
               
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
                                    <label for="location-{{{ $location->slug }}}"> <img src="{{{asset(App\Helper::getLocationFlag($location->flag))}}}" alt="{{ trans('lang.img') }}"> {{{ $location->title }}}</label>
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
                <span class="filter_toogle">  <i class="fa fa-angle-down" aria-hidden="true"></i></span>

            </div>
            </a>
            <div class="wt-widgetcontent freelancer_price_filter" style="display: none;">
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
        <a  onclick="toogle_language()"> <div class="wt-widgettitle">
                <span>{{ trans('lang.langs') }}</span>
                <span class="filter_toogle">  <i class="fa fa-angle-down" aria-hidden="true"></i></span>

            </div>
            <div class="wt-widgetcontent freelancer_language_filter" style="display: none;">
               
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
