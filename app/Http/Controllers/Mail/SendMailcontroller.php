<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\ContactMailer;

class SendMailcontroller extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
  /** 
 * Action gởi email với các lời nhắn nhận được từ khách hàng 
 * POST /lien-he/goi-loi-nhan 
 */ 
public function sendMailContactForm(Request $request)
{
    $input = $request->all();
    Mail::to('khanhphamlight@gmail.com')->send(new ContactMailer($input));
    return $input;
}
}
