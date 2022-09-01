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
    <section class="wt-haslayout wt-dbsectionspace la-admin-skills">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 float-left">
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>SEO Meta Tags</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        {!! Form::open([
                        'url' => url('admin/store-meta-tags'), 'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                        'id' => 'skills'
                        ])
                        !!}
                        <fieldset>

                            <div class="form-group">
                                <div class="form-select">
                                    <span>

                                        <div class="form-select">
                                            <span>
                                                <select name="meta_page_name" class='form-control'>
                                                    <option value="">Page Name</option>
                                                    <option value="government">Government</option>
                                                    <option value="why_talends">Why Talends</option>
                                                </select></span>
                                        </div>

                                        @if ($errors->has('meta_page_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('meta_page_name') }}</strong>
                                        </span>
                                        @endif
                                    </span>
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::text( 'meta_title', null, ['class' =>'form-control'.($errors->has('meta_title') ? ' is-invalid' : ''),
                                'placeholder' => 'Meta Title' ] ) !!}
                                <span class="form-group-description">{{{ trans('lang.desc') }}}</span>
                                @if ($errors->has('meta_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::text( 'meta_keywords', null, ['class' =>'form-control'.($errors->has('meta_keywords') ? ' is-invalid' : ''),
                                'placeholder' => 'Keywords must be comma separated' ] ) !!}
                                <span class="form-group-description">{{{ trans('lang.desc') }}}</span>
                                @if ($errors->has('meta_keywords'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_keywords') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::textarea( 'meta_description', null, ['class' =>'form-control'.($errors->has('meta_description') ? ' is-invalid' : ''), 'placeholder' => trans('lang.ph_desc')] ) !!}
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 float-right">
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        <h2>Meta Tags</h2>
                        {!! Form::open(['url' => url('admin/seo_meta_tags/search'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch']) !!}
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="keyword" value="{{{ !empty($_GET['keyword']) ? $_GET['keyword'] : '' }}}" class="form-control" placeholder="Search Page Name">
                                <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                            </div>
                        </fieldset>
                        {!! Form::close() !!}
                        <a href="javascript:void(0);" v-if="this.is_show" @click="deleteSeoMetaTagsChecked('{{ trans('lang.ph_delete_confirm_title') }}', '{{ trans('lang.ph_skill_delete_message') }}')" class="wt-skilldel">
                            <i class="lnr lnr-trash"></i>
                            <span>{{ trans('lang.del_select_rec') }}</span>
                        </a>
                    </div>
                    @if ($meta_tags->count() > 0)
                    <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                        <table class="wt-tablecategories" id="checked-val">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="wt-checkbox">
                                            <input name="tags[]" id="wt-skills" @click="selectAll" type="checkbox" name="head">
                                            <label for="wt-skills"></label>
                                        </span>
                                    </th>
                                    <th>Page Name</th>
                                    <th>Title</th>
                                    <th>Keyword</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 0; @endphp
                                @foreach ($meta_tags as $tag)
                                <tr class="del-{{{ $tag->id }}}" v-bind:id="skillID">
                                    <td>
                                        <span class="wt-checkbox">
                                            <input name="tags[]" @click="selectRecord" value="{{{ $tag->id }}}" id="wt-check-{{{ $counter }}}" type="checkbox" name="head">
                                            <label for="wt-check-{{{ $counter }}}"></label>
                                        </span>
                                    </td>
                                    <td>{{{ $tag->meta_page_name }}}</td>
                                    <td>{{{ $tag->meta_title }}}</td>
                                    <td>
                                        <div class="wt-actionbtn">
                                            <a href="{{{ url('admin/meta-tags/edit-tags') }}}/{{{ $tag->id }}}" class="wt-addinfo wt-skillsaddinfo">
                                                <i class="lnr lnr-pencil"></i>
                                            </a>
                                            <delete :title="'{{trans("lang.ph_delete_confirm_title")}}'" :id="'{{$tag->id}}'" :message="'{{trans("lang.ph_skill_delete_message")}}'" :url="'{{url('admin/seo_tags/delete-tags')}}'"></delete>
                                        </div>
                                    </td>
                                </tr>
                                @php $counter++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        @if ( method_exists($meta_tags,'links') )
                        {{ $meta_tags->links('pagination.custom') }}
                        @endif
                    </div>
                    @else
                    @if (file_exists(resource_path('views/extend/errors/no-record.blade.php')))
                    @include('extend.errors.no-record')
                    @else
                    @include('errors.no-record')
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection