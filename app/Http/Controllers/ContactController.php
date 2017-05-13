<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index(){
    	return view ('contact.index');
    }
    public function success(){
    	return view ('contact.success');
    }
}
    
