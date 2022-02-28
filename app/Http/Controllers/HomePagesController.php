<?php

/**
 * Class PageController
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use Auth;
use App\User;
use App\Helper;
use App\SiteManagement;
use Illuminate\Support\Facades\Schema;
use App\GovernmentPage;
use App\AboutTalendsPage;


/**
 * Class PageController
 *
 */
class HomePagesController extends Controller
{
    /**
     * Defining scope of the variable
     *
     * @access public
     * @var    array $page
     */
    protected $page;

    /**
     * Create a new controller instance.
     *
     * @param instance $page instance
     *
     * @return void
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $government = GovernmentPage::find(1);
                     
        
       if(empty($government)){
        return view(
            'back-end.admin.home-pages.government.create',
            compact(
                'government'
            )
        );
       }else{
        $government=$government->toArray();
        
        return view(
            'back-end.admin.home-pages.government.edit',
            compact(
                'government'
            )
        );
       }        
      
       
    }


    public function aboutTalends()
    {

         $about=AboutTalendsPage::where('page_type','about_talends')->first();

         if(empty($about)){
            return view(
                'back-end.admin.home-pages.about-talends.create'
            );
    
         }else{
            $about_talends=$about->toArray();
        
            return view(
                'back-end.admin.home-pages.about-talends.edit',
                compact(
                    'about_talends'
                )
            ); 
         }
      
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param mixed $request $req->attr
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate(
            $request, [
                'banner_description'    => 'required',
                'content_description'    => 'required',
                'opportunity_providers'    => 'required',
                'opportunity_seekers'    => 'required',
                'process'    => 'required',
                'features_text'    => 'required',
                'services_description'    => 'required',
                'government_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'content_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
            ]
        );

        $government = new GovernmentPage;
        $government->saveGovernment($request);
        Session::flash('message','Government Record Saved Successfully');
        return Redirect::back();
    }


    public function storeTalends(Request $request)
    { 
        $this->validate(
            $request, [
       'banner_description' => 'required',
        'features_text' => 'required',
        'services_description' => 'required',
        'project_description' => 'required',
        'work_description' => 'required',
        'payment_description' => 'required',
        'support_description' => 'required',
        'freelancer_benefits' => 'required',
        'internees_benefits' => 'required',
        'agencies_benefits' => 'required',
        'government_benefits' => 'required',

        'about_talends_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'talends_project_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'talends_work_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'talends_payment_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'talends_support_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'short_term_project_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'recurring_engagements_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        'long_term_work_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg'

            ]
        );
       

        $about_talends = new AboutTalendsPage;
        $about_talends->saveAboutTalends($request);
        Session::flash('message','About Talends Record Saved Successfully');
        return Redirect::back();
    }

    public function frontFooter($footer_type=''){
       
        $footer_how_work=AboutTalendsPage::where('page_type','footer-how-work')->first();

        $join_community=AboutTalendsPage::where('page_type','join_community')->first();

        $unserialize_menu_array = SiteManagement::getMetaValue('footer_menu1');
        $menu_title = DB::table('site_managements')->select('meta_value')->where('meta_key', 'footer_title1')->get()->first();

        $unserialize_menu2_array = SiteManagement::getMetaValue('footer_menu2');
        $menu_title2 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'footer_title2')->get()->first();

        
        $unserialize_menu3_array = SiteManagement::getMetaValue('footer_menu3');
        $menu_title3 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'footer_title3')->get()->first();

        $unserialize_menu4_array = SiteManagement::getMetaValue('footer_menu4');
        $menu_title4 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'footer_title4')->get()->first();

         // header menus
         $header_menu_title1 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'header_menu_title1')->get()->first();
         $header_menu_title2 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'header_menu_title2')->get()->first();

         $unserialize_header_menu3_array = SiteManagement::getMetaValue('header_menu3');
         $header_menu_title3 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'header_menu_title3')->get()->first();
 
         $unserialize_menu4_array = SiteManagement::getMetaValue('header_menu4');
         $header_menu_title4 = DB::table('site_managements')->select('meta_value')->where('meta_key', 'header_menu_title4')->get()->first();


         if($footer_type=='how-works'){
            return view(
                'back-end.admin.settings.front-footer.how-work',
                compact('footer_how_work')
            );
        }else if($footer_type=='footer_menus'){
            return view(
                'back-end.admin.settings.front-footer.footer_menus.create',compact('menu_title','menu_title2','menu_title3','menu_title4','unserialize_menu_array','unserialize_menu2_array','unserialize_menu3_array','unserialize_menu4_array'));
        }else if($footer_type=='header_menus'){
            return view(
                'back-end.admin.settings.front-footer.header_menus.index',compact('header_menu_title1','header_menu_title2','header_menu_title3','unserialize_header_menu3_array','header_menu_title4','unserialize_menu4_array'));
        }else if($footer_type=='join_community'){
            return view(
                'back-end.admin.settings.front-footer.join-community',
                compact('join_community')
            );
        }

    }



    public function storeFooterHowWork(Request $request)
    { 
        $this->validate(
            $request, [
         'footer_image1_description' => 'required',
          'footer_image2_description' => 'required',
          'footer_image3_description' => 'required',
        'footer_image1' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        'footer_image2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        'footer_image3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]
        );
       

        $about_talends = new AboutTalendsPage;
        $about_talends->saveHowActuallyWork($request);
        Session::flash('message','Footer How Actually It Works Record Saved Successfully');
        return Redirect::back();
    }


    public function storeFooterJoinCommunity(Request $request)
    { 
        $this->validate(
            $request, [
         'banner_description' => 'required',
        'about_talends_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]
        );
       

        $about_talends = new AboutTalendsPage;
        $about_talends->saveJoinCommunity($request);
        Session::flash('message','Join Community Record Saved Successfully');
        return Redirect::back();
    }


    public function updateFooterHowWork(Request $request,$id)
    { 
        $this->validate(
            $request, [
         'footer_image1_description' => 'required',
          'footer_image2_description' => 'required',
          'footer_image3_description' => 'required',
        'footer_image1' =>'mimes:jpeg,png,jpg,gif,svg|max:1024',
        'footer_image2'=>'mimes:jpeg,png,jpg,gif,svg|max:1024',
        'footer_image3'=>'mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]
        );
       
        $about_talends = new AboutTalendsPage;
        $about_talends->updateHowActuallyWork($request,$id);
        Session::flash('message','Footer How Actually It Works Record updated Successfully');
        return Redirect::back();
    }


    public function updateJoinCommunity(Request $request,$id)
    { 
        $this->validate(
            $request, [
         'banner_description' => 'required',
        'about_talends_image'=>'mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]
        );
    
        $about_talends = new AboutTalendsPage;
        $about_talends->updateJoinCommunity($request,$id);
        Session::flash('message','Footer Join Community Record updated Successfully');
        return Redirect::back();
    }


    /**
     * Display the specified resource.
     *
     * @param string $slug page slug
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param integer $id page Id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = array();
        if (!empty($id)) {
            $selected_page = $this->page::find($id);
            $count = 0;
            $sections = Helper::getPageSections();
           
            if (!empty($selected_page)) {
                $page_data = $selected_page->toArray();
                $page['id'] = $page_data['id'];
                $page['title'] = $page_data['title'];
                $page['slug'] = $page_data['slug'];
                $page['section_list'] = Helper::getUnserializeData($page_data['sections']);
                
                $parent_selected_id = '';
                $parent_page = DB::table('pages')->select('id', 'title')->where('id', '!=', $id)->where('relation_type', '=', 0)->get()->toArray();
                $has_child = $this->page->pageHasChild($id);
                $child_parent_id = DB::table('child_pages')->select('parent_id')->where('child_id', $id)->get()->first();
                $desc = SiteManagement::where('meta_key', 'seo-desc-' . $id)->select('meta_value')->pluck('meta_value')->first();
                $seo_desc = !empty($desc) ? $desc : '';
                $page_banner = SiteManagement::where('meta_key', 'page-banner-' . $id)->select('meta_value')->pluck('meta_value')->first();
                $page['banner'] = !empty($page_banner) ? $page_banner : '';
                $page['banner_detail'] = !empty($page_banner) ? Helper::getImageDetail($page_banner, 'uploads/pages/' . $id) : '';
                $page['parent_type'] = !empty($selected_page->metaValue('parent_type')) ? $selected_page->metaValue('parent_type')['meta_value'] : '';
                if ($page['parent_type'] == 'custom_link') {
                    $parent_selected_id =!empty($selected_page->metaValue('custom_link')) ? $selected_page->metaValue('custom_link')['meta_value'] : '';
                }
                if ($page['parent_type'] == 'page') {
                    if (!empty($child_parent_id->parent_id)) {
                        $parent_selected_id = $child_parent_id->parent_id;
                    } else {
                        $parent_selected_id = '';
                    }
                }
                $app_style_list = Helper::getAppStyleList();
                $slider_style_list = Helper::getSliderStyleList();
                $access_type = Helper::getAccessType() == 'services' ? 'service' : Helper::getAccessType();
                if (file_exists(resource_path('views/extend/back-end/admin/pages/edit.blade.php'))) {
                    return View::make(
                        'extend.back-end.admin.pages.edit',
                        compact(
                            'access_type',
                            'app_style_list',
                            'page',
                            'parent_page',
                            'parent_selected_id',
                            'id',
                            'has_child',
                            'seo_desc',
                            'page_banner',
                            'slider_style_list',
                            'sections'
                        )
                    );
                } else {
                    return View::make(
                        'back-end.admin.pages.edit',
                        compact(
                            'access_type',
                            'app_style_list',
                            'page',
                            'parent_page',
                            'parent_selected_id',
                            'id',
                            'has_child',
                            'seo_desc',
                            'page_banner',
                            'slider_style_list',
                            'sections'
                        )
                    );
                }
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function getPage($id)
    {
        $json = array();
        $selected_page = $this->page::find($id);
        $count = 0;
        $prepare_array = array();
        // $section_description = array();
        if (Schema::hasTable('metas')) {
            if (!empty($selected_page->meta) && $selected_page->meta->count() > 0) {
                foreach ($selected_page->meta->toArray() as $key => $meta) {
                    $meta_key_modify = preg_replace('/\d/', '', $meta['meta_key']);
                    $section_index = preg_match_all('!\d+!', $meta['meta_key'], $matches);
                    if ($meta['meta_key'] == 'title') {
                        $prepare_array[$meta_key_modify][$count] = $meta['meta_value'];
                    } else {
                        $prepare_array[$meta_key_modify][$count] = Helper::getUnserializeData($meta['meta_value'] . $section_index);
                    }
                    $count++;
                }
            }
        }
        $sections_data = array_map('array_values', $prepare_array);
        $json['section_data'] = $sections_data;
        $json['body'] = !empty($selected_page->body) ? $selected_page->body : '';
        $json['type'] = 'success';
        return $json;
    }

    public function getSlider($id)
    {
        $json = array();
        $selected_page = $this->page::find($id);
        $slider_section = '';
        foreach ($selected_page->meta->toArray() as $key => $meta) {
            preg_match_all('!\d+!', $meta['meta_key'], $matches);
            $meta_key_modify = preg_replace('/\d/', '', $meta['meta_key']);
            if ($meta_key_modify == 'sliders') {
                $slider_section = Helper::getUnserializeData($meta['meta_value']);
            }
        }
        $json['type'] = 'success';
        $json['slider'] = $slider_section;
        return $json;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param mixed   $request $req->attr
     * @param integer $id      page ID
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      
        $this->validate(
            $request, [
                'banner_description'    => 'required',
                'content_description'    => 'required',
                'opportunity_providers'    => 'required',
                'opportunity_seekers'    => 'required',
                'process'    => 'required',
                'features_text'    => 'required',
                'services_description'    => 'required',
                'government_image' => 'mimes:jpeg,png,jpg,gif,svg',
                'content_image' => 'mimes:jpeg,png,jpg,gif,svg'
            ]
        );

        $government = new GovernmentPage;
        $government->updateGovernment($request,$id);
        Session::flash('message','Government Record updated Successfully');
        return Redirect::back();
    }


    public function updateTalends(Request $request,$id)
    {
      
        $this->validate(
            $request, [
       'banner_description' => 'required',
        'features_text' => 'required',
        'services_description' => 'required',
        'project_description' => 'required',
        'work_description' => 'required',
        'payment_description' => 'required',
        'support_description' => 'required',
        'freelancer_benefits' => 'required',
        'internees_benefits' => 'required',
        'agencies_benefits' => 'required',
        'government_benefits' => 'required',
        
        'about_talends_image' =>'mimes:jpeg,png,jpg,gif,svg',
        'talends_project_image'=>'mimes:jpeg,png,jpg,gif,svg',
        'talends_work_image'=>'mimes:jpeg,png,jpg,gif,svg',
        'talends_payment_image'=>'mimes:jpeg,png,jpg,gif,svg',
        'talends_support_image'=>'mimes:jpeg,png,jpg,gif,svg',
        'short_term_project_image'=>'mimes:jpeg,png,jpg,gif,svg',
        'recurring_engagements_image'=>'mimes:jpeg,png,jpg,gif,svg',
        'long_term_work_image'=>'mimes:jpeg,png,jpg,gif,svg'

            ]
        );
        
        $about_talends = new AboutTalendsPage();
        $about_talends->updateAboutTalends($request,$id);
        Session::flash('message','About Talends Record updated Successfully');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request $req->attr
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
            $page = $this->page::find($id);
            $page->meta()->delete();
            $child_pages = $this->page::pageHasChild($id);
            if (!empty($child_pages)) {
                foreach ($child_pages as $page) {
                    DB::table('pages')->where('id', $page->child_id)->update(['relation_type' => 0]);
                }
            } else {
                $relation = DB::table('pages')->select('relation_type')->where('id', $id)->get()->first();
                if ($relation->relation_type == 1) {
                    DB::table('pages')->where('id', $id)->update(['relation_type' => 0]);
                }
            }
            DB::table('child_pages')->where('child_id', '=', $id)->orWhere('parent_id', '=', $id)->delete();
            DB::table('pages')->where('id', '=', $id)->delete();
            $json['type'] = 'success';
            $json['message'] = trans('lang.page_deleted');
            return $json;
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
            $page = $this->page::find($id);
            if (!empty($page)) {
                if (!empty($page->meta) || $page->meta->count > 0) {
                    $page->meta()->delete();
                }
                $this->page::where("id", $id)->delete();
            }
        }
        if (!empty($checked)) {
            $json['type'] = 'success';
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Upload Image to temporary folder.
     *
     * @param mixed  $request   request attributes
     * @param string $file_name getfilename
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadTempImage(Request $request, $file_name = '')
    {
        $path = Helper::PublicPath() . '/uploads/pages/temp/';
        if (!empty($request[$file_name])) {
            Helper::uploadSingleTempImage($path, $request[$file_name], true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param integer $id page Id
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditPageData($id)
    {
        $json = array();
        $page = array();
        if (!empty($id)) {
            $selected_page = $this->page::find($id);
            if (!empty($selected_page)) {
                // $page_options = !empty($selected_page->meta) ? Helper::getUnserializeData($selected_page->meta) : '';
                $page_data = $selected_page->toArray();
                $page['id'] = $page_data['id'];
                $page['title'] = $page_data['title'];
                $page['slug'] = $page_data['slug'];
                $page_banner = SiteManagement::where('meta_key', 'page-banner-' . $id)->select('meta_value')->pluck('meta_value')->first();
                $page['banner'] = !empty($page_banner) ? $page_banner : '';
                $page['show_page_banner'] = SiteManagement::where('meta_key', 'show-banner-' . $selected_page->id)->select('meta_value')->pluck('meta_value')->first();
                $page['show_page_title'] = !empty($selected_page->metaValue('title')) ? $selected_page->metaValue('title')['meta_value'] : 0;
                $page['header'] = !empty($selected_page->metaValue('header')) ? $selected_page->metaValue('header')['meta_value'] : '';
                $page['footer'] = !empty($selected_page->metaValue('footer')) ? $selected_page->metaValue('footer')['meta_value'] : '';
                $page['page_order'] = !empty($selected_page->metaValue('page_order')) ? $selected_page->metaValue('page_order')['meta_value'] : '';
                $page['parent_type'] = !empty($selected_page->metaValue('parent_type')) ? $selected_page->metaValue('parent_type')['meta_value'] : '';
                $page['header_styling'] = !empty($selected_page->metaValue('header_styling')) ? unserialize($selected_page->metaValue('header_styling')['meta_value']) : '';
                $page['show_page_navbar'] = SiteManagement::where('meta_key', 'show-page-' . $selected_page->id)->select('meta_value')->pluck('meta_value')->first();
                $meta_title = SiteManagement::where('meta_key', 'meta-title-' . $id)->select('meta_value')->pluck('meta_value')->first();
                $meta_title = !empty($meta_title) ? $meta_title : '';
                $page['meta_title'] = $meta_title;
                $page['body'] = !empty($selected_page->body) ? $selected_page->body : '';
                $page['section_list'] = Helper::getUnserializeData($page_data['sections']);
                $json['page'] = $page;
                $json['type'] = 'success';
                return $json;
            } else {
                $json['type'] = 'error';
                $json['message'] = 'page not found';
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = 'page not found';
            return $json;
        }
    }

    /**
     * Get the specified page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEditPageSections($id)
    {
        $json = array();
        $selected_page = $this->page::find($id);
        $count = 0;
        $prepare_array = array();
        if (!empty($selected_page->meta) && $selected_page->meta->count() > 0) {
            
            foreach ($selected_page->meta->toArray() as $key => $meta) {
                $meta_key_modify = preg_replace('/\d/', '', $meta['meta_key']);
                $section_index = preg_match_all('!\d+!', $meta['meta_key'], $matches);
                if (
                    $meta['meta_key'] !== 'title' && $meta['meta_key'] !== 'header' && 
                    $meta['meta_key'] !== 'footer' && $meta['meta_key'] !== 'page_order' && 
                    $meta['meta_key'] !== 'parent_type' && $meta['meta_key'] !== 'custom_link'
                ) {
                    $prepare_array[$meta_key_modify][$count] = Helper::getUnserializeData($meta['meta_value'] . $section_index);
                }
                $count++;
            }
        }
        $sections_data = array_map('array_values', $prepare_array);
        $json['section_data'] = $sections_data;
        $json['type'] = 'success';
        return $json;
    }

    /**
     * Get pages List.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getPagesList () {
        $json = array();
        $child_pages = DB::table('child_pages')->select('child_id')->get()->pluck('child_id')->toArray();
        $pages = Page::select('id', 'title')->whereNotIn('id', $child_pages)->get()->toArray();
        $show_pages_list = array();
        $count = 0;
        foreach ($pages as $key => $page) {
            $enable_page = SiteManagement::where('meta_key', 'show-page-' . $page['id'])->select('meta_value')->pluck('meta_value')->first();
            if (!empty($enable_page) && $enable_page == true) {
                $show_pages_list[$count] = $page;
                $show_pages_list[$count]['type'] = 'pages';
                $count++;
            }
        }
        $menu_settings = !empty(SiteManagement::getMetaValue('menu_settings')) ? SiteManagement::getMetaValue('menu_settings') : array();
        if (!empty($menu_settings['custom_links'])) {
            foreach ($menu_settings['custom_links'] as $key => $custom_menu) {
                if ($custom_menu['relation_type'] == 'parent') {
                    $show_pages_list[$count]['id'] = $custom_menu['custom_slug'];
                    $show_pages_list[$count]['title'] = $custom_menu['custom_title'];
                    $show_pages_list[$count]['type'] = 'custom_menu';
                    $count++;
                }
            }
        }
        $inner_pages = array( 
            '0' => array(
                'id' => 'freelancers',
                'title' => 'View Freelancers',
                'type' => 'innerPages',
            ),
            '1' => array(
                'id' => 'employers',
                'title' => 'View Employers',
                'type' => 'innerPages',
            ),
            '2' => array(
                'id' => 'jobs',
                'title' => 'Browse Jobs',
                'type' => 'innerPages',
            ),
            '3' => array(
                'id' => 'services',
                'title' => 'Browse Services',
                'type' => 'innerPages',
            ),
            '4' => array(
                'id' => 'articles',
                'title' => 'Articles',
                'type' => 'innerPages',
            ),
        );
        foreach ($inner_pages as $innerPage) {
            array_push($show_pages_list, $innerPage);
        }
        if (!empty($show_pages_list)) {
            $json['type'] = 'success';
            $json['pages'] = $show_pages_list;
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }
}
