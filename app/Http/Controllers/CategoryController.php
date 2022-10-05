<?php
/**
 * Class CategoryController
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use View;
use App\Helper;
use App\Skill;
use DB;
use App\SubCategories;
use App\SubCategorySkills;
use App\AgencyServices;

/**
 * Class Category Controller
 *
 */
class CategoryController extends Controller
{
    /**
     * Defining scope of variable
     *
     * @access public
     * @var    array $category
     */
    protected $category;
    protected $agency_services;
    protected $sub_category;
    protected $sub_category_skills;

    /**
     * Create a new controller instance.
     *
     * @param mixed $category get category model
     *
     * @return void
     */
    public function __construct(Category $category,SubCategories $sub_category,SubCategorySkills $sub_category_skills,AgencyServices $agency_services)
    {
        $this->category = $category;
        $this->sub_category = $sub_category;
        $this->sub_category_skills = $sub_category_skills;
        $this->agency_services = $agency_services;
    }

    /**
     * Display a listing of the resource.
     *
     * @param mixed $request Request Attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $cats = $this->category::where('title', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            
            $pagination = $cats->appends(
                array(
                    'keyword' => $request->get('keyword')
                )
            );
        } else {
            $cats = $this->category->paginate(10);
        }
        
        $skills = Skill::pluck('title', 'id');
        
        if (file_exists(resource_path('views/extend/back-end/admin/categories/index.blade.php'))) {
            return View::make('extend.back-end.admin.categories.index', compact('cats','skills'));
        } else {
            return View::make(
                'back-end.admin.categories.index', compact('cats','skills')
            );
        }
    }


    public function agencyServices(Request $request)
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $cats = $this->agency_services::where('title', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            
            $pagination = $cats->appends(
                array(
                    'keyword' => $request->get('keyword')
                )
            );
        } else {
            $cats = $this->agency_services->paginate(10);
        }
        
        $skills = Skill::pluck('title', 'id');
        return View::make(
            'back-end.admin.agency_services.index', compact('cats','skills')
        );
    }


    public function subCategories(Request $request)
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $cats = $this->sub_category::where('title', 'like', '%' . $keyword . '%')->paginate(10);
            
            $pagination = $cats->appends(
                array(
                    'keyword' => $request->get('keyword')
                )
            );
        } else {
            $cats = $this->sub_category->with('category')->paginate(10);
        }

        $categories = $this->category::pluck('title', 'id');
        $skills = Skill::pluck('title', 'id');
        
        return View::make(
            'back-end.admin.sub_categories.index', compact('cats','skills','categories')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $request string
     *
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
                'category_title'    => 'required',
                'parent_category'    => 'required',
                'category_abstract'    => 'required',
            ]
        );

    
        $this->category->saveCategories($request);
        Session::flash('message', trans('lang.save_category'));
        return Redirect::back();
    }


    public function storeAgencyService(Request $request)
    {
        $server_verification = Helper::worketicIsDemoSite();
         
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'category_title'    => 'required',
                'category_abstract'    => 'required',
            ]
        );

    
        $this->agency_services->saveServices($request);
        Session::flash('message', trans('lang.save_category'));
        return Redirect::back();
    }


    public function storeSubCategory(Request $request)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'category_id'    => 'required',
                'sub_category'    => 'required',
            ]
        );
       
    
        $this->category->saveSubCategories($request);
        Session::flash('message', trans('lang.save_category'));
        return Redirect::back();
    }
    /**
     * Edit Categories.
     *
     * @param int $id integer
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!empty($id)) {
            $cats = $this->category::find($id);
            if (!empty($cats)) {
                if (file_exists(resource_path('views/extend/back-end/admin/categories/edit.blade.php'))) {
                    return View::make('extend.back-end.admin.categories.edit', compact('cats'));
                } else {
                    return View::make(
                        'back-end.admin.categories.edit', compact('id', 'cats')
                    );
                }
                return Redirect::to('admin/categories');
            }
        }
    }

    public function editAgencyServices($id)
    {
        if (!empty($id)) {
            $cats = $this->agency_services::find($id);
            if (!empty($cats)) {
                if (file_exists(resource_path('views/extend/back-end/admin/categories/edit.blade.php'))) {
                    return View::make('extend.back-end.admin.categories.edit', compact('cats'));
                } else {
                    return View::make(
                        'back-end.admin.agency_services.edit', compact('id', 'cats')
                    );
                }
                return Redirect::to('admin/agency_services');
            }
        }
    }


    public function editSubCategory($id)
    {
        if (!empty($id)) {
            $categories = $this->category::pluck('title', 'id');
            $skills = Skill::pluck('title', 'id');

            $sub_category = $this->sub_category::where('sub_category_id',$id)->first();
            $sub_category_skills = $this->sub_category_skills::where('sub_category_id',$id)->pluck('skill_id','sub_category_skill_id');
         //   dd($sub_category_skills);
            if (!empty($sub_category)) {
                return View::make(
                    'back-end.admin.sub_categories.edit', compact('id', 'sub_category','skills','categories','sub_category_skills')
                );
                return Redirect::to('admin/sub_categories');
            }
        }
    }
    /**
     * Update Categories.
     *
     * @param string $request string
     * @param int    $id      integer
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'category_title' => 'required',
                'parent_category'    => 'required',
            ]
        );
        $this->category->updateCategories($request, $id);
        Session::flash('message', trans('lang.cat_updated'));
        return Redirect::to('admin/categories');
    }

    public function updateAgencyServices(Request $request, $id)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'category_title' => 'required'
            ]
        );
        $this->agency_services->updateServiceServices($request, $id);
        Session::flash('message', trans('lang.cat_updated'));
        return Redirect::to('admin/agency_services');
    }

    public function updateSubCategory(Request $request, $id)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'category_id'    => 'required',
                'sub_category'    => 'required',
            ]
        );
        $this->category->updateSubCategories($request, $id);
        Session::flash('message', trans('lang.cat_updated'));
        return Redirect::to('admin/sub_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request request attributes
     *
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
            $this->category::where('id', $id)->delete();
            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_deleted');
            return $json;
        }
    }


    public function destroyAgencyServices(Request $request)
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
            $this->agency_services::where('id', $id)->delete();
            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_deleted');
            return $json;
        }
    }

    

    public function destroySubCategories(Request $request)
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
            $this->sub_category::where('sub_category_id', $id)->delete();
            $this->sub_category_skills::where('sub_category_id', $id)->delete();

            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_deleted');
            return $json;
        }
    }

    /**
     * Upload Image to temporary folder.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadTempImage(Request $request)
    {
        $path = Helper::PublicPath() . '/uploads/categories/temp/';
        if (!empty($request['uploaded_image'])) {
            return Helper::uploadTempImage($path, $request['uploaded_image']);
        }
    }


    public function uploadAgencyServiceTempImage(Request $request)
    {
        $path = Helper::PublicPath() . '/uploads/agency_services/temp/';
        if (!empty($request['uploaded_image'])) {
        return Helper::uploadTempImage($path, $request['uploaded_image']);
        }
    }

    /**
     * All Categories Lisiting.
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriesList(Request $request)
    {
        $breadcrumbs_settings = \App\SiteManagement::getMetaValue('show_breadcrumb');
        $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
        $categories = $this->category->paginate(10);
        if (!empty($categories)) {
            if (file_exists(resource_path('views/extend/front-end/categories/index.blade.php'))) {
                return View::make('extend.front-end.categories.index', compact('categories', 'show_breadcrumbs'));
            } else {
                return View::make(
                    'front-end.categories.index',
                    compact(
                        'categories',
                        'show_breadcrumbs'
                    )
                );
            }
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
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
            $this->category::where("id", $id)->delete();
        }
        if (!empty($checked)) {
            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_deleted');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }


    public function deleteAgencyServicesSelected(Request $request)
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
            $this->agency_services::where("id", $id)->delete();
        }
        if (!empty($checked)) {
            $json['type'] = 'success';
            $json['message'] = trans('lang.cat_deleted');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * get Categories
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories()
    {
        $json = array();
        $categories = $this->category::latest()->get()->take(8);
        if (!empty($categories)) {
            $json['type'] = 'success';
            $json['categories'] = $categories;
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    public function getMultipleCategorySubCategories($id){
     
    
        if(!empty($id)){
          
            $data['sub_categories'] = $this->sub_category->orderby("title","asc")
            ->select('title','sub_category_id')
            ->whereIn('category_id',explode(',',$id))
            //->groupBy('sub_categories.skill_id')

            ->get();
              
            return response()->json($data);
     
          }


       }

     public function getCategorySubCategories($id){
     
      $data['sub_categories'] = $this->sub_category->orderby("title","asc")
      ->select('title','sub_category_id')
      ->where('category_id',$id)
      ->get();
        
      return response()->json($data);

     }


     public function getSubCategorySkills($id){
        

        if(!empty($id)){
          
          $data['sub_category_skills'] = $this->sub_category_skills->select('skills.id','skills.title')
          ->whereIn('sub_category_id',explode(',',$id))
          ->join('skills','skill_id','skills.id')
          ->groupBy('sub_category_skills.skill_id')
          ->get();
            
          return response()->json($data); 
   
        }
  
       }

    /**
     * get Categories
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function getSevenCategories()
    {
        $json = array();
        $categories = $this->category::latest()->get()->take(7);
        if (!empty($categories)) {
            $json['type'] = 'success';
            $json['categories'] = $categories;
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }
}
