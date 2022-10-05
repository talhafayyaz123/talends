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
use App\Mail\GeneralEmailMailable;
use App\Mail\AdminEmailMailable;



/**

 * Class StripeController

 *

 */

class StripeController extends Controller

{

    /**

     * Show the application paywith stripe.

     *

     * @return \Illuminate\Http\Response

     */

    public function payWithStripe ()

    {

        if (file_exists(resource_path('views/extend/back-end/paymentstripe.blade.php'))) {

            return view('extend.back-end.paymentstripe');

        } else {

            return view('back-end.paymentstripe');

        }

    }


    public function userRegisterStripe(Request $request){
            
        $settings = SiteManagement::getMetaValue('commision');

        $currency = !empty($settings[0]['currency']) ? $settings[0]['currency'] : 'USD';

      
       parse_str($request->data, $output);
       $input = array_except($output, array('_token'));
       $package=Package::find($input['package_id']);
 
       $validator = \Validator::make(
        $input, [
            'company_name' => 'required',
            'email' => ['required','unique:users'],
            'phone_number' => 'required',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'employees' => 'required',
            'role' => 'not_in:admin',
            'package_id' => 'required',
            'locations' => 'required',
            'agency_language' => 'required',
            'agency_website' => 'required',
            'budget' => 'required',
            'categories.*' => 'required',
    ]);
    
    if ($validator->fails())
    {
        return response()->json(['type'=>'error','message'=>$validator->errors()->all()]);
    }
        
       if(isset($package) && !empty($package) ){
        $options = unserialize($package->options);
        $banner = $options['banner_option'] = 1 ? 'ti-check' : 'ti-na';
        $chat = $options['private_chat'] = 1 ? 'ti-check' : 'ti-na';
        session()->put(['product_id' => e($package->id)]);
        session()->put(['product_title' => e($package->title)]);
        session()->put(['product_price' => e($package->cost)]);
        session()->put(['type' => 'package']);
         

        $product_id = Session::has('product_id') ? session()->get('product_id') : '';

        $product_title = Session::has('product_title') ? session()->get('product_title') : '';

        $product_price = Session::has('product_price') ? session()->get('product_price') : 0;

        $type = Session::has('type') ? session()->get('type') : '';
 
        if (!empty(env('STRIPE_SECRET'))) {
          \Artisan::call('optimize:clear');
 
          $stripe = Stripe::make(env('STRIPE_SECRET'));
           
      } else {
 
         $json['type'] = 'error';
 
         $json['message'] = trans('lang.empty_stripe_key');
 
         return $json;
 
     
        }
     //////
     
     try {
          
       
        $token = $stripe->tokens()->create(

  [

      'card' => [

          'number'    => $input['card_no'],

          'exp_month' => $input['ccExpiryMonth'],

          'exp_year'  => $input['ccExpiryYear'],

          'cvc'       =>$input['cvvNumber'],

      ],

  ]

);

if (!isset($token['id'])) {

  // Session::flash('error', 'The Stripe Token was not generated correctly');

  // return Redirect::back();

  $json['type'] = 'error';

  $json['message'] = 'The Stripe Token was not generated correctly';

  return $json;

}

$payment_detail = $stripe->charges()->create(

  [

      'card' => $token['id'],

      'currency' => $currency,

      'amount'   => $product_price,
      'description' => trans('lang.add_in_wallet'),

  ]

);


$payment_intent = $stripe->paymentIntents()->create([

  'description' => $product_title,

  'shipping' => [

      'name' => $input['stripe_user_name'],

      'address' => [

          'line1' =>$input['line1'],

          'line2' => $input['line2'],

          'postal_code' =>$input['postal_code'],

          'city' => $input['city'],

          'state' => $input['state'],

          'country' => $input['country'],

      ],

  ],

  'amount' => $product_price,

  'currency' => $currency,

  'payment_method_types' => ['card'],

]);



$customer = $stripe->customers()->create(

  [

      'name' => $input['stripe_user_name'],

      'email' =>$input['stripe_user_email'],

      'phone' =>$input['stripe_user_phone'],

      'address' => [

          'line1' => $input['line1'],

          'line2' =>$input['line2'] ,

          'postal_code' =>$input['postal_code'],

          'city' =>$input['city'],

          'state' =>$input['state'],

          'country' => $input['country'],

      ],

  ]

);



if ($payment_detail['status'] == 'succeeded') {

    $json = array();
    $user = new User();


    $register_form = SiteManagement::getMetaValue('reg_form_settings');
        $registration_type = !empty($register_form) && !empty($register_form[0]['registration_type']) ? $register_form[0]['registration_type'] : 'multiple';
        $verification_type = !empty($register_form) && !empty($register_form[0]['verification_type']) ? $register_form[0]['verification_type'] : 'admin_verify';
        $verification_code = '';
        if ($registration_type !== 'single' && $verification_type !== 'auto_verify') {
            $random_number = Helper::generateRandomCode(4);
            $verification_code = strtoupper($random_number);
        }
    
       $user_id = $user->storeCompanyUser($input, $verification_code, $registration_type, $verification_type);
 session()->put(['user_id' => $user_id]);
session()->put(['email' => $input['email']]);
session()->put(['password' => $input['password']]); 
if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
    $email_params = array();
    
    if ($registration_type !== 'single' && $verification_type !== 'auto_verify') {
        $template = DB::table('email_types')->select('id')
            ->where('email_type', 'verification_code')->get()->first();
        if (!empty($template->id)) {
            $template_data = EmailTemplate::getEmailTemplateByID($template->id);
            $email_params['verification_code'] = $user->verification_code;
            $email_params['name'] = Helper::getUserName($user->id);
            $email_params['email'] = $user->email;
            $email_params['role'] = 'company';

             Mail::to($user->email)
                ->send(
                    new GeneralEmailMailable(
                        'verification_code',
                        $template_data,
                        $email_params
                    )
                ); 
        }
    } else {
        $template = DB::table('email_types')->select('id')->where('email_type', 'new_user')->get()->first();
        if (!empty($template->id)) {
            $template_data = EmailTemplate::getEmailTemplateByID($template->id);
            $email_params['name'] = Helper::getUserName($user->id);
            $email_params['email'] = $user->email;
            $email_params['password'] = $request['password'];
            $email_params['role'] = 'company';
             Mail::to($user->email)
                ->send(
                    new GeneralEmailMailable(
                        'new_user',
                        $template_data,
                        $email_params
                    )
                ); 
        }
        $admin_template = DB::table('email_types')->select('id')->where('email_type', 'admin_email_registration')->get()->first();
        if (!empty($admin_template->id)) {
            $template_data = EmailTemplate::getEmailTemplateByID($admin_template->id);
            $email_params['name'] = Helper::getUserName($user->id);
            $email_params['email'] = $user->email;
            $email_params['role'] = 'company';
            $email_params['link'] = url('profile/' . $user->slug);
            Mail::to(config('mail.adminmail'))
                ->send(
                    new AdminEmailMailable(
                        'admin_email_registration',
                        $template_data,
                        $email_params
                    )
                );  
        }
        session()->forget('password');
        session()->forget('email');
    }
} else {
    $id = Session::get('user_id');
    $user = User::find($id);
    Auth::login($user);

}

    
  $fee = !empty($payment_detail['application_fee_amount']) ? $payment_detail['application_fee_amount'] : 0;

  $invoice = new Invoice();

  $invoice->title = 'Invoice';

  $invoice->price = $product_price;

  $invoice->payer_name = filter_var($customer['name'], FILTER_SANITIZE_STRING);

  $invoice->payer_email = filter_var($customer['email'], FILTER_SANITIZE_EMAIL);

  $invoice->seller_email = 'test@email.com';

  $invoice->currency_code = filter_var($payment_detail['currency'], FILTER_SANITIZE_STRING);

  $invoice->payer_status = '';

  $invoice->transaction_id = filter_var($payment_detail['id'], FILTER_SANITIZE_STRING);

  $invoice->invoice_id = filter_var($payment_detail['source']['id'], FILTER_SANITIZE_STRING);

  $invoice->customer_id = filter_var($customer['id'], FILTER_SANITIZE_STRING);

  $invoice->shipping_amount = 0;

  $invoice->handling_amount = 0;

  $invoice->insurance_amount = 0;

  $invoice->sales_tax = 0;

  $invoice->payment_mode = filter_var('stripe', FILTER_SANITIZE_STRING);

  $invoice->paypal_fee = $fee;

  $invoice->paid = $payment_detail['paid'];

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

      $user=User::find($user_id);

  if ($user) {

      if ($product_type == 'package') {

          if (session()->has('product_id')) {

           //recurring payment
            $product = $stripe->products()->create([

                'name' => $product_title,
                'description' => 'Packages purchased',
                'id'   =>time().''.$user_id.'_'.$product_id,
              ]);
            
            $duration='week';
              if($options['duration']=='30'){
                $duration='month';
              }else if ($options['duration']=='360'){
                $duration='year';
              }
              $price = $stripe->prices()->create([
            
                'unit_amount' => $product_price*100,
            
                'currency' => $currency,
            
                'recurring' => ['interval' => $duration],
            
                'product' => $product['id'],
            
              ]);
            
            
            
            
            
             $subscription = $stripe->subscriptions()->create(
            
                $customer['id'], 
                [
                'items' => [
            
                    ['price' => $price['id']],
            
                ],
                'payment_settings' => [
                    'payment_method_types' => ['card'],
                ]
                ]
            );
            
            //////////////
            

              $package_item = \App\Item::where('subscriber', $user->id)->first();

              $id = session()->get('product_id');

              $package = \App\Package::find($id);

              $option = !empty($package->options) ? unserialize($package->options) : '';

              $expiry = !empty($option) ? $package_item->updated_at->addDays($option['duration']) : '';

              $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';

              $user = \App\User::find($user->id);

              if (!empty($package->badge_id) && $package->badge_id != 0) {

                  $user->badge_id = $package->badge_id;

              }

              $user->stripe_product_id = $product['id'];
              $user->stripe_price_id =  $price['id'];
              $user->stripe_customer_id =  $customer['id'];
              $user->stripe_subscription_id =  $subscription['id'];
              
              $user->expiry_date = $expiry_date;

              $user->save();

              // send mail

              if (!empty(config('mail.username')) && !empty(config('mail.password'))) {

                  $item = DB::table('items')->where('product_id', $id)->get()->toArray();

                  $package =  Package::where('id', $item[0]->product_id)->first();

                  $user = User::find($item[0]->subscriber);

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

                
                    $login_user = User::find($user_id);
                 
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
                          $json['type'] = 'success';

                          $json['url'] = url('stripe/registration/success/'.$user_id);
                        
                          return $json; 
                      } 

                  

              }

          }

      } else if ($product_type == 'project') {

          if (session()->has('project_type')) {

              $project_type = session()->get('project_type');

              if ($project_type == 'service') {

                  $id = session()->get('product_id');

                  $freelancer = session()->get('service_seller');

                  $service = Service::find($id);

                  $service->users()->attach($user->id, ['type' => 'employer', 'status' => 'hired', 'seller_id' => $freelancer, 'paid' => 'pending']);

                  $service->save();

                  // send message to freelancer

                  $message = new Message();

                  $user = User::find(intval($user->id));

                  $message->user()->associate($user);

                  $message->receiver_id = intval($freelancer);

                  $message->body = Helper::getUserName($user->id) . ' ' . trans('lang.service_purchase') . ' ' . $service->title;

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

              $id = session()->get('product_id');

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

          }

      }

  }

} else {

   $json['type'] = 'error';

  $json['message'] = trans('lang.money_not_add');

  return $json; 

}

} catch (Exception $e) {

 $json['type'] = 'error';

$json['message'] = $e->getMessage();

return $json; 

} catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {

$json['type'] = 'error';

$json['message'] = $e->getMessage();

return $json;

} catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {

$json['type'] = 'error';

$json['message'] = $e->getMessage();

return $json; 

}

     ////////

       }
     

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param \Illuminate\Http\Request $request req->attr

