<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Components\SellerPostComponent;
use App\Components\SellerSearchComponent;
use DB;
use Illuminate\Support\Facades\Session;

class Seller extends Model
{
    public static function SellerPost(){
            $pincodeData = DB::select('select * from pincode_location_details limit 100');
            $paymentTermData = DB::select('select * from payment_terms');
            $trackingTypeData = DB::select('select * from tracking_types');
            $vehicleTypesData = DB::select('select * from vehicle_types');
            $loadTypesData = DB::select('select * from load_types');
            $buyers = DB::select('select * from lgtks_users where seller_buyer_flag=1');
            $discount = DB::select('select * from discount_type');
       
            $data = ['buyers'=>$buyers,'pincodeData'=>$pincodeData , 'paymentTermData'=>$paymentTermData , 'trackingTypeData'=>$trackingTypeData , 'vehicleTypesData'=>$vehicleTypesData , 'loadTypesData'=>$loadTypesData,'discount'=>$discount];
                
            //SellerPostComponent::GetData($data);  
            return $data;
    }
    
    public static function SellerPostInsertion($data,$nextdata){
        
      $data[0]['user_id'] = Session::get('user_id');
      
       DB::table('lgtks_posts')->insert($data); // inserting add routes data to lgkts_posts table
        if(empty($nextdata)){
            exit;
        }else{
            foreach($nextdata as $discData){
              $i=0;
              DB::table('lgtks_posts')->insert($discData); // // inserting discounts data to lgkts_posts table
              $lastInsertedID = DB::select('select MAX(id) as id from lgtks_posts');    
              $Private_post_id= $lastInsertedID[$i]->id;
              //$data[0]['user_id'] = Session::get('user_id');
              $userid = Session::get('user_id');
              //$userid = '4';//hardcoding the user id as 1
              $prt_data=array('post_id'=>$Private_post_id,'user_id'=>$userid);

              $w= DB::table('private_posts')->insert($prt_data); // inserting only user id and post id  in the private post table for discounts
                echo"cust";print_r($discData);

              $i++;
             }
        }
   }
    
