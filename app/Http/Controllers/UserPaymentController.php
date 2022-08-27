<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPayments;
use App\AboutTalendsPage;
use Auth;
use App\UserTransactions;
use App\Helper;
use App\Package;
use App\User;
use DB;
use App\EmailTemplate;
use App\Mail\GeneralEmailMailable;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Redirect;


class UserPaymentController extends Controller
{
    public function getPayments(Request $request){
        
        $user_transections=UserPayments::with('userTransactions','user')->latest()->paginate(6);
       
        return view(

            'back-end.admin.payments.index',
        
            compact('user_transections')
        
        );
    }

    public function getPaymentDetail($id){
        
        $user_transections=UserTransactions::with('user')->where('user_id',$id)->latest()->paginate(6);
       
        return view(

            'back-end.admin.payments.detail',
        
            compact('user_transections')
        
        );
    }

    public function sendFailRegistrationEmail($package_id,$user_id){

        $package=Package::find($package_id);
        
      
        $template = DB::table('email_types')->select('id')
        ->where('email_type', 'registration_payment')->get()->first();
        if (!empty($template->id)) {
            $template_data = EmailTemplate::getEmailTemplateByID($template->id);
            $email_params['user_name'] = Helper::getCompanyName($user_id);

            $email_params['payment_url'] = url('admin/again/registration/payment/' . $package_id.'/'.$user_id);
    
            $email_params['name'] = $package->title;
    
            $email_params['price'] ='AED '. $package->cost;
            $user=User::find($user_id);
            
             Mail::to($user->email)
                ->send(
                    new GeneralEmailMailable(
                        'registration_payment',
                        $template_data,
                        $email_params
                    )
                );
        }

        Session::flash('message', trans('lang.account_settings_saved'));
        return Redirect::back()->with('payment_email_send', '1');
         
    }

    public function againRegistrationPayment($package_id,$id){
        $page_header = '';
        $page = array();
        $home = false;

        $meta_title = !empty($inner_page) && !empty($inner_page[0]['title']) ? $inner_page[0]['title'] : trans('lang.why-talends-title');
        $meta_desc = !empty($inner_page) && !empty($inner_page[0]['desc']) ? $inner_page[0]['desc'] : trans('lang.why-talends-desc');
        $page['title'] = $meta_title;
        $about_talends=AboutTalendsPage::where('page_type','about_talends')->first();
        $package=Package::find($package_id);
        if(Auth::check()){
            Auth::logout();
            return redirect('admin/again/registration/payment/'.$package_id.'/'.$id);
        }else{
            return view('auth.company_registration_fail',compact('page','home','meta_desc','about_talends','id','package_id','package'));

        }


    }

    
}
