<?php

/**
 * Class PublicController
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotechfseatc
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\User;
use App\Language;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMailable;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use DB;
use App\Helper;
use App\Profile;
use App\Category;
use App\Location;
use App\Skill;
use Session;
use Storage;
use App\Report;
use App\Job;
use App\Proposal;
use App\EmailTemplate;
use App\Mail\GeneralEmailMailable;
use App\Mail\AdminEmailMailable;
use App\SiteManagement;
use App\Review;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Payout;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\Debug\ExceptionHandler as SymfonyExceptionHandler;
use App\Service;
use App\DeliveryTime;
use App\ResponseTime;
use App\Article;
use App\AboutTalendsPage;
use App\Rules\checkBusinessEmail;

/**
 * Class PublicController
 *
 */
class PublicController extends Controller
{

    /**
     * User Login Function
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $request)
    {
        $json = array();

        if (Session::has('user_id')) {
            $id = Session::get('user_id');
            $user = User::find($id);
            Auth::login($user);
            $json['type'] = 'success';
            $json['role'] = $user->getRoleNames()->first();
            session()->forget('user_id');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    public function gmailLoginUser($email){
        $json = array();
        $user = User::where('email',$email)->first();
        
        if (isset($user)) {

            session()->put(['user_id' => $user->id]);
            session()->put(['email' => $user->email]);
            $id = $user->id;
            $user = User::find($id);
            Auth::login($user);
            $json['type'] = 'success';
            $json['role'] = $user->getRoleNames()->first();
            session()->forget('user_id');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        } 
    }
    public function universityAutocomplete(){
        $name=$_POST['name'];
         $result= DB::table('universities')->select('name')->where("name","LIKE","%{$name}%")->get();
         $array = json_decode(json_encode($result), true);
         foreach($array as $row){
            $names[]=$row['name'];
        }
         echo json_encode($names); 
        }
    /**
     * Step1 Registeration Validation
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function registerStep1Validation(Request $request)
    {

       $role=$request['role'];
        $validation=array();
        if($role=='freelancer'){
          
            $validation= [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'gender' => 'required',
                'availability' => 'required',
                'budget' => 'required',
                'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'role' => 'not_in:admin',
                'locations' => 'required',
            ];
        }elseif($role=='employer'){

            $validation= [

                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'role' => 'not_in:admin',
                'availability' => 'required',
                'locations' => 'required',
                'employees' => 'required',
                'department' => 'required',
            ];
            


        }else{
            
            $validation= [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'role' => 'not_in:admin',
                'availability' => 'required',
                'locations' => 'required',
                'budget' => 'required',
                'university' => 'required',
                'grade' => 'required',
                'specialization' => 'required',
            ];
        }
        $this->validate(
            $request,
            $validation
        );
    }

    public function CompanyRegisterValidation(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => ['required','unique:users', 'email', new checkBusinessEmail],
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        return response()->json(['success'=>'Record is successfully added']);

    }

    public function HireAgencyLoginCheck(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if($user){
            $user_role_type = User::getUserRoleType($user->id);
            $user_role = $user_role_type->role_type;
          
           if ($user && Hash::check($request->password, $user->password) && $user_role=='employer') 
           {
            session()->put(['user_id' => $user->id]);
            session()->put(['email' => $user->email]);
            Auth::login($user);
            
            return response()->json(['success'=>'Login Successfully.']);


            }else{
                return response()->json(['errors'=>'Login Credentials not match or User May not Exist With Role (Employer).']);
            }
        }else{
            return response()->json(['errors'=>'Login Credentials not match.']);
        }

    }

    public function HireAgencyRegisterValidations(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if($user){
           
            return response()->json(['errors'=>'User With Email Already Exist.']);

        }else{
            return response()->json(['success'=>'not Exist.']);
        }

    }
    /**
     * Step2 Registeration Validation
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function registerStep2Validation(Request $request)
    {
        $this->validate(
            $request,
            [
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
                'termsconditions' => 'required',
                'role' => 'not_in:admin',
            ]
        );
    }

    /**
     * Single Form validation
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function singleFormValidation(Request $request)
    {
        $this->validate(
            $request,
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
                'termsconditions' => 'required',
                'role' => 'not_in:admin',
            ]
        );
    }

    /**
     * Set slug before saving in DB
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyUserCode($code)
    {

//     session()->put(['user_id' => '108']);

        $json = array();
        if (Session::has('user_id')) {
            $id = Session::get('user_id');
            $email = Session::get('email');
            $password = Session::get('password');
            $user = User::find($id);
            if (!empty($code)) {
                if ($code === $user->verification_code) {
                    $user->user_verified = 1;
                    $user->verification_code = null;
                    $user->save();
                    $json['type'] = 'success';
                    //send mail
                    if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                        $email_params = array();
                        $template = DB::table('email_types')->select('id')->where('email_type', 'new_user')->get()->first();
                        if (!empty($template->id)) {
                            $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                            $email_params['name'] = Helper::getUserName($id);
                            $email_params['email'] = $email;
                            $email_params['password'] = $password;
                            Mail::to($email)
                                ->send(
                                    new GeneralEmailMailable(
                                        'new_user',
                                        $template_data,
                                        $email_params
                                    )
                                );
                        }
                        $admin_template = DB::table('email_types')->select('id')->where('email_type', 'admin_email_registration')->get()->first();
                        if (!empty($template->id)) {
                            $template_data = EmailTemplate::getEmailTemplateByID($admin_template->id);
                            $email_params['name'] = Helper::getUserName($id);
                            $email_params['email'] = $email;
                            $email_params['link'] = url('profile/' . $user->slug);
                             Mail::to(config('mail.username'))
                                ->send(
                                    new AdminEmailMailable(
                                        'admin_email_registration',
                                        $template_data,
                                        $email_params
                                    )
                                );
                        }
                    }

                    Auth::login($user);
                    $json['redirect_url'] =env('APP_URL').'/'. $user->getRoleNames()->first().'/dashboard';
                    session()->forget('user_id');
                    session()->forget('password');
                    session()->forget('email');
                    return $json;
                } else {
                    $json['type'] = 'error';
                    $json['message'] = trans('lang.invalid_verify_code');
                    return $json;
                }
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.verify_code');
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.session_expire');
            return $json;
        }
    }


    public function verifyUserRegistrationCode(Request $request)
    {
        $json = array();
        if (Session::has('user_id')) {
            $id = Session::get('user_id');
            $email = Session::get('email');
            $password = Session::get('password');
            $user = User::find($id);
            if (!empty($request['code'])) {
                if ($request['code'] === $user->verification_code) {
                    $user->user_verified = 1;
                    $user->verification_code = null;
                    $user->save();
                    $json['type'] = 'success';
                    //send mail
                    if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                        $email_params = array();
                        $template = DB::table('email_types')->select('id')->where('email_type', 'new_user')->get()->first();
                        if (!empty($template->id)) {
                            $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                            $email_params['name'] = Helper::getUserName($id);
                            $email_params['email'] = $email;
                            $email_params['password'] = $password;
                            Mail::to($email)
                                ->send(
                                    new GeneralEmailMailable(
                                        'new_user',
                                        $template_data,
                                        $email_params
                                    )
                                );  
                        }
                        $admin_template = DB::table('email_types')->select('id')->where('email_type', 'admin_email_registration')->get()->first();
                        if (!empty($template->id)) {
                            $template_data = EmailTemplate::getEmailTemplateByID($admin_template->id);
                            $email_params['name'] = Helper::getUserName($id);
                            $email_params['email'] = $email;
                            $email_params['link'] = url('profile/' . $user->slug);
                              Mail::to(config('mail.username'))
                                ->send(
                                    new AdminEmailMailable(
                                        'admin_email_registration',
                                        $template_data,
                                        $email_params
                                    )
                                );  
                        }
                    }
                   
                     
                    if(isset($request['otp_verify']) &&  !empty($request['otp_verify']) ){
                        session()->put(['user_id' => $user->id]);
                        session()->put(['email' => $user->email]);
                        Auth::login($user);
                        
                    }else{
                        session()->forget('password');
                        session()->forget('email');
                    }

                    return $json;
                } else {
                    $json['type'] = 'error';
                    $json['message'] = trans('lang.invalid_verify_code');
                    return $json;
                }
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.verify_code');
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.session_expire');
            return $json;
        }
    }

    /**
     * Download file.
     *
     * @param \Illuminate\Http\Request $request request attributes
     * @param integer $id       id
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    function getFile($id, Request $request)
    {
        $filename = $request->get('attachment');
        $type = $request->get('type');
        if (!empty($type) && !empty($filename) && !empty($id)) {
            if (Storage::disk('local')->exists('uploads/' . $type . '/' . $id . '/' . $filename)) {
                return Storage::download('uploads/' . $type . '/' . $id . '/' . $filename);
            } else {
                Session::flash('error', trans('lang.file_not_found'));
                return Redirect::back();
            }
        } else {
            abort(404);
        }
    }

    /**
     * Show user profile.
     *
     * @param string $slug slug
     *
     * @return \Illuminate\Http\Response
     */
    public function showUserProfile($slug)
    {
        
        $user = User::select('id')->where('slug', $slug)->first();
        if (!empty($user)) {
            $user = User::find($user->id);
            if ($user->is_disabled == 'true') {
                abort(404);
            }
            $skills = $user->skills()->get();

            $role=$user->getRoleNames()->first();

            $user_by_role =  User::role($role)->select('id')->get()->pluck('id')->toArray();

            $similar_users = !empty($user_by_role) ? User::whereIn('id', $user_by_role)->where('is_disabled', 'false') : array();
                           
            $new_sills=$skills->pluck('id')->all();

           
                if (!empty($new_sills)  &&  isset($new_sills) ) {
                    
                    $similar_skills = Skill::whereIn('id', $new_sills)->get();
                    
               foreach ($similar_skills as $key => $skill) {
                    if (!empty($skill->freelancers[$key]->id)) {
                            $user_id[] = $skill->freelancers[$key]->id;
                        }
                    }
                
                   $similar_users->whereIn('id', $user_id);
                
                }

                $similar_users->where('id','!=',$user->id);

                $similar_users = $similar_users->orderByRaw('-badge_id DESC')->orderBy('expiry_date', 'DESC');

                $similar_users = $similar_users->paginate(8)->setPath('');
            
            
            

            $job = Job::where('user_id', $user->id)->get();
            $profile = Profile::all()->where('user_id', $user->id)->first();
            $reasons = Helper::getReportReasons();
            $avatar = Helper::getProfileImage($profile->user_id, 'medium-small-');
            $banner = !empty($profile->banner) ? '/uploads/users/' . $profile->user_id . '/' . $profile->banner : Helper::getUserProfileBanner($user->id);
            $auth_user = Auth::user() ? true : false;
            $user_name = Helper::getUserName($profile->user_id);
            $current_date = Carbon::now()->format('M d, Y');
            $tagline = !empty($profile) ? $profile->tagline : '';
            $desc = !empty($profile) ? $profile->description : '';
             
            if ($user->getRoleNames()->first() === 'freelancer'  || $user->getRoleNames()->first() === 'intern') {
                $services = array();
                if (Schema::hasTable('services') && Schema::hasTable('service_user')) {
                    $services = $user->services;
                }
                $reviews = Review::where('receiver_id', $user->id)->get();
                $awards = !empty($profile->awards) ? unserialize($profile->awards) : array();
                $projects = !empty($profile->projects) ? unserialize($profile->projects) : array();
                $experiences = !empty($profile->experience) ? unserialize($profile->experience) : array();
                $education = !empty($profile->education) ? unserialize($profile->education) : array();
                $freelancer_rating  = !empty($user->profile->ratings) ? Helper::getUnserializeData($user->profile->ratings) : 0;
                $rating = !empty($freelancer_rating) ? $freelancer_rating[0] : 0;
                $joining_date = !empty($profile->created_at) ? Carbon::parse($profile->created_at)->format('M d, Y') : '';
                $jobs = Job::select('title', 'id')->get()->pluck('title', 'id');
                $save_freelancer = !empty(auth()->user()->profile->saved_freelancer) ? unserialize(auth()->user()->profile->saved_freelancer) : array();
                $badge = Helper::getUserBadge($user->id);
                $feature_class = !empty($badge) ? 'wt-featured' : '';
                $badge_color = !empty($badge) ? $badge->color : '';
                $badge_img  = !empty($badge) ? $badge->image : '';
                $amount = Payout::where('user_id', $user->id)->select('amount')->pluck('amount')->first();
                $employer_projects = Auth::user() ? Helper::getEmployerJobs(Auth::user()->id) : array();
                $payment_settings = SiteManagement::getMetaValue('commision');
                $currency_symbol  = !empty($payment_settings) && !empty($payment_settings[0]['currency']) ? Helper::currencyList($payment_settings[0]['currency']) : array();
                $symbol = !empty($currency_symbol['symbol']) ? $currency_symbol['symbol'] : '$';
                $settings = !empty(SiteManagement::getMetaValue('settings')) ? SiteManagement::getMetaValue('settings') : array();
                $display_chat = !empty($settings[0]['chat_display']) ? $settings[0]['chat_display'] : false;
                $enable_package = !empty($payment_settings) && !empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
                $videos = !empty($profile->videos) ? Helper::getUnserializeData($profile->videos) : '';
                $feedbacks = Review::select('feedback')->where('receiver_id', $user->id)->count(); 
                $average_rating_count = !empty($feedbacks) ? $reviews->sum('avg_rating')/$feedbacks : 0;
                $show_earnings = !empty($settings) && !empty($settings[0]['show_earnings']) ? $settings[0]['show_earnings'] : true;
                $user_role=$user->getRoleNames()->first();
              
                $freelancer_side_bar=AboutTalendsPage::where('page_type','freelancer_side_bar')->first();
                
              
                if (file_exists(resource_path('views/extend/front-end/users/freelancer-show.blade.php'))) {
                    return View(
                        'extend.front-end.users.freelancer-show',
                        compact(
                            'show_earnings',
                            'average_rating_count',
                            'videos',
                            'services',
                            'profile',
                            'amount',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'reviews',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'rating',
                            'education',
                            'experiences',
                            'projects',
                            'awards',
                            'joining_date',
                            'save_freelancer',
                            'auth_user',
                            'badge',
                            'feature_class',
                            'badge_color',
                            'badge_img',
                            'employer_projects',
                            'currency_symbol',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'display_chat',
                            'enable_package'
                        )
                    );
                } else {
                    return View(
                        'front-end.users.freelancer-show',
                        compact(
                            'freelancer_side_bar',
                            'similar_users',
                            'user_role',
                            'show_earnings',
                            'average_rating_count',
                            'videos',
                            'services',
                            'profile',
                            'amount',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'reviews',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'rating',
                            'education',
                            'experiences',
                            'projects',
                            'awards',
                            'joining_date',
                            'save_freelancer',
                            'auth_user',
                            'badge',
                            'feature_class',
                            'badge_color',
                            'badge_img',
                            'employer_projects',
                            'currency_symbol',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'display_chat',
                            'enable_package'
                        )
                    );
                }
            } elseif ($user->getRoleNames()->first() === 'employer') {
                $jobs = Job::where('user_id', $profile->user_id)->latest()->paginate(7);
                $followers = DB::table('followers')->where('following', $profile->user_id)->get();
                $save_employer = !empty(auth()->user()->profile->saved_employers) ? unserialize(auth()->user()->profile->saved_employers) : array();
                $save_jobs = !empty(auth()->user()->profile->saved_jobs) ? unserialize(auth()->user()->profile->saved_jobs) : array();
                $currency = SiteManagement::getMetaValue('commision');
                $symbol   = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
                $breadcrumbs_settings = SiteManagement::getMetaValue('show_breadcrumb');
                $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
                if (file_exists(resource_path('views/extend/front-end/users/employer-show.blade.php'))) {
                    return View(
                        'extend.front-end.users.employer-show',
                        compact(
                            'profile',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'followers',
                            'save_employer',
                            'save_jobs',
                            'auth_user',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'show_breadcrumbs'
                        )
                    );
                } else {
                
                    return View(
                        'front-end.users.employer-show',
                        compact(
                            'profile',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'followers',
                            'save_employer',
                            'save_jobs',
                            'auth_user',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'show_breadcrumbs'
                        )
                    );
                }
            }
        } else {
            abort(404);
        }
    }

    /**
     * Get filtered list.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFilterlist()
    {
        $json = array();
        $filters = Helper::getSearchFilterList();
        if (!empty($filters)) {
            $json['type'] = 'success';
            $json['result'] = $filters;
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Get filter Options.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFilterOptions()
    {
        $json = array();
        $locations  = array();
        $filters = Helper::getSearchFilterList();
        // $locations  = Location::all();
        // dd($locations);
        if (!empty($filters)) {
            $json['type'] = 'success';
            $json['result'] = $filters;
            // $json['locations'] = $locations;
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Get home services tabs
     *
     * @param string $type type
     *
     * @access public
     *
     * @return string
     */
    public static function getLocationList()
    {
        $json  = array();
        $locations = Helper::displaySearchLocationV2();
        if (!empty($roles)) {
            $json['locations'] = $locations;
            return $json;
        } 
    }

    /**
     * Get searchable data.
     *
     * @param mixed $request request->attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearchableData(Request $request)
    {
        $json = array();
        if (!empty($request['type'])) {
            $searchables = Helper::getSearchableList($request['type']);
            if (!empty($searchables)) {
                $json['type'] = 'success';
                $json['searchables'] = $searchables;
                return $json;
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.something_wrong');
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

      /**
     * Get searchable data.
     *
     * @param mixed $request request->attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearchableDataV2(Request $request)
    {
        $json = array();
        if (!empty($request['type'])) {
            $searchables = Helper::getSearchableListV2($request['type'], $request['location']);
            if (!empty($searchables)) {
                $json['type'] = 'success';
                $json['searchables'] = $searchables;
                return $json;
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.no_record_found');
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Get search result.
     *
     * @param string $search_type search type
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearchResult(Request $request,$search_type = "")
    {
        
        $categories = array();
        $locations  = array();
        $languages  = array();
        $categories = Category::all();
        $locations  = Location::all();
        $languages  = Language::all();
        $skills     = Skill::all();
        $currency   = SiteManagement::getMetaValue('commision');
        $symbol     = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
        $freelancer_skills = Helper::getFreelancerLevelList();
        $project_length = Helper::getJobDurationList();
        $address = !empty($_GET['addr']) ? $_GET['addr'] : '';
        $keyword = !empty($_GET['s']) ? $_GET['s'] : '';
        $type = !empty($_GET['type']) ? $_GET['type'] : $search_type;
        
        $search_categories = !empty($_GET['category']) ? $_GET['category'] : array();
        $search_sub_categories = !empty($_GET['sub_categories']) ? $_GET['sub_categories'] : array();
        $search_locations = !empty($_GET['locations']) ? $_GET['locations'] : array();
        $search_skills = !empty($_GET['skills']) ? $_GET['skills'] : array();
        $search_speciality = !empty($_GET['speciality']) ? $_GET['speciality'] : '';
        $search_university = !empty($_GET['university']) ? $_GET['university'] : '';
        $search_grade = !empty($_GET['grade']) ? $_GET['grade'] : '';

        $search_project_lengths = !empty($_GET['project_lengths']) ? $_GET['project_lengths'] : array();
        $search_languages = !empty($_GET['languages']) ? $_GET['languages'] : array();
        $search_employees = !empty($_GET['employees']) ? $_GET['employees'] : array();
        $search_hourly_rates = !empty($_GET['hourly_rate']) ? $_GET['hourly_rate'] : array();
        $search_freelaner_types = !empty($_GET['freelaner_type']) ? $_GET['freelaner_type'] : array();
        $search_english_levels = !empty($_GET['english_level']) ? $_GET['english_level'] : array();
        $search_delivery_time = !empty($_GET['delivery_time']) ? $_GET['delivery_time'] : array();
        $search_response_time = !empty($_GET['response_time']) ? $_GET['response_time'] : array();
        $current_date = Carbon::now()->toDateTimeString();
        $currency = SiteManagement::getMetaValue('commision');
        $symbol   = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
        $inner_page  = SiteManagement::getMetaValue('inner_page_data');
        $payment_settings = SiteManagement::getMetaValue('commision');
        $enable_package = !empty($payment_settings) && !empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
        $breadcrumbs_settings = SiteManagement::getMetaValue('show_breadcrumb');
        $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
        $interne_university_collaboration=AboutTalendsPage::where('page_type','interne_university_collaboration')->first();
        $freelancer_side_bar=AboutTalendsPage::where('page_type','freelancer_side_bar')->first();

        if (!empty($_GET['type'])) {
            if ($type == 'employer' || $type == 'freelancer' || $type == 'intern') {
                
                $users_total_records = User::count();
                $search =  User::getSearchResult(
                    $type,
                    $keyword,
                    $search_locations,
                    $search_employees,
                    $search_skills,
                    $search_hourly_rates,
                    $search_freelaner_types,
                    $search_english_levels,
                    $search_languages,
                    $search_speciality,
                    $search_university,
                    $search_grade ,
                    $search_categories,
                    $search_sub_categories
                );
                $users = count($search['users']) > 0 ? $search['users'] : '';
               //dd($users);
                $save_freelancer = !empty(auth()->user()->profile->saved_freelancer) ?
                    unserialize(auth()->user()->profile->saved_freelancer) : array();
                $save_employer = !empty(auth()->user()->profile->saved_employers) ?
                    unserialize(auth()->user()->profile->saved_employers) : array();
                if ($type === 'employer') {
                    $emp_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['emp_list_meta_title']) ? $inner_page[0]['emp_list_meta_title'] : trans('lang.emp_listing');
                    $emp_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['emp_list_meta_desc']) ? $inner_page[0]['emp_list_meta_desc'] : trans('lang.emp_meta_desc');
                    $show_emp_banner = !empty($inner_page) && !empty($inner_page[0]['show_emp_banner']) ? $inner_page[0]['show_emp_banner'] : 'true';
                    $e_inner_banner = !empty($inner_page) && !empty($inner_page[0]['e_inner_banner']) ? $inner_page[0]['e_inner_banner'] : null;
                   
        
                    if (file_exists(resource_path('views/extend/front-end/employers/index.blade.php'))) {
                        return view(
                            'extend.front-end.employers.index',
                            compact(
                                'users',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_length',
                                'keyword',
                                'type',
                                'users_total_records',
                                'save_employer',
                                'current_date',
                                'emp_list_meta_title',
                                'emp_list_meta_desc',
                                'show_emp_banner',
                                'e_inner_banner',
                                'enable_package',
                                'show_breadcrumbs'
                            )
                        );
                    } else {
                        return view(
                            'front-end.employers.index',
                            compact(
                                'users',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_length',
                                'keyword',
                                'type',
                                'users_total_records',
                                'save_employer',
                                'current_date',
                                'emp_list_meta_title',
                                'emp_list_meta_desc',
                                'show_emp_banner',
                                'e_inner_banner',
                                'enable_package',
                                'show_breadcrumbs'
                            )
                        );
                    }
                } elseif ($type === 'freelancer') {
                   
                   
                    $f_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['f_list_meta_title']) ? $inner_page[0]['f_list_meta_title'] : trans('lang.freelancer_listing');
                    $f_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['f_list_meta_desc']) ? $inner_page[0]['f_list_meta_desc'] : trans('lang.freelancer_meta_desc');
                    $show_f_banner = !empty($inner_page) && !empty($inner_page[0]['show_f_banner']) ? $inner_page[0]['show_f_banner'] : 'true';
                    $f_inner_banner = !empty($inner_page) && !empty($inner_page[0]['f_inner_banner']) ? $inner_page[0]['f_inner_banner'] : null;
                  
                    if($request->ajax()){
                        $view = view('front-end.freelancers.data',  compact(
                            'type',
                            'users',
                            'categories',
                            'locations',
                            'languages',
                            'skills',
                            'project_length',
                            'keyword',
                            'users_total_records',
                            'save_freelancer',
                            'symbol',
                            'current_date',
                            'f_list_meta_title',
                            'f_list_meta_desc',
                            'show_f_banner',
                            'f_inner_banner',
                            'enable_package',
                            'show_breadcrumbs'
                        ))->render();
                        return response()->json(['html'=>$view]);
                    }

                    
                    return view(
                        'front-end.freelancers.index',
                        compact(
                            'freelancer_side_bar',
                            'type',
                            'users',
                            'categories',
                            'locations',
                            'languages',
                            'skills',
                            'project_length',
                            'keyword',
                            'users_total_records',
                            'save_freelancer',
                            'symbol',
                            'current_date',
                            'f_list_meta_title',
                            'f_list_meta_desc',
                            'show_f_banner',
                            'f_inner_banner',
                            'enable_package',
                            'show_breadcrumbs'
                        )
                    );
                    
                    

                }elseif ($type === 'intern') {
                    $f_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['f_list_meta_title']) ? $inner_page[0]['f_list_meta_title'] : trans('lang.freelancer_listing');
                    $f_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['f_list_meta_desc']) ? $inner_page[0]['f_list_meta_desc'] : trans('lang.freelancer_meta_desc');
                    $show_f_banner = !empty($inner_page) && !empty($inner_page[0]['show_f_banner']) ? $inner_page[0]['show_f_banner'] : 'true';
                    $f_inner_banner = !empty($inner_page) && !empty($inner_page[0]['f_inner_banner']) ? $inner_page[0]['f_inner_banner'] : null;
                   
                    return view(
                        'front-end.intern.index',
                        compact(
                            'type',
                            'users',
                            'categories',
                            'locations',
                            'languages',
                            'skills',
                            'project_length',
                            'keyword',
                            'users_total_records',
                            'save_freelancer',
                            'symbol',
                            'current_date',
                            'f_list_meta_title',
                            'f_list_meta_desc',
                            'show_f_banner',
                            'f_inner_banner',
                            'enable_package',
                            'show_breadcrumbs',
                            'search_speciality',
                            'search_university',
                            'search_grade',
                            'interne_university_collaboration'
                        )
                    );
                } else {
                    abort(404);
                }
            } elseif ($type == 'service') {
                $service_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['service_list_meta_title']) ? $inner_page[0]['service_list_meta_title'] : trans('lang.service_listing');
                $service_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['service_list_meta_desc']) ? $inner_page[0]['service_list_meta_desc'] : trans('lang.service_meta_desc');
                $show_service_banner = !empty($inner_page) && !empty($inner_page[0]['show_service_banner']) ? $inner_page[0]['show_service_banner'] : 'true';
                $service_inner_banner = !empty($inner_page) && !empty($inner_page[0]['service_inner_banner']) ? $inner_page[0]['service_inner_banner'] : null;
                // $services= Service::all();
                $delivery_time = DeliveryTime::all();
                $response_time = ResponseTime::all();
                $services_total_records = Service::count();
                $min_price = !empty($_GET['minprice']) ? $_GET['minprice'] : 0;
                $max_price = !empty($_GET['maxprice']) ? $_GET['maxprice'] : 0;
                $results = Service::getSearchResult(
                    $keyword,
                    $search_categories,
                    $search_locations,
                    $search_languages,
                    $search_delivery_time,
                    $search_response_time,
                    $min_price,
                    $max_price
                );
                $services = $results['services'];
                if (file_exists(resource_path('views/extend/front-end/services/index.blade.php'))) {
                    return view(
                        'extend.front-end.services.index',
                        compact(
                            'services_total_records',
                            'type',
                            'services',
                            'symbol',
                            'keyword',
                            'categories',
                            'locations',
                            'languages',
                            'delivery_time',
                            'response_time',
                            'service_list_meta_title',
                            'service_list_meta_desc',
                            'show_service_banner',
                            'service_inner_banner',
                            'show_breadcrumbs'
                        )
                    );
                } else {
                    return view(
                        'front-end.services.index',
                        compact(
                            'services_total_records',
                            'type',
                            'services',
                            'symbol',
                            'keyword',
                            'categories',
                            'locations',
                            'languages',
                            'delivery_time',
                            'response_time',
                            'service_list_meta_title',
                            'service_list_meta_desc',
                            'show_service_banner',
                            'service_inner_banner',
                            'show_breadcrumbs'
                        )
                    );
                }
            } elseif ($type == 'gov_projects') {

                $min_price = !empty($_GET['minprice']) ? $_GET['minprice'] : 0;
                $max_price = !empty($_GET['maxprice']) ? $_GET['maxprice'] : 0;
                $Jobs_total_records = Job::count();
                $job_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['job_list_meta_title']) ? $inner_page[0]['job_list_meta_title'] : trans('lang.job_listing');
                $job_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['job_list_meta_desc']) ? $inner_page[0]['job_list_meta_desc'] : trans('lang.job_meta_desc');
                $show_job_banner = !empty($inner_page) && !empty($inner_page[0]['show_job_banner']) ? $inner_page[0]['show_job_banner'] : 'true';
                $job_inner_banner = !empty($inner_page) && !empty($inner_page[0]['job_inner_banner']) ? $inner_page[0]['job_inner_banner'] : null;
                $project_settings = !empty(SiteManagement::getMetaValue('project_settings')) ? SiteManagement::getMetaValue('project_settings') : array();
                $completed_project_setting = !empty($project_settings) && !empty($project_settings['enable_completed_projects']) ? $project_settings['enable_completed_projects'] : 'true';
                $results = Job::getSearchResult(
                    $address,
                    $keyword,
                    $search_categories,
                    $search_locations,
                    $search_skills,
                    $search_project_lengths,
                    $search_languages,
                    $completed_project_setting,
                    $min_price,
                    $max_price
                );
                $jobs = $results['jobs'];
                
                if (!empty($jobs)) {
                      return view(
                            'front-end.gov_projects.index',
                            compact(
                                'address',
                                'jobs',
                                'categories',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_length',
                                'Jobs_total_records',
                                'keyword',
                                'skills',
                                'type',
                                'current_date',
                                'symbol',
                                'job_list_meta_title',
                                'job_list_meta_desc',
                                'show_job_banner',
                                'job_inner_banner',
                                'show_breadcrumbs'
                            )
                        );
                }
            }else {
                
                $min_price = !empty($_GET['minprice']) ? $_GET['minprice'] : 0;
                $max_price = !empty($_GET['maxprice']) ? $_GET['maxprice'] : 0;
                $Jobs_total_records = Job::count();
                $job_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['job_list_meta_title']) ? $inner_page[0]['job_list_meta_title'] : trans('lang.job_listing');
                $job_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['job_list_meta_desc']) ? $inner_page[0]['job_list_meta_desc'] : trans('lang.job_meta_desc');
                $show_job_banner = !empty($inner_page) && !empty($inner_page[0]['show_job_banner']) ? $inner_page[0]['show_job_banner'] : 'true';
                $job_inner_banner = !empty($inner_page) && !empty($inner_page[0]['job_inner_banner']) ? $inner_page[0]['job_inner_banner'] : null;
                $project_settings = !empty(SiteManagement::getMetaValue('project_settings')) ? SiteManagement::getMetaValue('project_settings') : array();
                $completed_project_setting = !empty($project_settings) && !empty($project_settings['enable_completed_projects']) ? $project_settings['enable_completed_projects'] : 'true';
                $results = Job::getSearchResult(
                    $address,
                    $keyword,
                    $search_categories,
                    $search_locations,
                    $search_skills,
                    $search_project_lengths,
                    $search_languages,
                    $completed_project_setting,
                    $min_price,
                    $max_price
                );
                $jobs = $results['jobs'];
                
                if (!empty($jobs)) {

                    if($request->ajax()){
                        $view = view('front-end.jobs.ajax_jobs',  
                         compact(
                            'address',
                            'jobs',
                            'categories',
                            'locations',
                            'languages',
                            'freelancer_skills',
                            'project_length',
                            'Jobs_total_records',
                            'keyword',
                            'skills',
                            'type',
                            'current_date',
                            'symbol',
                            'job_list_meta_title',
                            'job_list_meta_desc',
                            'show_job_banner',
                            'job_inner_banner',
                            'show_breadcrumbs'
                        ) )->render();
                        return response()->json(['html'=>$view]);
                    }


                    if (file_exists(resource_path('views/extend/front-end/jobs/index.blade.php'))) {
                        return view(
                            'extend.front-end.jobs.index',
                            compact(
                                'address',
                                'jobs',
                                'categories',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_length',
                                'Jobs_total_records',
                                'keyword',
                                'skills',
                                'type',
                                'current_date',
                                'symbol',
                                'job_list_meta_title',
                                'job_list_meta_desc',
                                'show_job_banner',
                                'job_inner_banner',
                                'show_breadcrumbs'
                            )
                        );
                    } else {
                        return view(
                            'front-end.jobs.index',
                            compact(
                                'address',
                                'jobs',
                                'categories',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_length',
                                'Jobs_total_records',
                                'keyword',
                                'skills',
                                'type',
                                'current_date',
                                'symbol',
                                'job_list_meta_title',
                                'job_list_meta_desc',
                                'show_job_banner',
                                'job_inner_banner',
                                'show_breadcrumbs'
                            )
                        );
                    }
                }
            }
        } else {
            abort(404);
        }
    }

    /**
     * Get Pass Reset Form
     *
     * @param mixed $verification_code verification_code
     *
     * @access public
     *
     * @return View
     */
    public function resetPasswordView($verification_code)
    {
        if (!empty($verification_code)) {
            session()->put(['verification_code' => $verification_code]);
            if (file_exists(resource_path('views/extend/front-end/reset-password.blade.php'))) {
                return View('extend.front-end.reset-password');
            } else {
                return View('front-end.reset-password');
            }
        } else {
            abort(404);
        }
    }

    /**
     * Reset user password.
     *
     * @param mixed $request req->attr
     *
     * @access public
     *
     * @return View
     */
    public function resetUserPassword(Request $request)
    {
        if (Session::has('verification_code')) {
            $verification_code = Session::get('verification_code');
            if (!empty($request)) {
                $this->validate(
                    $request,
                    [
                        'new_password' => 'required',
                        'confirm_password' => 'required',
                    ]
                );
                $user_id = User::select('verification_code', 'id')
                    ->where('verification_code', $verification_code)
                    ->pluck('id')->first();
                $user = User::find($user_id);
                if ($request->new_password === $request->confirm_password) {
                    if ($verification_code === $user->verification_code) {
                        $user->password = Hash::make($request->confirm_password);
                        $user->verification_code = null;
                        $user->save();
                        Auth::logout();
                        session()->forget('verification_code');
                        return Redirect::to('/');
                    } else {
                        Session::flash('error', trans('lang.invalid_verify_code'));
                        return Redirect::back();
                    }
                } else {
                    Session::flash('error', trans('lang.pass_mismatched'));
                    return Redirect::back();
                }
            } else {
                Session::flash('error', trans('lang.something_wrong'));
                return Redirect::back();
            }
        } else {
            Session::flash('error', trans('lang.invalid_verify_code'));
            return Redirect::back();
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return View
     */
    public function checkProposalAuth()
    {
        $json = array();
        if (Auth::user() && (Auth::user()->getRoleNames()->first() === 'freelancer') || (Auth::user()->getRoleNames()->first() === 'intern')  ) {
            $json['auth'] = true;
            return $json;
        } else {
            $json['auth'] = false;
            $json['message'] = trans('lang.not_authorize');
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return View
     */
    public function checkServiceAuth()
    {
        $json = array();
        if (Auth::user() && Auth::user()->getRoleNames()->first() === 'employer') {
            $json['auth'] = true;
            return $json;
        } else {
            $json['auth'] = false;
            $json['message'] = trans('lang.not_authorize');
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return unserialize array
     */
    public function getFreelancerExperience(Request $request)
    {
        $json = array();
        $id = $request['id'];
        $freelancer = User::find($id);
        if (!empty($freelancer)) {
            $json['type'] = 'success';
            $json['experience'] = unserialize($freelancer->profile->experience);
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerEducation(Request $request)
    {
        $json = array();
        $id = $request['id'];
        $freelancer = User::find($id);
        if (!empty($freelancer)) {
            $json['type'] = 'success';
            $json['education'] = unserialize($freelancer->profile->education);
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancerService(Request $request)
    {
        $json = array();
        $id = $request['id'];
        $freelancer = User::find($id);
        if (!empty($freelancer)) {
            $json['type'] = 'success';
            $json['user'] = $freelancer;
            $json['services'] = Helper::getUnserializeData($freelancer->services);
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * get video
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function getVideo($video)
    {
        $json = array();
        if (!empty($video)) {
            $width 	= 367;
            $height = 206;
            $url = parse_url($video);
            if (isset($url['host']) && ($url['host'] == 'vimeo.com' || $url['host'] == 'player.vimeo.com')) {
                $content_exp = explode("/", $url);
                $content_vimo = array_pop($content_exp);
                $json['video_content'] = '<iframe width="' . intval($width) . '" height="' . intval($height) . '" src="https://player.vimeo.com/video/' . $content_vimo . '" 
        ></iframe>';
            } else {
                $json['video'] = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.str_replace("v=", '', $url['query']).'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            }
            $json['type'] = 'success';
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Get article data
     *
     * @return \Illuminate\Http\Response
     */
    public function getArticles()
    {
        $json = array();
        $articles = Article::get()->toArray();
        $aticle_list = array();
        if (!empty($articles)) {
            foreach ($articles as $key => $article) {
                $article_obj = Article::find($article['id']);
                $aticle_list[$key]['id'] = $article['id'];
                $aticle_list[$key]['title'] = $article['title'];
                $aticle_list[$key]['slug'] = $article['slug'];
                $aticle_list[$key]['banner'] = asset(Helper::getImage('uploads/articles', $article['banner'], 'small-', 'small-default-article.png'));
                $aticle_list[$key]['published_date'] = $article['created_at'];
                $aticle_list[$key]['description'] = $article['description'];
                $aticle_list[$key]['name'] = Helper::getUserName($article['user_id']);
                $aticle_list[$key]['image'] = asset(Helper::getProfileImage($article['user_id']));
                if (!empty($article_obj->categories) && $article_obj->categories->count() > 0) {
                    foreach ($article_obj->categories as $cat_key => $category) {
                        $aticle_list[$key]['cat'][$cat_key]['title'] = $category->title;
                        $aticle_list[$key]['cat'][$cat_key]['slug'] = $category->slug;
                    }
                }
            }
            if (!empty($aticle_list)) {
                $json['type'] = 'success';
                $json['articles'] = $aticle_list;
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
     * Get filter Options.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPriceLimit()
    {
        $json = array();
        
        $general_settings = !empty(SiteManagement::getMetaValue('settings')) ? SiteManagement::getMetaValue('settings') : array();
		$price_range = !empty($general_settings) && !empty($general_settings[0]['price_range']) ? $general_settings[0]['price_range'] : 1000;
        return $price_range;
    }

    public function privacyPolicy()
    {
        $json = array();
        $privacy_policy = !empty(SiteManagement::getMetaValue('privacy_policy')) ? SiteManagement::getMetaValue('privacy_policy') : array();
        return View('front-end.pages.privacy_policy',compact('privacy_policy'));

    }

    public function userAgreement()
    {
        $json = array();
        $user_agreement = !empty(SiteManagement::getMetaValue('user_agreement')) ? SiteManagement::getMetaValue('user_agreement') : array();
        return View('front-end.pages.user_agreement',compact('user_agreement'));

    }
    
}