    public static function SearchPost($data){
        $from_loc = $data['from_location'];
        $to_loc     = $data['to_location'];
        $veh_typ = $data['vehicle_type'];
        $load_typ = $data['load_type'];
        $catId = '1';
        
        $SearchHistory = ['from_location'=>$from_loc,'to_location'=>$to_loc,'vehicle_type'=>$veh_typ,'load_type'=>$load_typ,'catalogue_id'=>$catId];
//        $SearchHistory[]= $from_loc;
//        $SearchHistory[]= $to_loc;
//        $SearchHistory[]= $veh_typ;
//        $SearchHistory[]= $load_typ;
//        $SearchHistory[]= $catId;
        
       $e = DB::table('search_histories')->insert($SearchHistory);

        $results = DB::select(DB::raw('select lu.name,lp.valid_to, lp.transit_days, lp.valid_from, lp.tracking_type,lp.from_loc,lp.to_loc,(select discount_type from discount_type where id=(lp.discount_type))as discount_type,lp.private_public_flag,
(select load_type from load_types where id=(lp.load_type))as load_type,
(select vehicle_type from vehicle_types where id=(lp.veh_type))as vehicle_type,
(select tracking_type from tracking_types where id=(lp.tracking_type))as tracking_type,
lp.qty,lp.load_commitment_per_day,lp.last_date_for_quote from lgtks_users lu join lgtks_posts lp on lp.user_id=lu.id
 join search_histories sh  where lp.from_loc=sh.from_location and lp.to_loc=sh.to_location and lp.dispatch_dt=sh.dispatch_date or lp.load_type=sh.load_type or lp.qty=sh.quantity
or lp.veh_type=sh.vehicle_type and lu.seller_buyer_flag=0'));
      return ['results'=>$results];
       
    }
	
    
  public static function SellerPostMasterTo($user_id){
      
   $SellerPostMasterTo = DB::select(DB::raw("select lu.seller_buyer_flag as seller_buyer_flag1,lp.seller_buyer_flag as seller_buyer_flag,lu.name as name, title, lp.private_public_flag as private_public_flag,
datediff(valid_to,valid_from) as DiffDate,(select contract_name from contract_types where id=(lp.contract_type)) as contract,
(select sub_type_1 from lgtks_catalogues where id=(lp.catalogue_id)) as catalogue,
(select count(pi.id) from post_interactions pi where message_to=lu.id and pi.lgtks_post_id)=lp.id as Messages,
(select count(lp.id) from lgtks_posts lp join lgtks_users lu where enquiry_status=1 and lp.seller_buyer_flag=0 and lu.seller_buyer_flag=1 and lu.id=1)as enquiry,
valid_from,valid_to from lgtks_posts lp join lgtks_users lu on lp.user_id=lu.id where lu.seller_buyer_flag=0 and lp.seller_buyer_flag=1 and lu.id=:user_id"), array(
'user_id'=>$user_id,));

	   $to = DB::select(DB::raw("select count(id) as outgoing_posts from lgtks_posts where user_id=:user_id"), array('user_id'=>$user_id,));
	   $from = DB::select(DB::raw("select count(lp.id) as incoming_posts from lgtks_posts lp join private_posts pp on pp.post_id=lp.id where private_public_flag=1 and lp.user_id=:user_id"),array('user_id'=>$user_id,));
	   
	    return ['pi'=>$SellerPostMasterTo,'to'=>$to,'from'=>$from];
	   
   }
    
     public static function SellerPostMasterFrom($user_id){

         
        $sellerPostmasterFrom=DB::select(DB::raw('select lu.seller_buyer_flag as seller_buyer_flag1,lp.seller_buyer_flag as seller_buyer_flag,lu.name as name, title, lp.private_public_flag as private_public_flag,
datediff(valid_to,valid_from) as DiffDate,
(select sub_type_1 from lgtks_catalogues where id=(lp.catalogue_id)) as catalogue,
(select count(lp.id) from lgtks_posts lp join lgtks_users lu where enquiry_status=1 and lp.seller_buyer_flag=0 and lu.seller_buyer_flag=1 and lu.id=1)as enquiry,
 (select count(pi.id) from post_interactions pi where message_to=lu.id and pi.lgtks_post_id)=lp.id as Messages,
 valid_from,valid_to  from  lgtks_posts lp  join lgtks_users lu on lp.user_id=lu.id where lu.seller_buyer_flag=0 and lp.user_id=:user_id'),array('user_id'=>$user_id,)); 
             
         $to = DB::select(DB::raw("select count(id) as outgoing_posts from lgtks_posts where user_id=:user_id"), array('user_id'=>$user_id,));
	   $from = DB::select(DB::raw("select count(lp.id) as incoming_posts from lgtks_posts lp join private_posts pp on pp.post_id=lp.id where private_public_flag=1 and lp.user_id=:user_id"),array('user_id'=>$user_id,));
         
	    return ['pi'=>$sellerPostmasterFrom,'to'=>$to,'from'=>$from];
	   
   }
    
    
     public static function SellerPostMasterAll($user_id){
         
         
          $sellerPostmasterAll=DB::select(DB::raw('select lu.seller_buyer_flag as seller_buyer_flag1,lp.seller_buyer_flag as seller_buyer_flag,lu.name as name, title, lp.private_public_flag as private_public_flag,
datediff(valid_to,valid_from) as DiffDate,(select contract_name from contract_types where id=(lp.contract_type)) as contract,
(select sub_type_1 from lgtks_catalogues where id=(lp.catalogue_id)) as catalogue,
(select count(pi.id) from post_interactions pi where message_to=lu.id and pi.lgtks_post_id)=lp.id as Messages,
(select count(lp.id) from lgtks_posts lp join lgtks_users lu where enquiry_status=1 and lp.seller_buyer_flag=0 and lu.seller_buyer_flag=1 and lu.id=1)as enquiry,
valid_from,valid_to from lgtks_posts lp  join lgtks_users lu on lp.user_id=lp.user_id 
 where lu.seller_buyer_flag=1 or lp.seller_buyer_flag=0 and lp.user_id=:user_id'),array('user_id'=>$user_id,)); 
         
         $to = DB::select(DB::raw("select count(id) as outgoing_posts from lgtks_posts where user_id=:user_id"), array('user_id'=>$user_id,));
	   $from = DB::select(DB::raw("select count(lp.id) as incoming_posts from lgtks_posts lp join private_posts pp on pp.post_id=lp.id where private_public_flag=1 and lp.user_id=:user_id"),array('user_id'=>$user_id,));
         
                  return ['pi'=>$sellerPostmasterAll,'to'=>$to,'from'=>$from];


	   
   }
    
    
//        public static function SellerPostBookNow($data){
//        echo "sucess";
//        DB::table('lgtks_posts')->insert($data);
//   }
	
public static function PostMGData($id){
       $pt = DB::select(DB::raw('select * from packaging_types'));
       $ct = DB::select(DB::raw('select * from consignment_type'));
       $lp = DB::select(DB::raw('select lp.id as post_id,lp.user_id as user_id,lp.from_loc,lp.to_loc,lp.dispatch_dt,lp.delivery_dt,lodt.load_type as load_type,lp.qty,vt.vehicle_type as vehicle_type,lp.price,lp.transit_days,trt.tracking_type as tracking_type,pytm.payment_term as payment_term,apt.adv_payment_type as adv_payment_type,apt.id as aptid,pytm.id as pytmid,lp.tracking_type as trtid from lgtks_posts lp,payment_terms pytm,vehicle_types vt,tracking_types trt,load_types lodt,adv_payment_types apt where lp.payment_term=pytm.id and lp.tracking_type=trt.id and vt.id=lp.veh_type and lodt.id=lp.load_type and apt.id=lp.payment_term and lp.id=:id'),array('id' => $id,));
	  
        return ['pt'=>$pt,'ct'=>$ct,'lp'=>$lp];
    }
    
    
    //offers
    
        
    public static function fetchSellerEnquiries($user_id){
        $data = DB::select(DB::raw('select lp.id,(select village from pincode_location_details where id= lp.from_loc)as from_loc,lp.seller_buyer_flag,
(select village from pincode_location_details where id= lp.to_loc)as to_loc,
lp.private_public_flag,lp.valid_from,lp.valid_to,
(select tracking_type from tracking_types where id=lp.tracking_type)as tracking_type,
(select load_type from load_types where id=lp.load_type) as load_type,lp.transit_days,
(select vehicle_type from vehicle_types where id=lp.veh_type) as veh_type,
(select count(id) from lgtks_posts)as routes,lp.dispatch_dt,lp.load_commitment_per_day,lp.last_date_for_quote,lp.qty,lp.discount_type 
from lgtks_posts lp join lgtks_users lu on lp.user_id=lu.id 
where lp.private_public_flag=0 and lp.enquiry_status=1 and lp.seller_buyer_flag=1 and lp.user_id=:user_id'),array('user_id'=>$user_id,));
        return ['data'=>$data];
    }
    
    
    
    public static function send_funct($data){
         echo "sucess";
         DB::table('order_interaction')->insert($data);
        }
    

	
}