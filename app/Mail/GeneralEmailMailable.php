<?php

/**

 * Class EmailTemplateSeeder.

 *

 * @category Worktern

 *

 * @package Worktern

 * @author  Amentotech <theamentotech@gmail.com>

 * @license http://www.amentotech.com Amentotech

 * @link    http://www.amentotech.com

 */

namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;

use App\EmailHelper;
use App\SiteManagement;
use Illuminate\Mail\Message;


/**

 * Class GeneralEmailMailable

 */

class GeneralEmailMailable extends Mailable

{

    use Queueable, SerializesModels;



    /**

     * Setting scope of the variables

     *

     * @access public

     *

     * @var string $type

     *

     * @var collection $template

     *

     * @var array $email_params

     *

     */

    public $type;

    public $template;

    public $email_params;



    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($type, $template, $email_params = array())

    {

        $this->type = $type;

        $this->template = $template;

        $this->email_params = $email_params;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
      $email_from=env('MAIL_FROM_ADDRESS');
        $from_email = EmailHelper::getEmailFrom();

        $from_email_id = EmailHelper::getEmailID();

        $subject = $this->template->subject;

        if ($this->type == 'verification_code') {
              
            $email_message = $this->prepareEmailVerificationCode($this->email_params);
            
            if( isset($this->email_params['role'])  && $this->email_params['role']=='company'){
            $email_from='agency@talends.com';
            }

            if( isset($this->email_params['role'])  && $this->email_params['role']=='employer'){
                $email_from='client@talends.com';
            }


            if( isset($this->email_params['role'])  && ($this->email_params['role']=='freelancer' ||  $this->email_params['role']=='intern' ) ){
                $email_from='Talends@talends.com';
            }

        } elseif ($this->type == 'new_user') {

            $email_message = $this->prepareEmailNewRegisteredUser($this->email_params);

            if(isset($this->email_params['role'])  && $this->email_params['role']=='company'){
                $email_from='agency@talends.com';
            }
            
            if( isset($this->email_params['role'])  && $this->email_params['role']=='employer'){
                $email_from='client@talends.com';
            }

            if( isset($this->email_params['role'])  && ($this->email_params['role']=='freelancer' ||  $this->email_params['role']=='intern' ) ){
                $email_from='Talends@talends.com';
            }

        } elseif ($this->type == 'lost_password') {

            $email_message = $this->prepareEmailLostPassword($this->email_params);

        } elseif ($this->type == 'invitation') {

            $email_message = $this->prepareEmailInvitation($this->email_params);

        } elseif ($this->type == 'contact_form_received') {

            $email_message = $this->prepareEmailContactForm($this->email_params);

        } elseif ($this->type == 'reset_password_email') {

            $email_message = $this->prepareEmailResetPassword($this->email_params);

        }elseif ($this->type == 'recurring_payment_reminder') {

            $email_message = $this->prepareEmailPaymentReminder($this->email_params);

        }elseif($this->type == 'registration_payment'){
            $email_message = $this->prepareRegistrationPayment($this->email_params);
            $email_from='agency@talends.com';
        
        }elseif($this->type == 'recurring_payment_complete'){
            $email_message = $this->prepareRecurringPaymentComplete($this->email_params);
            $email_from='agency@talends.com';
        }

        $message = $this->from($email_from,$from_email_id)

        //X-Custom-Header
            ->subject($subject)
            ->view('emails.index')
            ->replyTo('enquiry@talends.com', 'Talends Enquiry')
            ->withSwiftMessage(function ($message) {
                $message->getHeaders()
                    ->addTextHeader('X-Mailer', 'PHP/' . phpversion().'');
                    $message->getHeaders()
                    ->addTextHeader('x-mailgun-native-send', 'true');   
            })
            ->with(

                [

                    'html' => $email_message,

                ]

            );

        return $message;

    }



    /**

     * Email Verification Code

     *

     * @param array $email_params Email Parameters

     *

     * @access public

     *

     * @return string

     */

    public function prepareEmailVerificationCode($email_params)

    {

        extract($email_params);

        $code = $verification_code;

        $user_name = $name;

        $user_email = $email;

        $site_title = EmailHelper::getSiteTitle();

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;
        
        $email_content_default =    " Hi %name%!

                                    Thanks for registering at " . $site_title . ". Here is your verification code to complete your registration process.:

                                    Name : %name%

                                    Email : %email%

                                    Verification Code: %verification_code%

                                    %signature% ";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%name%", $user_name, $app_content);

        $app_content = str_replace("%email%", $user_email, $app_content);

