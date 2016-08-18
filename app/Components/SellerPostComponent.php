<?php 
namespace App\Components;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Seller;


class SellerPostComponent{
    
    public static function SellerComponent($data,$nextdata){
        echo"copo";print_r($nextdata);
       Seller::SellerPostInsertion($data,$nextdata);
    }
    
    
    public static function GetData(){
        $data =Seller::SellerPost();
        return $data;
    }
    
    
      public static function PostMasterComponent($data){
        Seller::PostMasterInsertion($data);
    }
   
	public static function PostMData($id){
        $data =Seller::PostMGData($id);
        return $data;
    }
    
    
     public static function SellerPostMasterTo($user_id){
        $data=Seller::SellerPostMasterTo($user_id);
         return $data;
        }
    
    public static function SellerPostMasterFrom($user_id){
        $data=Seller::SellerPostMasterFrom($user_id);
         return $data;
        }
    
    public static function SellerPostMasterAll($user_id){
        $data=Seller::SellerPostMasterAll($user_id);
         return $data;
        }
    


    
}