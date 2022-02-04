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
use App\Job;
use DataTables;


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

        $inner_page = SiteManagement::getMetaValue('government');
       
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.government-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.government-desc');
        $page['title'] = $meta_title;
        return view('front-end.pages.government',compact('page','home','meta_desc'));
     }


     public function browseJobs(Request $request){
        $inner_page = SiteManagement::getMetaValue('browse-jobs');
        $filter = $request->input('filter');
        $data = $request->all();

        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.browse-jobs-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.browse-jobs-desc');
        $page['title'] = $meta_title;


          if (!empty($filter)) {
            
          $job_details = Job::with('employer','skills','languages')->when($request->category_id != null, function ($query) use ($request) {
        
            $query->whereRelation('categories', 'categories.id',  $request->category_id);
            
          })->when($request->project_length != null, function ($query) use ($request) {
        
            $query->where('jobs.duration',  $request->project_length);
            
          })->when($request->price != null, function ($query) use ($request) {
        
            $min_max_range = explode('-', $request->price);

                
              if(!isset($min_max_range[1])){
                if($min_max_range[0] !=0){

                    $min_price = $min_max_range[0];                   
                        $query->where('price', '>=',explode("+", $min_max_range[0])[0] );
                  }
              }else{
                $min_price = $min_max_range[0];
                $max_price = $min_max_range[1];
                $query->whereBetween('price', array($min_price, $max_price)); 
              }
            
            
          })->when($request->location != null, function ($query) use ($request) {
        
            $query->whereRelation('location', 'locations.id',  $request->location);
            
          })->latest()->paginate(5);

        } else {

            $job_details = Job::with('employer','location','categories','skills','languages')->latest()->paginate(5);
        } 

        
        
        $currency   = SiteManagement::getMetaValue('commision');
        $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();

        $categories = Category::latest()->get();
        $locations = Location::latest()->get();
        
        return view('front-end.pages.browse-jobs',compact('page','home','meta_desc','job_details','currency','categories','locations','data'));
     }

     public function findTalents(){
          
        $inner_page = SiteManagement::getMetaValue('find-talents');
       
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.find-talents-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.find-talents-desc');
        $page['title'] = $meta_title;

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
