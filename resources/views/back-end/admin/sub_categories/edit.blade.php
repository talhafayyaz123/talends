@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="cats-listing" id="cat-list">
        @if (Session::has('message'))
            <div class="flash_msg">
                <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
            </div>
        @elseif (Session::has('error'))
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <section class="wt-haslayout wt-dbsectionspace la-editcategory">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 float-left">
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle">
                        <h2>Update Sub Category</h2>
                        </div>
                        <div class="wt-dashboardboxcontent">
                            {!! Form::open(['url' => url('admin/sub_categories/update-sub-cats/'.$sub_category->sub_category_id.''),
                                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'categories'] )
                            !!}
                                <fieldset>

                                <div class="form-group">
                                {!! Form::select('category_id', $categories, $sub_category->category_id, array('class' => 'form-control', 'data-placeholder' => 'Category')) !!}
                                        @if ($errors->has('category_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        {!! Form::text( 'sub_category',  $sub_category->title, ['class' =>'form-control'.($errors->has('sub_category') ? ' is-invalid' : ''), 'placeholder' => 'Sub Category' ]) !!}

                                        @if ($errors->has('sub_category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sub_category') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                    {!! Form::select('skills[]', $skills, $sub_category_skills ,array('class' => 'chosen-select', 'multiple', 'data-placeholder' =>'skills')) !!}
                                 
                               </div>

                                   
                                    <div class="form-group wt-btnarea">
                                        {!! Form::submit(trans('lang.update_cat'), ['class' => 'wt-btn']) !!}
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
