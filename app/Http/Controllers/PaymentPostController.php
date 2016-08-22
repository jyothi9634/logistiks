<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;


class PaymentPostController extends Controller 
{
    
    public function paymentPost($buyer_id) {
        
        Session::put('buyer_id',$buyer_id);
        
        return view('paymentPost');
    }
    
    public function paymentForBook(){
        return view('paymentPostBook');
    }

    public function paymentBookResponse() {
        
        $buyer_id = Session::get('buyer_id');

        $confirm = "/buyer/buyerConfirmation/".$buyer_id;

        return Redirect::to($confirm);

        
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
        
        $user_id = Session::get('buyer_id');
        
        $result = DB::table('lgtks_users')->where('id',$user_id)->update([
          'is_seller'=>2 // seller
          ]);
        
        
        
        return view('paymentConfirm');
    }
    
}


