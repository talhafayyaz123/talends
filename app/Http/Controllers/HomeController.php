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
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Profile;
use DB;
use App\Package;

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
        $search = $request->input('search');
        
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

        }elseif(!empty($search)){
          

        $job_details = Job::with('employer','location','categories','skills','languages')->when($search != null, function ($query) use ($search) {
        
            $query->where('jobs.title', 'like', '%'.$search.'%');
            
            })->latest()->paginate(5);


        } else {

            $job_details = Job::with('employer','location','categories','skills','languages')->latest()->paginate(5);
        } 

        $currency   = SiteManagement::getMetaValue('commision');
        $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();

        $categories = Category::latest()->get();
        $locations = Location::latest()->get();
        
        return view('front-end.pages.browse-jobs',compact('page','home','meta_desc','job_details','currency','categories','locations','data','search'));
     }

     public function findTalents(Request $request){
          
        $inner_page = SiteManagement::getMetaValue('find-talents');
        $filter = $request->input('filter');
        $users = User::select('*')->role('freelancer')->latest()->paginate(6);
        $skills     = Skill::all();
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.find-talents-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.find-talents-desc');
        $page['title'] = $meta_title;

        return view('front-end.pages.find-talents',compact('page','home','meta_desc','users','skills'));
     }

     public function freelancerDetail($user_id){
        $locations = Location::pluck('title', 'id');
        $skills = Skill::pluck('title', 'id');

        $profile = Profile::where('user_id', $user_id)
            ->get()->first();
        $user = User::find($user_id);
        $freelancer_skills = $user->skills()->orderBy('title')->get();
    
        $gender = !empty($profile->gender) ? $profile->gender : '';
        $hourly_rate = !empty($profile->hourly_rate) ? $profile->hourly_rate : '';
        $tagline = !empty($profile->tagline) ? $profile->tagline : '';
        $description = !empty($profile->description) ? $profile->description : '';
        $address = !empty($profile->address) ? $profile->address : '';
        $longitude = !empty($profile->longitude) ? $profile->longitude : '';
        $latitude = !empty($profile->latitude) ? $profile->latitude : '';
        $banner = !empty($profile->banner) ? $profile->banner : '';
        $avater = !empty($profile->avater) ? $profile->avater : '';
        $role_id =  Helper::getRoleByUserID($user_id);
        $packages = DB::table('items')->where('subscriber', $user_id)->count();
        $package_options = Package::select('options')->where('role_id', $role_id)->first();
        $options = !empty($package_options) ? unserialize($package_options['options']) : array();
        $videos = !empty($profile->videos) ? Helper::getUnserializeData($profile->videos) : '';
        $user_location = Location::find($user->location_id);
       
        return view(
            'front-end.pages.profile-settings.personal-detail.index',
            compact(
                'freelancer_skills',
                'user_location',
                'videos',
                'locations',
                'skills',
                'profile',
                'gender',
                'hourly_rate',
                'tagline',
                'description',
                'banner',
                'address',
                'longitude',
                'latitude',
                'avater',
                'options',
                'user',
                'user_id'
            )
        );
    }


    public function experienceEducation($user_id)
    {
        $weekdays =[
            trans('lang.weekdays.mon'),
            trans('lang.weekdays.tue'),
            trans('lang.weekdays.wed'),
            trans('lang.weekdays.thu'),
            trans('lang.weekdays.fri'),
            trans('lang.weekdays.sat'),
            trans('lang.weekdays.sun'),
        ];
        $months =[
            trans('lang.months.january'),
            trans('lang.months.february'),
            trans('lang.months.march'),
            trans('lang.months.april'),
            trans('lang.months.may'),
            trans('lang.months.june'),
            trans('lang.months.july'),
            trans('lang.months.august'),
            trans('lang.months.september'),
            trans('lang.months.october'),
            trans('lang.months.november'),
            trans('lang.months.december'),
        ];

        $profile = Profile::select('education','experience')
        ->where('user_id', $user_id)->get()->first();
         
        $stored_educations = unserialize($profile->education);
        $stored_experiences = unserialize($profile->experience);
       
     return view('front-end.pages.profile-settings.experience-education.index', compact('weekdays', 'months','user_id','stored_experiences','stored_educations'));
        
    }

    public function projectAwardsSettings ($user_id)
    {
        $weekdays =[
            trans('lang.weekdays.mon'),
            trans('lang.weekdays.tue'),
            trans('lang.weekdays.wed'),
            trans('lang.weekdays.thu'),
            trans('lang.weekdays.fri'),
            trans('lang.weekdays.sat'),
            trans('lang.weekdays.sun'),
        ];
        $months =[
            trans('lang.months.january'),
            trans('lang.months.february'),
            trans('lang.months.march'),
            trans('lang.months.april'),
            trans('lang.months.may'),
            trans('lang.months.june'),
            trans('lang.months.july'),
            trans('lang.months.august'),
            trans('lang.months.september'),
            trans('lang.months.october'),
            trans('lang.months.november'),
            trans('lang.months.december'),
        ];
        $profile = Profile::select('projects')
        ->where('user_id', $user_id)->get()->first();

        $profile_projects = array();
        if (!empty($profile)) {
            $projects = !empty($profile->projects) ? Helper::getUnserializeData($profile->projects) : array();
            if (!empty($projects)) {
                foreach ($projects as $key => $project) {
                    $profile_projects[$key]['project_title'] = !empty($project['project_title']) ? $project['project_title'] : '';
                    $profile_projects[$key]['project_url'] = !empty($project['project_url']) ? $project['project_url'] : '';
                    $profile_projects[$key]['project_hidden_image'] = !empty($project['project_hidden_image']) ? url('/uploads/users/'.$user_id.'/projects/'.$project['project_hidden_image']) : '';
                    $profile_projects[$key]['project_image'] = !empty($project['project_hidden_image']) ? $project['project_hidden_image'] : '';
                }
            }

        }


        $profile = Profile::select('awards')
        ->where('user_id', $user_id)->get()->first();
        $profile_awards = array();
        if (!empty($profile)) {
            $awards = !empty($profile->awards) ? Helper::getUnserializeData($profile->awards) : array();
            if (!empty($awards)) {
                foreach ($awards as $key => $award) {
                    $profile_awards[$key]['award_title'] = $award['award_title'];
                    $profile_awards[$key]['award_date'] = $award['award_date'];
                    $profile_awards[$key]['award_hidden_image'] = url('/uploads/users/'.$user_id.'/awards/'.$award['award_hidden_image']);
                    $profile_awards[$key]['award_image'] = !empty($award['award_hidden_image']) ? $award['award_hidden_image'] : '';
                }
            }
            
        }
    
        return view('front-end.pages.profile-settings.projects-awards.index', compact('weekdays', 'months','user_id','profile_projects','profile_awards'));

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
