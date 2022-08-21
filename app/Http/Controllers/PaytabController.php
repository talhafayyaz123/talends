<?php



/**

 * Class StripeController

 *

 * @category Worketic

 *

 * @package Worketic

 * @author  Amentotech <theamentotech@gmail.com>

 * @license http://www.amentotech.com Amentotech

 * @version <PHP: 1.0.0>

 * @link    http://www.amentotech.com

 */

namespace App\Http\Controllers;



use App\Http\Requests;

use Illuminate\Http\Request;

use Validator;

use URL;

use Session;

use Redirect;

use Input;

use App\User;

use Cartalyst\Stripe\Laravel\Facades\Stripe;

use Stripe\Error\Card;

use App\Proposal;

use App\Job;

use Auth;

use App\Invoice;

use DB;

use App\Package;

use Illuminate\Support\Facades\Mail;

use App\EmailTemplate;

use App\Mail\FreelancerEmailMailable;

use App\Mail\EmployerEmailMailable;

use App\Helper;

use App\Item;

use Carbon\Carbon;

use App\Message;

use App\Service;

use App\SiteManagement;
use Cookie;
use Response;
use App\UserPayments;


/**

 * Class PaytabController

 *

 */

class PaytabController extends Controller

{

    /**

     * Show the application paywith stripe.

     *

     * @return \Illuminate\Http\Response

     */

    public function paytabCheckout ($id)

    {
        $proposal = Proposal::find($id);
        $amount=$proposal->amount;
       /*
        $product_id = Session::has('product_id') ? session()->get('product_id') : '';

        $product_title = Session::has('product_title') ? session()->get('product_title') : '';

        $product_price =last(request()->segments());

        $type = Session::has('type') ? session()->get('type') : '';
        $user_id = Auth::user() ? Auth::user()->id : '';
        
        print_r($product_id.'   '.$product_title.'  '.$product_price.' '.$type.' '.$user_id);
        exit;  */
        $response=Helper::checkoutPaytab($amount,$id);   
        $redirect_url='';
        if(isset(json_decode( $response,true)['redirect_url'])){
        $body=json_decode( $response,true);
             
        $redirect_url= $body['redirect_url'];
        $tran_ref= $body['tran_ref'];

        session()->put(['tran_ref' => $tran_ref]);
         
        $json['type'] = 'success';
        $json['message'] = '';
        $json['url'] =$redirect_url;
        $json['tran_ref'] =$tran_ref;
        }else{
        $json['type'] = 'error';
        $json['message'] = $response;
        } 
        return $json;

    }


