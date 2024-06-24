@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="skills-listing" id="skill-list">
    @if (Session::has('message'))
    <div class="flash_msg">
        <flash_messages :message_class="'success'" :time='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
    </div>
    @elseif (Session::has('error'))
    <div class="flash_msg">
        <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
    </div>
    @endif
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 float-left">
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>{{{ trans('lang.edit_skill') }}}</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">

                        {!! Form::open(['url' => url('admin/seo_tags/update-seo_tags/'.$meta_tags->id.''),
                        'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'skills'] ) !!}
                        <fieldset>

                            <div class="form-group">
                                <div class="form-select">
                                    <span>

                                        <div class="form-select">
                                            <span>
                                                <h4> Page Name: {{ $meta_tags->meta_page_name ?? '' }}</h4>
                                            </span>
                                        </div>


                                    </span>
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::text( 'meta_title', ($meta_tags->meta_title), ['class' =>'form-control'.($errors->has('meta_title') ? ' is-invalid' : ''),
                                'placeholder' => 'Meta Title' ] ) !!}
                                <span class="form-group-description">{{{ trans('lang.desc') }}}</span>
                                @if ($errors->has('meta_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::text( 'meta_keywords', ($meta_tags->meta_keywords), ['class' =>'form-control'.($errors->has('meta_keywords') ? ' is-invalid' : ''),
                                'placeholder' => 'Keywords must be comma separated' ] ) !!}
                                <span class="form-group-descriptiaon">{{{ trans('lang.desc') }}}</span>
                                @if ($errors->has('meta_keywords'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_keywords') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::textarea( 'meta_description', ($meta_tags->meta_description), ['class' =>'form-control'.($errors->has('meta_description') ? ' is-invalid' : ''), 'placeholder' => trans('lang.ph_desc')] ) !!}
                                <span class="form-group-description">Description</span>
                                @if ($errors->has('meta_description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group wt-btnarea">
                                {!! Form::submit(('save'), ['class' => 'wt-btn']) !!}
                            </div>
                        </fieldset>
                        {!! Form::close(); !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection