<?php

/**
 * Class FreelancerController.
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */
namespace App\Http\Controllers;

use App\Freelancer;
use Illuminate\Http\Request;
use App\Helper;
use App\Location;
use App\Skill;
use Session;
use App\Profile;
use Auth;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Proposal;
use App\Job;
use DB;
use App\Package;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use ValidateRequests;
use App\Item;
use Carbon\Carbon;
use App\Message;
use App\Payout;
use App\SiteManagement;
use App\Service;
use App\Review;
use App\Category;
use App\CompanyExpertise;
use App\SubCategories;
use App\SubCategorySkills;

use App\UserCategories;
use App\UserSubCategories;
use App\UserCategorySkills;
use App\CompanyDetail;
use App\HireAgency;
/**
 * Class FreelancerController
 *
 */
class CompanyController extends Controller
{
    /**
     * Defining scope of the variable
     *
     * @access protected
     * @var    array $freelancer
     */
    protected $freelancer;

    /**
     * Create a new controller instance.
     *
     * @param instance $freelancer instance
     *
     * @return void
     */
    public function __construct(Profile $freelancer, Payout $payout)
    {
        $this->freelancer = $freelancer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::pluck('title', 'id');
        $skills = Skill::pluck('title', 'id');
        $categories = Category::pluck('title','id');
        $profile = $this->freelancer::where('user_id', Auth::user()->id)
            ->get()->first();
         
        $gender = !empty($profile->gender) ? $profile->gender : '';
        $hourly_rate = !empty($profile->hourly_rate) ? $profile->hourly_rate : '';
        $tagline = !empty($profile->tagline) ? $profile->tagline : '';
        $description = !empty($profile->description) ? $profile->description : '';
        $address = !empty($profile->address) ? $profile->address : '';
        $longitude = !empty($profile->longitude) ? $profile->longitude : '';
        $latitude = !empty($profile->latitude) ? $profile->latitude : '';
        $banner = !empty($profile->banner) ? $profile->banner : '';
        $avater = !empty($profile->avater) ? $profile->avater : '';
        $role_id =  Helper::getRoleByUserID(Auth::user()->id);
        $packages = DB::table('items')->where('subscriber', Auth::user()->id)->count();
        $package_options = Package::select('options')->where('role_id', $role_id)->first();
        $options = !empty($package_options) ? unserialize($package_options['options']) : array();
        $videos = !empty($profile->videos) ? Helper::getUnserializeData($profile->videos) : '';

        $user_categories=  UserCategories::where('user_id', Auth::user()->id)
        ->join('categories','category_id','categories.id')
        ->pluck('categories.id');

        $user_sub_categories = UserSubCategories::where('user_id', Auth::user()->id)
        ->join('sub_categories','user_sub_categories.sub_category_id','sub_categories.sub_category_id')
        ->select('sub_categories.sub_category_id')
        ->get();

        $selced_sub_categories=array();
        if(isset($user_sub_categories)){
            foreach($user_sub_categories as $key =>$value){
            $selced_sub_categories[]=$value['sub_category_id'];
            }
        } 


        $sub_categories='';
        if(isset($user_categories[0]) ){
           
            $sub_categories = SubCategories::orderby("title","asc")
            ->select('title','sub_category_id')
            ->whereIn('category_id',$user_categories)
            ->get();
        }

           ////////////////////////////////////
           
       $user_category_skills = UserCategorySkills::where('user_id', Auth::user()->id)
       ->select('skill_id')
       ->get();
    
       $sub_cat_skills='';

       if(!empty($selced_sub_categories)){
        
        $sub_cat_skills =SubCategorySkills::select('skills.id','skills.title')
        ->whereIn('sub_category_id',$selced_sub_categories)
        ->join('skills','skill_id','skills.id')
        ->groupBy('sub_category_skills.skill_id')
        ->get();
      }


      $seleced_cat_skills=array();
      if(isset($user_category_skills)){
          foreach($user_category_skills as $key =>$value){
          $seleced_cat_skills[]=$value['skill_id'];
          }
      } 

        return view(
            'back-end.company.profile-settings.personal-detail.index',
            compact(
                'seleced_cat_skills',
                'sub_cat_skills',
            'sub_categories',
            'selced_sub_categories',
            'user_categories',
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
                'categories'
            )
        );
    }


    public function companyExpertise(){
        $categories = Category::pluck('title','id');
        $company_expertise=CompanyExpertise::where('user_id',auth()->user()->id)->first();
        $company_expertise_array= isset($company_expertise) ? unserialize($company_expertise->description)   : '';
      
        return view('back-end.company.profile-settings.expertise.index',compact('company_expertise_array','categories','company_expertise'));
    }


    public function addMoreExpertise($no){
        $categories = Category::pluck('title','id');

        return view("back-end.company.profile-settings.expertise.add_expertise",compact('categories','no'));

    }
    public function storeExpertise(Request $request)
    {

         $this->validate(
            $request,
            [
                'portfolio_detail' => 'required',
                // 'portfolio_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024'
          ]
        );
 
        $json = array();
        if (!empty($request)) {
          

            $search_menu = CompanyExpertise::saveCompanyExpertise($request);
           
            if ($search_menu['type'] == "success") {
                                
                Session::flash('message','Expertise Saved Successfully');
                return Redirect::back();

            } else {
               
                Session::flash('message',trans('lang.all_required'));
                return Redirect::back();

            }
        } 
        

       


    }


    public function storeHireAgency(Request $request,$id)
    {

       
         $this->validate(
            $request,
            [
                'full_name' => 'required',
                'company_name' => 'required',
                'email' => 'required',
                 'phone_number' => 'required',
                'budget' => 'required',
                'services.*' => 'required',
          ]

        );
       
        $full_name=$request['full_name'];
        $company_name=$request['company_name'];
        $email=$request['email'];
        $mobile_number=$request['phone_number'];
        $budget=$request['budget'];
        $services=$request['services'];
        
        HireAgency::create([
        'agency_id'=>  $id,
        'full_name'=> $full_name,
        'company_name'=> $company_name,
        'email'=>  $email,
        'phone_number'=>  $mobile_number,
        'detail'=>  !empty($services) ? serialize($services) : '',
        'is_seen'=>0,
        'budget'=> $budget,
        ]);

        Session::flash('message', 'Response has been saved');
        return redirect()->route('successHireAgency', ['id' => $id]);

    }

    public function companyHiringRequests(){

        $role=Auth::user()->getRoleNames()[0];
           if( $role=='admin'){
            $hiring_requests=HireAgency::all();

           }else{
               
            $hiring_requests=HireAgency::where('agency_id',Auth::user()->id)->get();

           }
        return view(
            'back-end.company.hiring_requests.index',
            compact(
                'hiring_requests','role'
            )
        );
    }

    public function companyHiringRequestDetail($id){
        $hiring_request=HireAgency::where('id',$id)->first();
        $questions = !empty($hiring_request) && !empty($hiring_request->questions) ? unserialize($hiring_request->questions) : '';
        
        $sub_cat= HireAgency::where('id',$id)->update([
            'is_seen'=> 1
        ]);


        return view(
            'back-end.company.hiring_requests.show',
            compact(
                'questions',
                'hiring_request'
            )
        );
    }
    /**
     * Upload Image to temporary folder.
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadTempImage(Request $request)
    {
        $path = Helper::PublicPath() . '/uploads/users/temp/';
        if (!empty($request['hidden_avater_image'])) {
            $profile_image = $request['hidden_avater_image'];
            $image_size = array(
                'small' => array(
                    'width' => 36,
                    'height' => 36,
                ),
                'medium-small' => array(
                    'width' => 60,
                    'height' => 60,
                ),
                'medium' => array(
                    'width' => 100,
                    'height' => 100,
                ),
                'listing' => array(
                    'width' => 255,
                    'height' => 255,
                ),
            );
            // return Helper::uploadTempImage($path, $profile_image);
            return Helper::uploadTempImageWithSize($path, $profile_image, '', $image_size);
        } elseif (!empty($request['hidden_banner_image'])) {
            $profile_image = $request['hidden_banner_image'];
            return Helper::uploadTempImage($path, $profile_image);
        } elseif (!empty($request['project_img'])) {
            $profile_image = $request['project_img'];
            return Helper::uploadTempImage($path, $profile_image);
        } elseif (!empty($request['award_img'])) {
            $profile_image = $request['award_img'];
            return Helper::uploadTempImage($path, $profile_image);
        }
    }

    /**
     * Store profile settings.
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function storeProfileSettings(Request $request)
    {
        
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $response['type'] = 'error';
            $response['message'] = $server->getData()->message;
            return $response;
        }
        $json = array();
        $this->validate(
            $request,
            [
                'first_name'    => 'required',
                'last_name'    => 'required',
                'gender'    => 'required',
            ]
        );
        if (!empty($request['latitude']) || !empty($request['longitude'])) {
            $this->validate(
                $request,
                [
                    'latitude' => ['regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
                    'longitude' => ['regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
                ]
            ); 
        }
        if (Auth::user()) {
            $role_id = Helper::getRoleByUserID(Auth::user()->id);
            $packages = DB::table('items')->where('subscriber', Auth::user()->id)->count();
            $package_options = Package::select('options')->where('role_id', $role_id)->first();
            $options = !empty($package_options) ? unserialize($package_options['options']) : array();
            $skills = !empty($options) ? $options['no_of_skills'] : array();
            $payment_settings = SiteManagement::getMetaValue('commision');
          
            $package_status = '';
            if (empty($payment_settings)) {
                $package_status = 'true';
            } else {
                $package_status =!empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
            }


            if ($package_status === 'true') {
                if ($packages > 0) {
                    if (!empty($request['skills']) && count($request['skills']) > $skills) {
                        $json['type'] = 'error';
                        $json['message'] = trans('lang.cannot_add_morethan') . '' . $options['no_of_skills'] . ' ' . trans('lang.skills');
                        return $json;
                    } else {
                        $profile =  $this->freelancer->storeProfile($request, Auth::user()->id);
                        if ($profile = 'success') {
                            $json['type'] = 'success';
                            $json['message'] = '';
                            return $json;
                        }
                    }
                } else {
                    $json['type'] = 'error';
                    $json['message'] = trans('lang.update_pkg');
                    return $json;
                }
            } else {
                $profile =  $this->freelancer->storeProfile($request, Auth::user()->id);
                if ($profile = 'success') {
                    $json['type'] = 'success';
                    $json['message'] = '';
                    return $json;
                }
            }
            Session::flash('message', trans('lang.update_profile'));
            return Redirect::back();
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.not_authorize');
            return $json;
        }
    }

    /**
     * Get freelancer skills.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerSkills()
    {
        $json = array();
        if (Auth::user()) {
            $skills = User::find(Auth::user()->id)->skills()
                ->orderBy('title')->get()->toArray();
            if (!empty($skills)) {
                $json['type'] = 'success';
                $json['freelancer_skills'] = $skills;
                return $json;
            } else {
                $json['type'] = 'error';
                return $json;
            }
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Get top freelancer
     *
     * @return \Illuminate\Http\Response
     */
    public function getTopFreelancers()
    {
        $json = array();
        $freelancers = User::getTopFreelancers();
        $top_freelancers = array();
        if (!empty($freelancers)) {
            foreach ($freelancers as $key => $freelancer) {
                $user = User::find($freelancer->id);
                $top_freelancers[$key]['id'] = $freelancer->id;
                $top_freelancers[$key]['name'] = Helper::getUserName($freelancer->id);
                $top_freelancers[$key]['slug'] = $user->slug;
                $top_freelancers[$key]['image'] = asset(Helper::getProfileImage($freelancer->id));
                $top_freelancers[$key]['flag'] = !empty($user->location->flag) ? Helper::getLocationFlag($user->location->flag) :'';
                $top_freelancers[$key]['location'] = !empty($user->location->title) ? $user->location->title :'';
                $top_freelancers[$key]['tagline'] = !empty($user->profile->tagline) ? $user->profile->tagline :'';
                $top_freelancers[$key]['hourly_rate'] = !empty($user->profile->hourly_rate) ? $user->profile->hourly_rate :'';
                $currency   = SiteManagement::getMetaValue('commision');
                $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
                $top_freelancers[$key]['symbol'] = !empty($symbol['symbol']) ? $symbol['symbol'] : '$';
                $top_freelancers[$key]['average_rating_count'] = !empty($freelancer->total_reviews) ? $freelancer->rating/$freelancer->total_reviews : 0;
                $top_freelancers[$key]['total_reviews'] = !empty($freelancer->total_reviews) ? $freelancer->total_reviews : 0;
                $top_freelancers[$key]['save_freelancers'] = !empty(auth()->user()->profile->saved_freelancer) ? unserialize(auth()->user()->profile->saved_freelancer) : array();
                $top_freelancers[$key]['skills'] = !empty($user->skills) ? $user->skills->pluck('title', 'id') : array();
            }
        }
        if (!empty($top_freelancers)) {
            $json['type'] = 'success';
            $json['freelancers'] = $top_freelancers;
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Get all freelancer
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllFreelancers()
    {
        $json = array();
        $freelancers = User::getAllFreelancers();
        $top_freelancers = array();
        if (!empty($freelancers)) {
            foreach ($freelancers as $key => $freelancer) {
                $user = User::find($freelancer->id);
                $top_freelancers[$key]['id'] = $freelancer->id;
                $top_freelancers[$key]['name'] = Helper::getUserName($freelancer->id);
                $top_freelancers[$key]['slug'] = $user->slug;
                $top_freelancers[$key]['image'] = asset(Helper::getProfileImage($freelancer->id));
                $top_freelancers[$key]['flag'] = !empty($user->location->flag) ? Helper::getLocationFlag($user->location->flag) :'';
                $top_freelancers[$key]['location'] = !empty($user->location->title) ? $user->location->title :'';
                $top_freelancers[$key]['tagline'] = !empty($user->profile->tagline) ? $user->profile->tagline :'';
                $top_freelancers[$key]['hourly_rate'] = !empty($user->profile->hourly_rate) ? $user->profile->hourly_rate :'';
                $currency   = SiteManagement::getMetaValue('commision');
                $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
                $top_freelancers[$key]['symbol'] = !empty($symbol['symbol']) ? $symbol['symbol'] : '$';
                $top_freelancers[$key]['average_rating_count'] = !empty($freelancer->total_reviews) ? $freelancer->rating/$freelancer->total_reviews : 0;
                $top_freelancers[$key]['total_reviews'] = !empty($freelancer->total_reviews) ? $freelancer->total_reviews : 0;
                $top_freelancers[$key]['save_freelancers'] = !empty(auth()->user()->profile->saved_freelancer) ? unserialize(auth()->user()->profile->saved_freelancer) : array();
                $top_freelancers[$key]['skills'] = !empty($user->skills) ? $user->skills->pluck('title', 'id') : array();
            }
        }
        if (!empty($top_freelancers)) {
            $json['type'] = 'success';
            $json['freelancers'] = $top_freelancers;
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Show the form for creating and updating experiance and education settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function experienceEducationSettings()
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
        if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/experience-education/index.blade.php'))) {
            return view('extend.back-end.freelancer.profile-settings.experience-education.index', compact('weekdays', 'months'));
        } else {
            return view('back-end.company.profile-settings.experience-education.index', compact('weekdays', 'months'));
        }
    }

    /**
     * Show the form for creating and updating projects & awards.
     *
     * @return \Illuminate\Http\Response
     */
    public function projectAwardsSettings()
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
        if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/projects-awards/index.blade.php'))) {
            return view('extend.back-end.freelancer.profile-settings.projects-awards.index', compact('weekdays', 'months'));
        } else {
            return view('back-end.company.profile-settings.projects-awards.index', compact('weekdays', 'months'));
        }
    }

