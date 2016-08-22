<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Components\SearchForSellerPostsComponent;
use DB;


class BuyerSearch extends Model
{
  public static function SearchForSellerPost($data){
        
     $base_table =  DB::table('lgtks_posts as lp')
                       ->leftjoin('pincode_location_details as pld','pld.id','=','lp.from_loc')
                       ->leftjoin('pincode_location_details as pldd','pldd.id','=','lp.to_loc')
                       ->leftjoin('vehicle_types as vt','vt.id','=','lp.veh_type')
                       ->leftjoin('load_types as lt','lt.id','=','lp.load_type')
                       ->leftjoin('price_types as pt','pt.id','=','lp.price_type')
                       ->leftjoin('payment_terms as pyt','pyt.id','=','lp.payment_term')
                       ->leftjoin('tracking_types as tt','tt.id','=','lp.tracking_type')
                       ->leftjoin('lgtks_users as lu','lu.id','=','lp.user_id');
                       
                       
     $array = array('pld.village' =>$data['from_loc'],
                    'pldd.village'=> $data['to_loc'],
                    'lp.dispatch_dt'=> date('Y-m-d', strtotime($data['dispatch_dt'])),
                    'lp.delivery_dt'=> date('Y-m-d', strtotime($data['delivery_dt'])),
                    'lp.load_type'=>$data['load_type'],
                    'lp.veh_type'=>$data['veh_type']);
     

     

     if($data['searchType'] == 'advancedFilter') {

         $advance = $credits = $mileStone = $realTime =0;
         $priceRange = explode('-', $data['amount']);
         $fromAmount = ltrim($priceRange[0], '$');
         $toAmount = ltrim($priceRange[1], ' $');
         
         if($data['advance']!=0) {
            $advance = $data['advance'];
         } 
         if($data['credits'] !=0) {
             $credits = $data['credits'];
         }
         if($advance != 0 || $credits !=0) {
            $base_table = $base_table->whereIn('lp.payment_term', [$advance,$credits]);
         }
         
         if($data['mileStone'] != 0) {
            $mileStone = $data['mileStone'];
         }
         if($data['realTime'] != 0) {
            $realTime = $data['realTime'];
         }
         if($mileStone != 0 || $realTime !=0) {
            $base_table = $base_table->whereIn('lp.tracking_type', [$mileStone,$realTime]);
         }
         
         //$base_table = $base_table->whereBetween('price',[$fromAmount,$toAmount]);
     }
    
    if($data['qty'] != NULL ){
    
        $array['lp.qty'] = $data['qty'];
    }
    
    

    $db_query = $base_table->where($array)->select('*','lp.id as lgtks_post_id',DB::raw("DATE_FORMAT(valid_from,'%d/%m/%Y') as valid_from_date,DATE_FORMAT(valid_to,'%d/%m/%Y') as valid_to_date"))->get();
     

    return $db_query;
        
    }
   
    public function getPostdata($lgtks_post_id,$seller_user_id){
      try{

          return DB::table('lgtks_posts as lp')
                 ->leftjoin('pincode_location_details as pld','pld.id','=','lp.from_loc')
                 ->leftjoin('pincode_location_details as pldd','pldd.id','=','lp.to_loc')
                 ->leftjoin('vehicle_types as vt','vt.id','=','lp.veh_type')
                 ->leftjoin('load_types as lt','lt.id','=','lp.load_type')
                 ->leftjoin('price_types as pt','pt.id','=','lp.price_type')
                 ->leftjoin('payment_terms as pyt','pyt.id','=','lp.payment_term')
                 ->leftjoin('tracking_types as tt','tt.id','=','lp.tracking_type')
                 ->leftjoin('lgtks_users as lu','lu.id','=','lp.user_id')
                 //->leftjoin('lgtks_users as lu','lu.buisness_info_id','=','business_informations.id')
                ->where(array('lp.user_id'=>$seller_user_id,'lp.id'=>$lgtks_post_id))
                ->select('lp.*','pld.village as from_loc','pldd.village as to_loc','vt.vehicle_type','lt.load_type','pyt.payment_term','lu.name','tt.tracking_type')
                ->get();

      }
      catch(Exception $ex){

        return $ex->getMessage();
      
      }

    }

    public function deleteOrder($seller_id,$buyer_id,$lgtks_post_id,$order_id){
      
      DB::table('lgtks_orders')->where('id',$order_id)->delete();
      

    }

    public function updateOrder($data,$buyer_id){

        $order_status  =    DB::table('order_status')->where('status','Booked')->pluck('id');

        foreach ($data as $key => $value) {
           
           DB::table('lgtks_orders')->where(array('id'=>$value->id,'user_id'=>$buyer_id))->update(array('order_status'=>$order_status[0]));
        
        }

    }

    public function buyerBooknow($user_id){
        try{
            
            $location_types     = DB::table('pickup_location_types')->get();
            $packing_types      = DB::table('packaging_types')->get();
            $consignment_types  = DB::table('consignment_type')->get();
            $user_details       = DB::table('lgtks_users as lu')
                                  ->leftjoin('registrations as rg','rg.id','=','lu.lgtks_registrations_id')
                                  ->where('lu.id',$user_id)->get();
            
            return ['location_types' => $location_types,'packing_types'=>$packing_types,'consignment_types'=>$consignment_types,'user_details'=>$user_details];
            
        } catch (Exception $ex) {
      
      return $ex->getMessage();

        }
    }

    public function buyerInfo($buyer_id){


      return DB::table('registrations as rg')
            ->leftjoin('lgtks_users as lu','lu.lgtks_registrations_id','=','rg.id')
            ->where('lu.id',$buyer_id)
            ->get();

    }
  
  public function getcartDetails($buyer_user_id,$getcartDetails,$seller_id,$lgtks_post_id){
    try{
       
       $getbuyerCart = DB::table('lgtks_orders')
                       ->where(array('id'=>$lgtks_post_id,'user_id'=>$buyer_user_id))->get();
       
       $order_status  =    DB::table('order_status')->where('status','Cart')->pluck('id');
       
       if(empty($getbuyerCart)){

      $seller_data  =      DB::table('lgtks_posts as lp')
                           ->leftjoin('pincode_location_details as pld','pld.id','=','lp.from_loc')
                           ->leftjoin('pincode_location_details as pldd','pldd.id','=','lp.to_loc')
                           ->leftjoin('vehicle_types as vt','vt.id','=','lp.veh_type')
                           ->leftjoin('load_types as lt','lt.id','=','lp.load_type')
                           ->where('lp.id',$lgtks_post_id)
                           ->select('*','pld.district_name as from_loct','pldd.district_name as to_loct')
                           ->get();
     
     
     //print_r($getcartDetails);exit;

     foreach($seller_data as $seller){                   
      
      $dbInsert   =  ['id' => $lgtks_post_id,
                      'lgtks_post_id' => $lgtks_post_id,
                      'consignor_name'=>$getcartDetails['seller_name'],
                      'consignor_mobile_number'=>$getcartDetails['seller_mobile_number'],
                      'consignor_email'=>$getcartDetails['seller_email_id'],
                      'consignor_address1'=>$getcartDetails['seller_address1'],
                      'consignor_address2'=>$getcartDetails['seller_address2'],
                      'consignor_address3'=>$getcartDetails['seller_address3'],
                      'consignor_pincode'=>$getcartDetails['seller_pincode'],
                      'consignee_name'=>$getcartDetails['buyer_name'],
                      'consignee_mobile_number'=>$getcartDetails['buyer_mobile_number'],
                      'consignee_email'=>$getcartDetails['buyer_email_id'],
                      'consignee_address1'=>$getcartDetails['buyer_address1'],
                      'consignee_address2'=>$getcartDetails['buyer_address2'],
                      'consignee_address3'=>$getcartDetails['buyer_address3'],
                      'consignee_pincode'=>$getcartDetails['buyer_pincode'],
                      'user_id' =>$buyer_user_id,
                      'price'=>$seller->price,
                      //'ordered_date'=>$getcartDetails['seller_name'],
                      'order_status'=>$order_status[0],
                      'payment_term'=>$seller->payment_term,
                      //'payment_method'=>$seller->payment_method,
                      //'tracking_type'=>$value->tracking_type,
                      //'tracking_type'=>$value->payment_method,
                      'source_location_type'=>$getcartDetails['source_location_type'],
                      'destination_location_type'=>$getcartDetails['dest_location_type'],
                      //'package_type'=>$value->payment_method,
                      //'consignment_pickup_date'=>$value->payment_method,
                      //'consignment_value'=>$getcartDetails['seller_name']
                     ];

               DB::table('lgtks_orders')->insert($dbInsert);
          }

      }
       
        return DB::table('lgtks_orders as lo')
                ->leftjoin('lgtks_users as lu','lo.user_id','=','lu.id') 
                ->leftjoin('lgtks_posts as lp','lp.id','=','lo.lgtks_post_id')
                ->leftjoin('pincode_location_details as pld','pld.id','=','lp.from_loc')
                ->leftjoin('pincode_location_details as pldd','pldd.id','=','lp.to_loc')       
                ->where(array('lo.user_id'=>$buyer_user_id,'lo.order_status'=>$order_status))
                ->select('lo.*','lp.dispatch_dt','lp.delivery_dt','pld.village as from_loc','pldd.village as to_loc','lu.name')
                ->get();
        
    }
    catch(Exception $ex){
      
      return $ex->getMessage();
      
    }
  }

