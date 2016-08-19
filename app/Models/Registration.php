<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Session;


class Registration extends Model
{
  public function userRegister($inputs){
    
    try{
        
        $password = md5($inputs['password']);

        $if_not_exists = DB::table('lgtks_users')
                         ->where(array('email_id'=>$inputs['email'],
                         'current_password'=>$password))->get();   
       
       if(empty($if_not_exists)){
       
        $regist_Id = DB::table('registrations')->insertGetId([
                    'email_id'=>$inputs['email'],
                    'mobile_number'=>$inputs['mobile_number'],
                    ]);
          
        Session::put('RegistrationId',$regist_Id); 
        
        DB::table('lgtks_users')->insert([
          'email_id'=>$inputs['email'],
          'current_password'=>$password,
          'mobile_number'=>$inputs['mobile_number'],
          'lgtks_registrations_id'=>$regist_Id,   
          'seller_buyer_flag'=> 1,   // 1 mean buyer 
          ]);
          
        
         $message = "Successfully Updated User Details";

         $status = 1;
       
       }
       else{

        $message = "User already registered";

        $status = 0;

        $regist_Id = " ";

       }
      
      $return  = array('message'=>$message,'status'=>$status,'registered_id'=>$regist_Id);

      return $return;

     }    
    
    catch(Exception $ex){

      return $ex->getMessage();
    
    }

  }

   public function marketServices(){

     return DB::table('lgtks_catalogues')->select('id','type','sub_type','sub_type_1')->get();

   }

   public function validateId($id,$status){
    
    if($status==1){

      $exists = DB::table('buisness_informations')->where('uin_number',$id)->get();

    }
    else{

      $exists = DB::table('buisness_informations')->where('pan_number',$id)->get();

    }
    
    if(!empty($exists))
        return 'true';
      else
        return 'false';

   }

   public function getBusiness(){

     $buisness_types = DB::table('buisness_types')->get();
     $industry_types = DB::table('industry_types')->get();

     return array('buisness_types'=>$buisness_types,'industry_types'=>$industry_types);

   }

   public function indvRegister($inputs){
    
    try{
      
        $session_reg_id =Session::get('RegistrationId');
         
            DB::table('registrations')
            ->where('id',$session_reg_id)
            ->update(array('first_name'=>$inputs['first_name'],
            'last_name'=>$inputs['last_name'],
            'pincode'=>$inputs['pincode'],
            'mobile_number'=>$inputs['mobile_number'] ,  
            'landline_number'=>$inputs['landline_number'],
            'address_line1'=>$inputs['address1'],
            'email_id'=>$inputs['email'],
            'alternative_email_id'=>$inputs['alternate_email'],
            'city'=>$inputs['city'],
            'district'=>$inputs['district'],
            'state'=>$inputs['state'],
            'address_line2'=>$inputs['address2'],
            'created_on'=>date("Y-m-d h:i:s")));
                 
          //Updation of Registrations in Individual registration

         $message = "Successfully registered";
         $status  = 1;
        
         return array('message'=>$message,'status'=>$status,'registered_id'=>$session_reg_id);

      

     }    
    
    catch(Exception $ex){

      return $ex->getMessage();
    
    }

  }

  public function regDetails($registered_id){

      return DB::table('registrations as rg')
            ->leftjoin('lgtks_users as lu','lu.lgtks_registrations_id','=','rg.id')
            ->where('lu.lgtks_registrations_id',$registered_id)->select('lu.*','rg.*')->get();

  }

  public function getfromPin($pincode){

    return DB::table('pincode_location_details')->where('pincode',$pincode)->get();

  }

  public function emailValidator($email){

      $validate = DB::table('lgtks_users')->where('email_id',$email)->pluck('email_id');

      if(!empty($validate)){
        
        return 'true';
      
      }
    else{

        return 'false';
    }
  }

  public function saveOtp($otp){

      $otp_validation = Session::put('user_otp',$otp);

      return "Saved Successfully";
  }

  public function verifyUserAuth($inputs){

    $input = DB::table('lgtks_users')
            ->where(array('lgtks_registrations_id'=>$inputs['registered_id'],'activation_key'=>$inputs['key']))
            ->get();

    return $input;
            
  }