    public function paytabPackageGateway($id)
    {
        $proposal = Package::find($id);
        $amount=$proposal->cost;
        $response=Helper::packagePaymentPaytab($amount,$id);   
        $redirect_url='';
        if(isset(json_decode( $response,true)['redirect_url'])){
        $body=json_decode( $response,true);
        $redirect_url= $body['redirect_url'];
        $tran_ref= $body['tran_ref'];         
        $json['type'] = 'success';
        $json['message'] = '';
        $json['url'] =$redirect_url;
        $json['tran_ref'] =$tran_ref;
        }else{
        $json['type'] = 'error';
        $json['message'] = $response;
        } 
        return $json;

    }

    
    public function paytabServicePayment($service_id,$service_seller)
    {
   
        $service = Service::find($service_id);
        $amount=$service->price;
        $response=Helper::ServicePaymentPaytab($amount,$service_id,$service_seller);   
        $redirect_url='';
        if(isset(json_decode( $response,true)['redirect_url'])){
        $body=json_decode( $response,true);
        $redirect_url= $body['redirect_url'];
        $tran_ref= $body['tran_ref'];         
        $json['type'] = 'success';
        $json['message'] = '';
        $json['url'] =$redirect_url;
        $json['tran_ref'] =$tran_ref;
        }else{
        $json['type'] = 'error';
        $json['message'] = $response;
        } 
        return $json;

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param \Illuminate\Http\Request $request req->attr

     *

     * @return \Illuminate\Http\Response

     */

     public function postPackagePaymentWithPaytab(Request $request){
  
        $content=$request->input();
        if(isset($content['package_id'])){
            $package_id=$content['package_id'];
            $pakage = Package::find($package_id);
            $amount=$pakage->cost;
            $product_id = $package_id;
            $product_title =$pakage->title;
            $product_price =$amount;
    
        }else{
            $service_id=$content['service_id'];
            $service = Service::find($service_id);
            $amount=$service->price;

            $product_id = $service_id;
            $product_title =$service->title;
            $product_price =$amount;

            $service_seller=$content['service_seller'];
            $project_type='service';    
        }
        $type=$content['type'];
        
        $user_id=$content['user_id'];

        $respStatus=$content['respStatus'];


        $login_user = \App\User::find($user_id);
    
        $settings = SiteManagement::getMetaValue('commision');
        $currency = !empty($settings[0]['currency']) ? $settings[0]['currency'] : 'AED';
        $current_year = Carbon::now()->format('Y');

          
         $user=User::find($user_id);
        
        $payment_detail =$respStatus;
        
        if ($payment_detail == 'A') {

            //$fee = !empty($payment_detail['application_fee_amount']) ? $payment_detail['application_fee_amount'] : 0;
            $fee=0;
            $invoice = new Invoice();

            $invoice->title = 'Invoice';

            $invoice->price = $product_price;

            $invoice->payer_name = filter_var($user->full_name, FILTER_SANITIZE_STRING);

            $invoice->payer_email = filter_var($user->email, FILTER_SANITIZE_EMAIL);

            $invoice->seller_email = 'test@email.com';

            $invoice->currency_code = filter_var('AED', FILTER_SANITIZE_STRING);

            $invoice->payer_status = '';

            $invoice->transaction_id =  $content['tranRef'];

            $invoice->invoice_id =  $content['cartId'];

            $invoice->customer_id = filter_var($user->id, FILTER_SANITIZE_STRING);

            $invoice->shipping_amount = 0;

            $invoice->handling_amount = 0;

            $invoice->insurance_amount = 0;

            $invoice->sales_tax = 0;

            $invoice->payment_mode = filter_var('paytab', FILTER_SANITIZE_STRING);

            $invoice->paypal_fee = $fee;

            $invoice->paid = 1;

            $product_type = $type;

            $invoice->type = $product_type;

            $invoice->save();
     
            $invoice_id = DB::getPdo()->lastInsertId();
               
            if ($type == 'package') {
            
                $item = DB::table('items')->select('id')->where('subscriber', $user_id)->first();

                if (!empty($item)) {

                    $item = Item::find($item->id);

                } else {

                    $item = new Item();

                }

            } else {

                $item = new Item();

            }
            
            $item->invoice_id = filter_var($invoice_id, FILTER_SANITIZE_NUMBER_INT);

            $item->product_id = filter_var($product_id, FILTER_SANITIZE_NUMBER_INT);

            $item->subscriber = $user_id;

            $item->item_name = filter_var($product_title, FILTER_SANITIZE_STRING);

            $item->item_price = $product_price;

            $item->item_qty = filter_var(1, FILTER_SANITIZE_NUMBER_INT);

            $item->save();

            $last_order_id = session()->get('custom_order_id');

            DB::table('orders')

                ->where('id', $last_order_id)

                ->update(['status' => 'completed']);

            if ($user_id) {
               
                if ($product_type == 'package') {
                   
                
                    if (!empty($product_id)) {
                        
                        $package_item = \App\Item::where('subscriber', $user_id)->first();

                        $id = $product_id;

                        $package = \App\Package::find($id);

                        $option = !empty($package->options) ? unserialize($package->options) : '';

                        $expiry = !empty($option) ? $package_item->updated_at->addDays($option['duration']) : '';

                        $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';

                        $user = \App\User::find($user_id);
                      
                        if (!empty($package->badge_id) && $package->badge_id != 0) {

                            $user->badge_id = $package->badge_id;

                        }

                        $user->expiry_date = $expiry_date;

                        $user->save();


                        
                        
                    
                        // send mail
                    
                        if (!empty(config('mail.username')) && !empty(config('mail.password'))) {

                            $item = DB::table('items')->where('product_id', $id)->orderBy('id','desc')->get()->toArray();

                            $package =  Package::where('id', $item[0]->product_id)->first();

                            $user = User::find($item[0]->subscriber);

                            $role = $user->getRoleNames()[0];

                            $package_options = unserialize($package->options);

                            if (!empty($invoice)) {

                                if ($package_options['duration'] === 'Quarter') {

                                    $expiry_date = $invoice->created_at->addDays(4);

                                } elseif ($package_options['duration'] === 'Month') {

                                    $expiry_date = $invoice->created_at->addMonths(1);

                                } elseif ($package_options['duration'] === 'Year') {

                                    $expiry_date = $invoice->created_at->addYears(1);

                                }

                            }


                            if($login_user->getRoleNames()[0]=='company'){
                                $payment = DB::table('user_payments')->select('id')->where('user_id', $user_id)->where('is_success',1)->first();
    
                                if (!empty($payment)) {
                                    $payment_user = \App\User::find($user_id);
                                    $payment = UserPayments::find($payment->id);
                                    $payment->package_id = $package->id;
                                    $payment->expiry_date =$payment_user->expiry_date;
                                    $payment->cart_amount = $package->cost;
                                    $payment->save();
                
                                }
                            }

                             if ($role === 'employer') {

                                if (!empty($user->email)) {

                                    $email_params = array();

                                    $template = DB::table('email_types')->select('id')->where('email_type', 'employer_email_package_subscribed')->get()->first();

                                    if (!empty($template->id)) {
                                      

                                        $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                                        $email_params['employer'] = Helper::getUserName($user_id);

                                        $email_params['employer_profile'] = url('profile/' . $login_user->slug);

                                        $email_params['name'] = $package->title;

                                        $email_params['price'] = $package->cost;

                                        $email_params['expiry_date'] = !empty($expiry_date) ? Carbon::parse($expiry_date)->format('M d, Y') : '';

                                        Mail::to($login_user->email)

                                            ->send(

                                                new EmployerEmailMailable(

                                                    'employer_email_package_subscribed',

                                                    $template_data,

                                                    $email_params

                                                )

                                            );

                                    }

                                }

                            } elseif ($role === 'freelancer' || $role === 'intern' || $role === 'company' ) {
                                
                                
                                if (!empty($login_user->email)) {

                                    $email_params = array();

                                    $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_package_subscribed')->get()->first();
                                
                                    if (!empty($template->id)) {

                                        $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                                        $email_params['freelancer'] = Helper::getUserName($user_id);

                                        $email_params['freelancer_profile'] = url('profile/' . $login_user->slug);

                                        $email_params['name'] = $package->title;

                                        $email_params['price'] = $package->cost;

                                        $email_params['expiry_date'] = !empty($expiry_date) ? Carbon::parse($expiry_date)->format('M d, Y') : '';
                                    
                                        Mail::to($login_user->email)

                                            ->send(

                                                new FreelancerEmailMailable(

                                                    'freelancer_email_package_subscribed',

                                                    $template_data,

                                                    $email_params

                                                )

                                            );

                                    }

                                }

                            }

                        }

                    }

             
                } else if ($product_type == 'project') {

                 if ( isset($project_type) ) {

                        if ($project_type == 'service') {

                            $id = $product_id;

                            $freelancer = $service_seller;

                            $service = Service::find($id);
                               
                            $service->users()->attach($user_id, ['type' => 'employer', 'status' => 'hired', 'seller_id' => $freelancer, 'paid' => 'pending']);

                            $service->save();

                            // send message to freelancer

                            $message = new Message();

                            $user = User::find(intval($user_id));

                            $message->user()->associate($user);

                            $message->receiver_id = intval($freelancer);

                            $message->body = Helper::getUserName($user_id) . ' ' . trans('lang.service_purchase') . ' ' . $service->title;

                            $message->status = 0;

                            $message->save();
                        
                            // send mail

                            if (!empty(config('mail.username')) && !empty(config('mail.password'))) {

                                $email_params = array();

                                $template_data = Helper::getFreelancerNewOrderEmailContent();

                                $email_params['title'] = $service->title;

                                $email_params['service_link'] = url('service/' . $service->slug);

                                $email_params['amount'] = $service->price;

                                $email_params['freelancer_name'] = Helper::getUserName($freelancer);

                                $email_params['employer_profile'] = url('profile/' . $user->slug);

                                $email_params['employer_name'] = Helper::getUserName($user->id);

                                $freelancer_data = User::find(intval($freelancer));

                                Mail::to($freelancer_data->email)

                                    ->send(

                                        new FreelancerEmailMailable(

                                            'freelancer_email_new_order',

                                            $template_data,

                                            $email_params

                                        )

                                    );

                                

                            }

                        }

                    } else {

                        $id = $product_id;

                        $proposal = Proposal::find($id);

                        $proposal->hired = 1;

                        $proposal->status = 'hired';

                        $proposal->paid = 'pending';

                        $proposal->save();

                        $job = Job::find($proposal->job->id);

                        $job->status = 'hired';

                        $job->save();

                        // send message to freelancer

                        $message = new Message();

                        $user = User::find(intval($user_id));

                        $message->user()->associate($user);

                        $message->receiver_id = intval($proposal->freelancer_id);

                        $message->body = trans('lang.hire_for') . ' ' . $job->title . ' ' . trans('lang.project');

                        $message->status = 0;

                        $message->save();

                        // send mail

                        if (!empty(config('mail.username')) && !empty(config('mail.password'))) {

                            $freelancer = User::find($proposal->freelancer_id);

                            $employer = User::find($job->user_id);

                            if (!empty($freelancer->email)) {

                                $email_params = array();

                                $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_hire_freelancer')->get()->first();

                                if (!empty($template->id)) {

                                    $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                                    $email_params['project_title'] = $job->title;

                                    $email_params['hired_project_link'] = url('job/' . $job->slug);

                                    $email_params['name'] = Helper::getUserName($freelancer->id);

                                    $email_params['link'] = url('profile/' . $freelancer->slug);

                                    $email_params['employer_profile'] = url('profile/' . $employer->slug);

                                    $email_params['emp_name'] = Helper::getUserName($employer->id);

                                    Mail::to($freelancer->email)

                                        ->send(

                                            new FreelancerEmailMailable(

                                                'freelancer_email_hire_freelancer',

                                                $template_data,

                                                $email_params

                                            )

                                        );

                                }

                            }

                        }

                    }
 
                }

            }

        }else{

            $role = $login_user->getRoleNames()->first();
            $error=$content['respMessage'];
            Session::flash('error', 'Credentials Not correct');
            
            return redirect($role.'/dashboard?paytab_error=1')->with(['error' => 'Credentials Not correct']);
        }

    
        session()->forget('product_id');

        session()->forget('product_title');

        session()->forget('product_price');

        session()->forget('custom_order_id');
        
        
        $user_role=\App\User::find($user_id)->getRoleNames()[0];
    
          if ($user_role == "employer") {
        
            if ($type == 'project') {

                if ($project_type == 'service') {

                    $url = url('employer/services/hired');

                } else {

                    $url = url('employer/jobs/hired');

                }

                $json['type'] = 'success';

                $json['message'] = trans('lang.freelancer_successfully_hired');

                session()->forget('type');

                return redirect()->away( $url);

            } else {

                $json['type'] = 'success';

                $json['message'] = trans('lang.thanks_subscription');
                session()->forget('type');

                
            $url = url('dashboard/packages/'.$user_role);
            session()->forget('type');

            return redirect()->away( $url);

            }

        } else if ($user_role == "freelancer" || $user_role == "intern" || $user_role == "company") {

            $json['type'] = 'success';

            $json['message'] = trans('lang.thanks_subscription');
            
            $url = url('dashboard/packages/'.$user_role);
            session()->forget('type');

            return redirect()->away( $url);

        }
 

    }


    public function postPaymentWithPaytab(Request $request)

    {

           $content=$request->input();

           $id=$content['package_id'];
     
           $user_id=$content['user_id'];
          // $user_id=$request->segment(4);
        
            $user = User::find($user_id);

//           $id=$request->segment(3);
           
           $proposal = Proposal::find($id);
           $title=$proposal->job->title;
           $amount=$proposal->amount;

        
            $fee =  0;

            $invoice = new Invoice();

            $invoice->title = 'Invoice';

            $invoice->price = $amount;

            $invoice->payer_name = filter_var($user->first_name.' '.$user->last_name, FILTER_SANITIZE_STRING);

            $invoice->payer_email = filter_var($user->email, FILTER_SANITIZE_EMAIL);

            $invoice->seller_email = 'test@email.com';

            $invoice->currency_code = filter_var('AED', FILTER_SANITIZE_STRING);

            $invoice->payer_status = '';

            $invoice->transaction_id = filter_var('xxxx_xxxx_xxxx', FILTER_SANITIZE_STRING);

            $invoice->invoice_id = filter_var('xxx_xxx', FILTER_SANITIZE_STRING);

            $invoice->customer_id = filter_var($user->id, FILTER_SANITIZE_STRING);

            $invoice->shipping_amount = 0;

            $invoice->handling_amount = 0;

            $invoice->insurance_amount = 0;

            $invoice->sales_tax = 0;

            $invoice->payment_mode = filter_var('paytab', FILTER_SANITIZE_STRING);

            $invoice->paypal_fee = $fee;

            $invoice->paid = 1;

            $product_type ='project';

            $invoice->type = $product_type;

            $invoice->save();

            $invoice_id = DB::getPdo()->lastInsertId();
            
            $type='project';
            
            $item = new Item();

            $item->invoice_id = filter_var($invoice_id, FILTER_SANITIZE_NUMBER_INT);

            $item->product_id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

            $item->subscriber = $user->id;

            $item->item_name = filter_var($title, FILTER_SANITIZE_STRING);

            $item->item_price = $amount;

            $item->item_qty = filter_var(1, FILTER_SANITIZE_NUMBER_INT);

            $item->save();

            $last_order_id = session()->get('custom_order_id');

            DB::table('orders')

                ->where('id', $last_order_id)

                ->update(['status' => 'completed']);


                        $proposal = Proposal::find($id);

                        $proposal->hired = 1;

                        $proposal->status = 'hired';

                        $proposal->paid = 'pending';

                        $proposal->save();

                        $job = Job::find($proposal->job->id);

                        $job->status = 'hired';

                        $job->save();

                        // send message to freelancer

                        $message = new Message();

                        $user = User::find(intval($user->id));

                        $message->user()->associate($user);

                        $message->receiver_id = intval($proposal->freelancer_id);

                        $message->body = trans('lang.hire_for') . ' ' . $job->title . ' ' . trans('lang.project');

                        $message->status = 0;

                        $message->save();

                        // send mail

                        if (!empty(config('mail.username')) && !empty(config('mail.password'))) {

                            $freelancer = User::find($proposal->freelancer_id);

                            $employer = User::find($job->user_id);

                            if (!empty($freelancer->email)) {

                                $email_params = array();

                                $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_hire_freelancer')->get()->first();

                                if (!empty($template->id)) {

                                    $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                                    $email_params['project_title'] = $job->title;

                                    $email_params['hired_project_link'] = url('job/' . $job->slug);

                                    $email_params['name'] = Helper::getUserName($freelancer->id);

                                    $email_params['link'] = url('profile/' . $freelancer->slug);

                                    $email_params['employer_profile'] = url('profile/' . $employer->slug);

                                    $email_params['emp_name'] = Helper::getUserName($employer->id);

                                    Mail::to($freelancer->email)

                                        ->send(

                                            new FreelancerEmailMailable(

                                                'freelancer_email_hire_freelancer',

                                                $template_data,

                                                $email_params

                                            )

                                        );

                                }

                            }

                        }

            

                   
            $url = url('employer/jobs/hired');
            echo '<script>window.location.href = "'.$url.'";</script>';

    }

}

