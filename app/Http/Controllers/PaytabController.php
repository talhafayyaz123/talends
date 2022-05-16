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

}



    /**

     * Store a newly created resource in storage.

     *

     * @param \Illuminate\Http\Request $request req->attr

     *

     * @return \Illuminate\Http\Response

     */

    public function postPaymentWithPaytab(Request $request)

    {
           $user_id=$request->segment(4);
                
            $user = User::find($user_id);

           $id=$request->segment(3);
           
           $proposal = Proposal::find($id);
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

            $invoice->transaction_id = filter_var('777', FILTER_SANITIZE_STRING);

            $invoice->invoice_id = filter_var('card_1KhqtFIHTnYkIfFpQZOAAh3C', FILTER_SANITIZE_STRING);

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

            $item->item_name = filter_var('Silviculture', FILTER_SANITIZE_STRING);

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