  public function saveMarketplace($data){

      $business_id = DB::table('registrations as rg')
                     ->leftjoin('buisness_informations as bf','bf.id','=','rg.buisness_info_id') 
                     ->where('rg.id',$data['registered_id'])->pluck('bf.id');
      
     $array = array();

      $count = count($data['annual_turnvalue']);

      for($i=0; $i<$count-1; $i++){
      
       $array[] = [$data['annual_turnover'][$i]=>$data['annual_turnvalue'][$i]];
      
       }
       
       $off_array = array();
       

      foreach($data as $key=>$value){
        
        $off_pos = strstr($key, 'off_');
        $req_pos = strstr($key, 'req_');
        
        if(!empty($off_pos))
        $off_array[] = $value;

        if(!empty($req_pos))
        $req_array[] = $value;  

      } 
      
      if(empty($business_id[0])){
                  
      $insertion_array = ['company_name'=>$data['business_name'],
                          'constitution_of_buisness'=>$data['business_const'],
                          'uin_number'=>$data['uin_no'],
                          'country'=>$data['business_place'],
                          'pincode'=>$data['business_pincode'],
                          'city'=>$data['business_city'],
                          'state'=>$data['business_state'],
                          'comp_address_line1'=>$data['address1'],
                          'comp_address_line2'=>$data['address2'],
                          'year_of_establishment'=>$data['year_of_est'],
                          'cntct_prsn_first_name'=>$data['contact_fname'],
                          'cntct_prsn_last_name'=>$data['contact_lname'],
                          'designation'=>$data['business_designatn'],
                          'apllicant_email_id'=>$data['business_emailId'],
                          'mobile_number'=>$data['business_mobile_no'],
                          'landline_with_STD'=>$data['business_landline'],
                          'buisness_type'=>$data['business_type_id'],
                          'industry_type'=>$data['industry_type_name'],
                          'service_tax_no'=>$data['service_taxno'],
                          'pan_number'=>$data['business_pan'],
                          'tin_no'=>$data['tin_no'],
                          'banker'=>$data['bank_name'],
                          'branch'=>$data['bank_branch'],
                          'gta_number'=>$data['gta_number'],
                          'ifsc_code'=>$data['ifsc_code'],
                          'bank_acc_no'=>$data['account_no'],
                          'branch'=>$data['account_branch'],
                          'created_on'=>date("Y-m-d h:i:s"),
                          ];
                     
        $buss_info_id = DB::table('buisness_informations')->insertGetId($insertion_array);

        foreach($array as $value){
        
        DB::table('buisness_informations')->where('id',$buss_info_id)->update($value);
        
        }

        

        $market_profile_id = DB::table('market_profile')->insertGetId(['log_buis_info_id'=>$buss_info_id,
                              'official_name'=>$data['business_name'],
                              'address_line1'=>$data['address1'],
                              'address_line2'=>$data['address2'],
                              'email_id'=>$data['business_emailId'],
                              'moblie'=>$data['business_mobile_no']]);
        
        foreach ($off_array as  $value) {
        
         DB::table('user_services_offered')->insertGetId(['market_profile_id'=>$market_profile_id,
                              'catalague_id'=>$value]);

        }

        foreach ($req_array as  $value) {
        
         DB::table('user_services_required')->insertGetId(['market_profile_id'=>$market_profile_id,
                              'catalague_id'=>$value]);

        }
        
         DB::table('registrations')
        ->where('id',$data['registered_id'])
        ->update(array('buisness_info_id'=>$buss_info_id,'place_of_business'=>$data['business_place']));
        
        
        DB::table('lgtks_users')->where('lgtks_registrations_id',$data['registered_id'])
        ->update(array('seller_buyer_flag'=>$data['seller_buyer_flag']));
        
        $message = "Successfully registered";

        $status=1;

        return array('message'=>$message,'business_info_id'=>$buss_info_id,'status'=>$status);

    }
    else{
        
      $message = "business info already exists";

      $status = 0;

       return array('message'=>$message,'status'=>$status);
    }                        

  }


  
   
}