        $app_content = str_replace("%verification_code%", $code, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);



        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }


    public function prepareRecurringPaymentComplete($email_params)

    {

        extract($email_params);

        $company_name = $name;

        $expiry_date=$expiry_date;
        $cost=$amount;
        $company_name=$company_name;
        $package_name=$package_name;

        $site_title = EmailHelper::getSiteTitle();

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;
        
        $email_content_default =    "Hi, %company_name% ,

        Package Name:  %package_name%,
        
        Cost :AED  %cost% has been deducted from your account as a Recurring payment.
        
        Your next recurring payment date is  %expiry_date%.
        
        Thanks for doing your business with Talends.com.
        
        %signature%,";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%company_name%", $company_name, $app_content);

        $app_content = str_replace("%package_name%", $package_name, $app_content);

        $app_content = str_replace("%cost%", $cost, $app_content);
        $app_content = str_replace("%expiry_date%", $expiry_date, $app_content);
        $app_content = str_replace("%signature%", $signature, $app_content);

        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }

    /**

     * Email new user

     *

     * @param array $email_params Email Parameters

     *

     * @access public

     *

     * @return string

     */

    public function prepareEmailNewRegisteredUser($email_params)

    {

        extract($email_params);

        $user_name = $name;

        $user_email = $email;

        $user_password = $password;

        $site_title = EmailHelper::getSiteTitle();

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;

        $email_content_default =    " Hi %name%!



                                      Thanks for registering at ".$site_title.". You can now login to manage your account using the following credentials:



                                      Username: %name%

                                      Password: %password%

                                      Email: %email%



                                      %signature%";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%name%", $user_name, $app_content);

        $app_content = str_replace("%email%", $user_email, $app_content);

        $app_content = str_replace("%password%", $user_password, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);



        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }



    /**

     * Email Lost Password

     *

     * @param array $email_params Email Parameters

     *

     * @access public

     *

     * @return string

     */

    public function prepareEmailLostPassword($email_params)

    {

        extract($email_params);

        $user_name = $name;

        $user_email = $email;

        $reset_link = $link;

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;

        $email_content_default =    "Hi %name%!



                                    <strong>Lost Password reset</strong>



                                    Someone requested to reset the password of following account:



                                    Email Address: %account_email%



                                    If this was a mistake, just ignore this email and nothing will happen.



                                    To reset your password, click reset link below:



                                    <a href='%link%'>Reset</a>



                                    %signature%";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%name%", $user_name, $app_content);

        $app_content = str_replace("%account_email%", $user_email, $app_content);

        $app_content = str_replace("%link%", $reset_link, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);



        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }



    /**

     * Email invitation

     *

     * @param array $email_params Email Parameters

     *

     * @access public

     *

     * @return string

     */

    public function prepareEmailInvitation($email_params)

    {

        extract($email_params);

        $user_name = $name;

        $site_link = $link;

        $site_title = EmailHelper::getSiteTitle();

        $invite_message = $message;

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;

        $email_content_default =    "Hi,



                                    %username% has invited you to signup at <a href="%link%"> ".$site_title." </a> You have invitation message given below



                                    %message%



                                    %signature%";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%username%", $user_name, $app_content);

        $app_content = str_replace("%link%", $site_link, $app_content);

        $app_content = str_replace("%message%", $invite_message, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);



        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }



    /**

     * Email Contact Form

     *

     * @param array $email_params Email Parameters

     *

     * @access public

     *

     * @return string

     */

    public function prepareEmailContactForm($email_params)

    {

        extract($email_params);

        $email_subject = $subject;

        $user_name = $name;

        $user_email = $name;

        $phone_no = $phone;

        $contact_message = $message;

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;

        $email_content_default =    "Hi,

                                     A person has contacted you, description of message is given below.



                                     Subject : %subject%

                                     Name : %name%

                                     Email : %email%

                                     Phone Number : %phone%

                                     Message : %message%



                                     %signature%";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%subject%", $email_subject, $app_content);

        $app_content = str_replace("%name%", $user_name, $app_content);

        $app_content = str_replace("%email%", $user_email, $app_content);

        $app_content = str_replace("%phone%", $phone_no, $app_content);

        $app_content = str_replace("%message%", $contact_message, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);



        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }

    /**

     * Email reset password

     *

     * @param array $email_params Email Parameters

     *

     * @access public

     *

     * @return string

     */

    public function prepareEmailResetPassword($email_params)

    {

        extract($email_params);

        $user_name = $name;

        $user_email = $email;

        $pass = $password;

        $signature = EmailHelper::getSignature();

        $app_content = $this->template->content;

        $email_content_default =    "Hi %name%!



                                    <strong>Password Reset</strong>



                                    You have reset your password.



                                    You can now login with the following credentials



                                    Email: %email%

                                    New Password: %password%



                                    %signature%";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%name%", $user_name, $app_content);

        $app_content = str_replace("%email%", $user_email, $app_content);

        $app_content = str_replace("%password%", $pass, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);



        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }

    public function prepareRegistrationPayment($email_params){
        
        extract($email_params);
        

        $company_name = $user_name;

        $payment_url= $payment_url;

        $title = $name;

        $price = $price;
       
      $signature = EmailHelper::getSignature();
           
        $app_content = $this->template->content;

  
        $email_content_default =    "Hi, %company_name% ,

        You are registered on Talends.com as a Company and did not pay the amount.
    
        Cost :  %cost%,
        
        Package Name:  %package_name%,
        
        You can do payment via this link : %payment_url%
        
        Then then grow and increase your business with Talends.com.        
         
        %signature%,";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%company_name%", $company_name, $app_content);

        $app_content = str_replace("%cost%", $price, $app_content);

        $app_content = str_replace("%payment_url%", $payment_url, $app_content);
        $app_content = str_replace("%package_name%", $title, $app_content);

        $app_content = str_replace("%signature%", $signature, $app_content);


        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;
    }
    public function prepareEmailPaymentReminder($email_params)

    {

        extract($email_params);
        $expiry_date = $expiry_date;

        $user_amount= $amount;

        $company_name = $company_name;

      $signature = EmailHelper::getSignature();
           
        $app_content = $this->template->content;

  

        $email_content_default =    "Hi %company_name%!



                                    I am reminding you that 3 days has been left for your next  Recurring payment.

                                    Next payment date is  %expiry_date% .



                                    Automatically  amount $ %amount%  will deduct from your account.


                                    %signature%";

        //set default contents

        if (empty($app_content)) {

            $app_content = $email_content_default;

        }

        $app_content = str_replace("%company_name%", $company_name, $app_content);

        $app_content = str_replace("%expiry_date%", $expiry_date, $app_content);

        $app_content = str_replace("%amount%", $user_amount, $app_content);
        $app_content = str_replace("%signature%", $signature, $app_content);


        $body = "";

        $body .= EmailHelper::getEmailHeader();

        $body .= $app_content;

        $body .= EmailHelper::getEmailFooter();

        return $body;

    }

}

