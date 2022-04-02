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
        <section class="wt-haslayout wt-dbsectionspace la-addnewcats">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 float-left">
                    <div class="wt-dashboardbox la-category-box">
                        <div class="wt-dashboardboxtitle">
                            <h2>Add New Sub Category</h2>
                        </div>
                        <div class="wt-dashboardboxcontent">
                            {!! Form::open([
                                'url' => url('admin/sub_store-category'),
                                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id'=> 'categories'
                                ])
                            !!}
                                <fieldset>

                                    
                                <div class="form-group">
                                {!! Form::select('category_id', $categories, null, array('class' => 'form-control', 'data-placeholder' => 'Category')) !!}
                                        @if ($errors->has('category_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        {!! Form::text( 'sub_category', null, ['class' =>'form-control'.($errors->has('sub_category') ? ' is-invalid' : ''), 'placeholder' => 'Sub Category' ]) !!}

                                        @if ($errors->has('sub_category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sub_category') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class="form-group">
                                    {!! Form::select('skills[]', $skills, null ,array('class' => 'chosen-select', 'multiple', 'data-placeholder' =>'skills')) !!}
                                 
                               </div>

                                    <div class="form-group wt-btnarea">
                                        {!! Form::submit(trans('lang.add_cat'), ['class' => 'wt-btn']) !!}
                                    </div>
                                </fieldset>
                            {!! Form::close(); !!}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 float-right">
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle wt-titlewithsearch">
                            <h2>Sub Categories</h2>
                            {!! Form::open(['url' => url('admin/sub_categories/search'),
                                'method' => 'get', 'class' => 'wt-formtheme wt-formsearch'])
                            !!}
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="keyword" value="{{{ !empty($_GET['keyword']) ? $_GET['keyword'] : '' }}}"
                                        class="form-control" placeholder="{{{ trans('lang.ph_search_cats') }}}">
                                    <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                                </div>
                            </fieldset>
                            {!! Form::close() !!}
                            <a href="javascript:void(0);" v-if="this.is_show" @click="deleteChecked('{{ trans('lang.ph_delete_confirm_title') }}', '{{ trans('lang.ph_cat_delete_message') }}')" class="wt-skilldel">
                                <i class="lnr lnr-trash"></i>
                                <span>{{ trans('lang.del_select_rec') }}</span>
                            </a>
                        </div>
                        @if ($cats->count() > 0)
                            <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                                <table class="wt-tablecategories" id="checked-val">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="wt-checkbox">
                                                    <input name="cats[]" id="wt-cats" @click="selectAll" type="checkbox" name="head">
                                                    <label for="wt-cats"></label>
                                                </span>
                                            </th>
                                            <th>Parent Category</th>
                                            <th>{{{ trans('lang.name') }}}</th>
                                            <th>{{{ trans('lang.slug') }}}</th>
                                            <th>{{{ trans('lang.action') }}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $counter = 0; @endphp
                                        @foreach ($cats as $cat)
                                       
                                        @php
                                        
                                       $category_title=$cat['category']['title'];
                                        @endphp
                                          
                                            
                                            <tr class="del-{{{ $cat->sub_category_id  }}}">
                                                <td>
                                                    <span class="wt-checkbox">
                                                        <input name="cats[]" @click="selectRecord" value="{{{ $cat->sub_category_id  }}}" id="wt-check-{{{ $counter }}}" type="checkbox" name="head">
                                                        <label for="wt-check-{{{ $counter }}}"></label>
                                                    </span>
                                                </td>
                                                <td>{{{ $category_title }}}</td>
                                                <td>{{  $cat['title'] ?? ''  }}</td>
                                                
                                                <td>{{  $cat['slug'] ?? ''  }}</td>
                                                <td>
                                                    <div class="wt-actionbtn">
                                                        <a href="{{{ url('admin/sub_categories/edit-sub-cats') }}}/{{{ $cat->sub_category_id  }}}" class="wt-addinfo wt-skillsaddinfo">
                                                            <i class="lnr lnr-pencil"></i>
                                                        </a>
                                                        <delete :title="'{{trans("lang.ph_delete_confirm_title")}}'" :id="'{{$cat->sub_category_id }}'"  :message="'{{trans("lang.ph_cat_delete_message")}}'" :url="'{{url('admin/sub_categories/delete-sub-cats')}}'"></delete>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            @php $counter++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ( method_exists($cats,'links') )
                                    {{ $cats->links('pagination.custom') }}
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
