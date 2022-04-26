@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 float-left" id="services">
            <div class="preloader-section" v-if="loading" v-cloak>
                <div class="preloader-holder">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="wt-haslayout wt-post-job-wrap">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(!isset($footer_how_work) && empty($footer_how_work))

                {!! Form::open([
                'url' => url('admin/store-footer-how-work'),
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory',
                'id'=> 'government',
                'enctype'=>'multipart/form-data'
                ])
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Footer How It Works</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">

                        
                        <div class="wt-tabscontenttitle">
                                 <h2>Title</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                            <div class="wt-tabscontenttitle">
                                <h2>Inner Text 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text1', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text2', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>



                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text3', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text4', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>





                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 5</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text5', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 6</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text6', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>




                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 7</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text7', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 8</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text8', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>



                    </div>
                </div>

                 @else
                 {!! Form::open(['url' => url('admin/update-footer-how-work/'.$footer_how_work['id'].''),
                'enctype'=>'multipart/form-data',
                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'categories'] )
                !!}

                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle">
                        <h2>Footer How It Works</h2>
                    </div>
                    <div class="wt-dashboardboxcontent">
                        <div class="wt-jobdescription wt-tabsinfo">

                        
                        <div class="wt-tabscontenttitle">
                                 <h2>Title</h2>
                             </div>
                             <div class="wt-formtheme wt-userform wt-userformvtwo">
                                 <fieldset>
                                 <div class="form-group">
                                         {!! Form::text('title', e($footer_how_work['project_description']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                     </div>
 
                                 </fieldset>
                             </div>

                            <div class="wt-tabscontenttitle">
                                <h2>Inner Text 1</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text1', e($footer_how_work['banner_description']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 2</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text2', e($footer_how_work['features_text']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>



                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 3</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text3', e($footer_how_work['services_description']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 4</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text4', e($footer_how_work['work_description']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>





                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 5</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text5', e($footer_how_work['payment_description']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 6</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text6', e($footer_how_work['support_description']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>




                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 7</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text7', e($footer_how_work['freelancer_benefits']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>


                        <div class="wt-tabscontenttitle">
                                <h2>Inner Text 8</h2>
                            </div>
                            <div class="wt-formtheme wt-userform wt-userformvtwo">
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::text('inner_text8', e($footer_how_work['internees_benefits']), array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>

                                </fieldset>

                        </div>



                    </div>
                </div>

                 @endif

                <div class="wt-updatall">
                    <i class="ti-announcement"></i>
                    <span>{{{ trans('lang.save_changes_note') }}}</span>
                    {!! Form::submit('Save', ['class' => 'wt-btn', 'id'=>'submit-service']) !!}
                </div>
                {!! form::close(); !!}
            </div>
        </div>
    </div>
</div>
@endsection