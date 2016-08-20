<?php
/************************************
 * Purpose : Member , Individual , MarketPlace Registrations
 * Author : Nikhil Kishore
 * Company : Logistiks
 * Description : In the controller we are handling the member registration process of logistiks.
 * Created At : 05th Aug 2016
 * 
 *
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Console\IlluminateCaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Models\Registration;
use App\Components\EmailSender;

class RegistrationController extends BaseController
{
 /*
  * Method Name : 
  * Purpose :
  * 
  */  

  public function __construct(Registration $Registration,EmailSender $send){
        
        $this->register = $Registration;

        $this->sendemail = $send;

    }

  public function index()
  {
      $errorMsg = '';
      $status = 0 ;
      $registration_status = 1;

      return view('memberRegistration')->with(array('errorMsg'=>$errorMsg,'status'=>$status,'registration_status'=>$registration_status));

  } 
 
  public function store(){
   try{
       
      $inputs = Input::all();
      
      $session_otp = Session::get('user_otp');
      
      if($inputs['otp'] == $session_otp){
        
        $status = 1;

        return view('memberRegistration')->with(['status'=>$status]);

      }
     else{
        
       $user_registration = $this->register->userRegister($inputs);

       $getmemberDetails = $this->register->regDetails($user_registration['registered_id']);
        
        $status = 0;
        
        if(!empty($getmemberDetails))
        {
        $this->sendemail->sendMailToSeller($getmemberDetails);
        }
        
        return view('confirmregistration')->with('status',$status);
      
      }
      //}
      
      }
    
  catch(Exception $e){
      
        $message=$e->getMessage();
      
      }
      
  }
    
  public function indvReg(){
      
      $session_reg_id = Input::get('registered_id');
      
      $getdetails = $this->register->regDetails($session_reg_id);
      
      return view('indvRegistration')->with(array('registration_id'=>$session_reg_id,'reg_details'=>$getdetails));
  }

  public function getlocationdetails(){

      $pincode = Input::get('pincode');

      $getfrompin = $this->register->getfromPin($pincode);

      return $getfrompin;

  }
  
  public function storeIndvReg(){
      try{
          
          $registration_fields = Input::all();

          $indv_registration = $this->register->indvRegister($registration_fields);
          
          $getmemberDetails = $this->register->regDetails($indv_registration['registered_id']);
          
          $status = 1;
          
          return view('confirmregistration',['registered_id'=>$indv_registration['registered_id'],'status'=>$status]);
      
      } catch (Exception $ex) {
          $message = $ex->getMessage();
      }
  }

  public function userActivation(){

      $inputs = Input::all();

      $verifyUser = $this->register->verifyUserAuth($inputs);
            
      if(!empty($verifyUser)){
      
      $status = 1;
      
      $getdetails = $this->register->regDetails($inputs['registered_id']);

      return view('indvRegistration')->with(array('registration_id'=>$inputs['registered_id'],'reg_details'=>$getdetails,'status'=>$status));
      
      }
      else{

      $status = 0;

      return Redirect::to('/memberRegistration')->with(['status'=>$status]);
      

      }


  }

  public function newuserActivation(){


     $inputs = Input::all();

     $getemail = $this->register->getEmail($inputs);

     $status = 0;
     
     return view('memberRegistration')->with(['status'=>$status,'new_email_id'=>$getemail]);
      

      
  }

  public function marketplaceRegistration($registered_id){

      $registration_details = $this->register->regDetails($registered_id);
      
      $getservices = $this->register->marketServices();

      $getbusiness = $this->register->getBusiness();

      return view('marketplaceRegistration',['registration_details'=>$registration_details,'registered_id'=>$registered_id,'getservices'=>$getservices,'getbusiness'=>$getbusiness]);

  }

  public function validateId(){
    
     $uin_no = Input::get('uin_no');
     $pan_card = Input::get('business_pan');
     
     if(!empty($uin_no))
     $validateid = $this->register->validateId($uin_no ,1);
     else
     $validateid = $this->register->validateId($pan_card ,0);

     return $validateid;

  }

  public function userSubscription(){

    return view('usersubscription');

  }

  public function confirmRegistration(){

        return view('confirmregistration');
  
  }

  public function validateUserEmail(){
  
  try{
          $email = Input::get('email');
            
          $validator = $this->register->emailValidator($email);

          return $validator;
      }
      catch(Exception $ex){
        
        return $ex->getMessage();

      }

  }

  public function privacyPolicy(){

    return view('privacypolicy');

  }

  public function termsOfuse(){

      return view('termsOfuse');

  }

  public function cancellationPolicy(){

      return view('cancellationPolicy');

  }

  public function sendOtp(){

    $mobile_number = Input::get('mobile_number');
    $otp = rand();
    
    $user="dentalproducts"; //your username
    $password="sulotchana@1"; //your password
    $mobilenumbers= $mobile_number; //enter Mobile numbers comma seperated
    $message = "Please enter the OTP to complete Registration process of Logistiks:".$otp; //enter Your Message
    $senderid="Logistiks"; //Your senderid
    $messagetype="N"; //Type Of Your Message
    $DReports="Y"; //Delivery Reports
    $url="http://www.smscountry.com/SMSCwebservice_Bulk.aspx";
    $message = urlencode($message);
    $ch = curl_init();
    if (!$ch){die("Couldn't initialize a cURL handle");}
    $ret = curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt ($ch, CURLOPT_POSTFIELDS,
    "User=$user&passwd=$password&mobilenumber=$mobilenumbers&message=$message&sid=$senderid&mtype=$messagetype&DR=$DReports");
    $ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //If you are behind proxy then please uncomment below line and provide your proxy ip with port.
    // $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
    $curlresponse = curl_exec($ch); // execute
    
    $saveOtp = $this->register->saveOtp($otp);

    return $saveOtp ;
  }

  public function saveMarketplaceReg(){
    
    try{
          $input = Input::all();

          $saveMarketplace = $this->register->saveMarketplace($input);

          return view('usersubscription')->with(['input'=>$input]);
          

    }
    catch(Exception $ex){

       return $ex->getMessage();
    
    }

  }
      
 }
