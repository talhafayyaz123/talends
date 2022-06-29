@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div id="message_center">
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 float-left">
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        <h2>{{{ trans('lang.conversations') }}}</h2>
                        {!! Form::open(['url' => url('admin/conversations/search'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch']) !!}
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="keyword" value="{{{ !empty($_GET['keyword']) ? $_GET['keyword'] : '' }}}"
                                    class="form-control" placeholder="{{{ trans('lang.ph_search_participants') }}}">
                                <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                            </div>
                        </fieldset>
                        {!! Form::close() !!}
                    </div>
                    @if (count($conversations) > 0)
                        <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                            <table class="wt-tablecategories wt-chattable" >
                                <thead>
                                    <tr>
                                        <th>{{{ trans('lang.participants') }}}</th>
                                        <th>{{{ trans('lang.action') }}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0; @endphp
                                    @foreach ($conversations as $conv)
                                        @php
                                            $user = \App\User::find($conv->user_id);
                                            $user_name = \App\Helper::getUserName($conv->user_id);
                                            $receiver =  \App\User::find($conv->receiver_id);
                                            $receiver_name = \App\Helper::getUserName($conv->receiver_id);
                                        @endphp
                                        <tr class="del-{{$conv->user_id}}-{{$conv->receiver_id}}">
                                            <td>
                                                <a href="{{{ url(route('showUserProfile', ['slug' => $user->slug])) }}}">{{{ $user_name }}}</a> , <a href="{{{ url(route('showUserProfile', ['slug' => $receiver->slug])) }}}">{{$receiver_name}}</a>
                                            </td>
                                            <td>
                                                <span class="bt-content">
                                                    <div class="wt-actionbtn">
                                                        <delete :title="'{{trans("lang.ph_delete_confirm_title")}}'" :id="'{{$conv->user_id}}-{{$conv->receiver_id}}'" :message="'{{trans("lang.ph_conversation_delete_message")}}'" :url="'{{url('admin/conversation/delete')}}'"></delete>
                                                        <a v-on:click="viewConversation({{$conv->user_id}}, {{$conv->receiver_id}})" class="wt-addinfo wt-skillsaddinfo">
                                                            <i class="lnr lnr-eye"></i>
                                                        </a>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                        @php $counter++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            @if ( method_exists($conversations,'links') )
                                {{ $conversations->links('pagination.custom') }}
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
            <transition name="fade">
                <conversation v-if="showConversation" :messages='messages' :conversation_users='users'></conversation>
            </transition>
        </div>
    </section>
</div>
@endsection