  /*public function getGsadetails($buyer_id,$seller_id){
    try{
          
          $gsa_data =  DB::table('lgtks_orders as lo')
                      ->leftjoin('pickup_location_types as plt','plt.id','=','lo.source_location_type')
                      ->leftjoin('pickup_location_types as pltt','pltt.id','=','lo.destination_location_type')
                      ->leftjoin('lgtks_posts as lp','lp.id','=','lo.id')
                      //->leftjoin('lgtks_posts','lgtks_posts.user_id','=','lgtks_users.id')
                      //->leftjoin('pincode_location_details as pld','pld.id','=','lgtks_posts.from_loc')
                      //->leftjoin('pincode_location_details as pldd','pldd.id','=','lgtks_posts.to_loc')
                      ->where('lo.user_id',$buyer_id)
                      ->select('lo.*','plt.pickup_location as from_loc','pltt.pickup_location as to_loc')
                      ->get();
          
          $combined_array = array();

          $final_array = array();

          foreach($gsa_data as $gsa_value){

            $seller_data = DB::table('lgtks_posts as lp')
                           ->leftjoin('pincode_location_details as pld','pld.id','=','lp.from_loc')
                           ->leftjoin('pincode_location_details as pldd','pldd.id','=','lp.to_loc')
                           ->leftjoin('vehicle_types as vt','vt.id','=','lp.veh_type')
                           ->leftjoin('load_types as lt','lt.id','=','lp.load_type')
                           ->where('lp.user_id',$seller_id)
                           ->select('*','pld.district_name as from_loct','pldd.district_name as to_loct')
                           ->get();

            foreach($seller_data as $data){

              $combined_array['buyer_details'] = $gsa_value;

              $combined_array['seller_details'] = $data;

              $final_array[] = $combined_array;
            
            }
                           
          }       
          
          return $final_array;

    }
    catch(Exception $ex){

      return $ex->getMessage();
    
    }
  }*/

  public function getsellerInfo($id){

     $reg_id = DB::table('lgtks_users')->where('id',$id)->pluck('lgtks_registrations_id');

     return DB::table('buisness_informations as bi')
            ->leftjoin('registrations as rg','rg.buisness_info_id','=','bi.id')
            ->where('rg.id',$reg_id[0])->get();

  }

  public function getOrders($buyer_id){
    try{
          $order_status  =    DB::table('order_status')->where('status','Cart')->pluck('id');

          return DB::table('lgtks_orders as lo')
                ->leftjoin('lgtks_users as lu','lo.user_id','=','lu.id') 
                ->leftjoin('lgtks_posts as lp','lp.id','=','lo.lgtks_post_id')
                ->leftjoin('pickup_location_types as plt','plt.id','=','lo.source_location_type')
                ->leftjoin('pickup_location_types as pltt','pltt.id','=','lo.destination_location_type')
                ->leftjoin('pincode_location_details as pld','pld.id','=','lp.from_loc')
                ->leftjoin('pincode_location_details as pldd','pldd.id','=','lp.to_loc')       
                ->where(array('lo.user_id'=>$buyer_id,'lo.order_status'=>$order_status))
                ->select('lo.*','lp.dispatch_dt','lp.delivery_dt','pld.village as from_loc','pldd.village as to_loc','lu.name','plt.pickup_location as source_loc','pltt.pickup_location as dest_loc')
                ->get();

    }
    catch(Exception $ex){
      
      return $ex->getMessage();

    }
  }
   
}