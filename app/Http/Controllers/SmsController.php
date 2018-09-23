<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use \App\MSG91;

class SmsController extends Controller
{

   public function index()
    {
     return view('sms');
    }


   public function send(Request $request)
    {


        $mobileNumber = $request->input('mobileNumber');
        $message = $request->input('message');
         $MSG91 = new MSG91();
        $msg91Response = $MSG91->sendSMS($mobileNumber,$message);
         //echo json_encode($response);

        return redirect()->back()->with('message', 'Message has been sent successfully');
    }


    
   
}
