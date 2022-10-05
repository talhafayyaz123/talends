<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeoMetaTags;
use App\Helper;
use Session;
use Illuminate\Support\Facades\Redirect;


class SeoMetaTagsController extends Controller
{
    /**
     * Get Meta Data
     */

      protected $meta_tags;

      public function __construct(SeoMetaTags $meta_tags)
      {
        $this->meta_tags=$meta_tags;
      }

     public function index(Request $request){
           if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $meta_tags = $this->meta_tags::where('meta_page_name', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            $pagination = $meta_tags->appends(
                array(
                    'keyword' => $request->get('keyword')
                )
            );
        } else {
            $meta_tags = $this->meta_tags->paginate(7);
        }
        if (file_exists(resource_path('views/extend/back-end/admin/skills/index.blade.php'))) {
            return view(
                'extend.back-end.admin.meta_tags.index',
                compact('meta_tags')
            );
        } else {
            return view(
                'back-end.admin.meta_tags.index',
                compact('meta_tags')
            );
        }
     }


     public function store(Request $request)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request,
            [
                'meta_page_name' => 'required|unique:seo_meta_tags,meta_page_name',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );
        $this->meta_tags->saveMetaTags($request);
        Session::flash('message', 'Meta Tags has been saved.');
        return Redirect::back();
    }


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
            $this->meta_tags::where('id', $id)->delete();
            $json['type'] = 'success';
            $json['message'] ='Meta Tags has been deleted.';
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    public function deleteSelected(Request $request)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $json['type'] = 'error';
            $json['message'] = $server->getData()->message;
            return $json;
        }
        $json = array();
        $checked = $request['ids'];
        foreach ($checked as $id) {
            $this->meta_tags::where("id", $id)->delete();
        }
        if (!empty($checked)) {
            // $this->skill::whereIn($checked)->delete();
            $json['type'] = 'success';
            $json['message'] ='Meta Tags has been deleted.';
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }


    public function edit($id)
    {
        if (!empty($id)) {
            $meta_tags = $this->meta_tags::find($id);
            if (!empty($meta_tags)) {
                if (file_exists(resource_path('views/extend/back-end/admin/skills/edit.blade.php'))) {
                    return View::make(
                        'back-end.admin.meta_tags.edit',
                        compact('id', 'meta_tags')
                    );
                } else {
                    return view(
                        'back-end.admin.meta_tags.edit',
                        compact('id', 'meta_tags')
                    );
                }
                return Redirect::to('admin/seo_meta_tags');
            }
        }
    }


    public function update(Request $request, $id)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request,
            [
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );
        $this->meta_tags->updateMetaTags($request, $id);
        Session::flash('message', 'Meta Tags has been updated.');
        return Redirect::to('admin/seo_meta_tags');
    }

}