    public function companyWorkDetail(){
        $company_work_detail=CompanyDetail::where('user_id',Auth()->user()->id)->first();
        
        return view('back-end.company.profile-settings.work-detail.index',compact('company_work_detail'));
    }

    public function hireAgencyForm($id){
        $company_work_detail=CompanyDetail::where('user_id',$id)->first();
        return view('front-end.pages.hire-agency',compact('id','company_work_detail'));

    }

    
    public function successHireAgencyForm($id){
        $company_work_detail=CompanyDetail::where('user_id',$id)->first();
        return view('front-end.pages.success-hire-agency',compact('id','company_work_detail'));

    }
    /**
     * Show the form for creating and updating experiance and education settings.
     *
     * @param mixed $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function storeExperienceEducationSettings(Request $request)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $response['type'] = 'error';
            $response['message'] = $server->getData()->message;
            return $response;
        }
        $json = array();
        $this->validate(
            $request,
            [
                'experience.*.job_title' => 'required',
                'experience.*.start_date' => 'required',
                'experience.*.end_date' => 'required',
                'experience.*.company_title' => 'required',
                'education.*.degree_title' => 'required',
                'education.*.start_date' => 'required',
                'education.*.end_date' => 'required',
                'education.*.institute_title' => 'required',
            ]
        );
        $user_id = Auth::user()->id;
        $update_experience_education = $this->freelancer->updateExperienceEducation($request, $user_id);
        if ($update_experience_education['type'] == 'success') {
            $json['type'] = 'success';
            $json['message'] = trans('lang.saving_profile');
            $json['complete_message'] = trans('lang.profile_update_success');
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.empty_fields_not_allowed');
        }
        return $json;
    }

    /**
     * Show the form with saved values.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerExperiences()
    {
        $json = array();
        $user_id = Auth::user()->id;
        if (Auth::user()) {
            $profile = $this->freelancer::select('experience')
                ->where('user_id', $user_id)->get()->first();
            if (!empty($profile)) {
                $json['type'] = 'success';
                $json['experiences'] = unserialize($profile->experience);
                return $json;
            } else {
                $json['type'] = 'error';
                return $json;
            }
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Show the form with saved values.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerEducations()
    {
        
        $json = array();
        $user_id = Auth::user()->id;
        if (Auth::user()) {
            $profile = $this->freelancer::select('education')
                ->where('user_id', $user_id)->get()->first();
            if (!empty($profile)) {
                $json['type'] = 'success';
                $json['educations'] = unserialize($profile->education);
                return $json;
            } else {
                $json['type'] = 'error';
                return $json;
            }
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }


    /**
     * Show the form for creating and updating projects and awards settings.
     *
     * @param mixed $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function storeProjectAwardSettings(Request $request)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $response['type'] = 'error';
            $response['message'] = $server->getData()->message;
            return $response;
        }
        $json = array();
        if (!empty($request)) {
            $this->validate(
                $request,
                [
                    'award.*.award_title' => 'required',
                    'award.*.award_date'    => 'required',
                    'award.*.award_hidden_image'    => 'required',
                    'project.*.project_title' => 'required',
                    'project.*.project_url'    => 'required',
                ]
            );
            $user_id = Auth::user()->id;
            $store_awards_projects = $this->freelancer->updateAwardProjectSettings($request, $user_id);
            if ($store_awards_projects['type'] == 'success') {
                $json['type'] = 'success';
                $json['message'] = trans('lang.saving_profile');
                $json['complete_message'] = 'Profile Updated Successfully';
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.empty_fields_not_allowed');
            }
            return $json;
        }
    }


    public function storeCompanyWorkDetail(Request $request)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $response['type'] = 'error';
            $response['message'] = $server->getData()->message;
            return $response;
        }
        $json = array();
        if (!empty($request)) {
            $this->validate(
                $request,
                [
                    'company_name' => 'required',
                    'total_earned'    => 'required',
                    'total_hours'    => 'required',
                    'total_jobs' => 'required',
                    'last_work_date'    => 'required',
                    'office_location'    => 'required',
                    'detail'    => 'required',
                    'portfolio' => 'required',
                    'team_detail'    => 'required',
                    'experience'    => 'required',
                ]
            );

            
            $user_id = Auth::user()->id;
            $store_awards_projects =CompanyDetail::saveCompanyWorkDetail($request, $user_id);
            if ($store_awards_projects['type'] == 'success') {
                $json['type'] = 'success';
                $json['message'] = trans('lang.saving_profile');
                $json['complete_message'] = 'Profile Updated Successfully';
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.empty_fields_not_allowed');
            }
            return $json;
        }
    }

    /**
     * Get freelancer's projects
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerProjects()
    {
        $user_id = Auth::user()->id;
        $json = array();
        if (Auth::user()) {
            $profile = $this->freelancer::select('projects')
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
                $json['type'] = 'success';
                $json['projects'] = $profile_projects;
                return $json;
            } else {
                $json['type'] = 'error';
                return $json;
            }
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Get freelancer's awards
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerAwards()
    {
        $user_id = Auth::user()->id;
        $json = array();
        if (Auth::user()) {
            $profile = $this->freelancer::select('awards')
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
                $json['type'] = 'success';
                $json['awards'] = $profile_awards;
                return $json;
            } else {
                $json['type'] = 'error';
                return $json;
            }
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Show Freelancer Jobs.
     *
     * @param string $status job status
     *
     * @return \Illuminate\Http\Response
     */
    public function showFreelancerJobs($status)
    {
        $ongoing_jobs = array();
        $freelancer_id = Auth::user()->id;
        $currency  = SiteManagement::getMetaValue('commision');
        $symbol    = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
        if (Auth::user()) {
            $ongoing_jobs = Proposal::select('job_id')->latest()->where('freelancer_id', $freelancer_id)->where('status', 'hired')->paginate(7);
            $completed_jobs = Proposal::select('job_id')->latest()->where('freelancer_id', $freelancer_id)->where('status', 'completed')->paginate(7);
            $cancelled_jobs = Proposal::select('job_id')->latest()->where('freelancer_id', $freelancer_id)->where('status', 'cancelled')->paginate(7);
            if (!empty($status) && $status === 'hired') {
                if (file_exists(resource_path('views/extend/back-end/freelancer/jobs/ongoing.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.jobs.ongoing',
                        compact(
                            'ongoing_jobs',
                            'symbol'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.jobs.ongoing',
                        compact(
                            'ongoing_jobs',
                            'symbol'
                        )
                    );
                }
            } elseif (!empty($status) && $status === 'completed') {
                if (file_exists(resource_path('views/extend/back-end/freelancer/jobs/completed.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.jobs.completed',
                        compact(
                            'completed_jobs',
                            'symbol'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.jobs.completed',
                        compact(
                            'completed_jobs',
                            'symbol'
                        )
                    );
                }
            } elseif (!empty($status) && $status === 'cancelled') {
                if (file_exists(resource_path('views/extend/back-end/freelancer/jobs/cancelled.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.jobs.cancelled',
                        compact(
                            'cancelled_jobs',
                            'symbol'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.jobs.cancelled',
                        compact(
                            'cancelled_jobs',
                            'symbol'
                        )
                    );
                }
            }
        }
    }

    /**
     * Show Freelancer Job Details.
     *
     * @param string $slug job slug
     *
     * @return \Illuminate\Http\Response
     */
    public function showOnGoingJobDetail($slug)
    {
        $job = array();
        if (Auth::user()) {
            $job = Job::where('slug', $slug)->first();

            $proposal = Job::find($job->id)->proposals()->select('id', 'status')->where('status', '!=', 'pending')
                ->first();
            if ($proposal->status == 'cancelled') {
                $proposal_job = Job::find($job->id);
                $cancel_reason = $job->reports->first();
            } else {
                $cancel_reason = '';
            }
            $employer_name = Helper::getUserName($job->user_id);
            $duration = !empty($job->duration) ? Helper::getJobDurationList($job->duration) : '';
            $profile = User::find(Auth::user()->id)->profile;
            $employer_profile = User::find($job->user_id)->profile;
            $employer_avatar = !empty($employer_profile) ? $employer_profile->avater : '';
            $user_image = !empty($profile) ? $profile->avater : '';
            $profile_image = !empty($user_image) ? '/uploads/users/' . Auth::user()->id . '/' . $user_image : 'images/user-login.png';
            $employer_image = !empty($employer_avatar) ? '/uploads/users/' . $job->user_id . '/' . $employer_avatar : 'images/user-login.png';
            $currency   = SiteManagement::getMetaValue('commision');
            $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
            if (file_exists(resource_path('views/extend/back-end/freelancer/jobs/show.blade.php'))) {
                return view(
                    'extend.back-end.freelancer.jobs.show',
                    compact(
                        'job',
                        'employer_name',
                        'duration',
                        'profile_image',
                        'employer_image',
                        'proposal',
                        'symbol',
                        'cancel_reason'
                    )
                );
            } else {
                return view(
                    'back-end.freelancer.jobs.show',
                    compact(
                        'job',
                        'employer_name',
                        'duration',
                        'profile_image',
                        'employer_image',
                        'proposal',
                        'symbol',
                        'cancel_reason'
                    )
                );
            }
        }
    }

    /**
     * Show freelancer proposals.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFreelancerProposals()
    {
        $proposals = Proposal::select('job_id', 'status', 'id')->where('freelancer_id', Auth::user()->id)->latest()->paginate(7);
        $currency  = SiteManagement::getMetaValue('commision');
        $symbol    = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
        if (file_exists(resource_path('views/extend/back-end/freelancer/proposals/index.blade.php'))) {
            return view(
                'extend.back-end.freelancer.proposals.index',
                compact(
                    'proposals',
                    'symbol'
                )
            );
        } else {
            return view(
                'back-end.freelancer.proposals.index',
                compact(
                    'proposals',
                    'symbol'
                )
            );
        }
    }

    /**
     * Show freelancer dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function freelancerDashboard()
    {
        
        if (Auth::user()) {
            $ongoing_jobs = array();
            $freelancer_id = Auth::user()->id;
            $ongoing_projects = Proposal::getProposalsByStatus($freelancer_id, 'hired');
            $cancelled_projects = Proposal::getProposalsByStatus($freelancer_id, 'cancelled');
            $package_item = Item::where('subscriber', $freelancer_id)->first();
            $package = !empty($package_item) ? Package::find($package_item->product_id) : array();
            $option = !empty($package) && !empty($package['options']) ? unserialize($package['options']) : '';
            $expiry = !empty($option) ? $package_item->updated_at->addDays($option['duration']) : '';
            $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';
            $message_status = Message::where('status', 0)->where('receiver_id', $freelancer_id)->count();
            $notify_class = $message_status > 0 ? 'wt-insightnoticon' : '';
            $completed_projects = Proposal::getProposalsByStatus($freelancer_id, 'completed');
            $completed_projects_history = Proposal::getProposalsByStatus($freelancer_id, 'completed', 'completed');
            $currency   = SiteManagement::getMetaValue('commision');
            $symbol     = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
            $trail      = !empty($package) && $package['trial'] == 1 ? 'true' : 'false';
            $icons      = SiteManagement::getMetaValue('icons');
            $enable_package = !empty($currency) && !empty($currency[0]['enable_packages']) ? $currency[0]['enable_packages'] : 'true';
            $latest_proposals_icon = !empty($icons['hidden_latest_proposal']) ? $icons['hidden_latest_proposal'] : 'img-20.png';
            $latest_package_expiry_icon = !empty($icons['hidden_package_expiry']) ? $icons['hidden_package_expiry'] : 'img-21.png';
            $latest_new_message_icon = !empty($icons['hidden_new_message']) ? $icons['hidden_new_message'] : 'img-19.png';
            $latest_saved_item_icon = !empty($icons['hidden_saved_item']) ? $icons['hidden_saved_item'] : 'img-22.png';
            $latest_cancel_project_icon = !empty($icons['hidden_cancel_project']) ? $icons['hidden_cancel_project'] : 'img-16.png';
            $latest_ongoing_project_icon = !empty($icons['hidden_ongoing_project']) ? $icons['hidden_ongoing_project'] : 'img-17.png';
            $latest_pending_balance_icon = !empty($icons['hidden_pending_balance']) ? $icons['hidden_pending_balance'] : 'icon-01.png';
            $latest_current_balance_icon = !empty($icons['hidden_current_balance']) ? $icons['hidden_current_balance'] : 'icon-02.png';
            $published_services_icon = !empty($icons['hidden_published_services']) ? $icons['hidden_published_services'] : 'payment-method.png';
            $cancelled_services_icon = !empty($icons['hidden_cancelled_services']) ? $icons['hidden_cancelled_services'] : 'decline.png';
            $completed_services_icon = !empty($icons['hidden_completed_services']) ? $icons['hidden_completed_services'] : 'completed-task.png';
            $ongoing_services_icon = !empty($icons['hidden_ongoing_services']) ? $icons['hidden_ongoing_services'] : 'onservice.png';
            $access_type = Helper::getAccessType();
            if (file_exists(resource_path('views/extend/back-end/freelancer/dashboard.blade.php'))) {
                return view(
                    'extend.back-end.freelancer.dashboard',
                    compact(
                        'freelancer_id',
                        'completed_projects_history',
                        'access_type',
                        'ongoing_projects',
                        'cancelled_projects',
                        'expiry_date',
                        'notify_class',
                        'completed_projects',
                        'symbol',
                        'trail',
                        'latest_proposals_icon',
                        'latest_package_expiry_icon',
                        'latest_new_message_icon',
                        'latest_saved_item_icon',
                        'latest_cancel_project_icon',
                        'latest_ongoing_project_icon',
                        'latest_pending_balance_icon',
                        'latest_current_balance_icon',
                        'published_services_icon',
                        'cancelled_services_icon',
                        'completed_services_icon',
                        'ongoing_services_icon',
                        'enable_package',
                        'package'
                    )
                );
            } else {
                return view(
                    'back-end.freelancer.dashboard',
                    compact(
                        'freelancer_id',
                        'completed_projects_history',
                        'access_type',
                        'ongoing_projects',
                        'cancelled_projects',
                        'expiry_date',
                        'notify_class',
                        'completed_projects',
                        'symbol',
                        'trail',
                        'latest_proposals_icon',
                        'latest_package_expiry_icon',
                        'latest_new_message_icon',
                        'latest_saved_item_icon',
                        'latest_cancel_project_icon',
                        'latest_ongoing_project_icon',
                        'latest_pending_balance_icon',
                        'latest_current_balance_icon',
                        'published_services_icon',
                        'cancelled_services_icon',
                        'completed_services_icon',
                        'ongoing_services_icon',
                        'enable_package',
                        'package'
                    )
                );
            }
        }
    }


    public function companyDashboard()
    {
        
        if (Auth::user()) {
            $ongoing_jobs = array();
            $freelancer_id = Auth::user()->id;
            $ongoing_projects = Proposal::getProposalsByStatus($freelancer_id, 'hired');
            $cancelled_projects = Proposal::getProposalsByStatus($freelancer_id, 'cancelled');
            $package_item = Item::where('subscriber', $freelancer_id)->first();
            $package = !empty($package_item) ? Package::find($package_item->product_id) : array();
            $option = !empty($package) && !empty($package['options']) ? unserialize($package['options']) : '';
            $expiry = !empty($option) ? $package_item->updated_at->addDays($option['duration']) : '';
            $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';
            $message_status = Message::where('status', 0)->where('receiver_id', $freelancer_id)->count();
            $notify_class = $message_status > 0 ? 'wt-insightnoticon' : '';
            $completed_projects = Proposal::getProposalsByStatus($freelancer_id, 'completed');
            $completed_projects_history = Proposal::getProposalsByStatus($freelancer_id, 'completed', 'completed');
            $currency   = SiteManagement::getMetaValue('commision');
            $symbol     = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
            $trail      = !empty($package) && $package['trial'] == 1 ? 'true' : 'false';
            $icons      = SiteManagement::getMetaValue('icons');
            $enable_package = !empty($currency) && !empty($currency[0]['enable_packages']) ? $currency[0]['enable_packages'] : 'true';
            $latest_proposals_icon = !empty($icons['hidden_latest_proposal']) ? $icons['hidden_latest_proposal'] : 'img-20.png';
            $latest_package_expiry_icon = !empty($icons['hidden_package_expiry']) ? $icons['hidden_package_expiry'] : 'img-21.png';
            $latest_new_message_icon = !empty($icons['hidden_new_message']) ? $icons['hidden_new_message'] : 'img-19.png';
            $latest_saved_item_icon = !empty($icons['hidden_saved_item']) ? $icons['hidden_saved_item'] : 'img-22.png';
            $latest_cancel_project_icon = !empty($icons['hidden_cancel_project']) ? $icons['hidden_cancel_project'] : 'img-16.png';
            $latest_ongoing_project_icon = !empty($icons['hidden_ongoing_project']) ? $icons['hidden_ongoing_project'] : 'img-17.png';
            $latest_pending_balance_icon = !empty($icons['hidden_pending_balance']) ? $icons['hidden_pending_balance'] : 'icon-01.png';
            $latest_current_balance_icon = !empty($icons['hidden_current_balance']) ? $icons['hidden_current_balance'] : 'icon-02.png';
            $published_services_icon = !empty($icons['hidden_published_services']) ? $icons['hidden_published_services'] : 'payment-method.png';
            $cancelled_services_icon = !empty($icons['hidden_cancelled_services']) ? $icons['hidden_cancelled_services'] : 'decline.png';
            $completed_services_icon = !empty($icons['hidden_completed_services']) ? $icons['hidden_completed_services'] : 'completed-task.png';
            $ongoing_services_icon = !empty($icons['hidden_ongoing_services']) ? $icons['hidden_ongoing_services'] : 'onservice.png';
            $access_type = Helper::getAccessType();
            if (file_exists(resource_path('views/extend/back-end/freelancer/dashboard.blade.php'))) {
                return view(
                    'extend.back-end.freelancer.dashboard',
                    compact(
                        'freelancer_id',
                        'completed_projects_history',
                        'access_type',
                        'ongoing_projects',
                        'cancelled_projects',
                        'expiry_date',
                        'notify_class',
                        'completed_projects',
                        'symbol',
                        'trail',
                        'latest_proposals_icon',
                        'latest_package_expiry_icon',
                        'latest_new_message_icon',
                        'latest_saved_item_icon',
                        'latest_cancel_project_icon',
                        'latest_ongoing_project_icon',
                        'latest_pending_balance_icon',
                        'latest_current_balance_icon',
                        'published_services_icon',
                        'cancelled_services_icon',
                        'completed_services_icon',
                        'ongoing_services_icon',
                        'enable_package',
                        'package'
                    )
                );
            } else {
                return view(
                    'back-end.freelancer.company_dashboard',
                    compact(
                        'freelancer_id',
                        'completed_projects_history',
                        'access_type',
                        'ongoing_projects',
                        'cancelled_projects',
                        'expiry_date',
                        'notify_class',
                        'completed_projects',
                        'symbol',
                        'trail',
                        'latest_proposals_icon',
                        'latest_package_expiry_icon',
                        'latest_new_message_icon',
                        'latest_saved_item_icon',
                        'latest_cancel_project_icon',
                        'latest_ongoing_project_icon',
                        'latest_pending_balance_icon',
                        'latest_current_balance_icon',
                        'published_services_icon',
                        'cancelled_services_icon',
                        'completed_services_icon',
                        'ongoing_services_icon',
                        'enable_package',
                        'package'
                    )
                );
            }
        }
    }


    public function internDashboard()
    {
        
        if (Auth::user()) {
            $ongoing_jobs = array();
            $freelancer_id = Auth::user()->id;
            $ongoing_projects = Proposal::getProposalsByStatus($freelancer_id, 'hired');
            $cancelled_projects = Proposal::getProposalsByStatus($freelancer_id, 'cancelled');
            $package_item = Item::where('subscriber', $freelancer_id)->first();
            $package = !empty($package_item) ? Package::find($package_item->product_id) : array();
            $option = !empty($package) && !empty($package['options']) ? unserialize($package['options']) : '';
            $expiry = !empty($option) ? $package_item->updated_at->addDays($option['duration']) : '';
            $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';
            $message_status = Message::where('status', 0)->where('receiver_id', $freelancer_id)->count();
            $notify_class = $message_status > 0 ? 'wt-insightnoticon' : '';
            $completed_projects = Proposal::getProposalsByStatus($freelancer_id, 'completed');
            $completed_projects_history = Proposal::getProposalsByStatus($freelancer_id, 'completed', 'completed');
            $currency   = SiteManagement::getMetaValue('commision');
            $symbol     = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
            $trail      = !empty($package) && $package['trial'] == 1 ? 'true' : 'false';
            $icons      = SiteManagement::getMetaValue('icons');
            $enable_package = !empty($currency) && !empty($currency[0]['enable_packages']) ? $currency[0]['enable_packages'] : 'true';
            $latest_proposals_icon = !empty($icons['hidden_latest_proposal']) ? $icons['hidden_latest_proposal'] : 'img-20.png';
            $latest_package_expiry_icon = !empty($icons['hidden_package_expiry']) ? $icons['hidden_package_expiry'] : 'img-21.png';
            $latest_new_message_icon = !empty($icons['hidden_new_message']) ? $icons['hidden_new_message'] : 'img-19.png';
            $latest_saved_item_icon = !empty($icons['hidden_saved_item']) ? $icons['hidden_saved_item'] : 'img-22.png';
            $latest_cancel_project_icon = !empty($icons['hidden_cancel_project']) ? $icons['hidden_cancel_project'] : 'img-16.png';
            $latest_ongoing_project_icon = !empty($icons['hidden_ongoing_project']) ? $icons['hidden_ongoing_project'] : 'img-17.png';
            $latest_pending_balance_icon = !empty($icons['hidden_pending_balance']) ? $icons['hidden_pending_balance'] : 'icon-01.png';
            $latest_current_balance_icon = !empty($icons['hidden_current_balance']) ? $icons['hidden_current_balance'] : 'icon-02.png';
            $published_services_icon = !empty($icons['hidden_published_services']) ? $icons['hidden_published_services'] : 'payment-method.png';
            $cancelled_services_icon = !empty($icons['hidden_cancelled_services']) ? $icons['hidden_cancelled_services'] : 'decline.png';
            $completed_services_icon = !empty($icons['hidden_completed_services']) ? $icons['hidden_completed_services'] : 'completed-task.png';
            $ongoing_services_icon = !empty($icons['hidden_ongoing_services']) ? $icons['hidden_ongoing_services'] : 'onservice.png';
            $access_type = Helper::getAccessType();
            
            return view(
                'back-end.freelancer.intern_dashboard',
                compact(
                    'freelancer_id',
                    'completed_projects_history',
                    'access_type',
                    'ongoing_projects',
                    'cancelled_projects',
                    'expiry_date',
                    'notify_class',
                    'completed_projects',
                    'symbol',
                    'trail',
                    'latest_proposals_icon',
                    'latest_package_expiry_icon',
                    'latest_new_message_icon',
                    'latest_saved_item_icon',
                    'latest_cancel_project_icon',
                    'latest_ongoing_project_icon',
                    'latest_pending_balance_icon',
                    'latest_current_balance_icon',
                    'published_services_icon',
                    'cancelled_services_icon',
                    'completed_services_icon',
                    'ongoing_services_icon',
                    'enable_package',
                    'package'
                )
            ); 
        }
    }

    /**
     * Show services.
     *
     * @param string $status job status
     *
     * @return \Illuminate\Http\Response
     */
    public function showServices($status)
    {
        $freelancer_id = Auth::user()->id;
        if (Auth::user()) {
            $freelancer = User::find($freelancer_id);
            $currency   = SiteManagement::getMetaValue('commision');
            $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
            $status_list = array_pluck(Helper::getFreelancerServiceStatus(), 'title', 'value');
            if (!empty($status) && $status === 'posted') {
                $services = $freelancer->services;
                if (file_exists(resource_path('views/extend/back-end/freelancer/services/index.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.services.index',
                        compact(
                            'services',
                            'symbol',
                            'status_list'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.services.index',
                        compact(
                            'services',
                            'symbol',
                            'status_list'
                        )
                    );
                }
            } else if (!empty($status) && $status === 'hired') {
                $services = Helper::getFreelancerServices('hired', Auth::user()->id);
                if (file_exists(resource_path('views/extend/back-end/freelancer/services/ongoing.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.services.ongoing',
                        compact(
                            'services',
                            'symbol'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.services.ongoing',
                        compact(
                            'services',
                            'symbol'
                        )
                    );
                }
            } elseif (!empty($status) && $status === 'completed') {
                $services = Helper::getFreelancerServices('completed', Auth::user()->id);
                if (file_exists(resource_path('views/extend/back-end/freelancer/services/completed.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.services.completed',
                        compact(
                            'services',
                            'symbol'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.services.completed',
                        compact(
                            'services',
                            'symbol'
                        )
                    );
                }
            } elseif (!empty($status) && $status === 'cancelled') {
                $services = Helper::getFreelancerServices('cancelled', Auth::user()->id);
                if (file_exists(resource_path('views/extend/back-end/freelancer/services/cancelled.blade.php'))) {
                    return view(
                        'extend.back-end.freelancer.services.cancelled',
                        compact(
                            'services',
                            'symbol'
                        )
                    );
                } else {
                    return view(
                        'back-end.freelancer.services.cancelled',
                        compact(
                            'services',
                            'symbol'
                        )
                    );
                }
            }
        }
    }

    /**
     * Service Details.
     *
     * @param int    $id     id
     * @param string $status status
     *
     * @return \Illuminate\Http\Response
     */
    public function showServiceDetail($id, $status)
    {
        if (Auth::user()) {
            $pivot_service = Helper::getPivotService($id);
            $pivot_id = $pivot_service->id;
            $service = Service::find($pivot_service->service_id);
            $seller = Helper::getServiceSeller($service->id);
            $purchaser = $service->purchaser->first();
            $freelancer = !empty($seller) ? User::find($seller->user_id) : ''; 
            $service_status = Helper::getProjectStatus();
            $review_options = DB::table('review_options')->get()->all();
            $avg_rating = !empty($freelancer) ? Review::where('receiver_id', $freelancer->id)->sum('avg_rating') : '';
            $freelancer_rating  = !empty($freelancer) && !empty($freelancer->profile->ratings) ? Helper::getUnserializeData($freelancer->profile->ratings) : 0;
            $rating = !empty($freelancer_rating) ? $freelancer_rating[0] : 0;
            $stars  =  !empty($freelancer_rating) ? $freelancer_rating[0] / 5 * 100 : 0;
            $reviews = !empty($freelancer) ? Review::where('receiver_id', $freelancer->id)->where('job_id', $id)->where('project_type', 'service')->get() : '';
            $feedbacks = !empty($freelancer) ? Review::select('feedback')->where('receiver_id', $freelancer->id)->count() : '';
            $cancel_proposal_text = trans('lang.cancel_proposal_text');
            $cancel_proposal_button = trans('lang.send_request');
            $validation_error_text = trans('lang.field_required');
            $cancel_popup_title = trans('lang.reason');
            $attachment = Helper::getUnserializeData($service->attachments);
            $currency   = SiteManagement::getMetaValue('commision');
            $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
            if (file_exists(resource_path('views/extend/back-end/employer/services/show.blade.php'))) {
                return view(
                    'extend.back-end.employer.services.show',
                    compact(
                        'pivot_service',
                        'id',
                        'service',
                        'freelancer',
                        'service_status',
                        'attachment',
                        'review_options',
                        'stars',
                        'rating',
                        'feedbacks',
                        'cancel_proposal_text',
                        'cancel_proposal_button',
                        'validation_error_text',
                        'cancel_popup_title',
                        'pivot_id',
                        'purchaser',
                        'symbol'
                    )
                );
            } else {
                return view(
                    'back-end.employer.services.show',
                    compact(
                        'pivot_service',
                        'id',
                        'service',
                        'freelancer',
                        'service_status',
                        'attachment',
                        'review_options',
                        'stars',
                        'rating',
                        'feedbacks',
                        'cancel_proposal_text',
                        'cancel_proposal_button',
                        'validation_error_text',
                        'cancel_popup_title',
                        'pivot_id',
                        'purchaser',
                        'symbol'
                    )
                );
            }
        } else {
            abort(404);
        }
    }

    /**
     * Get freelancer payouts.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPayouts()
    {
        $payouts =  Payout::where('user_id', Auth::user()->id)->paginate(10);
        if (file_exists(resource_path('views/extend/back-end/freelancer/payouts.blade.php'))) {
            return view(
                'extend.back-end.freelancer.payouts.payouts',
                compact('payouts')
            );
        } else {
            return view(
                'back-end.freelancer.payouts.payouts',
                compact('payouts')
            );
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payoutSettings()
    {
        if (Auth::user()) {
            $payrols = Helper::getPayoutsList();
            $user = User::find(Auth::user()->id);
            $payout_settings = $user->profile->count() > 0 ? Helper::getUnserializeData($user->profile->payout_settings) : '';
            if (file_exists(resource_path('views/extend/back-end/freelancer/payouts/payout_settings.blade.php'))) {
                return view(
                    'extend.back-end.freelancer.payouts.payout_settings', compact('payrols', 'payout_settings')
                );
            } else {
                return view(
                    'back-end.freelancer.payouts.payout_settings', compact('payrols', 'payout_settings')
                );
            }
        } else {
            abort(404);
        }
    }
}
