<?php

namespace App\Http\Controllers;

use App\TialAgencyTokens;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Str;
use Session;
use Helper;
use Illuminate\Support\Facades\Redirect;

class TialAgencyTokensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $agency_token;
    public function __construct(TialAgencyTokens $agency_token)
    {
        $this->agency_token = $agency_token;
    }

    public function index(Request $request)
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $tial_agency_tokens = $this->agency_token::where('url_token', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            
            $pagination = $tial_agency_tokens->appends(
                array(
                    'keyword' => $request->get('keyword')
                )
            );
        } else {
            $tial_agency_tokens = $this->agency_token->paginate(10);
        }

        $token = Str::random(30);
        $url=config('app.url').'/company/registration/trial?token='.$token;
        if (file_exists(resource_path('views/extend/back-end/admin/categories/index.blade.php'))) {
            return View::make('extend.back-end.admin.categories.index', compact('tial_agency_tokens'));
        } else {
            return View::make(
                'back-end.admin.tial_agency_tokens.index', compact('tial_agency_tokens','token','url')
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $server_verification = Helper::worketicIsDemoSite();
         
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'url_token'    => 'required'
            ]
        );
        
        $this->agency_token->saveLink($request);
        Session::flash('message', 'Link Generated Successfully.');
        return Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TialAgencyTokens  $tialAgencyTokens
     * @return \Illuminate\Http\Response
     */
    public function show(TialAgencyTokens $tialAgencyTokens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TialAgencyTokens  $tialAgencyTokens
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $tialAgencyTokens=TialAgencyTokens::find($id);
         
        return View::make(
            'back-end.admin.tial_agency_tokens.edit', compact('tialAgencyTokens')
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TialAgencyTokens  $tialAgencyTokens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TialAgencyTokens $tialAgencyTokens)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'status' => 'required'
            ]
        );

        $this->agency_token->updateLink($request, $tialAgencyTokens->all()[0]->id);
        Session::flash('message', 'Link Update');
        return Redirect::to('tial_agency_tokens');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TialAgencyTokens  $tialAgencyTokens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $json['type'] = 'error';
            $json['message'] = $server->getData()->message;
            return $json;
        }
        $json = array();

        $id = $request['id'];
        if (!empty($id)) {
            $student = TialAgencyTokens::findOrFail($id);

            $student->delete();
            
            $json['type'] = 'success';
            $json['message'] = 'Link Deleted.';
            return $json;
        }
    }
}
