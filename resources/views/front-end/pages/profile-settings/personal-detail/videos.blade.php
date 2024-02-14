<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.videos') }}}</h2>
</div>
<div class="wt-skillsform">
    <fieldset class="social-icons-content">
        @if (!empty($videos))
            @php $counter = 1 @endphp
            @foreach ($videos as $video_key => $mem_value)
                <div class="wrap-social-icons wt-haslayout">
                <p  class='form-control' >{{$counter}} :  {{e($mem_value['url'] ) }}</p>
                </div>
                @php $counter++; @endphp
            @endforeach
           
        @endif
           
    </fieldset>
</div>
