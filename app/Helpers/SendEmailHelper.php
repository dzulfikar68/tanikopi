<?php
/**
 * Created by IntelliJ IDEA.
 * User: OSD-1
 * Date: 9/13/2018
 * Time: 11:29 AM
 */

namespace App\Helpers;


//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Mail;

class SendEmailHelper
{

    public static function sendEmailAddUser($username, $link, $customer_email){
        Mail::send('email.emailconfirmation', ['link'=> $link, 'username'=>$username], function ($message) use ($customer_email){

            $message->from('tanikopi.official@gmail.com', 'Tani Kopi');

            $message->subject('Confirmation new user');
            $message->to($customer_email);

        });

    }

}
