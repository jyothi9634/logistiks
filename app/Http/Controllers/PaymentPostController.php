<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use DB;


class PaymentPostController extends Controller 
{
    
    public function paymentPost() {
        return view('paymentPost');
    }
    
    public function paymentForBook(){
        return view('paymentPostBook');
    }

    public function paymentBookResponse() {
        return view('paymentBookResponse');
    }
    public function paymentResponse() {
        return view('paymentResponse');
    }
    public function thankYouOrder() {
        echo "thank you order";
        //return view('paymentResponse');
    }
    
    // seller_buyer_flag 2 means seller
    
    public function paymentConfirm() {
        $registrationId = Session::get('RegistrationId');
        $result = DB::table('lgtks_users')->where('lgtks_registrations_id',$registrationId)->update([
          'seller_buyer_flag'=>2 // seller
          ]);
        
        
        
        return view('paymentConfirm');
    }
    
}


