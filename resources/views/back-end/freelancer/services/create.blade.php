@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" id="services">
            <div class="preloader-section" v-if="loading" v-cloak>
                <div class="preloader-holder">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="wt-haslayout wt-post-job-wrap">
                {!! Form::open(['url' => '', 'class' =>'wt-haslayout', 'id' => 'post_service_form',  '@submit.prevent'=>'submitService']) !!}
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle">
                            <h2>{{ trans('lang.post_service') }}</h2>
                        </div>
                        <div class="wt-dashboardboxcontent">
                            <div class="wt-jobdescription wt-tabsinfo">
                                <!-- <div class="wt-tabscontenttitle">
                                    <h2>{{ trans('lang.service_desc') }}</h2>
                                </div> -->
                                <div class="wt-formtheme wt-userform wt-userformvtwo">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="">Service Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="{{ trans('lang.service_title') }}" v-model="title">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Delivery Time</label>
                                                {!! Form::select('delivery_time', $delivery_time, null, array('class' => 'form-control', 'placeholder' => trans('lang.select_delivery_time'), 'v-model'=>'delivery_time')) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Service Price</label>
                                                {!! Form::number('service_price', null, array('class' => 'form-control job-cost-input', 'placeholder' => trans('lang.service_price'), 'v-model'=>'price')) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Service Category</label>
                                                {!! Form::select('categories[]', $categories, null, array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_service_cats'))) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Service Response Time</label>
                                                {!! Form::select('response_time', $response_time, null, array('class' => 'form-control', 'placeholder' => trans('lang.select_response_time'), 'v-model'=>'response_time')) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Languages</label>
                                                {!! Form::select('languages[]', $languages, null, array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_lang'))) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">English Level</label>
                                                {!! Form::select('english_level', $english_levels, null, array('class' => 'form-control', 'placeholder' => trans('lang.select_english_level'), 'v-model'=>'english_level')) !!}
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="">Service Description</label>
                                                {!! Form::textarea('description', null, ['class' => 'wt-tinymceeditor', 'id' => 'wt-tinymceeditor', 'placeholder' => trans('lang.service_desc_note')]) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Location</label>
                                                {!! Form::select('locations', $locations, null, array('class' => 'form-control skill-dynamic-field', 'placeholder' => trans('lang.select_locations'))) !!}
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Address</label>
                                                {!! Form::text( 'address', null, ['id'=>"pac-input1", 'class' =>'form-control', 'placeholder' => trans('lang.your_address')] ) !!}
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="wt-featuredholder wt-tabsinfo">
                                                    <div class="wt-tabscontenttitle">
                                                        <h2>{{ trans('lang.is_featured') }}</h2>
                                                        <div class="wt-rightarea">
                                                            <div class="wt-on-off float-right">
                                                                <switch_button v-model="is_featured">{{{ trans('lang.is_featured') }}}</switch_button>
                                                                <input type="hidden" :value="is_featured" name="is_featured">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <div class="wt-attachmentsholder">
                                                    <div class="lara-attachment-files">
                                                        <div class="wt-tabscontenttitle">
                                                            <h2>{{ trans('lang.attachments') }}</h2>
                                                            <div class="wt-rightarea">
                                                                <div class="wt-on-off float-right">
                                                                    <switch_button v-model="show_attachments">{{{ trans('lang.attachments_note') }}}</switch_button>
                                                                    <input type="hidden" :value="show_attachments" name="show_attachments">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <image-attachments :temp_url="'{{url('service/upload-temp-image')}}'" :type="'image'"></image-attachments>
                                                        <div class="form-group input-preview">
                                                            <ul class="wt-attachfile dropzone-previews"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::submit(trans('lang.post_service'), ['class' => 'wt-btn', 'id'=>'submit-service']) !!}
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- <div class="wt-joblocation wt-tabsinfo">
                                <div class="wt-formtheme wt-userform">
                                    <fieldset>
                                        <div class="form-group wt-formmap" style="display: none;">
                                            @include('includes.map')
                                        </div>
                                        <div class="form-group form-group-half" style="display: none;">
                                            {!! Form::text( 'longitude', null, ['id'=>"lng-input", 'class' =>'form-control', 'placeholder' => trans('lang.enter_logitude')]) !!}
                                        </div>
                                        <div class="form-group form-group-half" style="display: none;">
                                            {!! Form::text( 'latitude', null, ['id'=>"lat-input", 'class' =>'form-control', 'placeholder' => trans('lang.enter_latitude')]) !!}
                                        </div>
                                    </fieldset>
                                </div>
                            </div> -->
                        </div>
                    </div>
                {!! form::close(); !!}
            </div>
        </div>
    </div>
</div>
@endsection