     *

     * @return \Illuminate\Http\Response

     */

    public function postPaymentWithStripe(Request $request)

    {

        
        $settings = SiteManagement::getMetaValue('commision');

        $currency = !empty($settings[0]['currency']) ? $settings[0]['currency'] : 'USD';

        $current_year = Carbon::now()->format('Y');

        $validator = Validator::make(

            $request->all(),

            [

                'card_no' => 'required',

                'ccExpiryMonth' => 'required',

                'ccExpiryYear' => 'required',

                'cvvNumber' => 'required',

            ]

        );

        if ($request['ccExpiryYear'] < $current_year) {

            // Session::flash('error', trans('lang.valid_year'));

            // return Redirect::back()->withInput();

            $json['type'] = 'error';

            $json['message'] = trans('lang.valid_year');

            return $json;

        }

        $product_id = Session::has('product_id') ? session()->get('product_id') : '';

        $product_title = Session::has('product_title') ? session()->get('product_title') : '';

        $product_price = Session::has('product_price') ? session()->get('product_price') : 0;

        $type = Session::has('type') ? session()->get('type') : '';

        $user_id = Auth::user() ? Auth::user()->id : '';

        $input = $request->all();

        if ($validator->passes()) {

            $input = array_except($input, array('_token'));
            
/*             \Artisan::call('optimize:clear');
            \Artisan::call('config:cache');
            \Artisan::call('route:clear');
 */            
            if (!empty(env('STRIPE_SECRET'))) {
               // dd(env('STRIPE_SECRET'));
                \Artisan::call('optimize:clear');

                $stripe = Stripe::make(env('STRIPE_SECRET'));

            } else {

                // Session::flash('error', trans('lang.empty_stripe_key'));

                // return Redirect::back();

                $json['type'] = 'error';

                $json['message'] = trans('lang.empty_stripe_key');

                return $json;

            }
            
            try {
               
                if( Auth::user()->getRoleNames()->first()=='company')
                  {
                    if(Auth::user()->stripe_customer_id && Auth::user()->stripe_subscription_id){
                        $subscription = $stripe->subscriptions()->find(Auth::user()->stripe_customer_id, Auth::user()->stripe_subscription_id);
                        
                        if(isset($subscription) && !empty($subscription) ){
                            
                          if($subscription['status']!='canceled'){
                            $stripe->subscriptions()->cancel(Auth::user()->stripe_customer_id, Auth::user()->stripe_subscription_id);
        
                         }
                         
                    
                     }
        
                    }
                  }

                          $token = $stripe->tokens()->create(

                    [

                        'card' => [

                            'number'    => $request->get('card_no'),

                            'exp_month' => $request->get('ccExpiryMonth'),

                            'exp_year'  => $request->get('ccExpiryYear'),

                            'cvc'       => $request->get('cvvNumber'),

                        ],

                    ]

                );

                if (!isset($token['id'])) {

                    // Session::flash('error', 'The Stripe Token was not generated correctly');

                    // return Redirect::back();

                    $json['type'] = 'error';

                    $json['message'] = 'The Stripe Token was not generated correctly';

                    return $json;

                }

                $payment_detail = $stripe->charges()->create(

                    [

                        'card' => $token['id'],

                        'currency' => $currency,

                        'amount'   => $product_price,

                        'description' => trans('lang.add_in_wallet'),

                    ]

                );

               

                $payment_intent = $stripe->paymentIntents()->create([

                    'description' => $product_title,

                    'shipping' => [

                        'name' => $request->get('name'),

                        'address' => [

                            'line1' => $request->get('line1'),

                            'line2' => $request->get('line2'),

                            'postal_code' => $request->get('postal_code'),

                            'city' => $request->get('city'),

                            'state' => $request->get('state'),

                            'country' => $request->get('country'),

                        ],

                    ],

                    'amount' => $product_price,

                    'currency' => $currency,

                    'payment_method_types' => ['card'],

                  ]);



                $customer = $stripe->customers()->create(

                    [

                        'name' => $request->get('name'),

                        'email' => $request->get('email'),

                        'phone' => $request->get('phone'),

                        'address' => [

                            'line1' => $request->get('line1'),

                            'line2' => $request->get('line2'),

                            'postal_code' => $request->get('postal_code'),

                            'city' => $request->get('city'),

                            'state' => $request->get('state'),

                            'country' => $request->get('country'),

                        ],

                    ]

                );

               

                if ($payment_detail['status'] == 'succeeded') {

                    $fee = !empty($payment_detail['application_fee_amount']) ? $payment_detail['application_fee_amount'] : 0;

                    $invoice = new Invoice();

                    $invoice->title = 'Invoice';

                    $invoice->price = $product_price;

                    $invoice->payer_name = filter_var($customer['name'], FILTER_SANITIZE_STRING);

                    $invoice->payer_email = filter_var($customer['email'], FILTER_SANITIZE_EMAIL);

                    $invoice->seller_email = 'test@email.com';

                    $invoice->currency_code = filter_var($payment_detail['currency'], FILTER_SANITIZE_STRING);

                    $invoice->payer_status = '';

                    $invoice->transaction_id = filter_var($payment_detail['id'], FILTER_SANITIZE_STRING);

                    $invoice->invoice_id = filter_var($payment_detail['source']['id'], FILTER_SANITIZE_STRING);

                    $invoice->customer_id = filter_var($customer['id'], FILTER_SANITIZE_STRING);

                    $invoice->shipping_amount = 0;

                    $invoice->handling_amount = 0;

                    $invoice->insurance_amount = 0;

                    $invoice->sales_tax = 0;

                    $invoice->payment_mode = filter_var('stripe', FILTER_SANITIZE_STRING);

                    $invoice->paypal_fee = $fee;

                    $invoice->paid = $payment_detail['paid'];

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

                    if (Auth::user()) {

                        if ($product_type == 'package') {

                            if (session()->has('product_id')) {


                          


                                $package_item = \App\Item::where('subscriber', Auth::user()->id)->first();

                                $id = session()->get('product_id');

                                $package = \App\Package::find($id);

                                $option = !empty($package->options) ? unserialize($package->options) : '';



                                $expiry = !empty($option) ? $package_item->updated_at->addDays($option['duration']) : '';

                                $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';

                                if( Auth::user()->getRoleNames()->first()=='company'){
                                    $product = $stripe->products()->create([

                                        'name' => $product_title,
                                        'description' => 'Packages purchased',
                                        'id'   =>time().'_'.Auth::user()->id.'_'.$product_id,
                                    ]);
    
                                    $duration='week';
                                    if($option['duration']=='30'){
                                      $duration='month';
                                    }else if ($option['duration']=='360'){
                                      $duration='year';
                                    }

                                        //recurring payment
                             

                                $price = $stripe->prices()->create([
           
                                    'unit_amount' => $product_price*100,
                                
                                    'currency' => $currency,
                                
                                    'recurring' => ['interval' => $duration],
                                
                                    'product' => $product['id'],
                                
                                  ]);


                                  $subscription = $stripe->subscriptions()->create(
           
                                    $customer['id'], 
                                    [
                                    'items' => [
                                
                                        ['price' => $price['id']],
                                
                                    ],
                                    'payment_settings' => [
                                        'payment_method_types' => ['card'],
                                    ]
                                    ]
                                );


                                }
                                        
                               

                                 
                                                   
                            

                                $user = \App\User::find(Auth::user()->id);

                                if (!empty($package->badge_id) && $package->badge_id != 0) {

                                    $user->badge_id = $package->badge_id;

                                }

                                if( Auth::user()->getRoleNames()->first()=='company'){

                                $user->stripe_product_id = $product['id'];
                                $user->stripe_price_id =  $price['id'];
                                $user->stripe_customer_id =  $customer['id'];
                                $user->stripe_subscription_id =  $subscription['id'];

                                }
                                         
                                 
                                $user->expiry_date = $expiry_date;

                                $user->save();

                                // send mail

                                if (!empty(config('mail.username')) && !empty(config('mail.password'))) {

                                    $item = DB::table('items')->where('product_id', $id)->get()->toArray();

                                    $package =  Package::where('id', $item[0]->product_id)->first();

                                    $user = User::find($item[0]->subscriber);

                                    $role = $user->getRoleNames()->first();

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

                                    if ($role === 'employer') {

                                        if (!empty($user->email)) {

                                            $email_params = array();

                                            $template = DB::table('email_types')->select('id')->where('email_type', 'employer_email_package_subscribed')->get()->first();

                                            if (!empty($template->id)) {

                                                $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                                                $email_params['employer'] = Helper::getUserName(Auth::user()->id);

                                                $email_params['employer_profile'] = url('profile/' . Auth::user()->slug);

                                                $email_params['name'] = $package->title;

                                                $email_params['price'] = $package->cost;

                                                $email_params['expiry_date'] = !empty($expiry_date) ? Carbon::parse($expiry_date)->format('M d, Y') : '';

                                            Mail::to(Auth::user()->email)

                                                    ->send(

                                                        new EmployerEmailMailable(

                                                            'employer_email_package_subscribed',

                                                            $template_data,

                                                            $email_params

                                                        )

                                                    ); 

                                            }

                                        }

                                    } elseif ($role === 'freelancer' || $role=='company') {

                                        if (!empty(Auth::user()->email)) {

                                            $email_params = array();

                                            $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_package_subscribed')->get()->first();

                                            if (!empty($template->id)) {

                                                $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                                                $email_params['freelancer'] = Helper::getUserName(Auth::user()->id);

                                                $email_params['freelancer_profile'] = url('profile/' . Auth::user()->slug);

                                                $email_params['name'] = $package->title;

                                                $email_params['price'] = $package->cost;

                                                $email_params['expiry_date'] = !empty($expiry_date) ? Carbon::parse($expiry_date)->format('M d, Y') : '';

                                                Mail::to(Auth::user()->email)

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

                            if (session()->has('project_type')) {

                                $project_type = session()->get('project_type');

                                if ($project_type == 'service') {

                                    $id = session()->get('product_id');

                                    $freelancer = session()->get('service_seller');

                                    $service = Service::find($id);

                                    $service->users()->attach(Auth::user()->id, ['type' => 'employer', 'status' => 'hired', 'seller_id' => $freelancer, 'paid' => 'pending']);

                                    $service->save();

                                    // send message to freelancer

                                    $message = new Message();

                                    $user = User::find(intval(Auth::user()->id));

                                    $message->user()->associate($user);

                                    $message->receiver_id = intval($freelancer);

                                    $message->body = Helper::getUserName(Auth::user()->id) . ' ' . trans('lang.service_purchase') . ' ' . $service->title;

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

                                $id = session()->get('product_id');

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

                                $user = User::find(intval(Auth::user()->id));

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

                } else {

                    $json['type'] = 'error';

                    $json['message'] = trans('lang.money_not_add');

                    return $json;

                }

            } catch (Exception $e) {

                $json['type'] = 'error';

                $json['message'] = $e->getMessage();

                return $json;

            } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {

                $json['type'] = 'error';

                $json['message'] = $e->getMessage();

                return $json;

            } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {

                $json['type'] = 'error';

                $json['message'] = $e->getMessage();

                return $json;

            }

        }

        session()->forget('product_id');

        session()->forget('product_title');

        session()->forget('product_price');

        session()->forget('custom_order_id');

        $project_type = session()->get('project_type');
             
    
        if (Auth::user()->getRoleNames()[0] == "employer") {

            if ($type == 'project') {

                if ($project_type == 'service') {

                    $json['url'] = url('employer/services/hired');

                } else {

                    $json['url'] = url('employer/jobs/hired');

                }

                $json['type'] = 'success';

                $json['message'] = trans('lang.freelancer_successfully_hired');

                session()->forget('type');

                return $json;

            } else {

                $json['type'] = 'success';

                $json['message'] = trans('lang.thanks_subscription');

                $json['url'] = url('dashboard/packages/employer');

                session()->forget('type');

                return $json;

            }

        } else if (Auth::user()->getRoleNames()[0] == "freelancer") {

            $json['type'] = 'success';

            $json['message'] = trans('lang.thanks_subscription');

            $json['url'] = url('dashboard/packages/freelancer');

            session()->forget('type');

            return $json;

        }else if (Auth::user()->getRoleNames()[0] == "company"){
            $json['type'] = 'success';

            $json['message'] = trans('lang.thanks_subscription');

            $json['url'] = url('dashboard/packages/company');

            session()->forget('type');

            return $json;
        }

    }

}

