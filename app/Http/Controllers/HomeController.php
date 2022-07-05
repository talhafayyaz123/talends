<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

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
use App\GovernmentPage;
use App\AboutTalendsPage;
use App\CompanyExpertise;
use App\UserCategories;
use App\UserSubCategories;
use App\SubCategories;
use App\CompanyDetail;
use App\UserTransactions;
use App\UserPayments;
use Illuminate\Support\Facades\Mail;
use App\EmailTemplate;
use App\Mail\GeneralEmailMailable;
use App\Services\PaymentService;
use App\UserCategorySkills;
use App\AgencyServices;
use function Psy\debug;
use App\Department;

class HomeController extends Controller
{

    protected $paymentService;
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }
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
             
              $categories = Category::with('categoryFreelancers')->latest()->get()->take(5);
            
                $skills = Skill::latest()->get()->take(8);
                $locations = Location::latest()->get()->take(8);
                $languages = Language::latest()->get()->take(8);
                $page_header = '';
                $currency   = SiteManagement::getMetaValue('commision');
                $find_right_opportunity=AboutTalendsPage::where('page_type','find_right_opportunity')->first();
                $team_on_demand=AboutTalendsPage::where('page_type','team_on_demand')->first();
                $why_choose_talends=AboutTalendsPage::where('page_type','why_choose_talends')->first();
                $trusted_by=AboutTalendsPage::where('page_type','trusted_by')->first();
                $featured_success_stories=AboutTalendsPage::where('page_type','featured_success_stories')->first();
                $agency_profile=AboutTalendsPage::where('page_type','agency_profile')->first();
                $footer_social_content=AboutTalendsPage::where('page_type','footer-social-content')->first();

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
                            'footer_social_content',
                            'agency_profile',
                            'featured_success_stories',
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
                            'languages',
                            'find_right_opportunity',
                            'team_on_demand',
                            'why_choose_talends',
                            'trusted_by'
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

    
    public function gateway(){
       
        $response=Helper::checkoutPaytab();
     
        if(isset(json_decode( $response,true)['redirect_url'])){
        echo '<script>window.location.href = "'.json_decode( $response,true)['redirect_url'].'";</script>';
        } 
        exit;
    }
     public function whyTalends(){
        $inner_page = SiteManagement::getMetaValue('why_talends');
        $about_talends=AboutTalendsPage::where('page_type','about_talends')->first();

        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.why-talends-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.why-talends-desc');
        $page['title'] = $meta_title;
       
        return view('front-end.pages.why-talends',compact('page','home','meta_desc','about_talends'));
     }

     public function whyAgencyPlan(){
        $why_agency_plan=AboutTalendsPage::where('page_type','why_agency_plan')->first();
        $package=Package::where('role_id',4)->where('trial','!=',1)->orderBy('id','asc')->take(2)->get();

        $monthly_options = !empty($package[0]->options) ? unserialize($package[0]->options) : array();
        $yearly_options = !empty($package[1]->options) ? unserialize($package[1]->options) : array();
    
        return view('front-end.pages.why_agency_plan',compact('yearly_options','monthly_options','package','why_agency_plan'));
     }

     public function companyRegistration(){
        $why_agency_plan=AboutTalendsPage::where('page_type','why_agency_plan')->first();
        $categories = Category::all();
        $employees = Helper::getEmployeesList();
        $locations = Location::select('title', 'id')->get()->pluck('title', 'id')->toArray();
        $company_bedget = Helper::getComapnyBudgetList();
        $languages=Language::all();
        $package=Package::where('role_id',4)->where('trial','!=',1)->orderBy('id','asc')->take(2)->get();

        $monthly_options = !empty($package[0]->options) ? unserialize($package[0]->options) : array();
        $yearly_options = !empty($package[1]->options) ? unserialize($package[1]->options) : array();

        $package_options = Helper::getPackageOptions('company');
    
        return view('auth.company_registration',compact('package_options','yearly_options','monthly_options','package','why_agency_plan','categories','employees','locations','company_bedget','languages'));
     }

     public function companyRegistrationSuccess(Request $request){

       
      
        $content = $request->input();
    
        $id = $content['user_id'];

       $package_id = $content['package_id'];

       
        $user_payments=UserPayments::where('user_id',$id)->first();
         
       $transection=Helper::transection_query($user_payments['tran_ref']);
       $transection_status=json_decode($transection,true)['payment_result']['response_status'];
       
    
        $inner_page = SiteManagement::getMetaValue('why_talends');
        $about_talends=AboutTalendsPage::where('page_type','about_talends')->first();

        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.why-talends-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.why-talends-desc');
        $page['title'] = $meta_title;
               
        if($transection_status=='A' ){
            // status approved
            $token = $content['token'];
            $tranRef = $content['tranRef'];
            $customer_email = $content['customerEmail'];
              $cartId=$content['cartId'];
            
            $expiry_date = Carbon::now()->addMonth();
            $expiry_date = $expiry_date->format('Y-m-d H:i:s');
            
             // call service to set package record
             $this->paymentService->purchasePackage($content,$package_id);

            
            UserPayments::where('user_id',$id)->update(
                [
                   'is_success'=>1,
                   'token'=>$token,
                   'tran_ref'=>$tranRef,
                   'customer_email'=>$customer_email,
                   'expiry_date'=>$expiry_date
                ]
      
              );

              UserTransactions::create([
               'user_id'=>$id,
               'tran_ref'=>$tranRef,
               'cart_id	'=>$cartId,
               'cart_amount'=>$user_payments['cart_amount'],
               'transection_type'=>'sale'
              ]);

              session()->put(['user_id' => $id]);
            return view('auth.company_registration_success',compact('page','home','meta_desc','about_talends'));
           
        }else{
            return view('auth.company_registration_fail',compact('page','home','meta_desc','about_talends','id','package_id'));

        }

     }

     public function FindRightTalends(){
        $page_header = '';
        $page = array();
        $home = false;
        $find_right_talends=AboutTalendsPage::where('page_type','find-right-talends')->first();
        $find_right_talend_testimonials=AboutTalendsPage::where('page_type','find-right-talend_testimonials')->first();

        $meta_desc = 'Find Right Talends';
        $page['title'] = 'Find Right Talends';
      
        return view('front-end.pages.find-right-talends',compact('page','meta_desc','find_right_talends','find_right_talend_testimonials'));
     }



     public function government(){

        $inner_page = SiteManagement::getMetaValue('government');
        $government=GovernmentPage::find(1);
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.government-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.government-desc');
        $page['title'] = $meta_title;
        return view('front-end.pages.government',compact('page','home','meta_desc','government'));
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


     public function findInterns(){
         
        $skills     = Skill::all();
        $categories = Category::latest()->get();
        $locations = Location::latest()->get();
        
  
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.find-talents-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.find-talents-desc');
        $page['title'] = $meta_title;

        return view('front-end.pages.interns',compact('skills','categories','locations'));
   
     }

     public function findTalents(Request $request){
          
        $inner_page = SiteManagement::getMetaValue('find-talents');
        $filter = $request->input('filter');
        
        if (!empty($filter)) {
            
            $users = User::select('*')->role('freelancer')->when($request->category_id != null, function ($query) use ($request) {
          
              $query->whereRelation('profile', 'profiles.category_id',  $request->category_id);
              
            })->when($request->skill_id != null, function ($query) use ($request) {
          
                $query->whereRelation('profile', 'profiles.skill_id',  $request->skill_id);
                
              })->when($request->price != null, function ($query) use ($request) {
          
                $query->whereRelation('profile','profiles.min_budget',$request->price );

            })->when($request->gender != null, function ($query) use ($request) {
          
                $query->whereRelation('profile', 'profiles.gender',  $request->gender);
                
              })->when($request->location_id != null, function ($query) use ($request) {
          
              $query->where('location_id',  $request->location_id);
              
            })->when($request->availability != null, function ($query) use ($request) {
          
                $query->whereRelation('profile', 'profiles.availability',  $request->availability);
                
              })->latest()->paginate(6);
  
          } else {
  
            $users = User::select('*')->role('freelancer')->latest()->paginate(6);
          }
        



        $skills     = Skill::all();
        $categories = Category::latest()->get();
        $locations = Location::latest()->get();
        
  
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.find-talents-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.find-talents-desc');
        $page['title'] = $meta_title;

        return view('front-end.pages.find-talents',compact('page','home','meta_desc','users','skills','categories','locations'));
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
   
  
    
    public function connectDetail(){
        return view('front-end.pages.connect');
    }
    public function careersDetail(){
        return view('front-end.pages.careers');
    }
    public function Companies(Request $request){
      
        $filter = $request->input('filter');
        
        if (!empty($filter)) {
            
            $companies = User::select('*')->role('company')->when($request->employees != null, function ($query) use ($request) {
          
              $query->whereRelation('profile', 'profiles.no_of_employees',  $request->employees);
              
            })->when($request->category_id != null, function ($query) use ($request) {
          

                $user_categories = UserCategories::whereIn('category_id', explode(',',$request->category_id))->get();
                foreach ($user_categories as $key => $category) {
                    if (!empty($category->user_id)) {
                        $user_id[] = $category->user_id;
                    }
                }

                $query->whereIn('id', $user_id);

            })->when($request->price != null, function ($query) use ($request) {
          
                $query->whereRelation('profile','profiles.min_budget',$request->price );

            })->when($request->gender != null, function ($query) use ($request) {
          
                $query->whereRelation('profile', 'profiles.gender',  $request->gender);
                
              })->when($request->location_id != null, function ($query) use ($request) {
          
              $query->where('location_id',  $request->location_id);
              
            })->latest()->paginate(6);
  
          } else {
  
            $companies = User::select('*')->role('company')->latest()->paginate(6);
          }

        

    $skills     = Skill::all();
    $locations = Location::latest()->get();
    $categories = Category::all();
    $agency_services=AgencyServices::all();
    $featured_success_stories=AboutTalendsPage::where('page_type','featured_success_stories')->first();
    $agency_need_banner=AboutTalendsPage::where('page_type','agency_need_banner')->first();
    
        
    $sub_categories='';
    if(!empty($request->get('category_id'))){

        $sub_categories =SubCategories::orderby("title","asc")
        ->select('title','sub_category_id')
        ->whereIn('category_id',explode(',',$request->get('category_id')))
        ->get();

    }

    return view('front-end.pages.companies',compact('agency_services','agency_need_banner','companies','skills','locations','categories','sub_categories','featured_success_stories'));
     }


     public function CompanyDetail($id){
          
        $expertise=CompanyExpertise::where('user_id',$id)->first();
        $company_expertise= isset($expertise) ? unserialize($expertise->description)   : '';
        $company_detail=CompanyDetail::where('user_id',$id)->first();
        $profile = Profile::where('user_id', $id)->get()->first();
        $skills=UserCategorySkills::where('user_id', $id)->get();
        $categories = Category::all();
        $company_bedget = Helper::getComapnyBudgetList();
        $locations = Location::select('title', 'id')->get()->pluck('title', 'id')->toArray();
        $departments =Department::all();
        $employees = Helper::getEmployeesList();

        return view('front-end.pages.company_detail',compact('employees','departments','locations','company_bedget','categories','skills','company_expertise','expertise','company_detail','id','profile'));
     }

     public function CompanyServiceDetail($id){
          
         if($id==1){
            return view('front-end.pages.programming_tech');
         }else if($id==2){
            return view('front-end.pages.content_writting');
         }else if($id==3){
            return view('front-end.pages.data_service');
         }else if($id==4){
            return view('front-end.pages.customer_service');
         }else if($id==5){
            return view('front-end.pages.seo');
         }else if($id==6){
            return view('front-end.pages.marketing');
         }else if($id==7){
            return view('front-end.pages.design_graphic');
         }else if($id==8){
            return view('front-end.pages.video_animation');
         }
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
