<?php

namespace App\Services;

use App\Item;
use App\Package;
use App\User;
use App\Invoice;
use DB;
use Illuminate\Support\Facades\Mail;
use App\EmailTemplate;
use App\Mail\FreelancerEmailMailable;
use Carbon\Carbon;
use App\Helper;


class PaymentService
{
    
    public function purchasePackage($call_back_data,$package_id)
    {

            $pakage = Package::find($package_id);
            $amount=$pakage->cost;
            $product_id = $package_id;
            $product_title =$pakage->title;
            $product_price =$amount;
            $type='project';
            $user_id=$call_back_data['user_id'];
            

            $user=User::find($user_id);
            $login_user = User::find($user_id);

           ///
           $fee=0;
           $invoice = new Invoice();

           $invoice->title = 'Invoice';

           $invoice->price = $product_price;

           $invoice->payer_name = filter_var($user->full_name, FILTER_SANITIZE_STRING);

           $invoice->payer_email = filter_var($user->email, FILTER_SANITIZE_EMAIL);

           $invoice->seller_email = 'test@email.com';

           $invoice->currency_code = filter_var('AED', FILTER_SANITIZE_STRING);

           $invoice->payer_status = '';

           $invoice->transaction_id =  $call_back_data['tranRef'];

           $invoice->invoice_id =  $call_back_data['cartId'];

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
              
        
           $item = DB::table('items')->select('id')->where('subscriber', $user_id)->first();

           if (!empty($item)) {

               $item1 = Item::find($item->id);
           } else {

               $item1 = new Item();

           }
            
           $item1->invoice_id = filter_var($invoice_id, FILTER_SANITIZE_NUMBER_INT);

           $item1->product_id = filter_var($product_id, FILTER_SANITIZE_NUMBER_INT);

           $item1->subscriber = $user_id;

           $item1->item_name = filter_var($product_title, FILTER_SANITIZE_STRING);

           $item1->item_price = $product_price;

           $item1->item_qty = filter_var(1, FILTER_SANITIZE_NUMBER_INT);
           $item1->save();
          
           ///////

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


                    if (!empty($user->email)) {

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
}
