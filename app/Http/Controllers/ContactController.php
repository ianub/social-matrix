<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\AdminWelcome;
use Auth;

class ContactController extends Controller
{
    public function index(){
    	return view ('contact.index');
    }
    public function success(){

    $result = Mail::send('emails.admin.newadminwelcome', ['name' => request('first_name'), 'email' => request('email'), 'number' => request('mobile_number'), 'content' => request('comment') ], function ($message)
        {

            $message->from('me@gmail.com', '121');

            $message->to('ianbyh@gmail.com');

            $message->replyTo(request('email'), $name = request('first_name'));

            $message->subject('A message from your website.');

        });   dd($result); 	return view ('contact.success');
    }
    // public function email(){
    //     //  send the email and redirect to page
    //     Mail::to(Auth::user()->email)->send(new AdminWelcome());
    //     return redirect ('/account');
    // }
}
    
