@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-manage-account wt-dbsectionspace la-admin-setting" id="settings">
    @if (Session::has('message'))
    <div class="flash_msg">
        <flash_messages :message_class="'success'" :time='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
    </div>
    @elseif (Session::has('error'))
    <div class="flash_msg">
        <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 float-left">
            <div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">

                <div class="wt-tabscontent tab-content">

                    <div class="wt-securityhold la-footer-setting" id="wt-footer">

                        <div class="wt-settingscontent">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('message'))
                            <div class="flash_msg">
                                <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                            </div>
                        @elseif (Session::has('error'))
                            <div class="flash_msg">
                                <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
                            </div>
                        @endif

                       

                    {!! Form::open(['url' => ('admin/store-footer-menu1/footer_menu1'), 'class' => 'wt-formtheme wt-skillsform', 'id'=>'footer-menu1']) !!}
      
                    
                            <div class="wt-tabscontenttitle">
                                <h2>Footer Menu 1</h2>
                            </div>
                            <fieldset class="search-content footer1_menu_list">
                            @php $counter = 0; @endphp
                            @if (!empty($unserialize_menu_array) && !empty($menu_title))
                           
                            <div class="wt-formtheme wt-userform">
                                <div class="form-group">
                                    {!! Form::text('menu_title', $menu_title->meta_value,
                                        array('class' => 'form-control', 'placeholder' => trans('lang.menu_title')))
                                    !!}
                                </div>
                            </div>
                            
                            @foreach ($unserialize_menu_array as $unserialize_key => $value)
                                <div class="wrap-search wt-haslayout">
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                            {!! Form::text('search['.$counter.'][title]', $value['title'], ['class' => 'form-control author_title']) !!}
                                            {!! Form::text('search['.$counter.'][url]', $value['url'], ['class' => 'form-control author_title']) !!}
                                        </div>
                                        <div class="form-group wt-rightarea">
                                            @if ($unserialize_key == 0 )
                                                <span class="wt-addinfobtn" @click="addFooterMenuItem1"><i class="fa fa-plus"></i></span>
                                            @else
                                                <span class="wt-addinfobtn wt-deleteinfo delete-search" data-check="{{{$counter}}}">
                                                    <i class="fa fa-trash"></i>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @php $counter++; @endphp
                              
                            @endforeach
                            
                           
                        @else
                                <div class="wt-formtheme wt-userform">
                                    <div class="form-group">
                                        {!! Form::text('menu_title', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>
                                </div>
                                <div class="wrap-search wt-haslayout">
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                            {!! Form::text('search[0][title]', null, ['class' => 'form-control author_title',
                                            'placeholder' => trans('lang.ph_title'),'v-model' => 'first_search_title'])
                                            !!}
                                            {!! Form::text('search[0][url]', null, ['class' => 'form-control author_title',
                                            'placeholder' => trans('lang.ph_url'),'v-model' => 'first_search_url'])
                                            !!}
                                        </div>
                                        <div class="form-group wt-rightarea">
                                            <span class="wt-addinfo" @click="addSearchItem"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                               
                                <div v-for="(search, index) in searches" v-cloak>
                                    <div class="wrap-search wt-haslayout">
                                        <div class="form-group">
                                            <div class="form-group-holder">
                                                <input placeholder="{{{trans('lang.ph_title')}}}" v-bind:name="'search['+[search.count]+'][title]'" type="text" class="form-control" v-model="search.search_title">
                                                <input placeholder="{{{trans('lang.ph_url')}}}" v-bind:name="'search['+[search.count]+'][url]'" type="text" class="form-control" v-model="search.search_url">
                                                <div class="form-group wt-rightarea">
                                                    <span class="wt-addinfo wt-deleteinfo wt-addinfobtn" @click="removeSearchItem(index)"><i class="fa fa-trash"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <div class="wt-updatall la-updateall-holder">
                                <i class="ti-announcement"></i>
                                <span>{{{ trans('lang.save_changes_note') }}}</span>
                                {!! Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']) !!}
                            </div>

                            {!! Form::close() !!}

                              <!-- start of footer menu 2 -->
                              {!! Form::open(['url' => ('admin/store-footer-menu1/footer_menu2'), 'class' => 'wt-formtheme wt-skillsform', 'id'=>'footer-menu2']) !!}
      
                    
      <div class="wt-tabscontenttitle">
          <h2>Footer Menu 2</h2>
      </div>
      <fieldset class="search-content footer2_menu_list">
      @php $counter = 0; @endphp
      @if (!empty($unserialize_menu2_array) && !empty($menu_title2))
     
      <div class="wt-formtheme wt-userform">
          <div class="form-group">
              {!! Form::text('menu_title_2', $menu_title2->meta_value,
                  array('class' => 'form-control', 'placeholder' => trans('lang.menu_title')))
              !!}
          </div>
      </div>
      
      @foreach ($unserialize_menu2_array as $unserialize_key => $value)
          <div class="wrap-search wt-haslayout">
              <div class="form-group">
                  <div class="form-group-holder">
                      {!! Form::text('search2['.$counter.'][title]', $value['title'], ['class' => 'form-control first_search_title2']) !!}
                      {!! Form::text('search2['.$counter.'][url]', $value['url'], ['class' => 'form-control first_search_url2']) !!}
                  </div>
                  <div class="form-group wt-rightarea">
                      @if ($unserialize_key == 0 )
                          <span class="wt-addinfobtn" @click="addFooterMenuItem2"><i class="fa fa-plus"></i></span>
                      @else
                          <span class="wt-addinfobtn wt-deleteinfo delete-search" data-check="{{{$counter}}}">
                              <i class="fa fa-trash"></i>
                          </span>
                      @endif
                  </div>
              </div>
          </div>
          @php $counter++; @endphp
        
      @endforeach
      
     
  @else
         
  <div class="wt-formtheme wt-userform">
              <div class="form-group">
                  {!! Form::text('menu_title_2', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
              </div>
          </div>
          <div class="wrap-search wt-haslayout">
              <div class="form-group">
                  <div class="form-group-holder">
                      {!! Form::text('search2[0][title]', null, ['class' => 'form-control',
                      'placeholder' => trans('lang.ph_title'),'v-model' => 'first_search_title2'])
                      !!}
                      {!! Form::text('search2[0][url]', null, ['class' => 'form-control',
                      'placeholder' => trans('lang.ph_url'),'v-model' => 'first_search_url2'])
                      !!}
                  </div>
                  <div class="form-group wt-rightarea">
                      <span class="wt-addinfo" @click="addFooterMenu2"><i class="fa fa-plus"></i></span>
                  </div>
              </div>
          </div>
          @endif
         
          <div v-for="(search, index) in searches2" v-cloak>
              <div class="wrap-search wt-haslayout">
                  <div class="form-group">
                      <div class="form-group-holder">
                          <input placeholder="{{{trans('lang.ph_title')}}}" v-bind:name="'search2['+[search.count]+'][title]'" type="text" class="form-control" v-model="search.search_title2">
                          <input placeholder="{{{trans('lang.ph_url')}}}" v-bind:name="'search2['+[search.count]+'][url]'" type="text" class="form-control" v-model="search.search_url2">
                          <div class="form-group wt-rightarea">
                              <span class="wt-addinfo wt-deleteinfo wt-addinfobtn" @click="removeFooterItem2(index)"><i class="fa fa-trash"></i></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </fieldset>
      <div class="wt-updatall la-updateall-holder">
          <i class="ti-announcement"></i>
          <span>{{{ trans('lang.save_changes_note') }}}</span>
          {!! Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']) !!}
      </div>

      {!! Form::close() !!}


                         <!-- end of footer 2 -->
                           
                         
                         <!--  start of 3rd footer menu   -->
                         {!! Form::open(['url' => ('admin/store-footer-menu1/footer_menu3'), 'class' => 'wt-formtheme wt-skillsform', 'id'=>'footer-menu3']) !!}
      
                    
      <div class="wt-tabscontenttitle">
          <h2>Footer Menu 3</h2>
      </div>
      <fieldset class="search-content footer3_menu_list">
      @php $counter = 0; @endphp
      @if (!empty($unserialize_menu3_array) && !empty($menu_title3))
     
      <div class="wt-formtheme wt-userform">
          <div class="form-group">
              {!! Form::text('menu_title_3', $menu_title3->meta_value,
                  array('class' => 'form-control', 'placeholder' => trans('lang.menu_title')))
              !!}
          </div>
      </div>
      
      @foreach ($unserialize_menu3_array as $unserialize_key => $value)
          <div class="wrap-search wt-haslayout">
              <div class="form-group">
                  <div class="form-group-holder">
                      {!! Form::text('search3['.$counter.'][title]', $value['title'], ['class' => 'form-control first_search_title3']) !!}
                      {!! Form::text('search3['.$counter.'][url]', $value['url'], ['class' => 'form-control first_search_url3']) !!}
                  </div>
                  <div class="form-group wt-rightarea">
                      @if ($unserialize_key == 0 )
                          <span class="wt-addinfobtn" @click="addFooterMenuItem3"><i class="fa fa-plus"></i></span>
                      @else
                          <span class="wt-addinfobtn wt-deleteinfo delete-search" data-check="{{{$counter}}}">
                              <i class="fa fa-trash"></i>
                          </span>
                      @endif
                  </div>
              </div>
          </div>
          @php $counter++; @endphp
        
      @endforeach
      
     
  @else
         
                                 <div class="wt-formtheme wt-userform">
                                    <div class="form-group">
                                        {!! Form::text('menu_title_3', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
                                    </div>
                                </div>
                                <div class="wrap-search wt-haslayout">
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                            {!! Form::text('search3[0][title]', null, ['class' => 'form-control',
                                            'placeholder' => trans('lang.ph_title'),'v-model' => 'first_search_title3'])
                                            !!}
                                            {!! Form::text('search3[0][url]', null, ['class' => 'form-control',
                                            'placeholder' => trans('lang.ph_url'),'v-model' => 'first_search_url3'])
                                            !!}
                                        </div>
                                        <div class="form-group wt-rightarea">
                                            <span class="wt-addinfo" @click="addFooterMenu3"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
          @endif
         
          <div v-for="(search, index) in searches3" v-cloak>
                                    <div class="wrap-search wt-haslayout">
                                        <div class="form-group">
                                            <div class="form-group-holder">
                                                <input placeholder="{{{trans('lang.ph_title')}}}" v-bind:name="'search3['+[search.count]+'][title]'" type="text" class="form-control" v-model="search.search_title3">
                                                <input placeholder="{{{trans('lang.ph_url')}}}" v-bind:name="'search3['+[search.count]+'][url]'" type="text" class="form-control" v-model="search.search_url3">
                                                <div class="form-group wt-rightarea">
                                                    <span class="wt-addinfo wt-deleteinfo wt-addinfobtn" @click="removeFooterItem3(index)"><i class="fa fa-trash"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

      </fieldset>
      <div class="wt-updatall la-updateall-holder">
          <i class="ti-announcement"></i>
          <span>{{{ trans('lang.save_changes_note') }}}</span>
          {!! Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']) !!}
      </div>

      {!! Form::close() !!}

                            <!-- end of footer menu -->



                            
                            {!! Form::open(['url' => ('admin/store-footer-menu1/footer_menu4'), 'class' => 'wt-formtheme wt-skillsform', 'id'=>'footer-menu4']) !!}
      
                    
      <div class="wt-tabscontenttitle">
          <h2>Footer Menu 4</h2>
      </div>
      <fieldset class="search-content footer4_menu_list">
      @php $counter = 0; @endphp
      
      @if (!empty($unserialize_menu4_footer_array) && !empty($menu_title4))
     
      <div class="wt-formtheme wt-userform">
          <div class="form-group">
              {!! Form::text('menu_title_4', $menu_title4->meta_value,
                  array('class' => 'form-control', 'placeholder' => trans('lang.menu_title')))
              !!}
          </div>
      </div>
      
      @foreach ($unserialize_menu4_footer_array as $unserialize_key => $value)
          <div class="wrap-search wt-haslayout">
              <div class="form-group">
                  <div class="form-group-holder">
                      {!! Form::text('search4['.$counter.'][title]', $value['title'], ['class' => 'form-control first_search_title4']) !!}
                      {!! Form::text('search4['.$counter.'][url]', $value['url'], ['class' => 'form-control first_search_url4']) !!}
                  </div>
                  <div class="form-group wt-rightarea">
                      @if ($unserialize_key == 0 )
                          <span class="wt-addinfobtn" @click="addFooterMenuItem4"><i class="fa fa-plus"></i></span>
                      @else
                          <span class="wt-addinfobtn wt-deleteinfo delete-search" data-check="{{{$counter}}}">
                              <i class="fa fa-trash"></i>
                          </span>
                      @endif
                  </div>
              </div>
          </div>
          @php $counter++; @endphp
        
      @endforeach
      
     
  @else
         
  <div class="wt-formtheme wt-userform">
              <div class="form-group">
                  {!! Form::text('menu_title_4', null, array('class' => 'form-control', 'placeholder' => trans('lang.menu_title'))) !!}
              </div>
          </div>
          <div class="wrap-search wt-haslayout">
              <div class="form-group">
                  <div class="form-group-holder">
                      {!! Form::text('search4[0][title]', null, ['class' => 'form-control',
                      'placeholder' => trans('lang.ph_title'),'v-model' => 'first_search_title4'])
                      !!}
                      {!! Form::text('search4[0][url]', null, ['class' => 'form-control',
                      'placeholder' => trans('lang.ph_url'),'v-model' => 'first_search_url4'])
                      !!}
                  </div>
                  <div class="form-group wt-rightarea">
                      <span class="wt-addinfo" @click="addFooterMenu4"><i class="fa fa-plus"></i></span>
                  </div>
              </div>
          </div>
          @endif
         
          <div v-for="(search, index) in searches4" v-cloak>
              <div class="wrap-search wt-haslayout">
                  <div class="form-group">
                      <div class="form-group-holder">
                          <input placeholder="{{{trans('lang.ph_title')}}}" v-bind:name="'search4['+[search.count]+'][title]'" type="text" class="form-control" v-model="search.search_title4">
                          <input placeholder="{{{trans('lang.ph_url')}}}" v-bind:name="'search4['+[search.count]+'][url]'" type="text" class="form-control" v-model="search.search_url4">
                          <div class="form-group wt-rightarea">
                              <span class="wt-addinfo wt-deleteinfo wt-addinfobtn" @click="removeFooterItem4(index)"><i class="fa fa-trash"></i></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </fieldset>
      <div class="wt-updatall la-updateall-holder">
          <i class="ti-announcement"></i>
          <span>{{{ trans('lang.save_changes_note') }}}</span>
          {!! Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']) !!}
      </div>

      {!! Form::close() !!}


                            
            <footer-social_content></footer-social_content>
                        </div>


                    </div>

                   
                </div>
            </div>
        </div>
    </div>
    @endsection