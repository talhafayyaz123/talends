<div class="wt-location wt-tabsinfo">
    <!-- <div class="wt-tabscontenttitle">
        <h2>{{{ trans('lang.profile_photo') }}}  (Size should be 200 x 200 Px) </h2>
    </div> -->
    <label for="">Upload Company Photo</label>
    <div class="wt-settingscontent">
        @if (!empty($avater))
            @php $image = $aws_s3_path.'/uploads/users/'.Auth::user()->id.'/'.$avater; @endphp
            <div class="wt-formtheme wt-userform">
                <div v-if="this.uploaded_image">
                    <upload-image 
                        :id="'avater_id'" 
                        :img_ref="'avater_ref'" 
                        :url="'{{url('freelancer/upload-temp-image')}}'"
                        :name="'hidden_avater_image'"
                        >
                    </upload-image>
                </div>
                <div class="wt-uploadingbox" v-else>
                    <figure><img src="{{{($image)}}}" alt="{{{ trans('lang.profile_photo') }}}"></figure>
                    <div class="wt-uploadingbar">
                        <div class="dz-filename">{{{$avater}}}</div>
                        <em>{{{ trans('lang.file_size') }}}<a href="javascript:void(0);" class="lnr lnr-cross" v-on:click.prevent="removeImage('hidden_avater')"></a></em>
                    </div>
                </div>
                <input type="hidden" name="hidden_avater_image" id="hidden_avater" value="{{{$avater}}}"> 
            </div>
        @else
            <div class="wt-formtheme wt-userform">
                <upload-image 
                    :id="'avater_id'" 
                    :img_ref="'avater_ref'" 
                    :url="'{{url('freelancer/upload-temp-image')}}'"
                    :name="'hidden_avater_image'"
                    >
                </upload-image>
                <input type="hidden" name="hidden_avater_image" id="hidden_avater"> 
            </div>
        @endif
    </div>
</div>
