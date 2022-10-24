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
                            <h2>Update Link</h2>
                        </div>
                        <div class="wt-dashboardboxcontent">
                            
                            {!! Form::open(['url' => route('tial_agency_tokens.update', $tialAgencyTokens->id),
                                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id' => 'categories'] )
                            !!}
                            {{ method_field('PUT') }}

                                <fieldset>
                                <h4>Status</h4>
                                <div class="form-group">
                                        <select name="status" id='status' class="form-control">
                                         <option value="active" {{ ( $tialAgencyTokens->status == "active"  ) ? 'selected' : '' }} >Active</option>
                                         <option value="inactive" {{ ( $tialAgencyTokens->status  == "inactive"  ) ? 'selected' : '' }}>Inactive</option>
                                        </select>

                                        
                                    </div>
                                
                                    <div class="form-group wt-btnarea">
                                        {!! Form::submit('Update', ['class' => 'wt-btn']) !!}
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
