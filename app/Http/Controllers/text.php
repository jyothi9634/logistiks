<?php In controller

 public function PostMasterView($id){  
     $data =SellerPostComponent::PostMData($id);
	 return view('PostMasterBook',compact('data'));   
   } 
   
   
    public function PostMasterInsert(Request $request){  
 
	if($request->input('frm_loc') != NULL){
      $from_location        = $request->input('frm_loc');
      }else{
       exit;
     }
  if($request->input('to_loc') != NULL){
      $to_location        = $request->input('to_loc');
      }else{
       exit;
     }
    if($request->input('package_type') != NULL){
      $package_type        = $request->input('package_type');
      }else{
       exit;
     }
    if($request->input('consignment_type') != NULL){
      $consignment_type        = $request->input('consignment_type');
      }else{
       exit;
     }
     if($request->input('consignment_value') != NULL){
      $consignment_value        = $request->input('consignment_value');
      }else{
       exit;
     }
   if($request->input('consignor_name') != NULL){
      $consignor_name        = $request->input('consignor_name');
      }else{
       exit;
     }
   if($request->input('consignor_mobile_number') != NULL){
      $consignor_mobile_number        = $request->input('consignor_mobile_number');
      }else{
       exit;
     }
   if($request->input('consignor_email') != NULL){
      $consignor_email        = $request->input('consignor_email');
      }else{
       exit;
     }
  if($request->input('consignor_address1') != NULL){
      $consignor_address1        = $request->input('consignor_address1');
      }else{
       exit;
     }
    if($request->input('consignor_address2') != NULL){
      $consignor_address2        = $request->input('consignor_address2');
      }else{
       exit;
     }
    if($request->input('consignor_address3') != NULL){
      $consignor_address3        = $request->input('consignor_address3');
      }else{
       exit;
     }
    if($request->input('consignor_state') != NULL){
      $consignor_state        = $request->input('consignor_state');
      }else{
       exit;
     }
     if($request->input('consignor_city') != NULL){
      $consignor_city        = $request->input('consignor_city');
      }else{
       exit;
     }
    if($request->input('consignor_address3') != NULL){
      $consignor_address3        = $request->input('consignor_address3');
      }else{
       exit;
     }
   if($request->input('consignor_pincode') != NULL){
      $consignor_pincode        = $request->input('consignor_pincode');
      }else{
       exit;
     }
  if($request->input('consignee_name') != NULL){
      $consignee_name        = $request->input('consignee_name');
      }else{
       exit;
     }
  if($request->input('consignee_mobile_number') != NULL){
      $consignee_mobile_number        = $request->input('consignee_mobile_number');
      }else{
       exit;
     }
   if($request->input('consignee_email') != NULL){
      $consignee_email        = $request->input('consignee_email');
      }else{
       exit;
     }
  if($request->input('consignee_address1') != NULL){
      $consignee_address1        = $request->input('consignee_address1');
      }else{
       exit;
     }
 if($request->input('consignee_address2') != NULL){
      $consignee_address2        = $request->input('consignee_address2');
      }else{
       exit;
     }
 if($request->input('consignee_address3') != NULL){
      $consignee_address3       = $request->input('consignee_address3');
      }else{
       exit;
     }
  if($request->input('consignee_pincode') != NULL){
      $consignee_pincode        = $request->input('consignee_pincode');
      }else{
       exit;
     }
  if($request->input('consignee_state') != NULL){
      $consignee_state        = $request->input('consignee_state');
      }else{
       exit;
     }
  if($request->input('consignee_city') != NULL){
      $consignee_city        = $request->input('consignee_city');
      }else{
       exit;
     }
   // if($request->input('consignment') != NULL){
      $consignment=1;       // = $request->input('consignment');
      // }else{
       // exit;
     // }
   // if($request->input('transit_days') != NULL){
      $transit_days=1;       // = $request->input('transit_days');
      // }else{
       // exit;
     // }
  if($request->input('additional_details') != NULL){
      $additional_details        = $request->input('additional_details');
      }else{
       exit;
     }
    // if($request->input('ordered_date') != NULL){
      $ordered_date1        = $request->input('ordered_date');
	   $ordered_date=date( 'Y-m-d', strtotime($ordered_date1) );;
      // }else{
       // exit;
     // }
   if($request->input('payment_term') != NULL){
      $payment_term        = $request->input('payment_term');
	  }else{
       exit;
     }
   if($request->input('adv_payment_type') != NULL){
      $adv_payment_type        = $request->input('adv_payment_type');
	  }else{
       exit;
     }
  if($request->input('adv_payment_type') != NULL){
      $adv_payment_type        = $request->input('adv_payment_type');
	  }else{
       exit;
     }
  if($request->input('price') != NULL){
      $price        = $request->input('price');
	  }else{
       exit;
     }
   
   if($request->input('tracking_type') != NULL){
      $tracking_type        = $request->input('tracking_type');
	  }else{
       exit;
     }
    if($request->input('post_id') != NULL){
      $post_id        = $request->input('post_id');
	  }else{
       exit;
     }
   if($request->input('user_id') != NULL){
      $user_id        = $request->input('user_id');
	  }else{
       exit;
     }
  
     $need_insurance        = $request->input('need_insurance'); 
	 
	$data=['id'=>$post_id,'from_location'=>1,'to_location'=>2,'consignor_name'=>$consignor_name,'consignor_mobile_number'=>$consignor_mobile_number,'consignor_email'=>$consignor_email,'consignor_address1'=>$consignor_address1,'consignor_address2'=>$consignor_address2,'consignor_address3'=>$consignor_address3,'consignor_pincode'=>$consignor_pincode,'consignor_city'=>$consignor_city,'consignor_state'=>$consignor_state,'consignee_name'=>$consignee_name,'consignee_mobile_number'=>$consignee_mobile_number,'consignee_email'=>$consignee_email,'consignee_address1'=>$consignee_address1,'consignee_address2'=>$consignee_address2,'consignee_address3'=>$consignee_address3,'consignee_pincode'=>$consignee_pincode,'consignee_state'=>$consignee_state,'consignee_city'=>$consignee_city,'consignment'=>'1','transit_days'=>$transit_days,'need_insurance'=>$transit_days,'additional_details'=>$additional_details,'ordered_date'=>$ordered_date,'package_type'=>$package_type,'consignment_type'=>$consignment_type,'consignment_value'=>$consignment_value,'payment_term'=>$payment_term,'payment_method'=>$adv_payment_type,'price'=>$price,'tracking_type'=>$tracking_type,'created_on'=>date("Y-m-d"),'user_id'=>$user_id,'lgtks_post_id'=>$post_id];
      print_r($data);        
      if($data != NULL){
       SellerPostComponent::PostMasterComponent($data);
	     echo "sucess";
      }else{
       return redirect()->back();
     } 
	
  }
  
  
 In Components
  public static function PostMasterComponent($data){
        Seller::PostMasterInsertion($data);
    }
   
	public static function PostMData($id){
        $data =Seller::PostMGData($id);
        return $data;
    }

In Model

    public static function SellerPostInsertion($data){
        echo "sucess";
        DB::table('lgtks_posts')->insert($data);
   }
	
public static function PostMGData($id){
       $pt = DB::select(DB::raw('select * from packaging_types'));
       $ct = DB::select(DB::raw('select * from consignment_type'));
       $lp = DB::select(DB::raw('select lp.id as post_id,lp.user_id as user_id,lp.from_loc,lp.to_loc,lp.dispatch_dt,lp.delivery_dt,lodt.load_type as load_type,lp.qty,vt.vehicle_type as vehicle_type,lp.price,lp.transit_days,trt.tracking_type as tracking_type,pytm.payment_term as payment_term,apt.adv_payment_type as adv_payment_type,apt.id as aptid,pytm.id as pytmid,lp.tracking_type as trtid from lgtks_posts lp,payment_terms pytm,vehicle_types vt,tracking_types trt,load_types lodt,adv_payment_types apt where lp.payment_term=pytm.id and lp.tracking_type=trt.id and vt.id=lp.veh_type and lodt.id=lp.load_type and apt.id=lp.payment_term and lp.id=:id'),array('id' => $id,));
	  
        return ['pt'=>$pt,'ct'=>$ct,'lp'=>$lp];
    }  