<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\UserTransactions;
use App\UserPayments;
use Carbon\Carbon;
use App\EmailTemplate;
use App\Mail\GeneralEmailMailable;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Helper;
use DB;
class RecurringPaymentCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'recurring-payment:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $user_payments=UserPayments::where('is_success',1)->get();
      $currentDate = Carbon::now();
      $currentDate = $currentDate->format('Y-m-d');

      foreach($user_payments as $key=>$value){


     $expiry_date =  $value->expiry_date ;
     $package_id =  $value->package_id ;
     $reminder_date = Carbon::createFromFormat('Y-m-d',  $expiry_date);
     $reminder_date= $reminder_date->subDay(3); 
     $reminder_date = $reminder_date->format('Y-m-d');

      $user=User::find($value->user_id);
       

     if($reminder_date==$currentDate){
        if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
            $email_params = array();
            $template = DB::table('email_types')->select('id')
            ->where('email_type', 'recurring_payment_reminder')->get()->first();
            if (!empty($template->id)) {
                $template_data = EmailTemplate::getEmailTemplateByID($template->id);
            
                $email_params['expiry_date'] = $expiry_date;
                $email_params['amount'] =  $value->cart_amount;
                $email_params['company_name'] = $user->profile->company_name;
                  Mail::to($user->email)
                    ->send(
                        new GeneralEmailMailable(
                            'recurring_payment_reminder',
                            $template_data,
                            $email_params
                        )
                    );  
            }
        
    
         }
    }

    ///////////////


    if (($expiry_date <= $currentDate)){   


        $api_result= Helper::recurringPayment($value->token,$value->cart_amount,$value->tran_ref,$value->cart_id,$value->user_id);
     
        $transection_status=json_decode($api_result,true)['payment_result']['response_status'];
        
        $decode_result=json_decode($api_result,true);    
    
          
         if(  $transection_status=='A'){


           $package = \App\Package::find($package_id);
           $option = !empty($package->options) ? unserialize($package->options) : '';

           $expiry = !empty($option) ? Carbon::createFromFormat('Y-m-d',$expiry_date )->addDays($option['duration']) : '';
               
           $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';

        
            $updated_at = $currentDate;
        
           UserPayments::where('id',$value->id)->update([
              'expiry_date'=>$expiry_date,
               'tran_ref'=> $decode_result['tran_ref'],
               'cart_id'=>$decode_result['cart_id'],
          ]);
        
          UserTransactions::create([
            'user_id'=>$value->user_id,
            'tran_ref'=>$decode_result['tran_ref'],
            'cart_amount'=>$value->cart_amount,
             'transection_type'=>'recurring'
          ]);  
        
          // send email to customer that your payment deduct and admin cc
         } 
      
       
        } 
    ////////////
    
     
      }

    }
}
