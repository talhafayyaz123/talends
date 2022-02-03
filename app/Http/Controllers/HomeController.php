<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteManagement;
use App\Helper;
use App\Page;
use View;
use App\Category;
use App\Skill;
use App\Location;
use App\Language;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Schema::hasTable('site_managements')) {
            $homepage = SiteManagement::getMetaValue('homepage');
            if (!empty($homepage['home'])) {
                $sections = Helper::getPageSections();
                $selected_page = Page::find($homepage['home']);
                $page_data = $selected_page->toArray();
                $page = array();
                $home = true;
                $page['id'] = $page_data['id'];
                $page['title'] = $page_data['title'];
                $page['slug'] = $page_data['slug'];
                $page['section_list'] = !empty($page_data['sections']) ? Helper::getUnserializeData($page_data['sections']) : array();
                $description = $page_data['body'];
               
                $page_meta = SiteManagement::where('meta_key', 'seo-desc-' . $homepage['home'])->select('meta_value')->pluck('meta_value')->first();
                 
                $page_banner = SiteManagement::where('meta_key', 'page-banner-' . $homepage['home'])->select('meta_value')->pluck('meta_value')->first();
                $show_banner = SiteManagement::where('meta_key', 'show-banner-' . $homepage['home'])->select('meta_value')->pluck('meta_value')->first();
                $breadcrumbs_settings = SiteManagement::getMetaValue('show_breadcrumb');
                $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
                $show_banner_image = false;
                if ($show_banner == false) {
                    $show_banner_image = false;
                } else {
                    $show_banner_image = true;
                }
                $banner = !empty($page_banner) ? Helper::getBannerImage('uploads/pages/' . $page_banner) : 'images/bannerimg/img-02.jpg';
                $meta_desc = !empty($page_meta) ? $page_meta : '';
                
                $type = Helper::getAccessType() == 'services' ? 'service' : Helper::getAccessType();
                $slider_section = '';
                $slider_style = '';
                $slider_order = '';
                foreach ($selected_page->meta->toArray() as $key => $meta) {
                    preg_match_all('!\d+!', $meta['meta_key'], $matches);
                    $meta_key_modify = preg_replace('/\d/', '', $meta['meta_key']);
                    if ($meta_key_modify == 'sliders') {
                        $slider_section = Helper::getUnserializeData($meta['meta_value']);
                        $slider_style = !empty($slider_section['style']) ? $slider_section['style'] : '';
                        $slider_order = !empty($slider_section['parentIndex']) ? $slider_section['parentIndex'] : '';
                    }
                }
                $categories = Category::latest()->get()->take(8);
                $skills = Skill::latest()->get()->take(8);
                $locations = Location::latest()->get()->take(8);
                $languages = Language::latest()->get()->take(8);
                $page_header = '';
                $currency   = SiteManagement::getMetaValue('commision');
                $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
                if (file_exists(resource_path('views/extend/front-end/pages/show.blade.php'))) {
                    return View::make(
                        'extend.front-end.pages.show',
                        compact(
                            'symbol',
                            'page_header',
                            'page',
                            'meta_desc',
                            'banner',
                            'show_banner',
                            'show_banner_image',
                            'show_breadcrumbs',
                            'selected_page',
                            'sections',
                            'type',
                            'slider_style',
                            'slider_section',
                            'description',
                            'slider_order',
                            'home',
                            'categories',
                            'skills',
                            'locations',
                            'languages'
                        )
                    );
                } else {
                    return View::make(
                        'front-end.pages.show',
                        compact(
                            'symbol',
                            'page_header',
                            'page',
                            'meta_desc',
                            'banner',
                            'show_banner',
                            'show_banner_image',
                            'show_breadcrumbs',
                            'selected_page',
                            'sections',
                            'type',
                            'slider_style',
                            'slider_section',
                            'description',
                            'slider_order',
                            'home',
                            'categories',
                            'skills',
                            'locations',
                            'languages'
                        )
                    );
                }
            } else {
                if (file_exists(resource_path('views/extend/front-end/index.blade.php'))) {
                    return view('extend.front-end.index');
                } else {
                    return view('front-end.index');
                }
            }
        }
    }


     public function whyTalends(){
        $inner_page = SiteManagement::getMetaValue('why_talends');
       
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.why-talends-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.why-talends-desc');
        $page['title'] = $meta_title;
       
        return view('front-end.pages.why-talends',compact('page','home','meta_desc'));
     }



     public function government(){
        $homepage = SiteManagement::getMetaValue('government');
          
        $page_header = '';
        $selected_page = Page::find($homepage['government']);
        $page_data = $selected_page->toArray();
        
        $page = array();
        $home = true;
        $page['id'] = $page_data['id'];
        $page['title'] = $page_data['title'];
        $page['slug'] = $page_data['slug'];
        //$page['section_list'] = !empty($page_data['sections']) ? Helper::getUnserializeData($page_data['sections']) : array();
      
        $description = $page_data['body'];
         $page_meta = SiteManagement::where('meta_key', 'seo-desc-' . $homepage['government'])->select('meta_value')->pluck('meta_value')->first();       
        $meta_desc = !empty($page_meta) ? $page_meta : '';
       
        return view('front-end.pages.government',compact('page','home','meta_desc'));
     }


     public function browseJobs(){
        $homepage = SiteManagement::getMetaValue('browse-jobs');
          
        $page_header = '';
        $selected_page = Page::find($homepage['browse-jobs']);
        $page_data = $selected_page->toArray();
        
        $page = array();
        $home = true;
        $page['id'] = $page_data['id'];
        $page['title'] = $page_data['title'];
        $page['slug'] = $page_data['slug'];
        //$page['section_list'] = !empty($page_data['sections']) ? Helper::getUnserializeData($page_data['sections']) : array();
      
        $description = $page_data['body'];
         $page_meta = SiteManagement::where('meta_key', 'seo-desc-' . $homepage['browse-jobs'])->select('meta_value')->pluck('meta_value')->first();       
        $meta_desc = !empty($page_meta) ? $page_meta : '';
       
        return view('front-end.pages.browse-jobs',compact('page','home','meta_desc'));
     }

     public function findTalents(){
        $homepage = SiteManagement::getMetaValue('find-talents');
          
        $page_header = '';
        $selected_page = Page::find($homepage['find-talents']);
        $page_data = $selected_page->toArray();
        
        $page = array();
        $home = true;
        $page['id'] = $page_data['id'];
        $page['title'] = $page_data['title'];
        $page['slug'] = $page_data['slug'];
        //$page['section_list'] = !empty($page_data['sections']) ? Helper::getUnserializeData($page_data['sections']) : array();
      
        $description = $page_data['body'];
         $page_meta = SiteManagement::where('meta_key', 'seo-desc-' . $homepage['find-talents'])->select('meta_value')->pluck('meta_value')->first();       
        $meta_desc = !empty($page_meta) ? $page_meta : '';
       
        return view('front-end.pages.find-talents',compact('page','home','meta_desc'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
