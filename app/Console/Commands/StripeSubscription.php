<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Carbon\Carbon;
use App\EmailTemplate;
use App\Mail\GeneralEmailMailable;
use Illuminate\Support\Facades\Mail;
use App\Helper;
use DB;

class StripeSubscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stripe-subscription:cron';

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
        $users = User::role('company')->where('stripe_subscription_id','!=','')->with('item')->get();
    
        $currentDate = Carbon::now();
        $currentDate = $currentDate->format('Y-m-d');
        foreach($users as $index =>$user){
        $expiry_date=$user['expiry_date'];
      
        $reminder_date = Carbon::createFromFormat('Y-m-d H:i:s',   $expiry_date); 
      
        $reminder_date = $reminder_date->subDay(3);
        $reminder_date = $reminder_date->format('Y-m-d');
       
        $item_price=$user->item[0]['item_price'];
        $item_name=$user->item[0]['item_name'];
        $product_id=$user->item[0]['product_id'];
        
       if ($reminder_date == $currentDate) {
         
          if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
            $email_params = array();
            $template = DB::table('email_types')->select('id')
                ->where('email_type', 'recurring_payment_reminder')->get()->first();
            if (!empty($template->id)) {
                $template_data = EmailTemplate::getEmailTemplateByID($template->id);

                $email_params['expiry_date'] = $expiry_date;
                $email_params['amount'] =  $item_price;
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

        if (($expiry_date <= $currentDate)) {
            $package = \App\Package::find($product_id);
            $option = !empty($package->options) ? unserialize($package->options) : '';
            $duration=$option['duration'];
    
            $expiry_date = Carbon::createFromFormat('Y-m-d H:i:s', $expiry_date);
            $expiry = !empty($option) ? $expiry_date->addDays($duration) : '';
            $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';
             $user->expiry_date=$expiry_date;
             $user->save();
        }
        
        }
    }
}