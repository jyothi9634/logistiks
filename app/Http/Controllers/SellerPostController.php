<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Components\SellerPostComponent;
use Redis;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class SellerPostController extends Controller{
      
      public function index(){

        $data =SellerPostComponent::GetData();
        $session_id = Session::get('user_id');
        $seller = SellerPostComponent::SellerSession($session_id);
        
        foreach ($data['pincodeData'] as $key => $value) {
          
          # code...
        }
        Session::put('is_seller',$seller[0]->is_seller);  
        Session::put('name',$seller[0]->name);  
        
        

        return view('Seller.SellerRateCard',['data'=>$data]);
    }
        
  public function check(Request $request){ 

      // if the user directly posts only rate card without add routes
     if(empty($_POST['jhfrm_loc']) || empty($_POST['jhto_loc']) || empty($_POST['jhveh_typ']) || empty($_POST['jhload_typ']) || empty($_POST['jhprice']) || empty($_POST['jhbuyer']))
     {


                    if($request->input('post_title') != NULL){
                       $title        = $request->input('post_title');
                    }else{
                        return false;
                    }
                
                    if($request->input('frm_loc') != NULL){
                       $frm_loc        = $request->input('frm_loc');
                    }else{
                        return false;
                    }
                    
                    if($request->input('to_loc') != NULL){
                       $to_loc       = $request->input('to_loc');
                    }else{
                        return false;
                    }
                
                    if($request->input('dispatch_dt') != NULL){
                       $dispatch_dt        = $request->input('dispatch_dt');
                       $dispatch           = date('Y-m-d', strtotime($dispatch_dt));

                    }else{
                        return false;
                    }
                
                    if($request->input('delivery_dt') != NULL){
                        $delivery_dt        = $request->input('delivery_dt');
                        $delivery           = date('Y-m-d', strtotime($delivery_dt));
                    }else{
                        return false;
                    }
                
                    if($request->input('load_typ') != NULL){
                       $load_typ       = $request->input('load_typ');
                    }else{
                        return false;
                    } 
                    
                    if($request->input('veh_typ') != NULL){
                       $veh_typ       = $request->input('veh_typ');
                    }else{
                        return false;
                    }
                
                    if($request->input('load_limit') != NULL){
                       $load_limit       = $request->input('load_limit');
                    }else{
                        return false;
                    }
                
                    if($request->input('price') != NULL){
                       $price       = $request->input('price');
                    }else{
                        return false;
                    }
                
                    if($request->input('transit_days') != NULL){
                       $transit_days     = $request->input('transit_days');
                    }else{
                        return false;
                    }
                
                    if($request->input('book_cutoff') != NULL){
                       $book_cutoff        = $request->input('book_cutoff');
                    }else{
                        return false;
                    }
                
                    if($request->input('tracking') != NULL){
                       $tracking        = $request->input('tracking');
                    }else{
                        return false;
                    }
                
                     

                    if(!empty($_POST['payValues'])){
                    $payment = implode(',', $_POST['payValues']);
                    
              }






                
      if(empty($_POST['user_disc_name']) || empty($_POST['user_disc_type']) || empty($_POST['user_discount']) || empty($_POST['user_crid_day']))
         {
           //exit;
            $nextdata=array();
         }else{
               $user_disc_name=$_POST['user_disc_name'];
               $user_disc_type=$_POST['user_disc_type'];
               $user_discount=$_POST['user_discount'];
               $user_crid_day=$_POST['user_crid_day']; 
                 
              for($j=0;$j<count($user_disc_name);$j++){
              $nextdata[$j]=['private_public_flag'=>'1','user_id'=>$user_disc_name[$j],'title'=>$title,'from_loc'=>$frm_loc,'to_loc'=>$to_loc,'dispatch_dt'=>$dispatch,'booking_cutoff_time'=>$book_cutoff[$j],'transit_days'=>$transit_days,'delivery_dt'=>$delivery,'discount_type'=>$user_disc_type[$j],'seller_buyer_flag'=>'0','discount_rate'=>$user_discount[$j],'credit_days'=>$user_crid_day[$j]];  
               }  
         }
        

        $data=['user_id'=>Session::get('user_id'),'title'=>$title,'from_loc'=>$frm_loc,'to_loc'=>$to_loc,'dispatch_dt'=>$dispatch,'delivery_dt'=>$delivery,'load_type'=>$load_typ,'veh_type'=>$veh_typ,'load_commitment_per_day'=>$load_limit,'price_type'=>'1','price'=>$price,'transit_days'=>$transit_days,'payment_term'=>$payment,'created_on'=>date("Y-m-d"),'booking_cutoff_time'=>$book_cutoff,'tracking_type'=>$tracking,'seller_buyer_flag'=>'2','private_public_flag'=>'0'];
                
           if($data != NULL){
             SellerPostComponent::SellerComponent($data,$nextdata);

           }else{
                return redirect()->back();
            }
             
      return Redirect::to('memberRegistration');
  }else{
     //if user adds multiple add routes, then get data from js file.
        if($request->input('frm_loc') != NULL){
           $frm_loc        = $request->input('frm_loc');
          }else{
                return false;
          }
          if($request->input('to_loc') != NULL){
            $to_loc       = $request->input('to_loc');
            }else{
            return false;
            }
         
        if($request->input('post_title') != NULL){
             $title        = $request->input('post_title');
            }else{
              return false;
         }
         if($request->input('dispatch_dt') != NULL){
             $dispatch_dt        = $request->input('dispatch_dt');
             $dispatch           = date('Y-m-d', strtotime($dispatch_dt));
           }else{
              return false;
            }
                
           if($request->input('delivery_dt') != NULL){
                $delivery_dt        = $request->input('delivery_dt');
                 $delivery           = date('Y-m-d', strtotime($delivery_dt));
            }else{
                 return false;
            }
            if($request->input('transit_days') != NULL){
                 $transit_days     = $request->input('transit_days');
              }else{
                  return false;
            }
           if($request->input('tracking') != NULL){
              $tracking        = $request->input('tracking');
            }else{
                return false;
            }
          if($request->input('load_limit') != NULL){
               $load_limit       = $request->input('load_limit');
            }else{
                return false;
            }
         
            if(!empty($_POST['payValues'])){
                    $payment = implode(',', $_POST['payValues']);

              }

               if($request->input('book_cutoff') != NULL){
                       $book_cutoff        = $request->input('book_cutoff');
                    }else{
                        return false;
                    }  
                
         // getting data from addroute.js
        $jhfrm_loc=$_POST['jhfrm_loc'];
        $jhto_loc=$_POST['jhto_loc'];  
        $jhveh_typ=$_POST['jhveh_typ'];  
        $jhload_typ=$_POST['jhload_typ'];  
        $jhprice=$_POST['jhprice'];
        $jhbuyer=$_POST['jhbuyer'];

        $payment = 1;
        
        for($i=0;$i<count($jhfrm_loc);$i++){
          $data[$i]=['user_id'=>'1','title'=>$title,'from_loc'=>$jhfrm_loc[$i],'to_loc'=>$jhto_loc[$i],'dispatch_dt'=>$dispatch,'delivery_dt'=>$delivery,'load_type'=>$jhload_typ[$i],'veh_type'=>$jhveh_typ[$i],'load_commitment_per_day'=>$load_limit,'price_type'=>'1','price'=>$jhprice[$i],'transit_days'=>$transit_days[$i],'payment_term'=>$payment,'booking_cutoff_time'=>$book_cutoff[$i],'tracking_type'=>$tracking,'created_on'=>date("Y-m-d"),'seller_buyer_flag'=>$jhbuyer[$i],'private_public_flag'=>'0'];  
         } 
         
               
if(empty($_POST['disc_name']) || empty($_POST['disc_type']) || empty($_POST['discount']) || empty($_POST['crid_day']) ){
          // return false;
            $nextdata=array();
         }else{



            if(!empty($_POST['payValues'])){
                      $r  = count($_POST['payValues']);
                    $payment = implode(',', $_POST['payValues']);
                    
              }

           $disc_name=$_POST['disc_name'];
           $disc_type=$_POST['disc_type'];
           $discount=$_POST['discount'];
           $crid_day=$_POST['crid_day']; 
            //'user_id'=>$disc_name[$j]
//           for($j=0;$j<count($disc_name);$j++){
//            $nextdata[]=['private_public_flag'=>'1','user_id'=>$disc_name[$j],'title'=>$title,'from_loc'=>$frm_loc,'to_loc'=>$to_loc,'dispatch_dt'=>$dispatch,'delivery_dt'=>$delivery,'discount_type'=>$disc_type[$j],'discount_rate'=>$discount[$j],'credit_days'=>$crid_day[$j]];  
//             
//            } 
      
            for($k=0;$k<count($jhfrm_loc);$k++){
                  for($j=0;$j<count($disc_name);$j++){  
          $nextdata[]=['private_public_flag'=>'1','user_id'=>$disc_name[$j],'title'=>$title,'from_loc'=>$jhfrm_loc[$k],'to_loc'=>$jhto_loc[$k],'dispatch_dt'=>$dispatch,'delivery_dt'=>$delivery,'discount_type'=>$disc_type[$j],'discount_rate'=>$discount[$j],'credit_days'=>$crid_day[$j],'load_type'=>$jhload_typ[$k],'veh_type'=>$jhveh_typ[$k],'transit_days'=>$transit_days[$k],'booking_cutoff_time'=>$book_cutoff[$k],'payment_term'=>$payment,'created_on'=>date("Y-m-d"),'load_commitment_per_day'=>$load_limit,'seller_buyer_flag'=>'0','price_type'=>'1','price'=>$jhprice[$k]];  
            }
         }
    }
         
         
         SellerPostComponent::SellerComponent($data,$nextdata);
        
        return Redirect::to('memberRegistration');
     }
      
    

    }
    
    
        public function sellerPostMasterTo($user_id){
             $sellerpost=SellerPostComponent::sellerPostMasterTo($user_id);
           return view('Seller.sellerPostMasterTo',compact('sellerpost'));    
          }  
    
    public function SellerPostMasterFrom($user_id){
             $sellerpost=SellerPostComponent::SellerPostMasterFrom($user_id);
           return view('Seller.SellerPostMasterFrom',compact('sellerpost'));    
          }  
    
    public function SellerPostMasterAll($user_id){
             $sellerpost=SellerPostComponent::SellerPostMasterAll($user_id);
           return view('Seller.SellerPostMasterAll',compact('sellerpost'));   
          }

    
    
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
    if($request->input('lgtks_post_id') != NULL){
      $lgtks_post_id        = $request->input('lgtks_post_id');
    }else{
       exit;
     }
   if($request->input('user_id') != NULL){
      $user_id        = $request->input('user_id');
    }else{
       exit;
     }
  
     $need_insurance        = $request->input('need_insurance'); 
   $create=date("Y-m-d");
  $data=['id'=>$lgtks_post_id,'from_location'=>1,'to_location'=>2,'consignor_name'=>$consignor_name,'consignor_mobile_number'=>$consignor_mobile_number,'consignor_email'=>$consignor_email,'consignor_address1'=>$consignor_address1,'consignor_address2'=>$consignor_address2,'consignor_address3'=>$consignor_address3,'consignor_pincode'=>$consignor_pincode,'consignor_city'=>$consignor_city,'consignor_state'=>$consignor_state,'consignee_name'=>$consignee_name,'consignee_mobile_number'=>$consignee_mobile_number,'consignee_email'=>$consignee_email,'consignee_address1'=>$consignee_address1,'consignee_address2'=>$consignee_address2,'consignee_address3'=>$consignee_address3,'consignee_pincode'=>$consignee_pincode,'consignee_state'=>$consignee_state,'consignee_city'=>$consignee_city,'consignment'=>'1','transit_days'=>$transit_days,'need_insurance'=>$transit_days,'additional_details'=>$additional_details,'ordered_date'=>$ordered_date,'package_type'=>$package_type,'consignment_type'=>$consignment_type,'consignment_value'=>$consignment_value,'payment_term'=>$payment_term,'payment_method'=>$adv_payment_type,'price'=>$price,'tracking_type'=>$tracking_type,'created_on'=>$create,'user_id'=>$user_id,'lgtks_post_id'=>$post_id];
      print_r($data);        
      if($data != NULL){
       SellerPostComponent::PostMasterComponent($data);
       echo "sucess";
      }else{
       return redirect()->back();
     } 
  
  }
    
    
      public function SellerEnquiries($user_id,$lgtks_post_id){
        $data =SellerPostComponent::GetSellerOffers($user_id,$lgtks_post_id);
        return view('Seller.SellerEnquiries',compact('data'));
    }
    
    
     public function send_funct(Request $request){
      $message=$request->text_msg;
      $message_from=$request->from_id;
    $message_to=$request->to_id;
    $message_subject=$request->msg_sub;
    $message_type=$request->msg_type;
    $order_id=$request->order_id;
    $read_staus=0;
     $data = ['datetime'=>date('Y-m-d'),'created_on'=>date('Y-m-d'),'message'=>$message,'message_from'=>$message_to,'message_to'=>$message_from,'message_subject'=>$message_subject,'message_type'=>$message_type,'order_id'=>$order_id,'read_staus'=>$read_staus];
     SellerPostComponent::send_funct($data);
  }

  
}