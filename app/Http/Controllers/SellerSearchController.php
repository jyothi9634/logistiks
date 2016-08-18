<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Components\SellerPostComponent;
use App\Components\SellerSearchComponent;
use Redis;

class SellerSearchController extends Controller{
    public function SearchParams(){  
        $data =SellerPostComponent::GetData();
        return view('SellerSearch',['data'=>$data]);
       
    } 
   
      public function checks(Request $request){ 
        
         if($request->input('from_location')){
            $frm_loc=$request->input('from_location');
             
             
             print_r($frm_loc);
         }else{
             return false;
         }
        
         if($request->input('to_location')){
            $to_loc=$request->input('to_location');
         }else{
             return false;
         }
        
         if($request->input('dispatch_date')){
            $dispatch_date=$request->input('dispatch_date');
             $dispatch_date           = date('Y-m-d', strtotime($dispatch_date));
         }else{
             return false;
         }
        
         if($request->input('delivery_date')){
            $delivery_date=$request->input('delivery_date');
              $delivery_date           = date('Y-m-d', strtotime($delivery_date));
         }else{
             return false;
         }
        
        if($request->input('load_type')){
            $load_typ=$request->input('load_type');
         }else{
             return false;
         } 
        
         if($request->input('vehicle_type')){
            $veh_typ=$request->input('vehicle_type');
         }else{
             return false;
         }
        
         if($request->input('quantity')){
            $qty=$request->input('quantity');
         }else{
             return false;
         }
        
        
$data = ['from_location'=>$frm_loc,'to_location'=>$to_loc,'dispatch_date'=>$dispatch_date,'delivery_date'=>$delivery_date,'load_type'=>$load_typ,'vehicle_type'=>$veh_typ ,'quantity'=>$qty];
		
		$result=SellerSearchComponent::SearchList($data);
	 return view('SellerSearchList',compact('result','data'));  
    }    
    
   
}